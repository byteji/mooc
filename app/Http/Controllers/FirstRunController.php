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
        //create role start
        $roles = [
            'admin',
            'student',
            'teacher',
        ];

        foreach ( $roles as $role ) {
            Role::create( ['name' => $role] );
        }
        //create role end

        echo 'created roles success';
        echo '<br>';
        echo '<br>';

        //create permission start
        echo 'creating permissions';
        echo '<br>';

        $permissions = [
            'active',
            'inactive',
            'waiting',
        ];

        foreach ( $permissions as $permission ) {
            Permission::create( ['name' => $permission] );
        }

        //create permissions end
        echo 'created permissions success';
        echo '<br>';
        echo '<br>';

        echo 'creating admin';
        echo '<br>';

        //create admin start

        $role = Role::where( 'name', 'Admin' )->first();
        
        $user = User::create( [
            'name' => 'webadminister',
            'email' => 'webadminister@mail.com',
            'password' => bcrypt( '123123123' ),
            'role_id' => $role->id
        ] );

        $user->assignRole( [$role->id] );
        $user->givePermissionTo('active');
        //create admin end

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
