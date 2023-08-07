@php
$img = Helper::email();
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
                            <form action="{{ route('email.update', $item->id) }}" method="POST"
                                enctype="multipart/form-data" class="">
                                @csrf
                                @method('PUT')
                                @if ($item->id == $email->id)
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter Your Title:" value="{{$item->title}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="from_name">From Name:</label>
                                    <input type="text" name="from_name" id="from_name" class="form-control"
                                        placeholder="Enter Your Organization Name:" value="{{$item->from_name}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="from_email">From Email:</label>
                                    <input type="text" name="from_email" id="from_email" class="form-control" placeholder="Enter Your Organization Email:"
                                    value="{{$item->from_email}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Email Subject:"
                                    value="{{$item->subject}}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="body">Body:</label>
                                {{-- <textarea name="body" id="body" cols="30" rows="10" class="form-control" value="{{$item->body}}"></textarea> --}}

                                <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control" placeholder="Enter Your Email Body:">{{$item->body}}</textarea>

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
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>