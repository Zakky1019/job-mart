@extends('admin.layouts.admin_layout')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content" style="background-color:#eef1f5;">

            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li> <a href="index.html">Home</a> <i class="fa fa-circle"></i> </li>
                    <li> <span>Admin Panel</span> </li>
                </ul>
            </div>

            <h3 class="page-title"> Admin Panel <small>Admin Panel</small> </h3>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 blue"
                            href="#">
                            <div class="visual"> <i class="fa fa-user"></i> </div>
                            <div class="details">
                                <div class="number"> <span data-counter="counterup"
                                        data-value="1349">{{ $totalVerifiedUsers }}</span> </div>
                                <div class="desc"> Verified Users </div>
                            </div>
                        </a> </div>
                </div>
            @endsection
            @push('scripts')
                <script type="text/javascript">
                    $(function() {
                        $('.slimScrol').slimScroll({
                            height: '250px',
                            railVisible: true,
                            alwaysVisible: true
                        });
                    });
                </script>
            @endpush
