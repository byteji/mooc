<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Spatie\Permission\Models\Permission;


class FirstRunController extends Controller
{
    
    public function run()
    {
        //create permission
        $permissions = [
            'role-admin',
            'role-student',
            'role-teacher',
         ];
      
         foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
         }
    }
 
}
