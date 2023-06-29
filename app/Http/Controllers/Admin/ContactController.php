<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function onContactSend(Request $request)
    {
        $result = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        if($result == true){
            return 1;
        }else{
            return 0;
        }
    }
}
