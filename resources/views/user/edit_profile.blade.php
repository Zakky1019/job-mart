@extends('layouts.app')
@section('content')
    @include('includes.header')
    @include('includes.inner_page_title', ['page_title' => __('My Profile')])
    <div class="listpgWraper">
        <div class="container">
            <div class="row">
                @include('includes.user_dashboard_menu')
                <div class="col-md-9 col-sm-8">
                    <div class="userccount">
                        <div class="formpanel mt0"> @include('flash::message')
                            @include('user.inc.profile')
                        </div>
                    </div>
                    <div class="userccount">
                        <div class="formpanel mt0">
                            @include('user.inc.summary')
                        </div>
                    </div>

                    <div class="editprofilebox">
                        <div class="formpanel mt-5">
                            <h3>{{ __('Build Your Resume') }}</h3>
                            @include('user.forms.cv.cvs')
                            @include('user.forms.project.projects')
                            @include('user.forms.experience.experience')
                            @include('user.forms.education.education')
                            @include('user.forms.skill.skills')
                            @include('user.forms.language.languages')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
@push('styles')
    <style type="text/css">
        .userccount p {
            text-align: left !important;
        }
    </style>
@endpush
@push('scripts')
    @include('includes.immediate_available_btn')

    <script>
        $(document).on('click', '.btn-close', function() {
            $('.modal').css('display', 'none');
            $('.modal-backdrop').remove();
            $('.modal').removeAttr('style');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            $('body').removeAttr('style');
        });
    </script>
@endpush
