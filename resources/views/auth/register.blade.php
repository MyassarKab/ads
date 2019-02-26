@extends('layouts.main')

@section('content')
<section class="loginSection">
  <div id="page-wrapper" class="sign-in-wrapper">
  				<div class="graphs">
  					<div class="sign-up">
  						<h1>Create an account</h1>
  						<p class="creating">Having hands on experience in creating innovative designs,I do offer design
  							solutions which harness.</p>
  						<h2>Personal Information</h2>
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

             <form class="form-horizontal register" method="POST" action="{{ route('register') }}">
                 {{ csrf_field() }}

                 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                     <label for="name" class="col-md-4 control-label">Name</label>

                     <div class="col-md-6">
                         <input id="name" type="text" class=" " name="name" value="{{ old('name') }}" required autofocus>

                         @if ($errors->has('name'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('name') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                     <div class="col-md-6">
                         <input id="email" type="email" class=" " name="email" value="{{ old('email') }}" required>

                         @if ($errors->has('email'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>
                 <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-4 control-label">Phone</label>

                     <div class="col-md-6">
                         <input id="phone" type="number" class=" " name="phone" value="{{ old('phone') }}" required>

                         @if ($errors->has('phone'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('phone') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>
                 <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                     <label for="email" class="col-md-4 control-label">Country </label>

                     <div class="col-md-6">

                         <select class="" name="country_id" required id="country_id">

                           <?php foreach ($countries as $key => $value): ?>
                             <option value="{{$value->id}}">{{$value->name_en}}</option>
                           <?php endforeach; ?>
                         </select>
                         @if ($errors->has('country_id'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('country_id') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>

                 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                     <label for="password" class="col-md-4 control-label">Password</label>

                     <div class="col-md-6">
                         <input id="password" type="password" class=" " name="password" required>

                         @if ($errors->has('password'))
                             <span class="help-block">
                                 <strong>{{ $errors->first('password') }}</strong>
                             </span>
                         @endif
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                     <div class="col-md-6">
                         <input id="password-confirm" type="password" class=" " name="password_confirmation" required>
                     </div>
                 </div>

                 <div class="form-group">
                     <div class="col-md-6 col-md-offset-4 sign-up">
                         <button type="submit" class="btn btn-primary">
                             Register
                         </button>
                     </div>
                 </div>
             </form>
  					</div>
  				</div>
  			</div>
</section>


@endsection
