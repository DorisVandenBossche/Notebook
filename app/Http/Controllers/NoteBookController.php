<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteBookController extends Controller
{
    public function notebook($name){

    	return 'You are '. $name;

    }
}
