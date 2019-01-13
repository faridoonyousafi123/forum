@extends('layouts.header')
@section('content')
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
               <div class="card-header">
                  <strong class="card-title">Create a discussion</strong>
               </div>
               <div class="table-stats text-left order-table ov-h">
                  <div class="card-body">
                     <div class="col-lg-12">
                        <div class="card-body card-block">
                           <form action="{{route('discussion.update',['id' => $discussion_new->id])}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                           {{csrf_field()}}
                           
                            <div class="row form-group">
                                 <div class="col col-md-3"><label for="title" class=" form-control-label">Title</label></div>
                                 <div class="col-12 col-md-9"><input value="{{$discussion_new->title}}"name="title" id="title" class="form-control"></input></div>
                              </div>


                           <div class="row form-group">
                                 <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
                                 <div class="col-12 col-md-9">
                                    <select name="channel_id" id="select" class="form-control" value="{{$discussion_new->channel->title}}">
                                       @foreach($channels as $channel)
                                       <option value="{{$channel->id}}">{{$channel->title}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>

                             

                              <div class="row form-group">
                                 <div class="col col-md-3"><label for="content" class=" form-control-label">Ask a question</label></div>
                                 <div class="col-12 col-md-9"><textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$discussion_new->content}}</textarea></div>
                              </div>


                              <div class="col-lg-12 text-center">
                              <div class="test-center">
                           <button type="submit" class="btn btn-info btn-sm">
                           <i class="far fa-dot-circle"></i> Update
                           </button>
                           <button type="reset" class="btn btn-danger btn-sm">
                           <i class="fa fa-ban"></i> Reset
                           </button>
                        </div>
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