@extends('layouts.header')
@section('content')
<div class="content">
            <!-- Animated -->
        <div class="animated fadeIn">
                <!-- Widgets  -->
      <div class="row">
         
      <div class="col-lg-12">
      
           
            
                            
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
                                        <p class="text-light">Project Manager</p>
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
                                
                            </div>
                           
                            <footer class="twt-footer">
                            <div class="row">
                    

                    <div class="col-lg-12">
                    
                           
                                    <div class="custom-tab">

                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item active show nav-link" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true"><h4 class="card-title box-title"><span class="commentMessage">- Hide </span>Comments ({{$discussion->replies->count()}})</h4></a>
                                              
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane active show fade" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                            <div class="card-body">
                                
                                <div class="card-content">
                                    <div class="messenger-box">
                                        <ul>
                                        @foreach($discussion->replies as $reply)
                                            <li>
                                            
                                                <div class="msg-received msg-container">
                                                    <div class="avatar">
                                                       
                                                    <img class="m-l-10 rounded-circle mr-3" height="40px" width="40px" src="{{asset($reply->user->avatar)}}" alt=""> 
                                                       <div class="send-time">11.11 am</div>
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
                                                </div><!-- /.msg-received -->
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                        <form action="{{route('discussion.reply',['id' => $discussion->id])}}" method="post">
                                            {{csrf_field()}}

                                            <div class="send-mgs">
                                            <div class="yourmsg">
                                                <input class="form-control getinfo" name="content" type="text">
                                            </div>
                                            <button type="submit" class="postbutton btn msg-send-btn">
                                                <i class="pe-7s-paper-plane"></i>
                                            </button>
                                            <div class="writeinfo"></div>
                                        </div>

                                        </form>
                                        
                                    </div><!-- /.messenger-box -->
                                </div>
                            </div> <!-- /.card-body -->
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
@endsection

