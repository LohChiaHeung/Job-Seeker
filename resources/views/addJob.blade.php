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
                    <label for="companyName">Company Name</label>
                    <select name="CompanyID" id="CompanyID" class="form-control">
                        @foreach($companyID as $company)
                            <option value="{{$company->id}}">{{$company->companyName}}</option>
                        @endforeach
                    </select>             
                </div>
                <div class="form-group">
                    <label for="gender">Gender Required</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Any">Any</option>
                    </select>           
                </div>
                <div class="form-group">
                    <label for="FP">Full Time/Part Time</label>
                    <select name="FP" id="FP" class="form-control">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="skill">Skill Required</label>
                    <textarea class="form-control" id="skill" name="skill" rows="3"></textarea>             
                </div>
                <div class="form-group">
                    <label for="jobSalary">Job Salary</label>
                    <input type="number" class="form-control" id="jobSalary" name="jobSalary" min="1000" placeholder="Min 1000">                
                </div>
                <div class="form-group">
                    <label for="numberOfHiring">Number of Hiring</label>
                    <input type="number" class="form-control" id="numberOfHiring" name="numberOfHiring" min="1">                
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