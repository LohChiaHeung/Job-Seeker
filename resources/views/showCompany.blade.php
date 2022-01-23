@extends('layout')
@section('content')
<div class="container">
    <div class="row" style="min-height:500px">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Company ID</td>
                            <td>Company Logo</td>
                            <td>Company Name</td>
                            <td>Company Information</td>
                            <td>Additional Information</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td><img src="{{ asset('images/') }}/{{$company->companyLogo}}" width="150" height="110" class="img-fluids" alt=""></td>
                            <td width="100">{{$company->companyName}}</td>
                            <td>
                            Company Location:<br>{{$company->companyLocation}} <br>
                            Company Size:    {{$company->companySize}}<br>
                            Company :{{$company->companyTelephone}} <br>
                            Company Email:{{$company->companyEmail}}
                            </td>
                            <td>{{$company->companyAdditionalInfo}}</td>
                            <!-- 2 -->
                            <td>
                            <a href="{{ route('editCompany',['id'=>$company->id]) }}" class="btn btn-warning btn-sm" style="margin-bottom:5px;">Edit</a> <br> 
                            <a href="{{ route('deleteCompany',['id'=>$company->id]) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <br><br>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection

<style>
.img-fluids {
    width:100px;
    height:100px;
}
</style>