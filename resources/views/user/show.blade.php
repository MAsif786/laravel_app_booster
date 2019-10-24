@extends('layouts.app')


@section('title', $user->name)
@section('subtitle', $user->usergroup->name)
@section('titleicon', 'fa fa-user')

@section('content')
    <div class="row tab-content">
        <div class="col-sm-4 col-lg-3" id="info">
            @include('user.partials.menu')
        </div>
        <div class="col-sm-8 col-lg-9 tab-pane active" id="users">
            @include('user.partials.info', ['user', $user])
        </div>
    </div>
@endsection
