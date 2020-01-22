@extends('layouts.app')

@section('content')


<div class="container pt-lg-md">
	<div class="row justify-content-center">
	  <div class="col-lg-7">
		<div class="card shadow bg-info border-0">
		  <div class="card-header bg-white pb-5">
			<div class="text-muted text-center mb-3" style="padding-top: 40px;" >Sign in with your credentials</div>
		</div>
		<div class="card-body px-lg-6 py-lg-6">
			<div class="text-center text-muted mb-4">
				
			</div>
			<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
				@csrf

				<div class="form-group mb-3 row">
					<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

					<div class="col-md-6">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-hat-3"></i></span>
						</div>
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
						</div>
		
				</div>

				<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

					<div class="col-md-6">
						<div class="input-group input-group-alternative">
					   <div class="input-group-prepend">
						<span class="input-group-text"><i class="ni ni-email-83"></i></span>
					</div>
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
			</div>
			</div>

			<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

					<div class="col-md-6">
						<div class="input-group input-group-alternative">
					<div class="input-group-prepend" id="get" >
						<span class="input-group-text" ><img src="/assets/img/ke.png" style="padding-right: 5px" >254</span></div>
					<input id="phone" type="tel" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" maxlength="9" placeholder="Phone..." data-country="KE" required>

					@if ($errors->has('phone'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('phone') }}</strong>
					</span>
					@endif
				</div>
			</div>
			</div>

			<div class="form-group row">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

				<div class="col-md-6">
					<div class="input-group input-group-alternative">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
					</div>
					<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

					@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				</div>
			</div>

			<div class="form-group row">
				<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

				<div class="col-md-6">
					<div class="input-group input-group-alternative">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
					</div>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>
			</div>
			</div>


			<div class="text-center">
				<button type="submit" class="btn btn-primary my-4">Create Account</button>
			</div>
		</form>
	</div>
</div>
</div>
</div>
</div>

@endsection
