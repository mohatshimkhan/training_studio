<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Programe;
use App\Models\SiteSetting;
use App\Models\ContactUs;
use App\Models\Trainer;
use App\Models\ClassSchedule;
use App\Models\TrainingClass;

use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $firstThreeProgrames = Programe::where('is_active',1)->take(3)->get();
        
        $nextThreeprogrames  = Programe::where('is_active',1)->skip(3)->take(3)->get();

        //$classSchedules      = ClassSchedule::with(['trainningClass','trainer'])->get();

        $trainers            = Trainer::where('is_active',1)->get();

        $classSchedules      = ClassSchedule::select('class_schedules.*',
                                'training_classes.title as training_class_title','trainers.name as trainer_name')->join('training_classes', 'training_classes.id', '=', 'class_schedules.training_class_id')
                                     ->join('trainers', 'trainers.id', '=', 'class_schedules.trainer_id')->get();

        //dd($classSchedules);

        return view('frontend.index', compact('firstThreeProgrames','nextThreeprogrames','classSchedules','trainers'));
    }

    public function contact_us_submit(Request $request){

        $validator = Validator::make($request->all(), [
            'name'    => 'required',
            'email'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if($validator->passes()){

            $contactUs = new ContactUs();

            $contactUs->name    = $request->name;
            $contactUs->email   = $request->email;
            $contactUs->subject = $request->subject;
            $contactUs->message = $request->message;

            $contactUs->save();

            session()->flash('success', 'ContactUs Form Submitted Successfully!');

            return response()->json([
                'status'   => true,
                'messsage' => 'ContactUs Form Submitted Successfully!'
            ]);
        
        } else {

            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }
}