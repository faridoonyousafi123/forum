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
                        <div class="card sizeChange">
                        <div class="text-right m-r-5 m-t-5">
                                             <a><span class="badge dis-icon badge-complete"><i class="fas  noShow fa-pencil-alt"></i></span></a>
                                            <a><span class="badge dis-icon badge-complete"><i class="fas noShow fa-trash"></i></span></a>
                                           
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
                                            <div class="stat-heading">{{$discussion->created_at->diffForHumans()}}  <span> By Faridoon Yousafi</span></div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <a href="" id="buttonEnter" class="btn colorBtn btn-success btn-sm flex-c-b m-t-30">Enter Discussion</a>
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