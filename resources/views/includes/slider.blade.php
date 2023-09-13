<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
     
      
      
      
      img {
      	vertical-align: middle;
        width:100%;
        max-height: 45vh;
      }
      
      /* Slideshow container */
      .carousel-container {
         max-width: 1000px;
         position: relative;
         margin: auto;
         max-height: 50vh;
      }
      
      /* Next & previous buttons */
      .previous, .next {
         cursor: pointer;
         position: absolute;
         top: 50%;
         width: auto;
         padding: 16px;
         margin-top: -22px;
         color: white;
         font-weight: bold;
         font-size: 18px;
         transition: 0.6s ease;
         border-radius: 0 3px 3px 0;
         user-select: none;
      }
      
      /* Position the "next button" to the right */
      .next {
         right: 0;
         border-radius: 3px 0 0 3px;
      }
      
      
      /* On hover, add a black background color with a little bit seethrough */
      .prev:hover, .next:hover {
         background-color: rgba(0,0,0,0.8);
      }
      
      
      /* The dots/bullets/indicators */
      .navigation-dot {
         cursor: pointer;
         height: 1vh;
         width: 1vh;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
      }
      .active, .navigation-dot:hover {
         background-color: #717171;
      }
   </style>
</head>
<body>
   <div class="carousel-container">
      <div class="images">
         <img src="">
         </div>
         <div class="images">
            <img src="">
         </div>
         <div class="images">
            <img src="">
         </div>
         
         <!-- Previous and Next Buttons -->
         <a class="previous" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>
   </div>
   <br>
   
   <!-- Navigation Dots-->
   <div style="text-align:center">
      <span class="navigation-dot" onclick="currentSlide(1)"></span>
      <span class="navigation-dot" onclick="currentSlide(2)"></span>
      <span class="navigation-dot" onclick="currentSlide(3)"></span>
   </div>
   <script>
      var currentIndex = 1;
      
      //Show current image
      showSlides(currentIndex);
      
      //Function to move Next
      function plusSlides(n) {
         showSlides(currentIndex += n);
      }
      
      //Function to move back
      function currentSlide(n) {
         showSlides(currentIndex = n);
      }
      
      
      //Initiate moving of slides
      function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("images");
         var dots = document.getElementsByClassName("navigation-dot");
         if (n > slides.length) {currentIndex = 1}
         if (n < 1) {currentIndex = slides.length}
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[currentIndex-1].style.display = "block";
         dots[currentIndex-1].className += " active";
      }
   </script>
</body>
</html>
