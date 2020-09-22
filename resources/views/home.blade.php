@extends('layouts.app')

@section('title', 'Twitter')

@section('styles')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    @include('layouts.navbar')
    <!-- Layout -->
    <div class="home" id="{{Auth::id()}}">
        <div class="container">
            <div class="row">
                <div class="d-xs-none d-sm-none d-md-block col-md-5 col-lg-3 left-bar">
                    <!-- Bagian Profile -->
                    <div class="profileCard">
                            @if(empty(Auth::user()->cover))
                            <img class="cover" src="{{ asset('images/background.jpg') }}" height="130" width="275">
                            @else
                            <img class="cover" src="{{asset($foto_profil->cover)}}">
                            @endif
                        <div class="profileContent">
                            <a href="">
                            @if(empty(Auth::user()->photo))
                            <img class="avatar" src="{{ asset('images/avatar.png') }}">
                            @else
                            <img class="avatar" src="{{asset($foto_profil->photo)}}">
                            @endif
                                <div class="userDetails">
                                    <span class="name">{{Auth::user()->name}}</span>
                                    <span class="username">{{Auth::user()->username}}</span>
                                </div>
                            </a>
                            <div class="userStats row row-eq-height">
                                <div class="col-sm-6">
                                    <span class="mini-title">Tweets<span>
                                    <span class="value">1</span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="mini-title">Following<span>
                                    <span class="value">1</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Akhir Profile -->

                </div>

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6 content">

                    <!-- Bagian New Post -->
                    <div class="publish">
                        <div class="photo">
                        	@if(empty(Auth::user()->photo))
                            <img src="{{ asset('images/avatar.png') }}">
                            @else
                            <img src="{{asset($foto_profil->photo)}}">
                            @endif
                        </div>
                        <textarea type="text" placeholder="What's happening?"></textarea>
                        <span class="counter"></span>
                        <button class="btn">Tweet</button>
                    </div><!-- Akhir New Post -->

                    <!-- All Tweets -->
                    <div class="posts">
                        <!-- Single Tweet -->
                        <div class="post">

                            <!-- Dropdown of actions
                            <div>
                                <i class="fa fa-angle-down" id="dropdownMenuI" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuI">
                                    <a class="dropdown-item">Delete Tweet</a>
                                </div>
                            </div>
                            -->

                            <div class="postContent">
                                <a href="" class="user">
                                    <img src="{{ asset('images/avatar.png') }}">
                                </a>
                                <div class="data">
                                	<a class="name">Yustria Akbar</a>
                                	<a class="username">yustriaakbar</a>
                                	<a class="date">21m</a>
                                </div>
                                <div class="content">
                                    <p>ini adalah tweets</p>
                                </div>
                                <div class="actions">
                                    <a :href="" class="action">
                                        <i class="fa fa-comments"></i>
                                        <span></span>
                                    </a>
                                    <span class="action">
                                        <i class="fa fa-heart"></i>
                                        <span></span>
                                    </span>
                                    <span class="action">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>

                        </div> <!-- Single Tweet -->
                    </div>                 
                    <!-- All Tweets 
                    <div class="no-tweets">
                        <h3>
                            No tweets to view.
                        </h3>
                        <p>Follow up some users to view their tweets.</p>
                    </div>-->
                </div>

                <!-- Right Bar -->
                <div class="d-xs-none d-sm-none d-md-none d-lg-block col-lg-3 right-bar">
                   
                        <!-- Suggestions -->
                        <div class="suggestions">
                            <div class="title">Who to follow</div>
                            <div class="content">
                                
                                <!-- Single Suggestion -->
                                <div class="someone">
                                    <a href="">
                                        <img src="">
                                        <span class="name" title="">follow 1</span>
                                        <span class="username" title="">follow1</span>
                                    </a>
                                    <button class="btn follow" @click="">Follow</button>
                                </div><!-- Single Suggestion -->
                               
                            </div>
                        </div><!-- Suggestions -->
                  
                    <!-- About Website -->
                    <div class="about">
                        <span>&copy; Twitter</span>
                        <a href="#">About</a>
                        <a href="#">Help center</a>
                        <a href="#">Terms</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Cookies</a>
                        <a href="#">Ads info</a>
                        <a href="#">Brand</a>
                        <a href="#">Blog</a>
                        <a href="#">Status</a>
                        <a href="#">Apps</a>
                        <a href="#">Jobs</a>
                        <a href="#">Marketing</a>
                        <a href="#">Business</a>
                        <a href="#">Developers</a>
                    </div><!-- About Website -->
                </div>
            </div>
        </div>
    </div>

@endsection
