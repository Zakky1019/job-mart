@extends('layouts.app')
@section('content')
@include('includes.header')
@include('includes.inner_top_search')
<div class="about-wraper">
    <div class="container">

    <div class="largebanner shadow3 mt-0">
<div class="adin">
<img src="{{ asset('images/google-ad-wide.jpg') }}" alt="728x90">
</div>
<div class="clearfix"></div>
</div>

    <h2>{{$cmsContent->page_title}}</h2>
    <p>Welcome to JobMart, Sri Lanka’s innovative solution to unemployment. Our mission is to bridge the gap between job seekers and employers through a seamless and efficient online platform.

        Founded in response to the rising unemployment rates among graduates and undergraduates, JobMart is committed to transforming the job search experience. We understand that the traditional job search process can be frustrating and discouraging, often lacking access to relevant resources and guidance.
        <br>
        <br>
        At JobMart, we offer a comprehensive platform that connects job seekers with a wide range of employment opportunities. Our user-friendly interface and advanced search capabilities ensure that you find the right job quickly and easily.
        
        We are dedicated to providing ongoing support and resources to help you succeed in your career journey. Join JobMart today and take the first step towards your future</p>     
    </div>  
    
</div>
@include('includes.footer')
@endsection