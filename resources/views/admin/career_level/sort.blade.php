@extends('admin.layouts.admin_layout')
@section('content')
<div class="page-content-wrapper"> 
   
    <div class="page-content"> 
       
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a href="{{ route('admin.home') }}">Home</a> <i class="fa fa-circle"></i> </li>
                <li> <a href="{{ route('list.career.levels') }}">Career Levels</a> <i class="fa fa-circle"></i> </li>
                <li> <span>Sort Career Levels</span> </li>
            </ul>
        </div>
       
        <br />
        @include('flash::message')
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo"> <i class="icon-settings font-red-sunglo"></i> <span class="caption-subject bold uppercase">Sort Career Levels</span> </div>
                    </div>
                    <div class="portlet-body form">          
                        <ul class="nav nav-tabs">              
                            <li class="active"> <a href="#Details" data-toggle="tab" aria-expanded="false"> Sort Career Levels </a> </li>
                        </ul>
                        <div class="tab-content">              
                            <div class="tab-pane fade active in" id="Details"> @include('admin.career_level.forms.sort') </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection