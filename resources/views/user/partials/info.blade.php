@extends('layouts.block', ["b_options" => 'ft'])

@section('b-title')
   <h2> <i class="fa fa-file-o"></i> <strong>{{ $user->name }}</strong> Info</h2>
@overwrite

@section('b-content')
    @parent
    <table class="table table-borderless table-striped">
        <tbody>
        <tr>
            <td style="width: 20%;"><strong>Email</strong></td>
            <td>{{ $user->email  }}</td>
        </tr>
        <tr>
            <td><strong>Contact</strong></td>
            <td> {{ $user->contact ?? "Null" }} </td>
        </tr>
        <tr>
            <td><strong>User Group</strong></td>
            <td><a href="{{ route("usergroups.show", $user->usergroup->slug)  }}"> {{ $user->usergroup->name  }} </a></td>
        </tr>
        <tr>
            <td><strong>Registered Date</strong></td>
            <td> {{ $user->created_at  }} </td>
        </tr>
        <tr>
            <td><strong>Last Update</strong></td>
            <td> {{ $user->updated_at  }} </td>
        </tr>
        <tr>
            <td><strong>Status</strong></td>
            <td>
                @if($user->status)
                    <span class="label label-success"><i class="fa fa-check"></i> Active</span>
                    @else
                    <span class="label label-danger"><i class="fa fa-times"></i> Inactive</span>
                @endif
            </td>
        </tr>
        </tbody>
    </table>

@overwrite
