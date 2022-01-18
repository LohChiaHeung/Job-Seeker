@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br><br>
            <h3 class="heading1">Create New job</h3>
            <form action="{{ route('storeJob') }}" method="POST" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="jobName">Job Name</label>
                    <input type="text" class="form-control" id="jobName" name="jobName">                
                </div>
                <div class="form-group">
                    <label for="gender">Gender Required</label>
                    <input type="text" class="form-control" id="gender" name="gender">                
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control" id="position" name="position">                
                </div>
                <div class="form-group">
                    <label for="FP">Full Time/Part Time</label>
                    <input type="text" class="form-control" id="FP" name="FP">                
                </div>
                <div class="form-group">
                    <label for="skill">Skill Required</label>
                    <textarea class="form-control" id="skill" name="skill" rows="3"></textarea>             
                </div>
                <div class="form-group">
                    <label for="jobSalary">Job Salary</label>
                    <input type="number" class="form-control" id="jobSalary" name="jobSalary" min="1000">                
                </div>
                <div class="form-group">
                    <label for="numberOfHiring">Number of Hiring</label>
                    <input type="number" class="form-control" id="numberOfHiring" name="numberOfHiring" min="1">                
                </div>
                <div class="form-group">
                    <label for="Tel">Contact Number</label>
                    <input type="text" class="form-control" id="Tel" name="Tel">                
                </div>
                <div class="form-group">
                    <label for="companyImage">Company Image(Logo)</label>
                    <input type="file" class="form-control" id="companyImage" name="companyImage">                
                </div>
                <div class="form-group">
                    <label for="catID">Category</label>
                    <select name="CategoryID" id="CategoryID" class="form-control">
                        @foreach($categoryID as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>                
                </div>
                <button type="submit" class="btn btn-primary">Add New</button>
            </form>
            <br><br>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
<style>
.heading1 {
    font-size:38px;
}
</style>