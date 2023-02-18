<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    public function sendEmail(Request $request)
    {
        $email = $request->email;
        $data["name"] = $request->name;
        $data["phone"] = $request->phone;
        $data["email"] = $request->email;
        $data["message"] = $request->message;

        try
        {
            Mail::to("llmagaia2@gmail.com")->send(new ContactEmail($data));
            return response()->json($data, 200);
        }catch(\Exception $e)
        {
            return response()->json($e);
        } 
    }
}
