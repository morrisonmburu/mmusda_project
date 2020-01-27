<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Event;
use App\User;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $event = Event::all();

        #important code dont delete
         // $events = [];
         //        $data = Event::all();
         //        if($data->count())
         //         {
         //            foreach ($data as $key => $value) 
         //            {
         //                $events[] = Calendar::event(
         //                    $value->title,
         //                    true,
         //                    new \DateTime($value->start_date),
         //                    new \DateTime($value->end_date.'+1 day'),
         //                    null,
         //                    // Add color
         //                 [
         //                     'color' => '#5e72e4',
         //                     'textColor' => '#fff',
         //                 ]
         //                );
         //            }
         //        }
         //        $calendar = Calendar::addEvents($events);

        return view('admin.events.index', compact('event'))->withUser($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('admin.events.create')->withUser($user);
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
            's_date' => 'required',
            'e_date' => 'required'
        ));

        // store in the database
        $event = new Event;

        $date = strtotime($request->s_date);
        $start_date = date('Y-m-d h:i:s', $date);

        $date2 = strtotime($request->e_date);
        $end_date = date('Y-m-d h:i:s', $date2);

        // dd($start_date);

        $event->title = $request->title;
        $event->event_desc = $request->desc;
        $event->start_date = $start_date;
        $event->end_date = $end_date;

        $event->save();

        session::flash('success', 'The Event was successfully saved!');

        //redirect to another page
        return redirect()->route('events.index', $event->id);
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
        $event = Event::find($id);
        $user = User::all();

        return view('admin.events.edit')->withEvent($event)->withUser($user);
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
        $event = Event::find($id);
        
         $this->validate($request, array(
            'title' => 'required|max:255',
            'desc' => 'required',
            's_date' => 'required',
            'e_date' => 'required'
        ));
            //save the data to the database

        $date = strtotime($request->s_date);
        $start_date = date('Y-m-d h:i:s', $date);

        $date2 = strtotime($request->e_date);
        $end_date = date('Y-m-d h:i:s', $date2);

        // dd($start_date);

        $event->title = $request->title;
        $event->event_desc = $request->desc;
        $event->start_date = $start_date;
        $event->end_date = $end_date;

        $event->save();
            //set flash data with success message
        Session::flash('success', 'This Event was successfully updated.');

            //redirect with  flash data to posts.show
        return redirect()->route('events.index', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $event = Event::find($id);

        $event->delete();

        return $event->title;
    }
}
