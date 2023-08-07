@php
$img = Helper::vehicle();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehicles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    <style>
        /* a.btn.btn-success.v1{
            justify-content: end;
            float: right;
        } */
        .v1 {
            float: right;
        }

        .v2 {
            float: right;
        }

        .v3 {
            float: right;
        }

        .f1 {
            float: right;
        }
    </style>
</head>

<body>
    <x-header />
    <br><br><br><br><br><br>
    <button type="button" class="btn btn-info" data-toggle="dropdown" style="float: right">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i><span
            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
    </button>
    <div class="dropdown-menu" style="margin-right: 2%">
        <div class="row total-header-section">
            <div class="col-lg-6 col-sm-6 col-6">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
            </div>
            @php $total = 0 @endphp
            @foreach((array) session('cart') as $id => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
            @endforeach
            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
            </div>
        </div>
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        <div class="row cart-detail">
            {{-- <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                <img src="{{ Storage::url($details['image'])}}" />
            </div> --}}
            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                <p>{{ $details['model'] }}</p>
                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count">
                    Quantity:{{ $details['quantity'] }}</span>
            </div>
        </div>
        @endforeach
        @endif
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
            </div>
        </div>
    </div>
    {{-- <br><br><br><br><br><br> --}}
    <div class="container" style="margin-bottom: 12%;">
        <div class="row">
            <div class="col-8">
                <ul class="list-group" data-listing>
                    <div class="row">
                        @foreach ($img as $item)
                        <div class="col-4">
                            <div class="card">
                                <img src="{{ Storage::url($item->image) ? Storage::url($item->image) : asset('/images/logo.png') }}"
                                    class="card-img-top" alt="Car Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->model}}</h5>
                                    <p class="card-text">{{$item->description}}</p>
                                    <small class="text-muted">Price starting from ${{$item->price}}</small>
                                </div>
                                <div class="card-footer">
                                    {{-- <a href="/bookingform/{{$item->id}}" class="btn btn-success v1" target="_blank">Rent IT</a> --}}
                                    {{-- <a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-warning v1">Add To Cart</a> --}}
                                    <p class="btn-holder"><a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>


                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                </ul>
            </div>
            <div class="col-4">
                {{-- <label for="" class="">Model Available:</label>
                <br>
                <br>
                <select id="modellisting" onchange="filtersearch()" class="form-control">
                    <option value="">See Model:</option>
                    @foreach ($img as $item)
                    <option value="{{$item->model}}">{{$item->model}}</option>
                    @endforeach
                </select> --}}
            </div>
        </div>

        <script>
            $(function filtersearch() {
                        var x = document.getElementById("modellisting").value;
                                    
                                    $.ajax({
                                        alert('Hello from script');
                                    return false;
                                        url: '{{ route("filter") }}',
                                        method: "POST",
                                        data: {
                                            id: x
                                        },
                                        success: function(data) {
                                            $("#ans").html(data);
                                        }
                                    })
                    });
        </script>

        <br>



    </div>

    <br>
    <x-footer />
</body>

</html>