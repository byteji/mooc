<?php

namespace App\Http\Controllers\backend\admin\subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model
use App\subjects;
use App\User;

use App\UsersSubjects;

use Auth;

class SubjectTeacherManageController extends Controller {

    //  ---------------------
    // subject_teacher_manage
    //  ---------------------

    public function admin_subject_teacher_manage_index( Request $request ) {

        $data_teachers = $this->get_list_teacher();
        $data_list_teachers_subject = $this->get_list_teacher_subject( $id_subject );

        return view( 'backend/admin/subject/subject-teacher-manage', compact( 'data_teachers' ) );

    }

    private function get_list_teacher() {
        //role_id 3 = teacher
        $data = User::where( 'role_id', '3' )->get();
        return $data;
    }

    private function get_list_teacher_subject( $id ) {

        $data = UsersSubjects::where( 'id_subject_series', $id )->where( 'users_subjects_type', 'teacher' )->get();
        return $data;
    }

}
