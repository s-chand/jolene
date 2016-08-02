<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
    //

    public function __construct()
    {
    }

    /**
     * Show the registration form wizard
     */
    public function index()
    {
        return view('registration');
    }
    public function submit(Request $request)
    {
        $this->validate($request,
            ['fullname'=>'required|max:255',
            'age'=>'required',
                'email'=>'required',
                'sex'=>'required',
                'address'=>'required'
            ]);
        $reg=new Registration();
        $reg->fullname=$request->fullname;
        $reg->age=$request->age;
        $reg->email=$request->email;
        $reg->sex=$request->sex;
        $reg->phone=$request->phone;
        $reg->address=$request->address;
        $reg->survey=$request->survey;
        $reg->saveOrFail();

        return redirect('/registration');

    }
}
