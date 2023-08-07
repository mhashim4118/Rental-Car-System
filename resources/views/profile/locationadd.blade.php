@extends('layouts.admin-dash')
@section('content')
<div class="container mt-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    
                    <div class="card-body pl-5 pr-5"> 
                        <form action="/locationstore" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="location">Location Name:</label>
                                <input type="text" name="location" id="location" class="form-control" placeholder="Enter Your Location:">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary active">Add</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection