@extends('layouts.app')
@section('content')
    @include('includes.header')
    @include('includes.inner_page_title', ['page_title' => __('Dashboard')])

    <div class="listpgWraper">
        <div class="container">@include('flash::message')
            <div class="row"> @include('includes.company_dashboard_menu')
                <div class="col-md-9 col-sm-8"> @include('includes.company_dashboard_stats')
                    <?php

        if((bool)config('company.is_company_package_active')){        
        $packages = App\Package::where('package_for', 'like', 'employer')->get();
        $package = Auth::guard('company')->user()->getPackage();
        ?>
                    <?php if(null !== $package){ ?>
                    @include('includes.company_package_msg')
                    @include('includes.company_packages_upgrade')
                    <?php }elseif(null !== $packages){ ?>
                    @include('includes.company_packages_new')
                    <?php }} ?>
                </div>

            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection

@push('scripts')
    @include('includes.immediate_available_btn')
@endpush
