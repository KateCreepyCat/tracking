<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function newTrackForm(Request $request)
    {
        return view('form.new');
    }

    public function newTrackRequest(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'e-mail'=> $request->e_mail,
            'invoice_url'=> $request->invoice_url
        ]);

        return redirect('/');
    }
}
