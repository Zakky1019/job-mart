@extends('layouts.app')
@section('content')
@include('includes.header')
@include('includes.inner_page_title', ['page_title'=>__('About Us')])

<div class="about-wraper"> 
    
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>Our Perfect Platform</h2>
            </div>
            <div class="col-md-5">
                <div class="postimg"><img src="images/about-us-img1.jpg" alt="your alt text" /></div>
            </div>
        </div>
    </div>

   
    <div class="what_we_do">
        <div class="container">
            <div class="main-heading">Our process is simple</div>
            <div class="whatText"></div>
            <ul class="row whatList">
                <li class="col-md-4 col-sm-6">
                    <div class="iconWrap">
                        <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    </div>
                    <h3>Create Account</h3>
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="iconWrap">
                        <div class="icon"><i class="fa fa-file-text"></i></div>
                    </div>
                    <h3>Build CV</h3>
    
                </li>
                <li class="col-md-4 col-sm-6">
                    <div class="iconWrap">
                        <div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                    </div>
                    <h3>Get Job</h3>
                   
                </li>
            </ul>
        </div>
    </div>

  
    <div class="textrow">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="postimg"><img src="images/about-us-img2.jpg" alt="your alt text" /></div>
                </div>
                <div class="col-md-7">
                    <h2>Our Expertise</h2>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
