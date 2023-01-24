<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        //dd('Olha o index.....');
        return view('users.index');
    }

    public function show($id){
        return view('users.show');
    }
}
