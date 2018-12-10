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
        
         <div class="m-t-30 col-lg-6 col-md-6 col-sm-12 fadeInEffect effect-show">
            <div class="card shadow-effect">
               <i class="fas fa-bookmark green fs-30"></i>
               <div class="text-right m-r-5 m-t-5">
                  <a href="{{route('discussion.edit',['id'=>$discussion->id])}}"><span class="badge dis-icon badge-complete"><i class="fas  noShow fs-16 fa-pencil-alt"></i></span></a>
                  <a href="{{route('discussion.destroy',['id'=>$discussion->id])}}"><span class="badge dis-icon badge-complete"><i class="fas noShow fs-16 fa-trash"></i></span></a>
               </div>
               
               <div class="card-body arrangePadding">
                  <div  class="stat-widget-five">
                     <div class="stat-icon dib flat-color-1 dis-flex">
                        <img src="{{asset($discussion->user->avatar)}}" id="author" class="discussion_creater" ></img>
                     </div>
                     
                     <div class="stat-content">
                        <div class="text-left dib">
                           <div class="stat-text"><span class="count discussion_title">{{str_limit($discussion->title,30)}}</span> 
                           </div>
                           
                           <div class="stat-heading m-b-10">{{str_limit($discussion->channel->title,50)}}
                           </div>

                        <a href="{{route('discussion.show',['slug'=>$discussion->slug])}}"><div class="col-lg-12  col-lg-6 col-md-12 arrange-content-padding">
                        <div class="card bg-warning colorChange">
                            <div class="card-body discuss-content">
                                <blockquote class="blockquote mb-0 text-light">
                                    <p class="text-light">{{str_limit($discussion->content,125)}}</p>
                                    <footer class="blockquote-footer text-light">By {{$discussion->user->name}}</footer>
                                </blockquote>
                            </div>
                        </div>
</a>
                    </div>
                        </div>
                     </div>
                  </div>
                  <div class="stat-heading fs-12 m-t-30 flex-col-sb time-color">
                     <div class="text-right">
                        <i class="fas fs-20 discuss-util fa-comments"></i><span class="m-l-6 stat-heading fs-10 time-color">11</span>
                        <i class="fas fs-20 discuss-util fa-thumbs-up"></i><span class="m-l-3 stat-heading fs-10 time-color">121</span>
                     </div>
                     {{$discussion->created_at->diffForHumans()}} 
                  </div>
                 
               </div>
            </div>
         </div>
        
         @endforeach
         <!-- /Widgets -->
      </div>
      <!-- .row -->
      <div class="text-right">
         {{$discussions->links()}}
      </div>
   </div>
</div>
<!-- /.content -->
</div>
<!-- /#right-panel -->
@endsection