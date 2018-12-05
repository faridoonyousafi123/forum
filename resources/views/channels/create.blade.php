@extends('layouts.header')
@section('content')
<div class="content">
            <!-- Animated -->
        <div class="animated fadeIn">
                <!-- Widgets  -->
      <div class="row">
      <div class="col-lg-12">
      
            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Channels</strong>
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
                                          <form action="{{route('channels.store')}}" method="post" novalidate="novalidate">
                                          {{csrf_field()}}
                                          <div class="form-group text-left dis-flex">
                                              
                                             <input id="title" placeholder ="New Channel" autofocus="true" name="channel" type="text" class="form-control" aria-required="true" aria-invalid="false" >
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
                                                <a href = "{{route('channels.destroy',['channel'=>$channel->id])}}" ><span class="badge delete badge-completed"><i class="fas fs-10 fa-trash-alt"></i></span></a>
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

