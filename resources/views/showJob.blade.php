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
                        <td>Job Description</td>
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
                        <td width="100">{{$job->name}}</td>
                        <td>
                            Gender: {{$job->gender}}<br>
                            Position: {{$job->position}}<br>
                            {{$job->FullPart}}<br>
                            Skill Required: {{$job->skill}}<br>
                            Contact Number:{{$job->Tel}}
                        </td>
                        <td>{{$job->salary}}</td>
                        <td>{{$job->numberOfHiring}}</td>
                        <td>{{$job->cName}}</td>
                        <!-- 2 -->
                        <td><a href="{{ route('editJob',['id'=>$job->id]) }}" class="btn btn-warning btn-sm" style="margin-bottom:5px;">Edit</a> <br> 
                        <a href="{{ route('deleteJob',['id'=>$job->id]) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete?')">Delete</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection