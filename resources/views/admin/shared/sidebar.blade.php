<div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler"> </div>
        </li>
        <li class="sidebar-search-wrapper">
        </li>
        <li class="nav-item start active"> <a href="{{ route('admin.home') }}" class="nav-link"> <i class="icon-home"></i> <span class="title">Dashboard</span> </a> </li>
        @include('admin/shared/side_bars/admin_user')

        <li class="heading">
            <h3 class="uppercase">Modules</h3>
        </li>
        @include('admin/shared/side_bars/job')
        @include('admin/shared/side_bars/company')
        @include('admin/shared/side_bars/site_user')
        @include('admin/shared/side_bars/blogs')
		
		@if(APAuthHelp::check(['SUP_ADM']))
        <li class="heading">
            <h3 class="uppercase">Job Attributes</h3>
        </li>

        @include('admin/shared/side_bars/career_level')
        @include('admin/shared/side_bars/functional_area')
        @include('admin/shared/side_bars/industry') 
    
		@endif
    </ul>
   
</div>
