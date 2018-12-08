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
                                <strong class="card-title">Channels Index</strong>
                            </div>
                          
                            <div class="table-stats text-left order-table ov-h">
                            <div class="card-body">
                            <table id="bootstrap-data-table" class="table">
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

                                            <td class="text-left">
                                                
                                            
                                            <a href = "{{route('channels.edit',['channel'=>$channel->id])}}" ><span class="badge badge-complete"><i class="far fs-10 fa-edit"></i></span></a>
                                            </td>

                                            <td>
                                            <form action="{{route('channels.destroy',['channel'=>$channel->id])}}" method="post">
                                            {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button class="btn badge delete badge-completed" type="submit"><i class="fas fs-10 fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                      
                                        @endforeach
                                        
                                    </tbody>
                                    
                                </table>
                                
                            </div> <!-- /.table-stats -->
                        </div>
</div>
                    </div>
</div>
</div>
</div>
@endsection

