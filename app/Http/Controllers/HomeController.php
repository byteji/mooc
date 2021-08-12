<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
 
use App\subject_student;
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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hidden_id_subject="1";
        $hidden_id_user = "1";
        $form_data = array(
            
            'subject_id' => $hidden_id_subject,
            'user_id' => $hidden_id_user,
         );

        $new =  subject_student::create($form_data);
        
        
        return response()->json(['success' => 'User Added successfully.']);         
    }
}