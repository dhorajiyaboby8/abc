@extends('app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Song list
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('index_music')}}" class="btn btn-primary">add Song</a></li>
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
                                    <th>Singer Name</th>
                                    <th>Movie</th>
                                    <th>Song Name</th>
                                    <th>Song Type</th>
                                    <th>Song</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->singername}}</td>
                                    <td>{{$row->movie}}</td>
                                    <td>{{$row->songname}}</td>
                                    <td>{{$row->songtype}}</td>
                                    <td><audio controls>
                                            <source src="/audiomusic/{{$row->song}}" type="audio/mpeg">
                                        </audio></td>
                                        <td><a href="{{'deletemusic/'.$row->id}}" class="btn btn-danger">Delete</a>
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