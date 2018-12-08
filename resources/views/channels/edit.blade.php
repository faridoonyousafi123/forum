@extends('layouts.header')
@section('content')
<div class="content">
            <!-- Animated -->
        <div class="animated fadeIn">
                <!-- Widgets  -->
      <div class="row">
      <div class="col-lg-12">
      <div class="m-b-10">
            <a href="{{route('channels.create')}}" class="badge badge-complete">Create new Channel</a>
        </div>
      
            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Channels Edit</strong>
                            </div>
                          
                            <div class="table-stats text-center order-table ov-h">
                                <table class="table">
                                    <thead>
                                        
                                        <tr>
                                            
                                            
                                            <th>Title</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                  
                                    </thead>
                                    <tbody>
                                    

                                       <tr>
                                            
                                            <td>

                                                    
                                          <div class="col md 6">
                                              
                                          <form action="{{ route('channels.update',['channel'=>$channel_by_id->id]) }}" method="post">
                                          {{csrf_field()}}

                                          {{method_field('PUT')}}
                                          

                                          <div class="form-group text-left dis-flex">
                                              
                                             <input id="title" value = "{{$channel_by_id->title}}" placeholder ="New Channel" autofocus="true" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                             <a href = "{{url('/channels')}}" ><span class=" m-l-10 badge badge-pending"><i class="far fs-15 fa-times-circle"></i></span></a>
                                             </div>
                                             
                                      
                                        </form>
                                            </td>
                                         </tr>
                                         @foreach($channels as $channel)

                                          <tr>
                                            <td>{{$channel->title}}</td>

                                            <td>
                                                <a href = "{{route('channels.edit',['channel'=>$channel->id])}}" ><span class="badge badge-complete"><i class="far fs-10 fa-edit"></i></span></a>
                                            </td>

                                           <td>
                                            <form action="{{route('channels.destroy',['channel'=>$channel->id])}}" method="DELETE">
                                                {{csrf_field()}}
                                                
                                                <button class="btn badge delete badge-completed" type="submit"><i class="fas fs-10 fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                      
                                          
                                     @endforeach
                                          </div>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
</div>
</div>
</div>
@endsection

