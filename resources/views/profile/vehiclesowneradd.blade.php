@php
$img = Helper::vehicleowner();
@endphp
@extends('layouts.admin-dash')
@section('content')
<div class="container mt-2">
    <div class="container">
        
            
                <div class="card">
                    
                    <div class="card-body"> 
                        <form action="/vehiclestore" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="ownership">Ownership:</label>
                                            <select name="ownership" id="ownership" class="form-control">
                                                <option value="">Select:</option>
                                                @foreach ($img as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="model">Model:</label>
                                <input type="text" name="model" id="model" class="form-control" placeholder="Enter Your Car Model:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="Enter Your Car Description:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="plate_no">Plate Number:</label>
                                <input type="text" name="plate_no" id="plate_no" class="form-control"
                                    placeholder="Enter Your Car Plate Number:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="engine_capacity">Engine Capacity:</label>
                                <input type="text" name="engine_capacity" id="engine_capacity" class="form-control"
                                    placeholder="Enter Your Car Engine Capacity:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="year_of_manufacture">Year of Manufacture:</label>
                                <input type="text" name="year_of_manufacture" id="year_of_manufacture" class="form-control"
                                    placeholder="Enter Your Car Year of manufacture:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Enter Your Car Fare:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="image">Select Image of Your Car:</label><br>
                                <input type="file" name="image" id="image"/>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary active">Add</button>
                        </form>
                    </div>

                </div>
           
        
    </div>
</div>
@endsection