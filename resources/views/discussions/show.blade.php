@extends('layouts.header')
@section('content')
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <!-- Widgets  -->
      <div class="row">
         <div class="col-lg-12 m-t-20">
            <section class="card">
               <div class="twt-feed blue-bg">
                  <div class="corner-ribon black-ribon">
                     <i class="fas fa-bullhorn"></i>
                  </div>
                  <div class="fas fa-bullhorn wtt-mark"></div>
                  <div class="media">
                     <a href="#">
                     <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset($discussion->user->avatar) }}">
                     </a>
                     <div class="media-body">
                        <h2 class="text-white display-6">{{ $discussion->user->name }}</h2>
                        <p class="text-light">Software Developer at Netlinks</p>
                     </div>
                  </div>
               </div>
               <div class="weather-category twt-category">
                  <ul>
                     <li class="active">
                        <h5>{{$discussion->where('user_id',$discussion->user->id)->count()}}</h5>
                        Discussion
                     </li>
                     <li>
                        <h5>865</h5>
                        Following
                     </li>
                     <li>
                        <h5>3645</h5>
                        Followers
                     </li>
                  </ul>
               </div>
               <div class="twt-write col-lg-12">
                  <div class="col-lg-12">
                     <strong class="card-title">{{$discussion->title}}<small><span class="badge badge-success float-right mt-1">Success</span></small></strong>
                  </div>
                  <div class="card-body">
                     <p class="card-text">{{ $discussion->content }}</p>
                  </div>
                  <div class="m-l-20 m-b-40 m-t-40 text-left">
                      <div class="text-left m-b-20 m-t-20">
                      <i class="far likecolor fa-thumbs-up"></i> <span class="fs-12">
                      People who liked this 
                      </span>
                      </div>
                       @if($discussion->likes->count() <= 5)
                  @foreach($likes as $like)
                        
                  <img class="align-self-center rounded-circle mr-3" style="width:30px; height:30px;" alt="" src="{{asset($like->user->avatar)}}">
                  <div>
                      $like->user->name
                </div>

                    @endforeach
                
                
               @else
               @foreach($likes as $like)
               
                  <img class="align-self-center rounded-circle mr-3" style="width:30px; height:30px;" alt="" src="{{asset($like->user->avatar)}}">
                  <div class="where">{{$like->user->name}}</div>
                    @endforeach

                    <span class="text-left"><span class="fs-12"> and </span> <span class="fs-12">{{$discussion->likes->whereNotIn('id','$like->id')->count()-$likes->count() }} more...</span>
                    
                    @endif
                
                  
                  </div>
               </div>
               <footer class="twt-footer">
                  <span class="pull-right fs-12">
                  {{$discussion->created_at->diffForHumans()}} 
                  </span>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="custom-tab">
                           <nav>
                              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                 <a class="nav-item active show nav-link" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">
                                    <h4 class="card-title box-title"><span class="showComments"></span>Comments ({{$discussion->replies->count()}})</h4>
                                 </a>
                                 <i class="far fs-16 fa-comment samecolor"></i>
                              </div>
                           </nav>
                           <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                              <div class="tab-pane active fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                 <div class="card-body comment-body">
                                    <div class="card-content out">
                                       <button data-scroll-to="#id1"
                                          data-scroll-focus="#id2"
                                          data-scroll-speed="700"
                                          data-scroll-offset="200"  type="button" class="m-b-50 m-l-20 btn new-comment btn-sm btn-outline-success">New Comment</button>
                                       <div class="messenger-box">
                                          @foreach($discussion->replies as $reply)
                                          <li>
                                             <div class="msg-received msg-container">
                                                <div class="avatar">
                                                   <img class="m-l-10 rounded-circle mr-3" height="40px" width="40px" src="{{asset($reply->user->avatar)}}" alt=""> 
                                                   <div class="send-time">{{ $reply->created_at->diffForHumans()}}</div>
                                                </div>
                                                <!-- Message box-->
                                                <div class="msg-box">
                                                   <div class="inner-box">
                                                      <div class="name">
                                                         {{$reply->user->name}}
                                                      </div>
                                                      <div class="meg">
                                                         {{ $reply->content }}
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Message box-->
                                             </div>
                                             <!-- /.msg-received -->
                                          </li>
                                          @endforeach
                                          </ul>
                                          <div class="position">
                                             Write new comment
                                             <form action="{{route('discussion.reply',['id' => $discussion->id])}}" method="post">
                                                {{csrf_field()}}
                                                <div class="send-mgs">
                                                   <div class="yourmsg">
                                                      <section id="id1">
                                                         <input class="form-control getinfo" id="id2" name="content" type="text">
                                                      </section>
                                                   </div>
                                                   <button type="submit" class="postbutton btn msg-send-btn">
                                                   <i class="pe-7s-paper-plane"></i>
                                                   </button>
                                                   <div class="writeinfo"></div>
                                                </div>
                                             </form>
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
                  </div>
         </div>
      </div>
      </footer>
      </section>
   </div>
</div>
</div>
</div>
@endsection