<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Client;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::orderBy('id','desc')->paginate(5);
        return view('/client/index')->withClients($clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('/client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->client_name = $request->input('client_name');
        $client->email = $request->input('email');
         $client->phone = $request->input('phone');
          $client->save();
          Session::flash('flash_message','Product Successfully Added');
           return redirect()->route('client.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::find($id);
         
         return view('client.show')->withClients($clients);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::find($id);

      
      return view('client.edit')->withClients($clients);
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
         $client = Client::find($id);
        // $client = new Client();
        $client->client_name = $request->input('client_name');
        $client->email = $request->input('email');
         $client->phone = $request->input('phone');
          $client->save();
          Session::flash('flash_message','Client Successfully Edited');
           return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $client = Client::findOrFail($id);
         $client->delete();
         Session::flash('flash_message','Client Successfully deleted');
        return redirect()->route('client.index');
}
}
?>