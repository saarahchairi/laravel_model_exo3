<?php

namespace App\Http\Controllers;

use App\Models\membres;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {
        $dataExo = membres::all();
        return view("welcome",compact('dataExo'));
    }
}
