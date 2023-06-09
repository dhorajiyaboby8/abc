
@extends('app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>User 
        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('detail')}}" class="btn btn-primary">add
                        User</a></li>
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
                                        <th>email</th>
                                        <th>hobby</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(  $data  as $detail)
                                    <tr>
                                    <input type="hidden" class="form_control" value="{{$detail->id}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$detail->name}}</td>
                                        <td>{{$detail->email}}</td>
                                        <td>{{$detail->hobby}}</td>
                                        <td><a href="{{'editdetail/'.$detail->id}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td><a href="{{'deletedetail/'.$detail->id}}" class="btn btn-danger">Delete</a></td>
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