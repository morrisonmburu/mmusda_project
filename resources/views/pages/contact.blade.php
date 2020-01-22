@extends('main')

@section('title', '| Contact')

@section('content')

<div class="container">
    <h3 style="padding-top: 100px;">Contact Me</h3>
    <hr>
    <form action="" method="post">
        <div class="form-group">
            <label for="email"> Email: </label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject"> Subject: </label>
            <input type="text" name="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message"> Message: </label>
            <textarea type="text" name="message" class="form-control"></textarea>
        </div>
        <button class="btn btn-success"> Send Message</button>
    </form>
</div>

@endsection