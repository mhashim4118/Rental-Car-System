<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
.wraper {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  padding: 40px;
  background: #000;
}
.owl-theme img {
  width: 100%;
  min-height: 200px;
}
.owl-carousel .owl-prev,
.owl-carousel .owl-next {
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  background-color: #fff !important;
  color: #000 !important;
  font-size: 1.5em !important;
  width: 40px;
  height: 40px;
  border-radius: 100% !important;
  font-weight: bold;
  padding: 15px !important;
  text-align: center;
  box-shadow: 0px 0px 10px 0px #000;
}
.owl-carousel .owl-prev:hover,
.owl-carousel .owl-next:hover {
  box-shadow: 0px 0px 0px 0px #000;
  background-color: red !important;
  color: #fff !important;
}
.owl-carousel .owl-prev {
  left: -30px;
}
.owl-carousel .owl-next {
  right: -30px;
}
.owl-theme .owl-dots .owl-dot.active span {
  background: red !important;
  width: 25px;
  transition: 0.2s ease-in-out;
}
.owl-theme .owl-dots .owl-dot:hover span {
  background: red !important;
  transition: 0.2s ease-in-out;
}

/* Responsive design custom css */
@media only screen and (max-width: 480px) {
  .owl-theme .owl-dots .owl-dot {
    display: none;
  }
  .owl-carousel .owl-prev,
  .owl-carousel .owl-next {
    width: 30px;
    height: 30px;
    font-size: 14px !important;
    top: 45%;
    box-shadow: 0px 0px 0px 0px #000;
  }
  .owl-carousel .owl-prev {
    left: 0px;
  }
  .owl-carousel .owl-next {
    right: 0px;
  }
}

    </style>
</head>
<body>
    <section class="wraper">
        <div class="owl-carousel owl-theme image-slider1">
          <div class="item">
          <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
          <div class="item">
           <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
            <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
             <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
             <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
            <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
             <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
            <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
            <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
           <div class="item">
          <img src="https://i.ibb.co/wCGFk6Q/Untitldsed-1.jpg"/>
          </div>
        </div>
    </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
                $(".image-slider1").owlCarousel({
        margin:10,
        loop:true,
        autoplay:true,
        nav:true,
        navText:["←","→"],
        responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3.5,
                  merge:true,
                                      
              },
              1000:{
                  items:5
              }
        }
      });
                </script>

    
</body>
</html>
