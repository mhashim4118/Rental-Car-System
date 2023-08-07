@extends('layouts.admin-dash')
@section('content')
    <div class="container mt-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mt-2">
                        <div class="card-body pl-5 pr-5">
                            <form action="/changesetting" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        placeholder="Enter Your Logo Title:">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="logo">Select Image of Your Logo:</label><br>
                                    <input type="file" name="logo" id="logo" />
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary active">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection