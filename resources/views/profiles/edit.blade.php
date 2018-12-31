@extends('layouts.header')
@section('content')
<div class="content">
<!-- Animated -->
<div class="animated fadeIn">
   <!-- Widgets  -->
   <div class="row">
      <div class="breadcrumbs">
         <div class="breadcrumbs-inner">
            <div class="row m-0 backColor">
               <div class="col-sm-4">
                  <div class="page-header foreColor float-left">
                     <div class="page-title">
                        <h1>Edit Profile</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 m-t-20">
         <div class="card">
            <div class="card-body arrangePadding card-block">
               <form action="{{route('profile.update')}}" method="post" class="form-inline" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="card-body card-block">
                     <div class="avatar-upload">
                        <div class="avatar-edit">
                           <input type='file' name="avatar" id="imageUpload" accept=".png, .jpg, .jpeg" />
                           <label for="imageUpload">
                           <i class="fas m-l-8 colorgrey m-t-6 fa-pencil-alt"></i>
                           </label>
                        </div>
                        <div class="avatar-preview">
                           <div id="imagePreview" style="background-image: url({{asset($user->avatar)}});">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-inline m-t-10">
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"> <i class="far m-r-3 fa-user"></i> Name *</label>
                        <input type="text"  name="name" validate required="true" value="{{$user->name}}" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="far m-r-3 fa-envelope"></i> Email *</label>
                        <input type="email" name="email" validate required="true" value="{{$user->email}}" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-5 fa-unlock-alt"></i> New Password</label>
                        <input type="password"  name="password" value="" class="form-control m-t-5">
                     </div>
                  </div>
                  @if(empty(Auth::user()->profile))
                  <div class="form-inline m-t-10">
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-twitter"></i> Twitter</label>
                        <input type="text"  name="twitter" validate  value="" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-github"></i> Github</label>
                        <input type="text"  name="github" validate  value="" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-facebook"></i> Facebook</label>
                        <input type="text" name="facebook" validate  value="" class="form-control m-t-5">
                     </div>
                  </div>
                  <div class="form-inline m-t-10">
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-suitcase"></i> Title</label>
                        <input type="text" name="title" validate  value="" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-city"></i>City</label>
                        <input type="text"  validate name="city" value="" class="form-control m-t-5">
                     </div>
                  </div>
                  <div class="card-body m-t-10 arrangePadding card-block">
                     <div class="form-group m-l-60 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-city"></i>About</label>
                        <textarea name="about" id="" cols="80"  class="form-control input-text" rows="10"></textarea>
                     </div>
                  </div>
            </div>

                  @else
                  <div class="form-inline m-t-10">
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-twitter"></i> Twitter</label>
                        <input type="text"  name="twitter" validate  value="{{$user->profile->twitter}}" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-github"></i> Github</label>
                        <input type="text"  name="github" validate  value="{{$user->profile->github}}" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fab m-r-3 fa-facebook"></i> Facebook</label>
                        <input type="text" name="facebook" validate  value="{{$user->profile->facebook}}" class="form-control m-t-5">
                     </div>
                  </div>
                  <div class="form-inline m-t-10">
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-suitcase"></i> Title</label>
                        <input type="text" name="title" validate  value="{{$user->profile->title}}" class="form-control m-t-5">
                     </div>
                     <div class="form-group m-l-80 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-city"></i>City</label>
                        <input type="text"  validate name="city" value="{{$user->profile->city}}" class="form-control m-t-5">
                     </div>
                  </div>
                  <div class="card-body m-t-10 arrangePadding card-block">
                     <div class="form-group m-l-60 m-b-10 edit-form-size"><label for="exampleInputName2" class="pr-1 m-l-3 item-justify-left form-control-label"><i class="fas m-r-3 fa-city"></i>About</label>
                        <textarea name="about" id="" cols="80"  class="form-control input-text" rows="10">{{$user->profile->about}}</textarea>
                     </div>
                  </div>
            </div>
            @endif
            <div class="card-footer flex-sb-m  fs-12 m-t-30 time-color">
            <div class="text-right">
            <button type="submit" class="hov-pointer" id="btn">
            Update
            </button>
            </div>
            </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection