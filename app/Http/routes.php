<?php 

//Routes file

Route::get('/',function(){
	return view('welcome');
});


//application Routes

Route::group(['middleware' => ['web']], function (){
	//
});

 ?>