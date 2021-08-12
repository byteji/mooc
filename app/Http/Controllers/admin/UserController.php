<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_role =Role::all();
        return view('admin/user', compact('data_role'));
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

    public function get_user_all(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();
            return datatables()
            ->of($data)
            ->addIndexColumn()
            ->setRowId('{{$id}}')
            ->addColumn('action', '')
            ->editColumn('action', 'action_column')
            ->toJson();
        }

        $data_role =Role::all();
        return view('admin/user', compact('data_role'));
    }
    
    public function getinfo(Request $request)
    {
        if ($request->ajax()) {
            $userid = Auth::user()->id;
            $data = User::all();
            return datatables()
            ->of($data)
            ->addIndexColumn()
            ->setRowId('{{$id}}')
            ->addColumn('action', '')
            ->editColumn('action', 'action_column')
            ->toJson();
        }
         
        $data_role =Role::all();
         
        return view('user_account', compact('data_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (request()->ajax()) {
            $data = User::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }
  
    public function update(Request $request, User $user)
    {
        $rules = array(
            'user_first_name'           => ['required', 'string'],
            'user_last_name'            => ['required', 'string'],
            'user_email'                => ['required', 'string', 'email', 'unique:users,email,'.$request->hidden_id],
         );
         

        $error = Validator::make($request->all(), $rules);
        
        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        if ($request->user_role == 0) {
            $error->errors()->add('user_role', 'please select role');
            return response()->json(['errors' => $error->errors()->all()]);
        }
     
        
        $form_data = array(
                    'title'         => $request->user_title,
                    'first_name'    => $request->user_first_name,
                    'last_name'     => $request->user_last_name,
                    'description'   => $request->user_description,
                    'email'         => $request->user_email,
                    'role_id'       => $request->user_role
        );
 

        User::whereId($request->hidden_id)->update($form_data);

        $userId = $request->hidden_id;
        $this->setRole($request->hidden_id, $request->user_role);
        return response()->json(['success' => 'Data is successfully updated']);
    }

    private function setRole($userId, $roleId)
    {
        $user=  User::find($userId);

        $roles =  $user->hasAllRoles(Role::all());
        $user->syncRoles($roles);


        $roles =  role::find($roleId);
        $user->assignRole($roles);
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataUser = User::findOrFail($id);
        $dataUser->delete();
    }
}