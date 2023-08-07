@php
$mail = Helper::email();
@endphp
@extends('layouts.admin-dash')
@section('content')
<div class="row">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <a href="/emailadd"><button class="btn btn-success mt-2" style="float:right">Add New Template</button></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td>Title</td>
                  <td>From Name</td>
                  <td>From Email</td>
                  <td>Subject</td>
                  <td>Action</td>
                </tr>
                @foreach ($mail as $item)
                <tr>
                  <td>{{$item->title}}</td>
                  <td>{{$item->from_name}}</td>
                  <td>{{$item->from_email}}</td>
                  <td>{{$item->subject}}</td>
                  <td class="de">
                    <a href="{{ route('email.edit', $item->id) }}" title="Edit"><i
                        class="fa fa-edit"></i></a>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i class="fa fa-trash"></i>
                    </a>
                    <!-- Modal -->

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