@extends('layouts.header')
@section('content')
<div class="content">
            <!-- Animated -->
        <div class="animated fadeIn">
                <!-- Widgets  -->
      <div class="row">
      <div class="col-lg-10">
      
            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Channels</strong>
                            </div>
                          
                            <div class="table-stats text-center order-table ov-h">
                                <table class="table">
                                    <thead>
                                        
                                        <tr>
                                            
                                            <th></th>
                                            <th>Title</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                  
                                    </thead>
                                    <tbody>
                                    @foreach($channels as $channel)
                                        <tr>
                                            <td> <a href = "{{route('channels.create')}}" ><button class="btn btn-sm btn-info"><i class="fas fa-plus"</i></button></a></td>
                                            <td>{{$channel->title}}</td>

                                            <td>
                                                <a href = "{{route('channels.edit',['channel'=>$channel->id])}}" ><span class="badge badge-complete"><i class="far fs-10 fa-edit"></i></span></a>
                                            </td>

                                            <td>
                                                <a href = "{{route('channels.destroy',['channel'=>$channel->id])}}" ><span class="badge delete badge-completed"><i class="fas fs-10 fa-trash-alt"></i></span></a>
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
@endsection

