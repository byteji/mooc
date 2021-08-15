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

    public function test_create_subject() {

        $result = Subjects::create( [
            'subject_code'=> 'subject -1',
            'subject_title' => 'subject -1',
            'subject_description_1' => 'subject_description_1<br>subject_description_1<br>subject_description_1<br>subject_description_1',
            'subject_description_2' => 'subject_description_2',
            'subject_description_3' => 'subject_description_3',
        ] );

        echo 'success';
    }
}
