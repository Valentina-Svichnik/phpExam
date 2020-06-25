<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index() {
        $forms = Form::all();
        return view('panel', compact('forms'));
    }

    public function new(Request $request) {
        $form = new Form([
        'name' => $request->get('name'),
        'description'=> $request->get('description'),
        ]);
        $form->save();
        return redirect('/');
    }
}
