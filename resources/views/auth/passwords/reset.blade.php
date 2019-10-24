@extends('layouts.auth')

@section('page_title')
    <h1><strong>Reset Password</strong></h1>
@endsection
@section('content')
<!-- Reminder Form -->
<form action="{{ route('password.update') }}" method="post" id="" class="form-horizontal">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group @error('email') has-error @enderror">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            </div>
            @error('email')
            <div class="help-block animation-slideDown text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group @error('password') has-error @enderror">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
            </div>
            @error('password')
            <div class="help-block animation-slideDown text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group @error('email') has-error @enderror">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
            </div>
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-12 text-right">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <small>Did you remember your password?</small> <a href="{{ route("login") }}" id="link-reminder"><small>Login</small></a>
        </div>
    </div>
</form>
<!-- END Reminder Form -->
@endsection
