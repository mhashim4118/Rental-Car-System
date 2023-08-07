@php
$vehi = Helper::vehicle();
$loc = Helper::locationget();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        <script src="jquery-3.6.4.min.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <style>
        .booking {
            font-family: 'Montserrat', sans-serif;
            /* background-image: url('images/i1.jpeg'); */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<x-header />

<body>
    <x-header />
    {{--First div starting from here--}}
    
    <div class="container booking" style="padding-top: 7%;
    padding-bottom: 17%;max-width: inherit;">
        <div class="">
            <div class="dropdown" style="margin-left: 54%;
            margin-bottom: 1%;">
                <button class="btn btn-dark dropdown-toggle" type="button" id="languageDropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Language
                </button>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="/en/booking">ENGLISH</a>
                    <a class="dropdown-item" href="/hi/booking">HINDI</a>
                    <a class="dropdown-item" href="/ko/booking">KOREAN</a>
                    <a class="dropdown-item" href="/sp/booking">SPANISH</a>
                </div>
            </div>
            <div class="container" style="width: fit-content;">
                <div class="form-header text-center" style="background: linear-gradient(45deg, black, transparent);">
                    <h1 style="color:white">{{__('booking.heading1')}}</h1>
                </div>
                
                <form action="/user_details" method="POST" id="myForm" class="require-validation"
                    data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" name="form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group name">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="{{__('booking.field1')}}" value="{{ old('name') }}"
                                    onkeyup="lookup(this);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone"></label>
                                <input type="number" name="phone" id="phone" class="form-control"
                                    placeholder="{{__('booking.field2')}}" value="{{ old('phone') }}"
                                    onkeyup="lookup(this);">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="{{__('booking.field3')}}" value="{{ old('email') }}" onkeyup="lookup(this);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="choice"></label>
                                <select class="form-control" name="choice" id="choice" onchange="lookup(this);">
                                    <option value="">{{__('booking.field4')}}</option>
                                    <option value="With_In_City">With-In-City</option>
                                    <option value="Out_of_City">Out-of-City</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="model"></label>
                            <select name="model" id="model" class="form-control" onchange="lookup(this);">
                                <option value="">{{__('booking.field5')}}</option>
                                @foreach ($vehi as $item)
                                <option value="{{$item->id}}">{{$item->model}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="location_from"></label>
                                <select name="location_from" id="location_from" class="form-control"
                                    onchange="lookup(this);">
                                    <option value="">{{__('booking.field6')}}</option>
                                    @foreach ($loc as $item)
                                    <option value="{{$item->location}}">{{$item->location}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="location_to"></label>
                                <select name="location_to" id="location_to" class="form-control"
                                    onchange="lookup(this);">
                                    <option value="">{{__('booking.field7')}}</option>
                                    @foreach ($loc as $item)
                                    <option value="{{$item->location}}">{{$item->location}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group" bis_skin_checked="1">
                                <label for="date_from"></label>
                                <input type="date" class="form-control" id="date_from" value="" name="time_from"
                                    onchange="lookup(this);">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" bis_skin_checked="1">
                                <label for="date_to"></label>
                                <input type="date" class="form-control" id="date_to" value="" name="time_to"
                                    onchange="lookup(this);">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payment"></label>
                        <select name="payment" id="payment" class="form-control" onchange="lookup(this);">
                            <option value="">{{__('booking.field8')}}</option>
                            <option value="cash">Cash</option>
                            <option value="online">Online Payment</option>
                        </select>
                    </div>

                    <div id="onlinepayment" style="display: none;">

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label for="name_on_card"></label>
                                <input type="text" class="form-control" id="name_on_card" value="" name="name_on_card"
                                    placeholder="Name on Card:">
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label for="card_number"></label>
                                <input type="number" class="form-control card-number" id="card_number" value=""
                                    name="card_number" placeholder="Card Number:">
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label for="cvv"></label>
                                <input type="number" class="form-control card-cvc" id="cvv" value="" name="cvv"
                                    placeholder="CVV:">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label for="expiration_month"></label>
                                <input type="number" class="form-control card-expiry-month" id="expiration_month"
                                    value="" name="expiration_month" placeholder="Expiration Month:">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label for="expiration_year"></label>
                                <input type="number" class="form-control card-expiry-year" id="expiration_year" value=""
                                    name="expiration_year" placeholder="Expiration Year:">
                            </div>
                        </div>
                    </div>
                    <br>

                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-warning" style="width: -webkit-fill-available;" id="bookBtn"
                        onclick="validateFormAndShowModal()">
                        {{__('booking.button1')}}
                    </button>


                </form>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Booking Confirmation</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure about your booking?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-success" onclick="formsubmission()">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--First div closing here--}}
    </div>
    {{--Script for validation starts--}}
    <script>
        function lookup(arg){
 var id = arg.getAttribute('id');
 $('#'+id).removeClass('is-invalid');
}
function validateFormAndShowModal() {
    document.querySelector('form').addEventListener('click', (event) => {
            event.preventDefault();
            $('.invalid-feedback').hide();
            $('#name').removeClass('is-invalid');
            $('#phone').removeClass('is-invalid');
            $('#email').removeClass('is-invalid');
            $('#choice').removeClass('is-invalid');
            $('#model').removeClass('is-invalid');
            $('#location_from').removeClass('is-invalid');
            $('#location_to').removeClass('is-invalid');
            $('#date_from').removeClass('is-invalid');
            $('#date_to').removeClass('is-invalid');
            $('#payment').removeClass('is-invalid');
            
        const nameInput = document.getElementById('name');
        const fullname = nameInput.value.trim();
        const phoneInput = document.getElementById('phone');
        const mobile = phoneInput.value.trim();
        const emailInput = document.getElementById('email');
        const emailv = emailInput.value.trim();
        const choiceInput = document.getElementById('choice');
        const choosing = choiceInput.value.trim();
        const modelInput = document.getElementById('model');
        const modelselection= modelInput.value.trim();
        const location_fromInput = document.getElementById('location_from');
        const locfrom = location_fromInput.value.trim();
        const location_toInput = document.getElementById('location_to');
        const locto = location_toInput.value.trim();
        const date_fromInput = document.getElementById('date_from');
        const dateF = date_fromInput.value.trim();
        const date_toInput = document.getElementById('date_to');
        const dateT = date_toInput.value.trim();
        const paymentInput = document.getElementById('payment');
        const paying = paymentInput.value.trim();
        if (!fullname) {
            event.preventDefault();
            nameInput.classList.add('is-invalid');
            nameInput.classList.add('is-valid');
        }
        if(!mobile){
          event.preventDefault();
          phoneInput.classList.add('is-invalid');
          phoneInput.classList.add('is-valid');
        }
        if(!emailv){
          event.preventDefault();
          emailInput.classList.add('is-invalid');
          emailInput.classList.add('is-valid');

        }
        if(!choosing){
          event.preventDefault();
          choiceInput.classList.add('is-invalid');
          choiceInput.classList.add('is-valid');
        }
        if(!modelselection){
          event.preventDefault();
          modelInput.classList.add('is-invalid');
          modelInput.classList.add('is-valid');
        }
        if(!locfrom){
          event.preventDefault();
          location_fromInput.classList.add('is-invalid');
          location_fromInput.classList.add('is-valid');
        }
        if(!locto){
          event.preventDefault();
          location_toInput.classList.add('is-invalid');
          location_toInput.classList.add('is-valid');
        }
        if(!dateF){
          event.preventDefault();
          date_fromInput.classList.add('is-invalid');
          date_fromInput.classList.add('is-valid');
        }
        if(!dateT){
          event.preventDefault();
          date_toInput.classList.add('is-invalid');
          date_toInput.classList.add('is-valid');
        }
        if(!paying){
          event.preventDefault();
          paymentInput.classList.add('is-invalid');
          paymentInput.classList.add('is-valid');
        }
        else{
            // alert('Modal times');
            
            $('#exampleModal').modal('show');
            // preventDefault();
                        
            
        }
    });
}
    </script>
    {{--Script for validation ends--}}
    <script>
        function formsubmission(){
                                                        $('#myForm').submit();
                                                    }
    </script>
    <script>
        const paymentDropdown = document.getElementById('payment');
                                    const modeldropdown = document.getElementById('model');
                                    const modalsubmit = document.getElementById('controllerhandler');
                                    const myForm = document.getElementById('myForm');

                                    paymentDropdown.addEventListener('change', function(event) {
                                        if (paymentDropdown.value === 'online') {
                                            $("#onlinepayment").show();
                                            
                                        } else {
                                            $("#onlinepayment").hide();
                                        }
                                        });
    </script>

    <script>
        $(function() {
      
        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/
        
        var $form = $(".require-validation");
         
        $('form.require-validation').bind('submit', function(e) {
            //normal form submission start
            var payment = $('#payment').val();
            // console.log('Payment method: ' + payment);
            if (payment === 'online') {
      
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');
        
            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
              }
            });
         
            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
              }, stripeResponseHandler);
            }
        
            //normal form submission ends
        }
        else{
            var form = document.getElementById("myForm");
            function formsubmission(){
            document.getElementById("myForm").addEventListener("click", function () {
            form.submit();
        });
                        }
        }
        });
          
        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];
                     
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
         
    });
    </script>
    <x-footer />
</body>

</html>