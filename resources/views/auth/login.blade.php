@extends('layouts.main')

@section('content')
<section class="loginSection">

<style media="screen">
	body{
		    background: #F9F9F9;
	}
</style>
<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						@if (session('status'))
											 <div class="alert alert-success">
													 {{ session('status') }}
											 </div>
									 @endif
									 @if (session('warning'))
											 <div class="alert alert-warning">
													 {{ session('warning') }}
											 </div>
									 @endif
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"> Forgot Password ?</label>
								</span>
								<p>      <a class="btn btn-link" href="{{ route('password.request') }}">

                     Click Here</a> </p>
								<div class="clearfix"> </div>
							</div>
							<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
							<div class="log-input  {{ $errors->has('email') ? ' has-error' : '' }}">
								<div class="log-input-left">
                  <input id="email" type="email" class="user" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
 								</div>

								<div class="clearfix"> </div>
							</div>
							<div class="log-input {{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="log-input-left">
                  <input id="password" type="password" class="lock" name="password" required placeholder="password">

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
 								</div>

								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Log in">
						</form>
						</div>
						<div class="new_people">
							<h2>For New People</h2>
							<p>Having hands on experience in creating innovative designs,I do offer design
								solutions which harness.</p>
							<a href="register.html">Register Now!</a>
						</div>
					</div>
				</div>
			</div>


      </section>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
