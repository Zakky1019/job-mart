@extends('admin.layouts.admin_layout')
@section('content')
<div class="page-content-wrapper"> 
  
    <div class="page-content"> 
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-header">
               <div class="page-header-title">
                  <h4>{{__('Basic Widget Inputs')}} ({{$widget->title}})</h4>
               </div>
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item">
                        <a href="{{url('/admin')}}">
                        <i class="icofont icofont-home"></i>
                        </a>
                     </li>
                     <li class="breadcrumb-item">{{__('Widget  Components')}}
                     </li>
                    
                  </ul>
               </div>
            </div>
            
            <div class="page-body">
               <div class="row">
                  <div class="col-sm-12">
                     
                     <div class="card">
                        <div class="card-block">
                          <h4 class="sub-title">{{__('Widget Inputs')}}</h4>
                          {!! Form::model($widget, array('method' => 'post', 'route' => array('admin.widgets.update'), 'class' => 'form', 'files'=>true)) !!}
                          {!! Form::hidden('id', $widget->id) !!}
                           
                           @include('admin.widgets.inc.form')
                           <div class="row">
                              <div class="col-md-5"></div>
                              <div class="col-md-4"><button type="submit" class="btn btn-primary">{{__('Update')}}</button></div>
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
@endsection
