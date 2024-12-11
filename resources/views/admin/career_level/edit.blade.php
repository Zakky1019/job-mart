@extends('admin.layouts.admin_layout')
@section('content')
<div class="page-content-wrapper"> 
  
    <div class="page-content"> 
       
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a href="{{ route('admin.home') }}">Home</a> <i class="fa fa-circle"></i> </li>
                <li> <a href="{{ route('list.career.levels') }}">Career Level</a> <i class="fa fa-circle"></i> </li>
                <li> <span>Edit Career Level</span> </li>
            </ul>
        </div>
     
        <br />
        @include('flash::message')
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-red-sunglo"> <i class="icon-settings font-red-sunglo"></i> <span class="caption-subject bold uppercase">Career Level Form</span> </div>
                    </div>
                    <div class="portlet-body form">          
                        <ul class="nav nav-tabs">              
                            <li class="active"> <a href="#Details" data-toggle="tab" aria-expanded="false"> Details </a> </li>
                        </ul>
                        {!! Form::model($careerLevel, array('method' => 'put', 'route' => array('update.career.level', $careerLevel->id), 'class' => 'form', 'files'=>true)) !!}
                        {!! Form::hidden('id', $careerLevel->id) !!}            
                        <div class="tab-content">              
                            <div class="tab-pane fade active in" id="Details"> @include('admin.career_level.forms.form') </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        
    @endsection