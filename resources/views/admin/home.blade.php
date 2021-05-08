@extends('admin.layouts.app')

@section('title')
    <title>{{ trans('message.home') }}</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="card col-md-12 mt-5">
                    <div class="card-header">
                        <nav class="navbar navbar-expand navbar-white navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <h3 class="card-title">{{ trans('message.users') }}</h3>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="">
                                        <button class="btn btn-success">
                                            {{ trans('message.export') }}
                                        </button>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                
                                <li class="nav-item">
                                    <a data-toggle="modal" data-target="#addUser" href="">
                                        <i class="fas fa-plus float-right m-2"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="card-body">
                        <table id="listUsers" class="table table-bordered table-striped dataTable dtr-inline max-width">
                            <thead>
                                <tr>
                                    <th class="text-center">{{ trans('request.id') }}</th>
                                    <th class="text-center">{{ trans('message.name') }}</th>
                                    <th class="text-center">{{ trans('message.email') }}</th>
                                    <th class="text-center">{{ trans('message.phone_number') }}</th>
                                    <th class="text-center">{{ trans('request.edit') }}</th>
                                    <th class="text-center">{{ trans('request.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            
@endsection