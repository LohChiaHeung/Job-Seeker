@extends('layout')
@section('content')
<div class="container fluid mx-10">
    <div class="row mb-3" style="min-height:480px">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="mt-3">Jobs Available</h3>
            <br><br>
            <h4>Sorry, No Result Found.</h4>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection 

<style>
.card.p-2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  background-color:skyblue;
}

.card.p-2:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  background-color:00ffff;
}

.card-title {
    font-family:sans-serif;
    font-size:25px;
}
</style>
   
