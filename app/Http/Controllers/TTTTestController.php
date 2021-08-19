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

class TTTTestController extends Controller {

    public function test() {

        return view( 'test' );

    }

    public function test_function() {

        $randDate = '---set1---';

        for ( $x = 0; $x <= 10; $x++ ) {

            $data = [
                'name'=> "teacher.$randDate.$x",
                'email' => "teacher.$randDate.$x@mail.com",
                'password' => '12341234',
                'title' => 'นาย',
                'first_name' => "first_name.$randDate.$x",
                'last_name' => "last_name.$randDate.$x",
                'description1' => 'description1 teacher',
                'description2' => 'description1 teacher',
            ];

            echo 'success '.$x.'<br>';

            foreach ( $data as $key => $value ) {
                echo "{$key} is $value" . '<br>';
            }

        }
    }

    public function test_create_subject() {

        $randDate = '-set1-';
        $prefix = 'subject';

        for ( $x = 0; $x <= 10; $x++ ) {

            $data = [
                'subject_code'=> "$prefix.$randDate.$x.101",
                'subject_title' => "$prefix.$randDate.$x",
                'subject_description_1' => $prefix.'subject_description_1',
                'subject_description_2' => $prefix.'subject_description_2',
                'subject_description_3' => $prefix.'subject_description_3',
            ];

            $result = Subjects::create( [

                'subject_code'=> $data['subject_code'],
                'subject_title' => $data['subject_title'],
                'subject_description_1' => $data['subject_description_1'],
                'subject_description_2' => $data['subject_description_2'],
                'subject_description_3' => $data['subject_description_3'],
            ] );

            echo 'success'.$x;
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo $result;

            echo '<br>';
            echo '<br>';
            echo '<br>';
        }
    }

    public function test_create_teachers_subject() {

        $randDate = 'set1';

        for ( $x = 0; $x <= 10; $x++ ) {

            $data = [
                'name'=> "teacher.$randDate.$x",
                'email' => "teacher.$randDate.$x@mail.com",
                'password' => '12341234',
                'title' => 'นาย',
                'first_name' => "teacher.first_name.$randDate.$x",
                'last_name' => "teacher.last_name.$randDate.$x",
                'description1' => 'description1 teacher',
                'description2' => 'description1 teacher',
            ];

            $role = Role::where( 'name', 'teacher' )->first();

            $user = User::create( [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make( $data['password'] ),
                'title' =>  $data['title'],
                'first_name' =>  $data['first_name'],
                'last_name' =>  $data['last_name'],
                'description1' =>  $data['description1'],
                'description2' =>  $data['description2'],
                'role_id' => $role->id
            ] );

            $user->assignRole( [$role->id] );
            $user->givePermissionTo( 'active' );

            echo 'success'.$x;
            echo '<br>';
            echo '<br>';
            echo '<br>';

        }

    }

    public function test_create_student() {

        $randDate = 'set1';

        for ( $x = 0; $x <= 10; $x++ ) {

            $data = [
                'name'=> "student.$randDate.$x",
                'email' => "student.$randDate.$x@mail.com",
                'password' => '12341234',
                'title' => 'นาย',
                'first_name' => "student.first_name.$randDate.$x",
                'last_name' => "student.last_name.$randDate.$x",
                'description1' => 'description1 student',
                'description2' => 'description1 student',
            ];

            $role = Role::where( 'name', 'student' )->first();

            $user = User::create( [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make( $data['password'] ),
                'title' =>  $data['title'],
                'first_name' =>  $data['first_name'],
                'last_name' =>  $data['last_name'],
                'description1' =>  $data['description1'],
                'description2' =>  $data['description2'],
                'role_id' => $role->id
            ] );

            $user->assignRole( [$role->id] );
            $user->givePermissionTo( 'active' );

            echo 'success'.$x;
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo $user;

            echo '<br>';
            echo '<br>';
            echo '<br>';
        }

    }
}
