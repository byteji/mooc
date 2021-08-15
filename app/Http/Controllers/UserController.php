<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use Validator;
use Hash;
use Auth;

use DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */

    public function show( User $user ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */

    public function edit( User $user ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, User $user ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */

    public function destroy( User $user ) {
        //
    }

    public function admin_user_index( User $user ) {
        //
        $query_permission_status = $this->queryPermissionStatus();

        return view( 'backend/admin/user/user', compact( 'query_permission_status' ) );

    }

    public function admingetuser( Request $request ) {

        $userid = Auth::user()->id;

        $query = $this->queryDataUser();

        return datatables()
        ->of( $query )  
        //edit created_at time format
        ->editColumn('created_at', function ($request) {
            return $request->created_at->toDateTimeString();
        })
        //edit updated_at time format
        ->editColumn('updated_at', function ($request) {
            return $request->updated_at->toDateTimeString();
        })
        //add action button with id
        ->addIndexColumn()
        ->setRowId( '{{$id}}' )
        ->addColumn( 'action', '' )
        ->editColumn( 'action', 'layouts.action_button.action_column' )
        ->toJson();
    }

    private function queryDataUser() {

        $data = User::leftJoin( 'roles', 'users.role_id', '=', 'roles.id' )

        ->select( 'users.*', 'roles.name as role_id' );

        return $data;

    }

    private function queryPermissionStatus() {
        $data = Permission::where( 'name', '=', 'active' )
        ->where( 'name', '=', 'inactive', 'or' )->get();

        return $data;
    }

}