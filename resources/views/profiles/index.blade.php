@extends('layouts.header')
@section('content')
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <!-- Widgets  -->
      <div class="row">
         <div class="col-lg-12 col-md-6 col-sm-6 m-t-20">
            <section class="card-body">
               <div class="twt-feed grey-bg">
               
                  <div class="fa fa-user wtt-mark"></div>
                  <div class="media">
                     <a href="#">
                     <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{asset(Auth::user()->avatar)}}">
                     </a>
                     <div class="media-body">
                        <h2 class="text-white  display-6">{{Auth::user()->name}}</h2>
                        <p class="text-light no-margin m-t-10 fs-14"><i class="fa fs-12 fa-suitcase m-r-10"></i>{{Auth::user()->profile->title}} </p>
                        <p class="text-light no-margin fs-14"><i class="fa fs-12 fa-building m-r-10"></i>{{Auth::user()->profile->company}} </p>
                        <p class="text-light no-margin fs-14"><i class="fa fs-12 fa-map-marked-alt m-r-10"></i>{{Auth::user()->profile->city}}, {{Auth::user()->profile->country}} </p>
                        <div class="text-left">       
                           <a href="{{Auth::user()->profile->facebook}}"> <i class="rotate-effect text-white fab m-r-15 m-t-10 fa-facebook-f"></i></a>
                           <i class="rotate-effect fab m-t-10 text-white m-r-15 fa-twitter"></i>
                           <i class="rotate-effect fab m-t-10 text-white m-r-15 fa-github"></i>
                           <i class="rotate-effect fab m-t-10 text-white fa-linkedin-in"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="weather-category twt-category">
                  <ul>
                     <li class="hover-effect showdiscussion">
                        <h5>{{Auth::user()->discussions->count()}}</h5>
                        <i class="far fa-comment-alt"></i> Discussions
                     </li>
                     <li class="hover-effect showfollowing">
                        <h5>{{Auth::user()->followers->count()}}</h5>
                        <i class="fas fa-arrow-down"></i>
                         Followers
                     </li>
                     <li class="hover-effect showfollowers">
                        <h5>{{Auth::user()->following->count()}}</h5>
                        <i class="fas fa-arrow-up"></i> Followings
                     </li>
                  </ul>
               </div>
               <div class="col-lg-12">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane1 fadeup active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                       @foreach(Auth::user()->discussions as $d)
                                       <div class="col-lg-3 col-md-6">
                                          <div class="card">
                                             <i class="fas fa-bookmark green fs-30"></i>
                                             <div class="card-body">
                                                <div class="stat-content text-center">
                                                   <div class="text-left dib">
                                                      <div class="stat-text"><span class="count">{{$d->title}}</span></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       @endforeach
                                    </div>
                                 </div>
                                 <!-- /.messenger-box -->
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane2 active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                       @foreach(Auth::user()->followers as $f)
                                       <div class="col-lg-3 rounded col-md-6">
                                       <div class="card1">
      <img src="{{asset($f->avatar)}}" height="40px" width="40px" alt="Chyno Deluxe">
		<h1>{{$f->name}}</h1>
		<h2>{{$f->profile->title}}</h2>
		<a class="button btn btn-sm" href="https://instagram.com/chynodeluxe" target="_blank"><span>+</span> Follow</a>
	</div>
                                       </div>
                                       @endforeach
                                    </div>
                                 </div>
                                 <!-- /.messenger-box -->
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-12">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane3 active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                    @foreach(Auth::user()->following as $f)
                                       <div class="col-lg-3 rounded col-md-6">
                                       <div class="card1">
      <img src="{{asset($f->avatar)}}" height="40px" width="40px" alt="Chyno Deluxe">
		<h1>{{$f->name}}</h1>
		<h2>{{$f->profile->title}}</h2>
		<a class="button btn btn-sm" href="https://instagram.com/chynodeluxe" target="_blank"><span>+</span> Follow</a>
	</div>
                                       </div>
                                       @endforeach
                                    </div>
                                 </div>
                                 <!-- /.messenger-box -->
                              </div>
                           </div>
                           <!-- /.card-body -->
                        </div>
                     </div>
                  </div>
               </div>



            </section>
         </div>
      </div>
   </div>
</div>
@endsection