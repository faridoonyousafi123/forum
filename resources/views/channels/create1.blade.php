@extends('layouts.header')
@section('content')
<div class="content">
                <div class="animated fadeIn">
                         <div class="row">
                             <div class="col-lg-6">

                                 <div class="card">
                            <div class="card-header">
                                <strong class="card-title">New Channel</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                      
                                        <form action="{{route('channels.store')}}" method="post" novalidate="novalidate">
                                          {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="title" class="control-label mb-1">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            
                                            
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-plus fa-md"></i>&nbsp;
                                                    <span id="payment-button-amount">Create</span>
                                                    <span id="payment-button-sending" style="display:none;">Saving…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->
                            </div>
                        </div>
                </div>
</div>

@endsection
