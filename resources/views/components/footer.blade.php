<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3d62aec5b0.js" crossorigin="anonymous"></script>
    <style>
        footer {
            height: 600px;
            width: 100vw;
            background: black;
            overflow: hidden;
            background: #0a0a0a;
            /* fallback colour. Make sure this is just one solid colour. */
            /* background: -webkit-linear-gradient(rgba(29, 38, 113, 0.8), rgba(195, 55, 100, 0.8)), url("https://bit.ly/2rlzaXi");
            background: linear-gradient(rgba(29, 38, 113, 0.8), rgba(195, 55, 100, 0.8)), url("https://bit.ly/2rlzaXi"); */
        }

        .oh1 {
            /* object-fit: cover; */
            /* opacity: 0.4; */
        }




        /*chatgpt*/
        .overlay-container {
            position: relative;
            display: inline-block;
            /* overflow: hidden; */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 600px;
            width: 100vw;
            opacity: 0;
            transition: opacity 0.5s ease;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .overlay::-webkit-scrollbar {
            display: none;
        }

        .overlay:hover {
            opacity: 1;
        }

        .overlay h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .overlay h4 {
            font-size: 1rem;
        }

        body {
            overflow-x: hidden;
            /*Hide bottom scroll bar*/
        }

        .y1 {
            height: 600px;
            width: 100vw;
        }
    </style>
</head>

<body>

    <div class="overlay-container">
        <img class="y1" src="{{asset('images\c1.jpeg')}}" alt="Image">
        <div class="overlay">
            <h1>CONTACT US</h1>
            <h4>Feel free to contact us to get information any time as our team is available 24/7.</h4>
            <a href="/contact" class="btn btn-warning">Click Here</a>
        </div>
    </div>

    <br><br>
    <div class="container butt text-center mb-5">
        <a class="btn btn-primary" href="https://www.facebook.com/" target="_blank"><i
                class="fa-brands fa-facebook"></i> FACEBOOK</a>
        <a class="btn btn-danger" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram">
            </i> INSTAGRAM</a>
        <a class="btn btn-info" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i>
            TWITTER</a>
        <a class="btn btn-success" href="https://web.whatsapp.com/" target="_blank"><i
                class="fa-brands fa-whatsapp"></i> WHATSAPP</a>
    </div>
    <br>
    <div class="footer mt-auto py-3 bg-light fixed-bottom text-center">
        <div class="container" bis_skin_checked="1">
            <span class="text-muted">&#169 2023 Rent IT-An One Page Rental Car Theme</span>
        </div>
    </div>
</body>

</html>