@extends('admin.layouts.admin_layout')
@push('css')
<link rel="stylesheet" href="{{ asset('modules/blogs/css/blogs.css') }}">
@endpush
@section('content')

    <?php
    
    $lang = config('default_lang');
    
    if (isset($blog)) {
        $lang = $blog->lang;
    }
    
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
                    <li> <a>Update Blog</a> <i class="fa fa-circle"></i> </li>
                    <li> <span>Blogs</span> </li>
                </ul>
            </div>

            <h3 class="page-title">Update Post </h3>
            <div class="row">

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
                                                        action="{{ asset('/admin/blog/update') }}"
                                                        enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ $blog->id }}" name="id"
                                                            id="id">


                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <div
                                                                    class="form-group {{ $errors->has('title_update') ? 'has-error' : '' }}">
                                                                    <label class="control-label"
                                                                        for="title">Title</label>
                                                                    <input type="text" class="form-control"
                                                                        name="title_update" id="title_update" autofocus
                                                                        value="{{ $blog->heading }}">
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('title_update') }}</span>
                                                                </div>
                                                                <div
                                                                    class="form-group {{ $errors->has('slug_update') ? 'has-error' : '' }}">
                                                                    <label class="control-label"
                                                                        for="Slug_update">Slug</label>

                                                                    <input type="text" class="form-control"
                                                                        name="slug_update" id="slug_update" autofocus
                                                                        value="{{ $blog->slug }}">
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('slug_update') }}</span>
                                                                </div>
                                                                <div
                                                                    class="form-group {{ $errors->has('content_update') ? 'has-error' : '' }}">
                                                                    <label class="control-label"
                                                                        for="content">Content</label>
                                                                    <textarea class="form-control" name="content_update" id="description" cols="40" rows="5" autofocus>{{ $blog->content }}</textarea>
                                                                    <span
                                                                        class="text-danger">{{ $errors->first('content_update') }}</span>
                                                                </div>

                                                                <br />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="blogboxint">
                                                                <input type="submit" value="Publish"
                                                                    class="btn btn-primary">
                                                            </div>

                                                            <div class="blogboxint">
                                                                <div class="form-group">
                                                                    <label class="control-label" for="Upload Image">Featured
                                                                        Image</label>


                                                                    <input type="file" class="form-control"
                                                                        name="imageupdate" id="imageupdate" autofocus>
                                                                    <div class="image_append" id="image_append">
                                                                        @if ($blog->image != '')
                                                                            <div class='featured-images-main'
                                                                                id='listing_img_{{ $blog->id }}'><img
                                                                                    src="{{ asset('uploads/blogs/thumbnail/') }}/{{ $blog->image }}"><i
                                                                                    onClick='remove_blog_featured_image("{{ $blog->id }}");'
                                                                                    class='fa fa-times'></i></div>
                                                                        @endif
                                                                    </div>
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
