@extends('layouts.header')
@section('content')
<!-- Breadcrumbs-->
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0 backColor">
                    <div class="col-sm-4">
                        <div class="page-header foreColor float-left">
                            <div class="page-title">
                                <h1>Discussions</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.breadcrumbs-->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">

                      <!-- /Widgets -->
                    @foreach($discussions as $discussion)
                    <div class=" m-t-30 col-lg-3 col-md-6">
                    
                        <div class="card">
                        <i class="fas fa-bookmark green fs-30"></i>
                        <div class="text-right m-r-5 m-t-5">
                                             <a><span class="badge dis-icon badge-complete"><i class="fas  noShow fa-pencil-alt"></i></span></a>
                                            <a href="{{route('discussion.destroy',['id'=>$discussion->id])}}"><span class="badge dis-icon badge-complete"><i class="fas noShow fa-trash"></i></span></a>
                                           
                                     </div>
                            <div class="card-body">
                                <div  class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                       <img id="author" class="discussion_creater" src="{{asset('avatars\admin.jpg')}}"></img>
                                       
                                    </div>
                                 
                                    <div class="stat-content">
                                    
                                        <div class="text-left dib">
                                  
                                            <div class="stat-text"><span class="count discussion_title">{{$discussion->title}}</span> 
                                           </div>
                                            <div class="stat-heading">Channel</div>
                                            <span class="stat-heading"> By Faridoon Yousafi</span>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="stat-heading fs-12 m-t-30 time-color">{{$discussion->created_at->diffForHumans()}} 
                                <i class="fas fs-20 m-l-150 fa-comments"></i><span class="m-l-3 stat-heading fs-10 time-color">11</span>
                                <i class="fas fs-20 m-l-30 fa-thumbs-up"></i><span class="m-l-3 stat-heading fs-10 time-color">11</span>
                               
                                </div> 
                                
                                <a href="" id="buttonEnter" class="btn colorBtn btn-success btn-sm flex-c-b m-t-30"><i class="fas fs-20 fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                    </div>
                  @endforeach
            
                <!-- /Widgets -->
                
                 


             

              




                    

                    
               
                    



                   
                </div><!-- .row -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
            </div>
    <!-- /#right-panel -->
@endsection