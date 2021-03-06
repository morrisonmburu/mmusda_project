<?php 

namespace App\Http\Controllers;

use App\Post;
use App\Event;

class PagesController extends Controller {
	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first = 'Morris';
		$last = 'Mburu';

		$fullname = $first ." ". $last;
		$email = 'morrisonmburu7@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function timeline(){
		$event = Event::all();

		return view('timeline.index', compact('event'));
	}
}