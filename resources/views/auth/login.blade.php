<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/homepage/login.css')}}">

</head>
<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
               @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror
               @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
               @enderror

                <form method="POST" action="{{ route('register') }}">
                    @csrf
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" placeholder="User name"   @error('name') is-invalid @enderror value="{{ old('name') }}" required autocomplete="name" autofocus>
					<input type="email" placeholder="Email"  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
					<input type="password" placeholder="Password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                    <input id="password-confirm" placeholder="Confirm Password"  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
					<label for="chk" aria-hidden="true">Login</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
					{{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                      @endif --}}
					<button type="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
