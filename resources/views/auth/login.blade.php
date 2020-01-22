@extends('layouts.app')

@section('content')

<div class="container pt-lg-md">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="card shadow bg-info border-0">
					<div class="card-header bg-white pb-5">
						<div class="text-muted text-center mb-3" style="padding-top: 40px;" >Sign in with your credentials</div>
				</div>
				<div class="card-body px-lg-6 py-lg-6">
						<div class="text-center text-muted mb-4">
								
						</div>
						<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
								@csrf


								<div class="form-group row">
										<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

										<div class="col-md-8">
												<div class="input-group input-group-alternative">
												 <div class="input-group-prepend">
														<span class="input-group-text"><i class="ni ni-email-83"></i></span>
												</div>
												<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

												@if ($errors->has('email'))
												<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
										</div>
								</div>
						</div>

						<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

								<div class="col-md-8">
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



						<div class="custom-control custom-control-alternative custom-checkbox">
								<input class="custom-control-input" id=" customCheckLogin" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="custom-control-label" for=" customCheckLogin"><span>Remember me</span></label>
						</div>


						<div class="text-center">
								<button type="submit" class="btn btn-primary my-4">Login</button>
						</div>
				</form>
		</div>
	
</div>
	<div class="row mt-3">
			<div class="col-6">
				<a href="{{ route('password.request') }}" class="text-light btn btn-info btn-block"><small>Forgot password?</small></a>
		</div>
		<div class="col-6 text-right">
				<a href="{{ route('register') }}" class="text-light btn btn-success btn-block"><small>Create new account</small></a>
		</div>
</div>
</div>
</div>
</div>

@endsection
