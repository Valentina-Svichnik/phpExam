<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function new(Request $request) {
        $form = new Form([
        'name' => $request->get('name'),
        'description'=> $request->get('description'),
        'status' => $request->get('status'),
        ]);
        $form->save();
        return redirect('/');
    }

    public function delete($id) {
        $form = Form::find($id);
        $form->delete();
        return redirect('/');
    }

    public function close($id) {
        $form = Form::find($id);
        $form->status = 'Закрыта';
        $form->save();
        return redirect('/');
    }

}
