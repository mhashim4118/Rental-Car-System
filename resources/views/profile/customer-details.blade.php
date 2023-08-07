@php
$vehi = Helper::booking();
$loc = Helper::locationget();
// @dd($loc);
@endphp
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@extends('layouts.admin-dash')
@section('content')
<div class="row">
  <div class="container-fluid">
    <div class="row mt-2">
      <div class="col">
        <div class="card mt-5">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td>S/n.</td>
                  <td>Model</td>
                  <td>Choice</td>
                  <td>Location From</td>
                  <td>Location to</td>
                  <td>Date From</td>
                  <td>Date To</td>
                  <td>Status</td>
                  <td>Payment Method</td>
                  <td>Payment Status</td>
                </tr>
                <tr>
                  @php
                  $i=1;
                  @endphp
                  @foreach ($booking as $item)
                  <td>{{$i++}}</td>
                  <td>{{$item->model}}</td>
                  <td>{{$item->choice}}</td>
                 <td>{{$item->location_from}}</td>
                  <td>{{$item->location_to}}</td>
                  <td>{{$item->date_from}}</td>
                  <td>{{$item->date_to}}</td>
                <td><button class="rounded-pill btn-<?php if($item->status=="Approved"){echo 'success' ;}
                      elseif($item->status=="Decline"){echo 'danger';} else{echo
                      'secondary';}?>">{{$item->status}}</button></td>
                  <td>{{$item->payment}}</td>
                  <td>
                    {{$item->payment_status}}
                  </td>
                </tr>
                {{-- {{ $vehi->links() }} --}}
                @endforeach
              </table>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection