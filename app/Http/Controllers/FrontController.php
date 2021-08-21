<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Hacker;
use App\Mail\ContactMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Mail\ContactMailSender;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientIP = request()->ip();
        $valide = false;
        // $subscriberExist = Subscriber::where('addressIp', '=', $clientIP)->first();
        // if ($subscriberExist === null) {
        //     $subscriber = new Subscriber();
        //     $subscriber->addressIp = $clientIP;
        //     $subscriber->save();
        //     $valide = true;
        // }
        
        return view('front.index', [
            'valide' => $valide,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required|min:3',
        //     'object' => 'required|min:3',
        //     'email' => 'required|email',
        //     'message' => 'required|min:6'
        // ]);
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'object' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:6'
        ]);

        
        if ($validator->fails()) {
            $clientIP = request()->ip();
            $hacker = new Hacker();
            $hacker->adressIp = $clientIP;
            $hacker->save();
            return response()->json(array(
                $validator->errors(),
                'hacker' => 'achbaghi dir a weld l9ehba'
            ), 404);
        } 

        // \Mail::send('emails.contact_email',
        //      array(
        //          'name' => $request->name,
        //          'email' => $request->email,
        //          'subject' => $request->object,
        //          'user_message' => $request->message,
        //      ), function($message) use ($request)
        //        {
        //           $message->from('no-reply@guegzosis.com');
        //           $message->to('childeroe12@gmail.com');
        //        });

        // $details = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->object,
        //     'user_message' => $request->message,
        // ];

        $locale = app()->getLocale();
        $ContactMail = new ContactMail(
            $request->name,
            $request->object,
            $request->email,
            $request->message,
           
        );
        
        Mail::to('aminemoumni1998@gmail.com')->send($ContactMail);

        $ContactMailSender = new ContactMailSender(
            $request->name,
            $request->email,
            $locale
        );
        
        
        Mail::to($request->email)->send($ContactMailSender);

        $this->storeEmail($request);
        return "success";
        //dd($request->name);
    }

    /**
     * 
     */
    public function switchLang($lang)
    {
        return redirect::route('index', $lang);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeEmail($request)
    {
        $email = new Email();
        $email->name = $request->name;
        $email->object = $request->object;
        $email->email = $request->email;
        $email->message = $request->message;
        $email->save();
        
        return "Success";    
    }
}
