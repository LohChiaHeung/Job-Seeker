@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Comapny Image</td>
                        <td>Job Name</td>
                        <td>Job Description</td>
                        <td>Salary</td>
                        <td>Number of Hiring</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($wishlists as $wishlist)
                    <tr>
                        <td>{{$wishlist->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$wishlist->image}}" width="100" class="img-fluid" alt=""></td>
                        <td width="200">{{$wishlist->name}}</td>
                        <td>
                            Gender: {{$wishlist->gender}}<br>
                            Position: {{$wishlist->position}}<br>
                            {{$wishlist->FullPart}}<br>
                            Skill Required: {{$wishlist->skill}}<br>
                            Contact Number:{{$wishlist->Tel}}
                        </td>
                        <td>{{$wishlist->salary}}</td>
                        <td>{{$wishlist->numberOfHiring}}</td>
                        <!-- 2 -->
                        <td><a href="{{ route('delete.wishlist',['id'=>$wishlist->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>   
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection