@php
$vehi = Helper::booking();
// $loc = Helper::locationget();
// @dd($loc);
@endphp
@extends('layouts.admin-dash')
@section('content')
<div class="">
    <div class="container">
        <div class="text-center">
            <h4>Booking Status Editing Form:</h4>
        </div>
        @foreach ($vehi as $item)
        <form action="{{ route('booking-details.update', $item->id) }}" method="POST" enctype="multipart/form-data"
            class="">
            @csrf
            @method('PUT')
            @if ($item->id == $usersdetail->id)
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">Pending:</option>
                    <option value="Approved">Approved</option>
                    <option value="Decline">Decline</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary active">Update</button>
            @endif
        </form>
        @endforeach
        </div>
        </div>
        @endsection