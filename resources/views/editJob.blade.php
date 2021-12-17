@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update job</h3>
        <form action="{{ route('updateJob') }}" method="POST" enctype="multipart/form-data" >
           @csrf
            <div class="form-group">
                <label for="jobName">Job Name</label>
                <input type="text" class="form-control" id="jobName" name="jobName">                
            </div>
            <div class="form-group">
                <label for="jobDescription">Job Desciption</label>
                <textarea type="text" class="form-control" id="jobDescription" name="jobDescription" rows="4" cols="50"></textarea>          
            </div>
            <div class="form-group">
                <label for="jobSalary">Job Salary</label>
                <input type="number" class="form-control" id="jobSalary" name="jobSalary" min="0">                
            </div>
            <div class="form-group">
                <label for="numberOfHiring">Number of Hiring</label>
                <input type="number" class="form-control" id="numberOfHiring" name="numberOfHiring" min="0">                
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
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection