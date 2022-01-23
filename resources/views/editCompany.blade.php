@extends('layout')
@section('content')
<div class="container">
    <div class="row" style="min-height:480px">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br><br>
            <h3 class="heading1">Update Company </h3>
            <form action="{{ route('updateCompany') }}" method="POST" enctype="multipart/form-data" >
            @csrf           
            @foreach($companies as $company)
                <div class="form-group">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" value="{{$company->companyName}}">   
                    <input type="hidden" name="companyID" id="companyID" value="{{$company->id}}">              
                </div>
                <div class="form-group">
                    <label for="companyLogo">Company Logo</label>
                    <img src="{{asset('images')}}/{{$company->companyLogo}}" alt="" class="img-fluid" width="100">
                    <input type="file" class="form-control" id="companyLogo" name="companyLogo" value="">                
                </div>
                <div class="form-group">
                    <label for="companySize">Company Size</label>
                    <input type="text" class="form-control" id="companySize" name="companySize" value="{{$company->companySize}}">                
                </div>
                <div class="form-group">
                    <label for="companyLocation">Company Location</label>
                    <textarea class="form-control" id="companyLocation" name="companyLocation" rows="3">{{$company->companyLocation}}</textarea>                      
                </div>
                <div class="form-group">
                    <label for="companyTelephone">Company Telephone</label>
                    <input type="text" class="form-control" id="companyTelephone" name="companyTelephone" value="{{$company->companyTelephone}}">                
                </div>
                <div class="form-group">
                    <label for="companyEmail">Company Email</label>
                    <input type="text" class="form-control" id="companyEmail" name="companyEmail" value="{{$company->companyEmail}}">                
                </div>
                <div class="form-group">
                    <label for="companyAdditionalInfo">Additional Information</label>
                    <textarea class="form-control" id="companyAdditionalInfo" name="companyAdditionalInfo" rows="5">{{$company->companyAdditionalInfo}}</textarea>                            
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
                <br><br>
                </form>
                <div class="col-sm-3"></div>
    </div>
</div>
</div>
@endsection