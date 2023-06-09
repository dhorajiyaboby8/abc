@extends('app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Multiple Image Store
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('new2')}}" class="btn btn-primary">Add Image</a></li>
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
                                    <th> Name</th>
                                    <th>email</th>
                                    <th>image</th>
                                    <th>edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                     <td>   @foreach(explode(',', $row->filename) as $photo)<img src="{{url('files/'.$photo)}}" style="height:120px; width:150px"/> @endforeach
                                    </td>
                                    <td><a href="{{'editimage/'.$row->id}}" class="btn btn-success">edit</a>
                                    </td>
                                    <td><a href="{{'deleteimage/'.$row->id}}" class="btn btn-danger">Delete</a>
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