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
                            <hr>
                            <footer class="twt-footer">
                            <div class="row">
                    

                    <div class="col-lg-12">
                      
                            <div class="card-body">
                                <h4 class="card-title box-title">Comments</h4>
                                <div class="card-content">
                                    <div class="messenger-box">
                                        <ul>
                                            <li>
                                            @foreach($discussion->replies as $reply)
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
                                                <input class="form-control" name="content" type="text">
                                            </div>
                                            <button type="submit" class="btn msg-send-btn">
                                                <i class="pe-7s-paper-plane"></i>
                                            </button>
                                        </div>

                                        </form>
                                        
                                    </div><!-- /.messenger-box -->
                                </div>
                            </div> <!-- /.card-body -->
                        
                    </div>
                </div>
                            </footer>
                        </section>
                    
</div>
</div>
</div>
@endsection

