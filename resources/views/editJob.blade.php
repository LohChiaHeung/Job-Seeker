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
                    <label for="companyName">Company Name</label>
                    <select name="CompanyID" id="CompanyID" class="form-control" value="">
                        @foreach($companyID as $company)
                            <option value="{{$company->id}}" <?php if($job->CompanyID == $company->id) { ?> selected="selected"<?php } ?>>{{$company->companyName}}</option>
                        @endforeach
                    </select>               
                </div>
                <div class="form-group">
                    <label for="gender">Gender Required</label>
                    <select selected="{{$job->gender}}" name="gender" id="gender" class="form-control">
                        <option value="Male" <?php if($job->gender == 'Male') { ?> selected="selected"<?php } ?>>Male</option>
                        <option value="Female"  <?php if($job->gender == 'Female') { ?> selected="selected"<?php } ?>>Female</option>
                        <option value="Any"  <?php if($job->gender == 'Any') { ?> selected="selected"<?php } ?>>Any</option>
                    </select>           
                </div>
                <div class="form-group">
                    <label for="FP">Full Time/Part Time</label>
                    <select name="FP" id="FP" class="form-control" value="{{$job->FullPart}}">
                        <option value="Full Time" <?php if($job->FullPart == 'Full Time') { ?> selected="selected"<?php } ?>>Full Time</option>
                        <option value="Part Time" <?php if($job->FullPart == 'Part Time') { ?> selected="selected"<?php } ?>>Part Time</option>
                    </select>
                </div>
            <div class="form-group">
                <label for="skill">Skill Required</label>
                <textarea class="form-control" id="skill" name="skill" rows="3">{{$job->skill}}</textarea>                
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
                <label for="catID">Category</label>
                <select name="CategoryID" id="CategoryID" class="form-control">
                    @foreach($categoryID as $category)
                        <option value="{{$category->id}}" <?php if($job->CategoryID == $category->id) { ?> selected="selected"<?php } ?>>{{$category->name}}</option>
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