@php
$img = Helper::vehicle();
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
                            <form action="{{ route('vehicles_details.update', $item->id) }}" method="POST"
                                enctype="multipart/form-data" class="">
                                @csrf
                                @method('PUT')
                                @if ($item->id == $vehicledetail->id)
                                <div class="row">
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