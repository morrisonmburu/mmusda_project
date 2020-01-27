<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\anouncements;

class announcementsController extends Controller
{
    public function anceIndex(){

    	$announce = anouncements::orderBy('id', 'desc')->paginate(10);

    	return view('announcements.index')->withAnnounce($announce);
    }
}
