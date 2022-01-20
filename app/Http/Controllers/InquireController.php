<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquire;

class InquireController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function inquire(Request $request){
        $this->validate($request,Inquire::$rules);
        $form=$request->all();
        Inquire::create($form);
        return view('thanks');
    }
}
