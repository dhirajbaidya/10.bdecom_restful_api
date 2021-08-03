<?php
namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller{

    //For Contact
    function sendContactDetails(Request $request){
        $name= $request->input('name');
        $mobile= $request->input('mobile');
        $message= $request->input('message');
        //date_default_timezone_set("Asia/Dhaka");
        $contact_time= date("h:i:sa");
        $contact_date= date("d-m-Y");
        $result= ContactModel::insert([
            'name'=> $name,
            'mobile'=> $mobile,
            'message'=> $message,
            'contact_data'=> $contact_date,
            'contact_time'=> $contact_time
        ]);
        return $result;
    }
}
