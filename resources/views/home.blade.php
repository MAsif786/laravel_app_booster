@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <!-- Block with Options -->
        <div class="block">
            <!-- Block with Options Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-content"><i class="fa fa-arrows-v"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-toggle-fullscreen"><i class="fa fa-desktop"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-primary" data-toggle="block-hide"><i class="fa fa-times"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Post on Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-times"></i></a>
                    <div class="btn-group btn-group-sm">
                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="" data-original-title="Options" aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li>
                                <a href="javascript:void(0)"><i class="gi gi-cloud pull-right"></i>Simple Action</a>
                                <a href="javascript:void(0)"><i class="gi gi-airplane pull-right"></i>Another Action</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-wrench fa-fw pull-right"></i>Separated Action</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <h2><strong>Example</strong> Title</h2>
            </div>
            <!-- END Block with Options Title -->

            <!-- Block Content -->
            <div class="block-content">
                <div class="block-content">
                    <div class="table-responsive">
                        <table id="example-datatable" class="table dataTable table-vcenter table-condensed table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center"><i class="gi gi-user"></i></th>
                                    <th>Client</th>
                                    <th>Email</th>
                                    <th>Subscription</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">60</td>
                                    <td class="text-center"><img src="img/placeholders/avatars/avatar12.jpg" alt="avatar" class="img-circle"></td>
                                    <td><a href="javascript:void(0)">client60</a></td>
                                    <td>client60@company.com</td>
                                    <td><span class="label label-warning">Trial</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p>You can have a block with options to the top right..</p>
            <!-- END Block Content -->
        </div>
        <!-- END Block with Options -->
    </div>
</div>

@endsection
