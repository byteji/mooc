<?php

namespace App\Http\Controllers;

use App\subject_videos;
use Illuminate\Http\Request;

class SubjectVideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subject_video');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject_videos  $subject_videos
     * @return \Illuminate\Http\Response
     */
    public function show(subject_videos $subject_videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject_videos  $subject_videos
     * @return \Illuminate\Http\Response
     */
    public function edit(subject_videos $subject_videos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject_videos  $subject_videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject_videos $subject_videos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject_videos  $subject_videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject_videos $subject_videos)
    {
        //
    }
}