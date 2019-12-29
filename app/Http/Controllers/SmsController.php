<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('f9d48066', 'NpEzCHjrthoF0XGL');
        $client = new \Nexmo\Client($basic);
        // return $request;
        $client->message()->send([
            'to' => '216' . $request->mobile,
            'from' => 'monem',
            'text' => 'si monem'
        ]);
        Session::flash('success', 'Message sent');
        return redirect('/');
    }
}
