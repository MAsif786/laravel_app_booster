@extends('layouts.app')


@section('title', 'Users')
@section('titleicon', 'fa fa-user')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            @include('user.partials.list', ['users' => $users])
        </div>
    </div>

@endsection
