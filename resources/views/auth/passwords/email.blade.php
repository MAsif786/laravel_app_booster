@extends('layouts.auth')

@section('page_title')
    <h1>
        <strong>
            Forgot Password
        </strong>
        <br>
        <small style="color:#27ae60 !important;">
            @if (session('status'))
                {{ session('status') }}
            @endif
        </small>
    </h1>
@endsection

@section('content')
<!-- Reminder Form -->
<form action="{{ route('password.email') }}" method="POST" id="form-reminder" class="form-horizontal">
    @csrf
    <div class="form-group @error('email') has-error @enderror">
        <div class="col-xs-12">
            <div class="input-group">
                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                <input type="text" id="reminder-email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}">
            </div>
            @error('email')
            <div id="login-email-error" class="help-block animation-slideDown text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group form-actions">
        <div class="col-xs-12 text-right">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Send Password Reset Link</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-12 text-center">
            <small>Did you remember your password?</small> <a href="{{route('home')}}"><small>Login</small></a>
        </div>
    </div>
</form>
<!-- END Reminder Form -->
@endsection
