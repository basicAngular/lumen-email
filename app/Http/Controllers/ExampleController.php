<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function sendMail()
    {
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
        Mail::send('mail', $data, function($message) {
            $message->to('wdyogesh@gmail.com', 'Artisans Web')
                ->subject('Artisans Web Testing Mail');
            $message->from('yog.smratdata123@gmail.com','yogesh Vishwakarma');
        });
    }

    //
}
