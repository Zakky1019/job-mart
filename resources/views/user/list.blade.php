@extends('layouts.app')
@section('content')
    @include('includes.header')


    @include('flash::message')
    <form action="{{ route('job.seeker.list') }}" method="get">
        <div class="pageSearch">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="searchform">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="text" name="search" value="{{ Request::get('search', '') }}"
                                        class="form-control" placeholder="{{ __('Enter Skills or job seeker details') }}" />
                                </div>
                                <div class="col-md-5"> {!! Form::select(
                                    'functional_area_id[]',
                                    ['' => __('Select Functional Area')] + $functionalAreas,
                                    Request::get('functional_area_id', null),
                                    ['class' => 'form-control', 'id' => 'functional_area_id'],
                                ) !!} </div>

                                <div class="col-md-2">
                                    <button type="submit" class="btn"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>

                        @if (Auth::guard('company')->check())
                            <a href="{{ route('post.job') }}" class="btn btn-yellow mt-3"><i class="fa fa-file-text"
                                    aria-hidden="true"></i> {{ __('Post Job') }}</a>
                        @else
                            <a href="{{ url('my-profile#cvs') }}" class="btn btn-yellow mt-3"><i class="fa fa-file-text"
                                    aria-hidden="true"></i> {{ __('Upload Your Resume') }}</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </form>



    <div class="listpgWraper">
        <div class="container">
            <form action="{{ route('job.seeker.list') }}" method="get">
                <div class="row"> @include('includes.job_seeker_list_side_bar')
                    <div class="col-lg-6">
                        <ul class="searchList">
                            @if (isset($jobSeekers) && count($jobSeekers))
                                @foreach ($jobSeekers as $jobSeeker)
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8">
                                                <div class="jobimg">{{ $jobSeeker->printUserImage(100, 100) }}</div>
                                                <div class="jobinfo">
                                                    <h3><a
                                                            href="{{ route('user.profile', $jobSeeker->id) }}">{{ $jobSeeker->getName() }}</a>
                                                    </h3>
                                                    <div class="location"> {{ $jobSeeker->getLocation() }}</div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="listbtn"><a
                                                        href="{{ route('user.profile', $jobSeeker->id) }}">{{ __('View Profile') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p>{{ \Illuminate\Support\Str::limit($jobSeeker->getProfileSummary('summary'), 150, '...') }}
                                        </p>
                                    </li>
                                @endforeach
                            @endif
                        </ul>

                        <div class="pagiWrap">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="showreslt">
                                        {{ __('Showing Pages') }} : {{ $jobSeekers->firstItem() }} -
                                        {{ $jobSeekers->lastItem() }} {{ __('Total') }} {{ $jobSeekers->total() }}
                                    </div>
                                </div>
                                <div class="col-md-7 text-right">
                                    @if (isset($jobSeekers) && count($jobSeekers))
                                        {{ $jobSeekers->appends(request()->query())->links() }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class=""><br />{!! $siteSetting->listing_page_horizontal_ad !!}</div>

                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <h4 class="widget-title">{{ __('Sponsord By') }}</h4>
                            <div class="gad">{!! $siteSetting->listing_page_vertical_ad !!}</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('includes.footer')
@endsection
@push('styles')
    <style type="text/css">
        .searchList li .jobimg {
            min-height: 80px;
        }

        .hide_vm_ul {
            height: 100px;
            overflow: hidden;
        }

        .hide_vm {
            display: none !important;
        }

        .view_more {
            cursor: pointer;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $(document).ready(function($) {
            $("form").submit(function() {
                $(this).find(":input").filter(function() {
                    return !this.value;
                }).attr("disabled", "disabled");
                return true;
            });
            $("form").find(":input").prop("disabled", false);

            $(".view_more_ul").each(function() {
                if ($(this).height() > 100) {
                    $(this).addClass('hide_vm_ul');
                    $(this).next().removeClass('hide_vm');
                }
            });
            $('.view_more').on('click', function(e) {
                e.preventDefault();
                $(this).prev().removeClass('hide_vm_ul');
                $(this).addClass('hide_vm');
            });

        });
    </script>
    @include('includes.country_state_city_js')
@endpush
