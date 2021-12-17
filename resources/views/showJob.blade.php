@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Comapny Image</td>
                        <td>Job Name</td>
                        <td>Job Desciption</td>
                        <td>Salary</td>
                        <td>Number of Hiring</td>
                        <td>Category</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{$job->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$job->image}}" width="100" class="img-fluid" alt=""></td>
                        <td>{{$job->name}}</td>
                        <td>{{$job->description}}</td>
                        <td>{{$job->salary}}</td>
                        <td>{{$job->hiring}}</td>
                        <td>{{$job->cName}}</td>
                        <!-- 2 -->
                        <td><a href="{{ route('editjob',['id'=>$job->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deletejob',['id'=>$job->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection