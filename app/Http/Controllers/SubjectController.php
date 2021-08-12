<?php

namespace App\Http\Controllers;

use App\subject;
use Illuminate\Http\Request;


use Illuminate\Support\Str;
use Redirect;
use Response;
use DB;
use Config;
use DataTables;
use Validator;
use Hash;
use Auth;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        # code...
        $data_subject = subject::all();
  
        return view('subject', compact('data_subject'));
    }


    public function my_subject()
    {
        return view('user_subject');
    }

    
    // public function subject_page($id)
    // {
    //     return view('subject_page');
    // }

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
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        $id = $subject->id;
        $data_subject = subject::findOrFail($id);

        return view('subject_page', compact('id','data_subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //
    }
}