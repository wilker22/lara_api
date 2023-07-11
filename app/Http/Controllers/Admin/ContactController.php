<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function onContactSend(Request $request)
    {
        
        $contactArray = json_decode($request->getContent(), true);
        $name = $contactArray['name'];
        $email = $contactArray['email'];
        $message = $contactArray['message'];
        
        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        if($result == true){
            return 1;
        }else{
            return 0;
        }
    }
}
