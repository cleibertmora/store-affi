<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function logIn(){
        $form = 'forms.login';

        return view('index')->width($form, 'form');
    }
}
