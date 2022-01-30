<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Track;
use Illuminate\Http\Request;
use App\Http\Controllers\ParserController;

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
            'e-mail' => $request->e_mail,
            'order_id' => $request->order_id,
            'invoice_url' => $request->invoice_url
        ]);

        return redirect('/');
    }

    public function addTrackForm(Request $request)
    {
        return view('form.add');
    }

    public function addTrackRequest(Request $request)
    {
        $customer_id = Customer::where('order_id', '=', $request->order_id)->first();
        Track::create([
            'track' => $request->track,
            'customer_id' => $customer_id->id
        ]);
        return redirect('/');
    }
    public function deleteTrackForm(Request $request)
    {
        return view('form.delete');
    }

    public function deleteTrackRequest(Request $request)
    {
        $customer_id = Track::where('track', '=', $request->track)->first()->id;
        Customer::with('tracks')->where('id', '=', $customer_id)->delete();
        Track::where('track', '=', $request->track)->delete(); //problems setting up table relationships
        return redirect('/');
    }
    public function myTest (){
        return ParserController::parser();
    }
}
