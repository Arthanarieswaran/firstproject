
<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css">
<div class="head1">
    <div class="ham">
        <!--    Made by Erik Terwan    -->
        <!--   24th of November 2015   -->
        <!--        MIT License        -->
        
     <div id="menuToggle">
      <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
      <input type="checkbox" />
      
      <!--
      Some spans to act as a hamburger.
      
      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
      <span></span>
      <span></span>
      <span></span>
      
      <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
      <ul id="menu">
        <a href="#"><li>Home</li></a>
        <a href="#"><li>About</li></a>
        <a href="#"><li>Info</li></a>
        <a href="#"><li>Contact</li></a>
        <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
      </ul>
     </div>

    </div>

    <div class="tit">LOGO</div>

    <div class="pro">
        <div>Profile</div>
        <i class="fa-regular fa-user" style="padding-left: 4vh"></i>
        <i class="fa-solid fa-location-dot" style="padding-left: 10vh"></i>
        <i class="fa-solid fa-cart-shopping" style="padding-left: 10vh"></i>
    </div>
</div>

<hr/>

<div class="head2">
    <div class="home1"><i class="fa-solid fa-house" ></i></div>
    <div class="wrap">
        <div class="search">
           <input type="text" class="searchTerm" placeholder="What are you looking for?">
           <button type="submit" class="searchButton">
             <i class="fa fa-search"></i>
          </button>
        </div>
     </div>
</div>