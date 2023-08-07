@extends('layouts.admin-dash')
@section('content')
<div class="container mt-2">
    <div class="container">
        
            
                <div class="card">
                    
                    <div class="card-body"> 
                        <form action="/emailstore" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Your Title:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="from_name">From Name:</label>
                                <input type="text" name="from_name" id="from_name" class="form-control"
                                    placeholder="Enter Your Organization Name:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="from_email">From Email:</label>
                                <input type="text" name="from_email" id="from_email" class="form-control" placeholder="Enter Your Organization Email:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Your Email Subject:">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" id="body" cols="30" rows="10" class="ckeditor form-control" placeholder="Enter Your Email Body:"></textarea>
                                {{-- <input type="text" name="body" id="body" class="form-control" placeholder="Enter Your Email Body:"> --}}
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary active">Add</button>
                        </form>
                    </div>

                </div>
                <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
        
    </div>
</div>
@endsection