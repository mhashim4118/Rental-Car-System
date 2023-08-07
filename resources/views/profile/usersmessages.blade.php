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
                    <td>Name</td>
                    <td>Email</td>
                    <td>Subject</td>
                    <td>Message</td>
                  </tr>

                  <tr>
                    @foreach ($message as $item)
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->subject}}</td>
                    <td>{{$item->message}}</td>
                  </tr>
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