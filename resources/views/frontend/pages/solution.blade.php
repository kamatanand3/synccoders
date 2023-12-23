<!DOCTYPE html>
<html lang="en">

@include('inc.head')


<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>



  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  @include('inc.header')
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  @include('inc.mobile')
  <!-- Offcanvas area end -->


  <div id="smooth-wrapper">
    <div id="smooth-content">
    <main>

<!-- Service area start -->
<section class="service__area-3 service-v4 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12">
        <div class="sec-title-wrapper pt-130 text-anim">
          <h2 class="sec-sub-title title-anim">Services</h2>
          <h3 class="sec-title title-anim">Our marketing <br> Services</h3>
          <p>Consumers today rely heavily on digital means to research products.
            We
            research a brand of bldend
            engaging with it, according to the meanwhile, 51% of consumers say they use Google to research
            products before buying.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xx-12">
        <div class="service__list-3">
          <div class="service__item-3 service_animation">
            <h3><a href="{{ asset('service-details.html') }}" class="service__title-3">Search Engine <br>Optimization</a></h3>
            <div class="service__content-3">
              <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
              </p>
              <ul class="">
                <li>+ Logo Design</li>
                <li>+ Advertisement</li>
                <li>+ Promotion</li>
              </ul>
            </div>
            <div class="service__btn-3">
              <div class="btn_wrapper">
                <a href="{{ asset('service-details.html') }}" class="wc-btn-black btn-hover btn-item"><span></span> Details
                  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="service__hover-3" style="background-image: url('{{ asset('assets/imgs/service/3/1.jpg') }}');"></div>
          </div>

          <div class="service__item-3 service_animation">
            <h3><a href="{{ asset('service-details.html') }}" class="service__title-3 ">Email <br>Marketing</a></h3>
            <div class="service__content-3">
              <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
              </p>
              <ul class="">
                <li>+ Logo Design</li>
                <li>+ Advertisement</li>
                <li>+ Promotion</li>
              </ul>
            </div>
            <div class="service__btn-3">
              <div class="btn_wrapper">
                <a href="{{ asset('service-details.html') }}" class="wc-btn-black btn-hover btn-item"><span></span> Details
                  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="service__hover-3" style="background-image: url('{{ asset('assets/imgs/service/3/2.png') }}');"></div>
          </div>

          <div class="service__item-3 service_animation">
            <h3 class=""><a href="{{ asset('service-details.html') }}" class="service__title-3">COntent
                <br>Marketing</a></h3>
            <div class="service__content-3">
              <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
              </p>
              <ul class="">
                <li>+ Logo Design</li>
                <li>+ Advertisement</li>
                <li>+ Promotion</li>
              </ul>
            </div>
            <div class="service__btn-3 ">
              <div class="btn_wrapper">
                <a href="{{ asset('service-details.html') }}" class="wc-btn-black btn-hover btn-item"><span></span> Details
                  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="service__hover-3" style="background-image: url('{{ asset('assets/imgs/service/3/3.png') }}');"></div>
          </div>

          <div class="service__item-3 service_animation">
            <h3 class=""><a href="{{ asset('service-details.html') }}" class="service__title-3">Social
                <br>Marketing</a></h3>
            <div class="service__content-3">
              <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
              </p>
              <ul class="">
                <li>+ Logo Design</li>
                <li>+ Advertisement</li>
                <li>+ Promotion</li>
              </ul>
            </div>
            <div class="service__btn-3">
              <div class="btn_wrapper">
                <a href="{{ asset('service-details.html') }}" class="wc-btn-black btn-hover btn-item"><span></span> Details
                  <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>

            <div class="service__hover-3" style="background-image: url('{{ asset('assets/imgs/service/3/4.png') }}');"></div>
          </div>

          <div class="service3__img-wrap">
            <div class="service3__img"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Service area end -->


<!-- Brand area start -->
<section class="brand__area">
  <div class="container line pt-140 pb-100">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-12">
        <h2 class="brand__title-3 title-anim">We are happy to work with global
          largest brands</h2>
        <div class="brand__list brand-gap">
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/1.png')}}" alt="Brand Logo">
          </div>
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/2.png')}}" alt="Brand Logo">
          </div>
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/3.png')}}" alt="Brand Logo">
          </div>
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/4.png')}}" alt="Brand Logo">
          </div>
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/5.png')}}" alt="Brand Logo">
          </div>
          <div class="brand__item-2 fade_bottom">
            <img src="{{asset('assets/imgs/brand/6.png')}}" alt="Brand Logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Brand area end -->


<!-- CTA area start -->
<section class="cta__area">
  <div class="container line pt-100 pb-110 no-p">
    <div class="line-3"></div>
    <div class="row">
      <div class="col-xxl-12">
        <div class="cta__content">
          <p class="cta__sub-title">Work with us</p>
          <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
          <div class="btn_wrapper">
            <a href="contact.html" class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk us <i
                class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CTA area end -->

</main>



      <!-- Footer area start -->
      @include('inc.footer')
      <!-- Footer area end -->


    </div>
  </div>



  <!-- All JS files -->
  @include('inc.scripts')



</body>

</html>