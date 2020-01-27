<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use App\departments;

class departController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depart = departments::orderBy('id', 'desc')->paginate(10);
        $user = User::all();

        return view('admin.depart.index')->withDepart($depart)->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('admin.depart.create')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validate data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'desc' => 'required',
            'd_type' => 'required'
        ));

        // store in the database
        $depart = new departments;

        $depart->d_title = $request->title;
        $depart->d_desc = $request->desc;
        $depart->d_type = $request->d_type;

        $depart->save();

        session::flash('success', 'The department was successfully saved!');

        //redirect to another page
        return redirect()->route('depart.show', $depart->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depart = departments::find($id);
        $user = User::all();

        return view('admin.depart.show')->withDepart($depart)->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depart = departments::find($id);
        $user = User::all();

        return view('admin.depart.edit')->withDepart($depart)->withUser($user);
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
        //validate the data
        $depart = departments::find($id);
    
           $this->validate($request, array(
            'title' => 'required|max:255',
            'desc' => 'required',
            'd_type' => 'required'
        ));
        //save the data to the database

    $depart->d_title = $request->input('title');
    $depart->d_desc = $request->input('desc');
    $depart->d_type = $request->input('d_type');

    $depart->save();

        //set flash data with success message
    Session::flash('success', 'This department was successfully updated.');

        //redirect with  flash data to posts.show
    return redirect()->route('depart.show', $depart->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depart = departments::find($id);

        $depart->delete();

        Session::flash('success', 'The department was successfully deleted.');

        return redirect()->route('depart.index');
    }
}
