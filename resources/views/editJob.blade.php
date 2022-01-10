@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Job</h3>
        <form action="{{ route('updateJob') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($jobs as $job)
            <div class="form-group">
                <label for="jobName">Job Name</label>
                <input type="text" class="form-control" id="jobName" name="jobName" value="{{$job->name}}"> 
                <input type="hidden" name="jobID" id="jobID" value="{{$job->id}}">               
            </div>
            <div class="form-group">
                <label for="gender">Gender Required</label>
                <input type="text" class="form-control" id="gender" name="gender" value="{{$job->gender}}">                
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" name="position" value="{{$job->position}}">                
            </div>
            <div class="form-group">
                <label for="FP">Full Time/Part Time</label>
                <input type="text" class="form-control" id="FP" name="FP" value="{{$job->FullPart}}">                
            </div>
            <div class="form-group">
                <label for="skill">Skill Required</label>
                <input type="text" class="form-control" id="skill" name="skill" value="{{$job->skill}}">                
            </div>
            <div class="form-group">
                <label for="jobSalary">Job Salary</label>
                <input type="number" class="form-control" id="jobSalary" name="jobSalary" min="1000" value="{{$job->salary}}">                
            </div>
            <div class="form-group">
                <label for="numberOfHiring">Number of Hiring</label>
                <input type="number" class="form-control" id="numberOfHiring" name="numberOfHiring" min="1" value="{{$job->numberOfHiring}}">                
            </div>
            <div class="form-group">
                <label for="Tel">Contact Number</label>
                <input type="text" class="form-control" id="Tel" name="Tel" value="{{$job->Tel}}">                
            </div>
            <div class="form-group">
                <label for="jobImage">job Image</label>
                <img src="{{asset('images')}}/{{$job->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="jobImage" name="jobImage" value="">                
            </div>
            <div class="form-group">
                <label for="catID">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>                
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection