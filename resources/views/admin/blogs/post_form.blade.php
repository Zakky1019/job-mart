@extends('admin.layouts.admin_layout')
@push('css')
    <link rel="stylesheet" href="{{ asset('modules/blogs/css/blogs.css') }}">
@endpush
@section('content')

    <?php
    $lang = config('default_lang');
    $lang = MiscHelper::getLang($lang);
    $direction = MiscHelper::getLangDirection($lang);
    $queryString = MiscHelper::getLangQueryStr();
    ?>

    <style type="text/css">
        .table td,
        .table th {
            font-size: 12px;
            line-height: 2.42857 !important;

        }
    </style>

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li> <a>Add Blog</a> <i class="fa fa-circle"></i> </li>
                    <li> <span>Blogs</span> </li>

                </ul>

            </div>

            <h3 class="page-title">Add New Post </h3>
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="">
                            @if (session()->has('message.added'))
                                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center"
                                    role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="mdi mdi-checkbox-marked-circle font-32"></i><strong class="pr-1">Success
                                        !</strong>
                                    {!! session('message.content') !!}.
                                </div>
                            @endif

                            <div class="tab-content">
                                <div class="tab-pane active show" id="settings">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="">
                                                <form method="POST" files="true"
                                                    action="{{ asset('admin/blog/create') }}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-lg-9">
                                                            <div
                                                                class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                                                <label class="control-label" for="title">Title</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    id="title" autofocus value="{{ old('title') }}">
                                                                <span
                                                                    class="text-danger">{{ $errors->first('title') }}</span>
                                                            </div>
                                                            <div
                                                                class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                                                                <label class="control-label" for="content">Content</label>

                                                                <textarea class="form-control" name="content" id="description" cols="40" rows="5" autofocus>{{ old('content') }}</textarea>
                                                                <span
                                                                    class="text-danger">{{ $errors->first('content') }}</span>
                                                            </div>
                                                            <br /><br /><br />
                                                            <div class="clearfix"></div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="blogboxint">
                                                                <input type="submit" value="Publish"
                                                                    class="btn btn-primary">
                                                            </div>
                                                            <div class="blogboxint">
                                                                {{ csrf_field() }}
                                                                @if ($categories != '')
                                                                    <div class="form-group">

                                                                        <label class="control-label" for="title">Select

                                                                            Category</label>

                                                                        <ul class="optionlist">

                                                                            @foreach ($categories as $cate)
                                                                                <li>

                                                                                    <input type="checkbox" name="cate_id[]"
                                                                                        id="cate_id"
                                                                                        value="<?php echo $cate->id; ?>">

                                                                                    <label for="webdesigner"></label>

                                                                                    {!! $cate->heading !!}
                                                                                </li>
                                                                            @endforeach

                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                            </div>


                                                            <div class="blogboxint">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="Upload Image">Featured
                                                                        Image</label>

                                                                    <input type="file" class="form-control"
                                                                        name="image" id="image" autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                         </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

        </div>

        <style type="text/css">
            .float-right .custom-control-label {
                color: #fff !important;
            }
        </style>

    @endsection

    @push('scripts')
        @include('admin.shared.tinyMCEFront')
        <script src="{{ asset('modules/blogs/js/blogs.js') }}"></script>

        <style type="text/css">
            #fea_img {

                border: 2px dashed #ddd;
                padding: 50px 30px;
                text-align: center;

            }



            .jFiler-input {
                max-width: 401px;
                margin: 0 auto 15px auto !important;
            }

            .jFiler-items-grid .jFiler-item .jFiler-item-container {
                margin: 0 14px 30px 0;
            }

            .cropper-bg {
                background-image: none !important;
                height: 100% !important;
            }



            .img-crop {
                display: block;
                width: 100%;
                height: 100%;
                canvas {
                    margin: 0 !important;
                }
            }
        </style>
    @endpush
