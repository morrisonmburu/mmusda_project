<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anouncements;
use App\Post;
use Session;

class AnceController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$announces = anouncements::orderBy('id', 'desc')->paginate(10);

		return view('admin.announce.index')->withAnnounces($announces);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.announce.create');
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
			'ance_date' => 'required'
		));

		// store in the database
		$ance = new anouncements;

		$ance->ance_title = $request->title;
		$ance->ance_desc = $request->desc;
		$ance->ance_date = $request->ance_date;

		$ance->save();

		session::flash('success', 'The announcement was successfully saved!');

		//redirect to another page
		return redirect()->route('announces.show', $ance->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$announce = anouncements::find($id);

		return view('admin.announce.show')->withAnnounce($announce);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$announce = anouncements::find($id);

		return view('admin.announce.edit')->withAnnounce($announce);
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
		$ance = anouncements::find($id);
	
		   $this->validate($request, array(
			'title' => 'required|max:255',
			'desc' => 'required',
			'ance_date' => 'required'
		));
		//save the data to the database

	$ance->ance_title = $request->input('title');
	$ance->ance_desc = $request->input('desc');
	$ance->ance_date = $request->input('ance_date');

	$ance->save();

		//set flash data with success message
	Session::flash('success', 'This announcement was successfully updated.');

		//redirect with  flash data to posts.show
	return redirect()->route('announces.show', $ance->id);
}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$announce = anouncements::find($id);

        $announce->delete();

        Session::flash('success', 'The announcement was successfully deleted.');

        return redirect()->route('announces.index');
	}
}
