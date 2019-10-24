@extends('layouts.app')


@section('title',  $usergroup->name)
@section('subtitle', $usergroup->description)
@section('titleicon', 'fa fa-user')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('user.partials.list', ["users" => $usergroup->users])
        </div>
    </div>
@endsection
