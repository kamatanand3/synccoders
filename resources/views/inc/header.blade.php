<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header__area-2">
    <div class="header__inner-2">
      <div class="header__logo-2">
        <a href="/"><img src="{{asset('assets/imgs/logo/site-logo-white-2.png')}}" alt="Site Logo"></a>
      </div>
      <div class="header__nav-2">
        <ul class="main-menu menu-anim">
        <li><a href="/">Home</a></li>
        <li><a href="{{ route('solutions') }}">Solutions</a></li>
        <li>
          <a href="{{ route('about us') }}">About Us </a>
          <ul class="main-dropdown">
            <li><a href="{{ route('team') }}">team</a></li>
          </ul>
        </li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <!-- <li><a href="contact.html">Testimonials</a></li> -->
        <!-- <li><a href="contact.html">Blog</a></li> -->
        <!-- <li><a href="contact.html">Career</a></li> -->
        <!-- <li><a href="contact.html">FAQs</a></li> -->
        <li><a href="{{ route('contact us') }}">Contact Us</a></li>
        </ul>
      </div>
      <div class="header__nav-icon-2">
        <button class="menu-icon-2" id="open_offcanvas"><img src="{{asset('assets/imgs/icon/menu-white.png')}}"
            alt="Menubar Icon"></button>
      </div>
    </div>
  </header>
</body>
</html>