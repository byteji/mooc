<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
 
use Validator;
use Hash;
use Auth;

class TTTTestController extends Controller
{
    public function test(){
    
        if ($this->middleware('auth')) {
            $this->middleware(['role_or_permission:super-admin|edit articles']); 
            return view("login");   
        }    }
}
