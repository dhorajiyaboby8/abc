@extends('app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Video list
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('index_u')}}" class="btn btn-primary">add video</a></li>
            </ol>
        </h2>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->lname}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>
                                        <video width="320" height="240" autoplay muted>
                                            <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
                                        </video>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection