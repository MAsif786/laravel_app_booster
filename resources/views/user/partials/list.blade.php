@extends('layouts.block', [ 'b_type' => 'table', "b_options" => 'ft'])

@section('b-title')
    <h2> <i class="fa fa-users"></i> <strong> Users </strong> List</h2>
@overwrite

@section('b-options')
    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Create User"><i class="fa fa-plus"></i></a>
@overwrite

@section('b-thead')
    <tr>
        <th class="text-center">ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Group</th>
        <th class="text-center">Status</th>
        <th class="text-center">Actions</th>
    </tr>
@endsection

@section('b-tbody')
    @parent
    @foreach ($users as $row)
        @if($row->id != auth()->user()->id)
            <tr>
                <td class="text-center">
                    {{ $row->id }}
                </td>
                <td>
                    {{ $row->name }}
                </td>
                <td>
                    {{ $row->email }}
                </td>
                <td>
                {{ $row->usergroup->name }}
                </td>
                <td class="text-center">
                    <form action="{{ route('users.toggleStatus', $row->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label class="switch switch-sm switch-info">
                            <input {{ $row->status ? 'checked' : '' }} onclick="this.form.submit()" type="checkbox">
                            <span {{ $row->status ? 'title=Inactive it' : 'title=Activate it' }} data-toggle="tooltip"></span>
                        </label>
                    </form>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="{{ route('users.show', $row->slug) }}" data-toggle="tooltip" title="View" class="btn btn-xs btn-info"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
        @endif
    @endforeach

@overwrite
