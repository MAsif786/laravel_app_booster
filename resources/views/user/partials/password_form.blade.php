@extends('layouts.block')

@section('b-title')
<h2> <i class="fa fa-asterisk"></i> <strong> Change Password </strong> </h2>
@endsection
    @section('b-content')
        <form method="POST" class="form-horizontal form-bordered" action="{{ route('password.update') }}">
            @csrf
                <div class="form-group @error('current_password') has-error @enderror @if(session('danger')) has-error @endif">
                    <label class="col-md-3 control-label" for="current_password">Current Password <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Current Password" required autofocus>
                        @error('current_password')
                        <span class="help-block animation-slideDown text-danger">{{ $message }}</span>
                        @enderror
                        @if(session('danger'))
                            <span class="help-block animation-slideDown text-danger">{{session('danger')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group @error('new_password') has-error @enderror">
                    <label class="col-md-3 control-label" for="new_password">New Password <span class="text-danger">*</span> </label>
                    <div class="col-md-9">
                        <input type="password" id="new_password" name="new_password" class="form-control" placeholder="New Password" required>
                        @error('new_password')
                        <span class="help-block animation-slideDown text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group @error('new_confirm_password') has-error @enderror">
                    <label class="col-md-3 control-label" for="new_confirm_password">Confirm Password <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="password" id="new_confirm_password" name="new_confirm_password" class="form-control" placeholder="Confirm New Password" required>
                        @error('new_confirm_password')
                        <span class="help-block animation-slideDown text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-asterisk"></i> Change Password</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
@endsection
