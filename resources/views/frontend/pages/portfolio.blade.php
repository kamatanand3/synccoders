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

        <!-- Portfolio area start -->
        <section class="portfolio__area-6">
          <div class="container line pt-100 pb-140">
            <span class="line-3"></span>
            <div class="zi-9">
              <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                  <div class="sec-title-wrapper portfolio__title-wrap-6">
                    <div class="">
                      <h2 class="sec-sub-title animation__char_come">Featured</h2>
                      <h3 class="sec-title animation__char_come_long">Work</h3>
                      <p>View the full case study of our recent featured and awesome works that we created for our
                        clients.
                      </p>
                    </div>
                    <div class="portfolio__pagination-6">
                      <span class="portfolio__current">01</span> / 0<span class="portfolio__total"></span>
                    </div>
                  </div>
                </div>

                <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6">
                  <div class="portfolio__wrapper-6">
                    <div class="portfolio__list-6">
                      <div class="portfolio__item-6" data-portfitem="1">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/1.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="2">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/2.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="3">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/3.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="4">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/4.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="5">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/5.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="6">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/6.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>

                      <div class="portfolio__item-6" data-portfitem="7">
                        <a href="{{ asset('assets/portfolio-details') }}">
                          <img src="{{asset('assets/imgs/portfolio/6/7.jpg')}}" alt="Portfolio Image" data-speed="0.4">
                          <div class="portfolio__content-6">
                            <h4 class="portfolio__title-6">Lionpro Agency</h4>
                            <h5 class="portfolio__date">02 May 2021</h5>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->


        <!-- CTA area start -->
        <section class="cta__area">
          <div class="container line pb-110">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">Work with us</p>
                  <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                  <div class="btn_wrapper">
                    <a href="{{ asset('assets/contact') }}}" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
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