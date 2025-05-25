<?php

namespace App\Http\Controllers\Admin;

use App\Models\TrainingClass;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class TrainingClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $training_classes = TrainingClass::where('is_active',1)->paginate();

        return view('backend.training_classes.index', compact('training_classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.training_classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if($validator->passes()){

            $trainingClass = new TrainingClass();

            $trainingClass->title       = $request->title;

            $trainingClass->summary     = $request->summary;

            $trainingClass->description = $request->description;

            $trainingClass->is_active   = isset($request->is_active) ? 1:0;

            if($request->hasFile('featured_image')){

                $image = $request->featured_image;

                $ext = $image->getClientOriginalExtension();
                $image_new_name = time().'.'.$ext;

                $image->move(public_path().'/uploads/training_classes/', $image_new_name); 

                $trainingClass->featured_image = $image_new_name;
            }

            $trainingClass->save();

            session()->flash('success', 'Training Class Added Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Training Class Added Successfully'
            ]);

        } else {

            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingClass $trainingclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingClass $trainingclass)
    {
        //dd($trainingClass);
        
        return view('backend.training_classes.edit', compact('trainingclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingClass $trainingclass)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if($validator->passes()){

            $trainingclass->title       = $request->title;

            $trainingclass->summary     = $request->summary;

            $trainingclass->description = $request->description;

            $trainingclass->is_active   = isset($request->is_active) ? 1 : 0;

            $old_image                  = $request->old_featured_image;


            if($request->hasFile('featured_image')){

                $image = $request->featured_image;

                $ext = $image->getClientOriginalExtension();
                $image_new_name = time().'.'.$ext;

                $image->move(public_path().'/uploads/training_classes/', $image_new_name); 

                $trainingclass->featured_image = $image_new_name;

                if(!empty($old_image)){
                    //Delete previous image from uploads folder.
                    File::delete(public_path().'/uploads/training_classes/'.$old_image);    
                }
            }

            $trainingclass->save();

            session()->flash('success', 'Training Class Updated Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Training Class Updated Successfully'
            ]);

        } else {

            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingClass $trainingclass)
    {
        if($trainingclass){
     
            $trainingclass->delete();

            session()->flash('success', 'Training Class Deleted Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Training Class Deleted Successfully'
            ]);
        }
    }



}