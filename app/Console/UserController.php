<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        return view('users.index');
        //dd('Oia aiiiiiiiiiiiiiiiiiii!!!!!!!!!!!');
    }

    public function show($id) {
        //return view('users.show', $id);
        dd('users.show', $id);
    }

}
