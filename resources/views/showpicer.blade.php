
@extends('app')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Members 
        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('select')}}" class="btn btn-primary">add
                        member</a></li>
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
                                    @foreach(  $data  as $product)
                                    <tr>
                                    <input type="hidden" class="form_control" value="{{$product->id}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->email}}</td>
                                        <td>{{$product->hobby}}</td>
                                        <td><a href="{{'editselect/'.$product->id}}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td><button type="button" class="btn btn-danger">Delete</a></td>
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