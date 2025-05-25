<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::where('is_active',1)->paginate();

        return view('backend.trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trainers.create');
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
            'name' => 'required',
        ]);

        if($validator->passes()){

            $trainer = new Trainer();

            $trainer->name         = $request->name;

            $trainer->type         = $request->type;

            $trainer->summary      = $request->summary;

            $trainer->description  = $request->description;

            $trainer->facebook_url = $request->facebook_url;

            $trainer->twitter_url  = $request->twitter_url;

            $trainer->linkedin_url = $request->linkedin_url;

            $trainer->behance_url  = $request->behance_url;

            if($request->hasFile('featured_image')){

                $image = $request->featured_image;

                $ext = $image->getClientOriginalExtension();
                $image_new_name = time().'.'.$ext;

                $image->move(public_path().'/uploads/trainers/', $image_new_name); 

                $trainer->featured_image = $image_new_name;
            }

            $trainer->is_active = isset($request->is_active) ? 1 : 0;

            $trainer->save();

            session()->flash('success', 'Trainer Added Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Trainer Added Successfully'
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
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('backend.trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if($validator->passes()){

            $trainer->name         = $request->name;

            $trainer->type         = $request->type;

            $trainer->summary      = $request->summary;

            $trainer->description  = $request->description;

            $trainer->facebook_url = $request->facebook_url;

            $trainer->twitter_url  = $request->twitter_url;

            $trainer->linkedin_url = $request->linkedin_url;

            $trainer->behance_url  = $request->behance_url;

            $old_image             = $request->old_featured_image;


            if($request->hasFile('featured_image')){

                $image = $request->featured_image;

                $ext = $image->getClientOriginalExtension();
                $image_new_name = time().'.'.$ext;

                $image->move(public_path().'/uploads/trainers/', $image_new_name); 

                $trainer->featured_image = $image_new_name;

                if(!empty($old_image)){
                    //Delete previous image from uploads folder.
                    File::delete(public_path().'/uploads/trainers/'.$old_image);    
                }
            }

            $trainer->is_active = isset($request->is_active) ? 1 : 0;

            $trainer->save();

            session()->flash('success', 'Trainer Updated Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Trainer Updated Successfully'
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
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        if($trainer){
     
            $trainer->delete();

            session()->flash('success', 'Trainer Deleted Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Trainer Deleted Successfully'
            ]);
        }
    }

}