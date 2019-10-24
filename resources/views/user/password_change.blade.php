@extends('layouts.app')


@section('title', 'Change Password')
@section('titleicon', 'fa fa-asterisk')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('user.partials.password_form')
        </div>
    </div>

@endsection
