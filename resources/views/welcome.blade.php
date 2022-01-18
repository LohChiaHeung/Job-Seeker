@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <img src="{{ asset('images/job_search.png')}}" alt="bgimages" class="img-fluid" width=100%  > 
            </div>                    
        </div>
                
        <p class="Titles">Jobs Careers  </p>
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-4" style="text-align: center;">
                <img src="{{ asset('images/Accountant.jpg')}}" width=500 alt="" class="img-fluids" > 
                <p class="texts">Accountant</p>
            </div>
             <div class="col-sm-4" style="text-align: center">
                <img src="{{ asset('images/IT.jpg')}}" width=500 alt="" class="img-fluids"> 
                <p class="texts">IT Developer</p>           
            </div>
            <div class="col-sm-4" style="text-align: center" >
                <img src="{{ asset('images/Artist.jpg')}}" width=500 alt="" class="img-fluids" > 
                <p class="texts">Artist</p>
            </div>                
        </div>
    </div>
@endsection
<style>
.img-fluids {
    width:500px;
    height:350px;
}

.texts {
    font-family:"Times New Roman", Times, serif;
    font-size:25px;
}

.Titles {
    font-size:40px;
    font-weight: bold;
    text-align:center;
}
</style>