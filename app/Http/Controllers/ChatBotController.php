<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function get(Request $request)
    {
        $VERIFY_TOKEN = env('CHATPOT_VERIFY_TOKEN');
        $mode = $request->query('hub.mode');
        $token = $request->query('hub.verify_token');
        $challenge = $request->query('hub.challenge');
        abort_if(! $mode && $token, 404);
        if ($mode === 'subscribe' && $token === $VERIFY_TOKEN) {
            return response($challenge, 200);
        } else {
            return response('failed', 403);            
        }
    }

    public function post(Request $request)
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
