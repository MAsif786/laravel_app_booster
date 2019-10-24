@extends('layouts.block', [ "b_options" => ''])

@section('b-title')
    <h2> <i class="fa fa-th"></i> <strong> Over View </strong> </h2>
@overwrite

@section('b-content')
    @parent
    <ul class="nav nav-pills nav-stacked"  data-toggle="tabs">
        <li class="active">
            <a href="#users">
{{--                <span class="badge pull-right">5</span>--}}
                <i class="fa fa-info-circle fa-fw"></i> <strong>Info</strong>
            </a>
        </li>
    </ul>

@overwrite
