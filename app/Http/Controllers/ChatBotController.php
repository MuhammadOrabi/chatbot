<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function get(Requst $request)
    {
        $verifycode = env('CHATPOT_VERIFY_TOKEN');
        return response()->status(200);
    }

    public function post(Requst $request)
    {
        // 
    }

    public function handleMessage($sender_psid, $received_message)
    {
        // 
    }

    public function handlePostback($sender_psid, $received_postback)
    {
        // 
    }

    public function callSendAPI($sender_psid, $response)
    {
        // 
    }    
}
