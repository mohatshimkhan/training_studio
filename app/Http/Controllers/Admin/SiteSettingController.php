<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteSetting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteSettings = SiteSetting::all();

        return view('backend.site_settings.index', compact('siteSettings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.site_settings.create');
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
            'header_logo_title' => 'required',
        ]);

        if($validator->passes()){

            $siteSetting = new SiteSetting();

            $siteSetting->header_logo_title = $request->header_logo_title;

            $siteSetting->mba_heading_tag   = $request->mba_heading_tag;
            $siteSetting->mba_heading_title = $request->mba_heading_title;
            $siteSetting->mba_bg_video      = $request->mba_bg_video;

            $siteSetting->cta_title         = $request->cta_title;
            $siteSetting->cta_description   = $request->cta_description;

            $siteSetting->footer_text       = $request->footer_text;

            $siteSetting->save();

            session()->flash('success', 'Site Setting Added Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Site Setting Added Successfully'
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
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $sitesetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $sitesetting)
    {
        //dd($sitesetting);

        return view('backend.site_settings.edit', compact('sitesetting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $sitesetting)
    {
        $validator = Validator::make($request->all(), [
            'header_logo_title' => 'required',
        ]);

        if($validator->passes()){

            $sitesetting->header_logo_title = $request->header_logo_title;

            $sitesetting->mba_heading_tag   = $request->mba_heading_tag;
            $sitesetting->mba_heading_title = $request->mba_heading_title;
            $sitesetting->mba_bg_video      = $request->mba_bg_video;

            $sitesetting->cta_title         = $request->cta_title;
            $sitesetting->cta_description   = $request->cta_description;

            $sitesetting->footer_text       = $request->footer_text;

            $sitesetting->save();

            session()->flash('success', 'Site Setting Updated Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Site Setting Updated Successfully'
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
     * @param  \App\Models\SiteSettings  $siteSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $sitesetting)
    {
        if($sitesetting){
     
            $sitesetting->delete();

            session()->flash('success', 'Site Setting Deleted Successfully');

            return response()->json([
                'status'   => true,
                'messsage' => 'Site Setting Deleted Successfully'
            ]);
        }
    }



}