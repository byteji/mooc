<?php

namespace App\Http\Controllers;

use App\subject_student;
use Illuminate\Http\Request;

class SubjectStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, subject_student $subject_student)
    { 
        $form_data = array( 
            'subject_id' => $request->hidden_id_subject,
            'user_id' => $request->hidden_id_user,
         );

        $new =  subject_student::create($form_data);
        
        
        return response()->json(['success' => 'User Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject_student  $subject_student
     * @return \Illuminate\Http\Response
     */
    public function show(subject_student $subject_student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject_student  $subject_student
     * @return \Illuminate\Http\Response
     */
    public function edit(subject_student $subject_student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject_student  $subject_student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subject_student $subject_student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject_student  $subject_student
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject_student $subject_student)
    {
        //
    }
}