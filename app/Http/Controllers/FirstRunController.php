<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Validator;
use Hash;
use Auth;

use DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FirstRunController extends Controller {

    public function run() {
        echo 'Run this just one time';
        echo '<br>';
        echo '<br>';

        echo 'creating roles';
        echo '<br>';
        //create permission
        $roles = [
            'admin',
            'student',
            'teacher',
         ];

         foreach ( $roles as $role ) {
             Role::create( ['name' => $role] );
         }

        echo 'created roles success';
        echo '<br>';
        echo '<br>';

        echo 'creating admin';
        echo '<br>';

        $role = Role::where( 'name', 'Admin' )->first();
        $user = User::create( [
            'name' => 'webadminister',
            'email' => 'webadminister@mail.com',
            'password' => bcrypt( '123123123' ),
            'role_id' => $role->id
        ] );

        $user->assignRole( [$role->id] );

        echo 'created admin success';
        echo '<br>';

        echo '---------------------';
        echo '<br>';
        echo 'name = webadminister';
        echo '<br>';
        echo 'email = webadminister@mail.com';
        echo '<br>';
        echo 'password = 123123123';
        echo '<br>';

        echo '---------------------';
        echo '<br>';

    }

}
