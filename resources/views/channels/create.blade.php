@extends('layouts.header')
@section('content')
<div class="content">
            <!-- Animated -->
        <div class="animated fadeIn">
                <!-- Widgets  -->
      <div class="row">
      <div class="col-lg-10">
      <div class="m-b-20 m-l-20">
      </div>
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

                                       <tr>
                                            
                                            <td>

                                                    
                                          <div class="col md 6">
                                          <form action="{{route('channels.store')}}" method="post" novalidate="novalidate">
                                          {{csrf_field()}}
                                          <div class="form-group text-left">
                                              <label for="title" class="text-left">Create new Channel</label>
                                             <input id="title" autofocus="true" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                             </div>
                                             <a href = "{{url('/channels')}}" ><span class="badge badge-pending"><i class="far fs-15 fa-times-circle"></i></span></a>
                                      
                                        </form>
                                            </td>
                                         </tr>
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

