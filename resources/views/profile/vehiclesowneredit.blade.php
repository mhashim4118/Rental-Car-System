@php
$img = Helper::vehicleowner();
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
                            @foreach ($img as $item)
                            <form action="{{ route('vehiclesowner.update', $item->id) }}" method="POST"
                                enctype="multipart/form-data" class="">
                                @csrf
                                @method('PUT')
                                @if ($item->id == $vehicleOwner->id)
                                <div class="row">
                                    <div class="form-group">
                                        <label for="model">Car Model:</label>
                                        <input type="text" name="model" id="model" class="form-control" placeholder="Enter Owner Name:"
                                        value="{{$item->model}}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="plate_no">Plate No:</label>
                                        <input type="text" name="plate_no" id="plate_no" class="form-control"
                                            placeholder="Enter owner phone:" value="{{$item->plate_no}}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="engine_capacity">Engine Capacity:</label>
                                        <input type="number" name="engine_capacity" id="engine_capacity" class="form-control" placeholder="Enter owner email:"
                                        value="{{$item->engine_capacity}}">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="year_of_manufacture">Year of Manufacture:</label>
                                        <input type="number" name="year_of_manufacture" id="year_of_manufacture" class="form-control" placeholder="Enter owners residense city:"
                                        value="{{$item->year_of_manufacture}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary active">Update</button>
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