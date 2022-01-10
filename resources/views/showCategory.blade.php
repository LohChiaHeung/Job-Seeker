@extends('layout')
@section('content')
<div class="container">
    <div class="row" style="min-height:500px">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="{{ route('deleteCategory',['id'=>$category->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br><br>
        </div>
        <div class="col-sm-3"></div>
        </div>
    </div>
</div>
@endsection