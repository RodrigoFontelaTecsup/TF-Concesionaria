<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sdkconsultoria\WhatsappCloudApi\Waba\SendMessage;

class MessengerController extends Controller
{
    public function show(int $phone)
    {
        return view('messenger', [
            'phone' => $phone,
        ]);
    }

    public function send(Request $request, string $phone)
    {
        SendMessage::message($phone)->attachText($request->message)->send();
    }
}
