<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

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
        return view('admin/subject');
    }
    public function get_subject_all(Request $request)
    {
        if ($request->ajax()) {
            $data = subject::all();
            return datatables()
            ->of($data)
            ->addIndexColumn()
            ->setRowId('{{$id}}')
            ->addColumn('action', '')
            ->editColumn('action', 'action_column_subject')
            ->toJson();
        }
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
    public function store(Request $request, subject $subject)
    {
        //for check only super admin can set role super admin
  
        $rules = array(
            'subject_title' => 'required',
            'subject_series' =>'required',
  
        );


        $error = Validator::make($request->all(), $rules);
        
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
         
        $form_data = array(
            
            'subject_title' => $request->subject_title,
            'subject_series' => $request->subject_series,
            'description' => $request->subject_description,
        );

        $new =  subject::create($form_data);
        
        
        return response()->json(['success' => 'User Added successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $data = subject::findOrFail($id);
            return response()->json(['result' => $data]);
        }
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
       
        $rules = array(
            'subject_title' => 'required',
            'subject_series' =>'required',
  
        );


        $error = Validator::make($request->all(), $rules);
        
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
         
        $form_data = array(
            
            'subject_title' => $request->subject_title,
            'subject_series' => $request->subject_series,
            'description' => $request->subject_description,
        );


        subject::whereId($request->hidden_id)->update($form_data);
 
        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataUser = subject::findOrFail($id);
        $dataUser->delete();
    }
}