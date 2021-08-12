<?php

namespace App\Http\Controllers;

use App\user;
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

class FirstRunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $this->full_first_setting();
    }
    
    private function full_first_setting()
    {
        // $permission = Permission::create(['name' => 'edit_content']);
        // $permission = Permission::create(['name' => 'delete_content']);
        // $permission = Permission::create(['name' => 'add_content']);
       
        $role = Role::create(['name' => 'student']);
        $role = Role::create(['name' => 'teacher']);
        $role = Role::create(['name' => 'staff']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'super_admin']);
    }
}