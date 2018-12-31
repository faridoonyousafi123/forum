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
               <div class="m-t-10 corner-ribon black-ribon m-r-10">
                  
        

                  @if($user->is_followed_by_auth_user())

                      <a class="m-t-5 m-r-10 fs-16 btn btn-outline-primary follow-btn btn-sm" href="{{route('user.unfollow',['user_id'=>$user->id])}}">Following</a>

                  @elseif($user->id == Auth::user()->id)

               <a></a>
                  @else


               <a class="m-t-5 m-r-10 fs-16 btn btn-outline-primary follow-btn btn-sm" href="{{route('user.follow',['user_id'=>$user->id])}}">Follow</a>

               @endif

                    </div>
               
                  <div class="fa fa-user wtt-mark"></div>
                  <div class="media">
                     <a href="#">
                     <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{asset($user->avatar)}}">
                     </a>
                     <div class="media-body">
                        <h2 class="text-white  display-6">{{$user->name}}</h2>
                        <p class="text-light no-margin m-t-10 fs-14"><i class="fa fs-12 fa-suitcase m-r-10"></i>{{$user->profile->title}} </p>
                        <p class="text-light no-margin fs-14"><i class="fa fs-12 fa-building m-r-10"></i>{{$user->profile->company}} </p>
                        <p class="text-light no-margin fs-14"><i class="fa fs-12 fa-map-marked-alt m-r-10"></i>{{$user->profile->city}}, {{$user->profile->country}} </p>
                        <div class="text-left">       
                           <a href="{{$user->profile->facebook}}"> <i class="rotate-effect text-white fab m-r-15 m-t-10 fa-facebook-f"></i></a>
                           <i class="rotate-effect fab m-t-10 text-white m-r-15 fa-twitter"></i>
                           <i class="rotate-effect fab m-t-10 text-white m-r-15 fa-github"></i>
                           <i class="rotate-effect fab m-t-10 text-white fa-linkedin-in"></i>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="weather-category twt-category">
               <ul>
                  <li class="hover-effect tab-size showaboutme">
                     <h5><i class="far fa-address-card"></i> </h5>
                     About
                     </li>
                     <li class="hover-effect tab-size showdiscussion">
                        <h5>{{$user->discussions->count()}}</h5>
                        <i class="far fa-comment-alt"></i> Discussions
                     </li>
                     <li class="hover-effect tab-size showfollowing">
                        <h5>{{$user->followers->count()}}</h5>
                        <i class="fas fa-arrow-down"></i>
                         Followers
                     </li>
                     <li class="hover-effect tab-size showfollowers">
                        <h5>{{$user->following->count()}}</h5>
                        <i class="fas fa-arrow-up"></i> Followings
                     </li>
                  </ul>
               </div>
               <div class="col-lg-12 col-md-6">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane1 fadeup active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                       @foreach($user->discussions as $d)
                                       <div class="col-lg-3 col-md-12">
                                          <div class="card">
                                             <i class="fas fa-bookmark green fs-30"></i>
                                             <a href="{{route('discussion.show',['slug'=>$d->slug])}}">
                                             <div class="card-body">
                                                <div class="stat-content text-center">
                                                   <div class="text-left dib">
                                                      <div class="stat-text"><span class="count">{{$d->title}}</span></div>
                                                   </div>
                                                </div>
                                             </div>
                                             </a>
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

               <div class="col-lg-12 col-md-12">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane2 active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                       @foreach($user->followers as $f)
                                       <div class="col-lg-3 col-md-12 rounded col-md-6">
                                       <div class="card1">
      <img src="{{asset($f->avatar)}}"  alt="Chyno Deluxe">
		<h1>{{$f->name}}</h1>
      <h2>{{$f->profile->title}}</h2>
      
      <a href="{{route('profile.user',['slug' => $f->slug])}}" class="btn btn-primary m-t-20 btn-sm">View Profile</a>

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

               <div class="col-lg-12 col-md-12">
                  <div class="custom-tab">
                     <div class="tab-content show active pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane tab-pane3 active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                           <div class="card-body comment-body">
                              <div class="card-content">
                                 <div class="messenger-box">
                                    <div class="row">
                                    @foreach($user->following as $f)
                                       <div class="col-lg-3 col-md-12 rounded col-md-6">
                                       <div class="card1">
      <img src="{{asset($f->avatar)}}"  alt="Chyno Deluxe">
		<h1>{{$f->name}}</h1>
      <h2>{{$f->profile->title}}</h2>
      <a href="{{route('profile.user',['slug' => $f->slug])}}" class="btn btn-primary m-t-20 btn-sm">View Profile</a>


		
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