@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <br><br>
            <h3 class="heading1">Create New Company</h3>
            <form action="{{ route('storeCompany') }}" method="POST" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName">                
                </div>
                <div class="form-group">
                    <label for="companyLogo">Company Logo</label>
                    <input type="file" class="form-control" id="companyLogo" name="companyLogo">                
                </div>
                <div class="form-group">
                    <label for="companySize">Company Size</label>
                    <input type="text" class="form-control" id="companySize" name="companySize">                
                </div>
                <div class="form-group">
                    <label for="companyLocation">Company Location</label>
                    <textarea class="form-control" id="companyLocation" name="companyLocation" rows="3"></textarea>                      
                </div>
                <div class="form-group">
                    <label for="companyTelephone">Company Telephone</label>
                    <input type="text" class="form-control" id="companyTelephone" name="companyTelephone">                
                </div>
                <div class="form-group">
                    <label for="companyEmail">Company Email</label>
                    <input type="text" class="form-control" id="companyEmail" name="companyEmail">                
                </div>
                <div class="form-group">
                    <label for="companyAdditionalInfo">Additional Information</label>
                    <textarea class="form-control" id="companyAdditionalInfo" name="companyAdditionalInfo" rows="5"></textarea>                            
                </div>
                <button type="submit" class="btn btn-primary">Add New Company</button>
                <br><br>
                </form>
                <div class="col-sm-3"></div>
    </div>
</div>
</div>
@endsection