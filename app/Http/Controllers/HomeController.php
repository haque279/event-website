<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
        $data = $request->all();
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100|unique:registers',
            'phone' => 'required|string|max:11',
            'why_to_join' => 'required|string|max:100',
        ]);

        Register::create($data);
        return back()->with('success', 'Registration successfully done');
    }

    public function contact(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'message' => 'required|string|max:1000',
        ]);

        $data = new \stdClass();
        $data->name = $request->name;
        $data->email = $request->email;;
        $data->message = $request->message;
        $data->date = Now();

        Mail::to("haque279@gmail.com")->send(new DemoEmail($data));
        return back()->with('success', 'Email successfully send');
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
