<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct(){

       $this->middleware('auth');
       $this->middleware('can:client.create')->only(['create','store']);
       $this->middleware('can:client.index')->only(['index']);
       $this->middleware('can:client.edit')->only(['edit','update']);
        $this->middleware('can:client.show')->only(['show']);
         $this->middleware('can:client.destroy')->only(['destroy']);



     }


    public function index()
    {

        $clients = Client::get();

        return view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {


$client = Client::create($request->all());

return redirect()->route('client.index',$client);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

        return view('admin.client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

        return view('admin.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Client $client)
    {

        $client->update($request->all());

        return redirect()->route('client.index',$client);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
