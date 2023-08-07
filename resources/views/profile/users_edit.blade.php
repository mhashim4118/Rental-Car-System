@php
$vehi = Helper::userstatus();

$loc = Helper::locationget();
// @dd($loc);
@endphp
@extends('layouts.admin-dash')
@section('content')
<div class="container mt-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    {{-- @method('PUT') --}}

                    <div class="card-body pl-5 pr-5">

                        {{--<div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="model">Model:</label>
                                    <input type="text" name="model" id="model" class="form-control"
                                        placeholder="Enter Your Car Model:" value="{{$item->model}}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="number" name="price" id="price" class="form-control"
                                        placeholder="Enter Your Car Fare:" value="{{$item->price}}">
                                </div>
                            </div>
                        </div>--}}
                        <div class="container" style="padding-top: 7%;
    padding-bottom: 17%;">

                            <div class="">
                                <div class="container">
                                    <div class="text-center">
                                        <h4>Users Editing Form:</h4>
                                    </div>
                                    @foreach ($vehi as $item)
                                    <form action="{{ route('users_details.update', $item->id) }}" method="POST"
                                        enctype="multipart/form-data" class="">
                                        @csrf
                                        @method('PUT')
                                        @if ($item->id == $usersdetail->id)
                                        <div class="form-group">
                                            <label for="name">Full Name:</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Enter Your full name:" value="{{$item->name}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="phone">Phone number:</label>
                                            <input type="number" name="phone" id="phone" class="form-control"
                                                placeholder="Enter Phone number:" value="{{$item->phone}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="Enter your email:" value="{{$item->email}}">
                                        </div>
                                        {{-- <br> --}}
                                        {{-- <div class="form-group">
                                            <label for="choice">Choice:</label>
                                            <select name="choice" id="choice" class="form-control">
                                                <option value="">Select:</option>
                                                <option value="With_In_City">With-In-City</option>
                                                <option value="Out_of_City">Out-of-City</option>
                                            </select>
                                        </div> --}}
                                        {{-- <br> --}}
                                        {{-- <div class="form-group">
                                            <label for="model">Car Model:</label>

                                            <select name="model" id="model" class="form-control">
                                                <option value="">Select:</option>
                                                @foreach ($vehi as $item)
                                                <option value="{{$item->model}}">{{$item->model}}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        {{-- <br> --}}
                                        {{-- <div class="form-group">
                                            <label for="location_from">Location From:</label>
                                            <select name="location_from" id="location_from" class="form-control">
                                                <option value="">Select:</option>
                                                @foreach ($loc as $item)
                                                <option value="{{$item->location}}">{{$item->location}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="location_to">Location To:</label>
                                            <select name="location_to" id="location_to" class="form-control">
                                                <option value="">Select:</option>
                                                @foreach ($loc as $item)
                                                <option value="{{$item->location}}">{{$item->location}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group" bis_skin_checked="1">
                                            <label for="date_from">Time from:</label>
                                            <input type="date" class="form-control" id="date_from"
                                                value="{{$item->date_from}}" name="time_from">
                                        </div>
                                        <br>
                                        <div class="form-group" bis_skin_checked="1">
                                            <label for="date_to">Time To:</label>
                                            <input type="date" class="form-control" id="date_to"
                                                value="{{$item->date_to}}" name="time_to">
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="status">Status:</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="">Pending:</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Decline">Decline</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary active">Update</button>
                                </div>
                            </div>
                        </div>
                        
                        @endif
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection