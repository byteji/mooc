<?php

namespace App\Http\Controllers;

use App\Subjects;
use Illuminate\Http\Request;


use Auth;
use DataTables;

 
use App\User;
 
use Validator;
use Hash;
 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class SubjectsController extends Controller
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
    public function store(Request $request)
    {

        $result = Subjects::create([
            'subject_title' => 'subject -1',
            'subject_description_1' => 'subject_description_1',
            'subject_description_2' => 'subject_description_2',
            'subject_description_3' => 'subject_description_3',
            'status' => 'waiting',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function show(Subjects $subjects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function edit(Subjects $subjects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjects $subjects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subjects  $subjects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjects $subjects)
    {
        //
    }

    public function admingetsubject(Request $request) {
        
        $userid = Auth::user()->id;
        $data = Subjects::all();
        return datatables()
        ->of( $data )
        ->addIndexColumn()
        ->setRowId( '{{$id}}' )
        ->addColumn( 'action', '' )
        ->editColumn( 'action', 'layouts.action_button.action_column' )
        ->toJson(); 
 
    }
}
