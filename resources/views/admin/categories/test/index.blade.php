@extends('admin.layouts.app')

@section('title')
    <title>{{ trans('home.categories') }}</title>
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
                                    <b>
                                        <h3 class="card-title">
                                            {{ trans('home.categories_test') }}
                                        </h3>
                                    </b>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="">
                                        <button class="btn btn-success">
                                            {{ trans('home.export') }}
                                        </button>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                
                                <li class="nav-item">
                                    <a data-toggle="modal" data-target="#addCategoryTest" href="">
                                        <i class="fas fa-plus float-right m-2"></i>
                                    </a>
                                    @include('admin.categories.test.add')
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="card-body">
                        <table id="listCategory" class="table table-bordered table-striped dataTable dtr-inline max-width">
                            <thead>
                                <tr>
                                    <th class="text-center">{{ trans('home.number') }}</th>
                                    <th class="text-center">{{ trans('home.name') }}</th>
                                    <th class="text-center">{{ trans('home.description') }}</th>
                                    <th class="text-center">{{ trans('home.edit') }}</th>
                                    <th class="text-center">{{ trans('home.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoriesTest as $key => $categoryTest)
                                    <tr>
                                        <td class="text-center vertical-align-middle">{{ $key + config('const.one') }}</td>
                                        <td class="vertical-align-middle">{{ $categoryTest->name }}</td>
                                        <td class="vertical-align-middle">{{ $categoryTest->description }}</td>
                                        <td class="text-center vertical-align-middle">
                                            <a 
                                                class="badge badge-primary text-white" 
                                                data-id="{{ $categoryTest->id }}"
                                                data-name="{{ $categoryTest->name }}"
                                                data-description="{{ $categoryTest->description }}"
                                                data-toggle="modal" 
                                                data-target="#editCategory"  
                                                href="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        @include('admin.categories.test.edit')

                                        <td class="text-center vertical-align-middle">
                                            <form method="POST"
                                                action="{{ route('categories.destroy', $categoryTest->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="badge badge-danger text-white border-none">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>

                <div class="card col-md-12 mt-2">
                    <div class="card-header">
                        <nav class="navbar navbar-expand navbar-white navbar-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <b>
                                        <h3 class="card-title">
                                            {{ trans('home.categories_post') }}
                                        </h3>
                                    </b>
                                </li>
                            </ul>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="">
                                        <button class="btn btn-success">
                                            {{ trans('home.export') }}
                                        </button>
                                    </a>
                                </li>&nbsp;&nbsp;&nbsp;
                                
                                <li class="nav-item">
                                    <a data-toggle="modal" data-target="#addCategoryPost" href="">
                                        <i class="fas fa-plus float-right m-2"></i>
                                    </a>
                                    @include('admin.categories.post.add')
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="card-body">
                        <table id="listCategoryPost" class="table table-bordered table-striped dataTable dtr-inline max-width">
                            <thead>
                                <tr>
                                    <th class="text-center">{{ trans('home.number') }}</th>
                                    <th class="text-center">{{ trans('home.name') }}</th>
                                    <th class="text-center">{{ trans('home.description') }}</th>
                                    <th class="text-center">{{ trans('home.edit') }}</th>
                                    <th class="text-center">{{ trans('home.delete') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categoriesPost as $key => $categoryPost)
                                    <tr>
                                        <td class="text-center vertical-align-middle">{{ $key + config('const.one') }}</td>
                                        <td class="vertical-align-middle">{{ $categoryPost->name }}</td>
                                        <td class="vertical-align-middle">{{ $categoryPost->description }}</td>
                                        <td class="text-center vertical-align-middle">
                                            <a 
                                                class="badge badge-primary text-white" 
                                                data-id="{{ $categoryPost->id }}"
                                                data-name="{{ $categoryPost->name }}"
                                                data-description="{{ $categoryPost->description }}"
                                                data-toggle="modal" 
                                                data-target="#editCategoryPost"  
                                                href="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        @include('admin.categories.post.edit')

                                        <td class="text-center vertical-align-middle">
                                            <form method="POST"
                                                action="{{ route('categories.destroy', $categoryPost->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="badge badge-danger text-white border-none">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
