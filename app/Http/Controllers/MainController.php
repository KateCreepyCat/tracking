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
            'order_id' => $request->order_id,
            'invoice_url'=> $request->invoice_url
        ]);

        return redirect('/');
    }
    public function addTrackForm(Request $request)
    {
        return view('form.add');
    }

    public function addTrackRequest(Request $request)
    {
        return redirect('/');
    }
}
