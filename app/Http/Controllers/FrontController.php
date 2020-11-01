<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
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
        $this->validate($request, [
            'name' => 'required|min:3',
            'object' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:6'
        ]);

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
        $ContactMail = new ContactMail(
            $request->name,
            $request->object,
            $request->email,
            $request->message
        );
        
        Mail::to('childeroe12@gmail.com')->send($ContactMail);
            
        dd($request->name);
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
}
