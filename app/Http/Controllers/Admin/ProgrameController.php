<?php

namespace App\Http\Controllers\Admin;

use App\Models\Programe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ProgrameController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programes = Programe::where('is_active',1)->paginate();

        return view('backend.programes.index', compact('programes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.programes.create');
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

            $programe = new Programe();

            $programe->title       = $request->title;

            $programe->summary     = $request->summary;

            $programe->description = $request->description;

            $programe->is_active = isset($request->is_active) ? 1:0;

            $programe->save();

            session()->flash('success', 'Programe Added Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Programe Added Successfully'
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
     * @param  \App\Models\Programe  $programe
     * @return \Illuminate\Http\Response
     */
    public function show(Programe $programe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programe  $programe
     * @return \Illuminate\Http\Response
     */
    public function edit(Programe $programe)
    {
        //dd($programe);

        return view('backend.programes.edit', compact('programe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programe  $programe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programe $programe)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if($validator->passes()){

            $programe->title       = $request->title;

            $programe->summary     = $request->summary;

            $programe->description = $request->description;

            $programe->is_active = isset($request->is_active) ? 1:0;

            $programe->save();

            session()->flash('success', 'Programe Added Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Programe Added Successfully'
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
     * @param  \App\Models\Programe  $programe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programe $programe)
    {
        if($programe){
     
            $programe->delete();

            session()->flash('success', 'Programe Deleted Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Programe Deleted Successfully'
            ]);
        }
    }


}