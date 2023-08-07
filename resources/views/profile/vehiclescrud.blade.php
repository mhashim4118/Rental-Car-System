@php
$img = Helper::vehicle();
$owner = Helper::vehicleowner();
@endphp
@extends('layouts.admin-dash')
@section('content')
<div class="row">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <a href="/vehiclesadd"><button class="btn btn-success mt-2" style="float:right">Add Vehicle</button></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td>Ownership</td>
                  <td>Model</td>
                  {{-- <td>Description</td> --}}
                  <td>Fare</td>
                  <td>Plate Number</td>
                  <td>Engine Capacity</td>
                  <td>Year of Manufacture</td>
                  <td>Action</td>
                </tr>
                @foreach ($img as $item)
                <tr>
                  <td>{{$item->owner_id}}</td>
                  <td>{{$item->model}}</td>
                  {{-- <td>{{$item->description}}</td>/ --}}
                  <td>${{$item->price}}</td>
                  <td>{{$item->plate_no}}</td>
                  <td>{{$item->engine_capacity}}</td>
                  <td>{{$item->year_of_manufacture}}</td>
                  <td class="de">
                    <a href="{{ route('vehicles_details.edit', $item->id) }}" title="Edit"><i
                        class="fa fa-edit"></i></a>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting Record:</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete the record?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary active" data-bs-dismiss="modal">No</button>
          <form action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger active">Yes</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<script>
  $('#deleteModal').on('shown.bs.modal', function () {
          $('#deleteForm').trigger('focus')
      })
</script>