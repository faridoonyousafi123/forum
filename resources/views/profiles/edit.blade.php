@extends('layouts.header')
@section('content')
<div class="content">
   <!-- Animated -->
   <div class="animated fadeIn">
      <!-- Widgets  -->
      <div class="row">
         <div class="col-lg-12 col-md-6 col-sm-6 m-t-20">
             <div class="col-lg-12">
             <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Profile</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        
                                        
                                        <form action="#" method="post" novalidate="novalidate">
                                        <div class="avatar-upload">
        <div class="avatar-edit">
        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
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
                                            
                                            <div class="form-group">
                                                <label for="name" class="control-label mb-1">Name</label>
                                                <input id="cc-payment" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$user->name}}">
                                            </div>
                                            <div class="form-group has-success">
                                                <i class="fab fs-30  m-b-5 facebook-icon fa-facebook-square"></i>
                                                <input id="cc-name" name="facebook" type="text" value="{{$user->profile->facebook}}" class="form-control cc-name valid" data-val="true" data-val-required="Please enter Facebook URL" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                                <!-- <span class="help-block field-validation-valid" data-valmsg-for="facebook" data-valmsg-replace="true"></span> -->
                                            </div>

                                            <div class="form-group has-success">
                                            <i class="fab fs-30 twitter-icon m-b-5 fa-twitter"></i></i>
                                                <input id="cc-name" name="twitter" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter Twitter URL" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="twitter">
                                                <!-- <span class="help-block field-validation-valid" data-valmsg-for="twitter" data-valmsg-replace="true"></span> -->
                                            </div>

                                            <div class="form-group has-success">
                                                <i class="fab fs-30 m-b-5 fa-github"></i>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>

                                            <div class="form-group has-success">
                                                <i class="fab fs-30  facebook-icon fa-facebook-square"></i>
                                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                            
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Pay $100.00</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
         </div>
      </div>
   </div>
</div>
@endsection