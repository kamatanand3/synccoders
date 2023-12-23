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


  <!-- Header area start -->
  @include('inc.header')
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  @include('inc.mobile')
  <!-- Offcanvas area end -->


  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>

        <!-- Hero area start -->
        <section class="hero__area-2">
          <div class="hero__inner-2">
            <div class="sec-title-wrapper">
              <h2 class="sec-title-3 bg-shape">We Design <br>Unique</h2>
              <h2 class="sec-title-3">Digital <br>Experience</h2>
            </div>
            <div class="hero__text-2">
              <p>Thinking, writing and planning with brand are just a of what we do. For
                more than 10 years, It’s more
                competitive space for agency.</p>
              <div class="hero__button btn_wrapper">
                <a href="service.html" class="wc-btn-pink btn-hover btn-item"><span></span>
                  Explore <br>our services <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="hero2-shape">
            <img src="{{ asset('assets/imgs/bg/arrow-long.png') }}" alt="BG Shape">
          </div>
        </section>
        <!-- Hero area end -->


        <!-- Feature area start -->
        <section class="feature__area-2 pt-130">
          <div class="feature__top">
            <div class="container">
              <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="sec-title-wrapper">
                    <h2 class="sec-title title-anim">Features are more helpful to create creative shapes as well.</h2>
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="feature__text text-anim">
                    <p>We are constantly rethinking the future by creating the next generation of products, brands and
                      services from a hybrid perspective. The unthinkable today becomes inevitable.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="feature__btm">
            <div class="container">
              <div class="row">
                <div class="col-xxl-12">
                  <div class="feature__list animation__feature2">
                    <div class="feature__item">
                      <img src="{{asset('assets/imgs/feature/icon/1.png')}}" alt="Feature Icon">
                      <h3 class="feature__title">Branding</h3>
                      <p>Having these marketplace to your branded skilled team of designers and developers who
                        embracement
                        perfection.</p>
                    </div>
                    <div class="feature__item">
                      <img src="{{asset('assets/imgs/feature/icon/2.png')}}" alt="Feature Icon">
                      <h3 class="feature__title">Optimum</h3>
                      <p>Brand identity design a the key to success whether you breath rebranding an existing business
                        or
                        creating a business</p>
                    </div>
                    <div class="feature__item">
                      <img class="" src="{{asset('assets/imgs/feature/icon/3.png')}}" alt="Feature Icon">
                      <h3 class="feature__title">Thinking</h3>
                      <p>Creative typography plays the big role to pull off this trending more effectively with the
                        thinking use a thicker point</p>
                    </div>
                    <div class="feature__item">
                      <img src="{{asset('assets/imgs/feature/icon/4.png')}}" alt="Feature Icon">
                      <h3 class="feature__title">Execution</h3>
                      <p>Stricky with multiple shades of the colours. However, this type of alone can look awesome
                        forever
                        an online business</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Feature area end -->


        <!-- Roll area start -->
        <section class="roll__area-2">
          <div class="swiper roll__slider">
            <div class="swiper-wrapper roll__wrapper">
              <div class="swiper-slide roll__slide">
                <h2>Development</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Studio</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>typhography</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Design</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Element</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- Roll area end -->


        <!-- Roll area start -->
        <section class="roll__area-3">
          <div dir="rtl" class="swiper roll__slider">
            <div class="swiper-wrapper roll__wrapper">
              <div class="swiper-slide roll__slide ">
                <h2>Development</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Studio</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>typhography</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Design</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Element</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Strategy</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Branding</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Agency</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Interaction</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DIgital SOlution</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- Roll area end -->


        <!-- Portfolio area start -->
        <section class="portfolio__area-2">
          <div class="container g-0 line pt-100 pb-140">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper text-anim">
                  <h2 class="sec-title-3 title-anim">Selected <span>Projects</span></h2>
                  <p class="sec-text">Worked with global brands & agency at the
                    intersection of flat design and digital
                    technology.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper portfolio__slider-2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="{{ asset('portfolio-details.html') }}"><img src="{{asset('assets/imgs/portfolio/2/1.jpg')}}" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="{{ asset('portfolio-details.html') }}"">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="{{ asset('portfolio-details.html') }}"><img src="{{asset('assets/imgs/portfolio/2/2.jpg')}}" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"><a href="{{ asset('portfolio-details.html') }}">crodyflw <span>Website</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="{{ asset('portfolio-details.html') }}" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="{{ asset('portfolio-details.html') }}"><img src="{{asset('assets/imgs/portfolio/2/3.jpg')}}" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">developers
                        <span>digital</span></a></h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="{{ asset('portfolio-details.html') }}"><img src="{{asset('assets/imgs/portfolio/2/4.jpg')}}" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="{{ asset('portfolio-details.html') }}">Lionpro
                        <span>marketeers</span></a></h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="portfolio-details.html" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-2">
                  <div class="slide-img">
                    <a href="{{ asset('portfolio-details.html') }}"><img src="{{asset('assets/imgs/portfolio/2/5.jpg')}}" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <h2 class="sec-title"> <a href="portfolio-details.html">Lionpro <span>Agency</span></a>
                    </h2>
                    <p>We are passionate designers, developers and digital marketeers. We produce best projects that
                      both
                      ourselves</p>
                    <div class="btn-common-wrap">
                      <a href="{{ asset('portfolio-details.html') }}" class="btn-common">View details <i
                          class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="portfolio__slider-2-pagination--">
              <div class="swiper-pagination circle-pagination right"></div>
            </div>
          </div>
        </section>
        <!-- Portfolio area end -->


        <!-- About area start -->
        <section class="about__area-2">
          <div class="container pt-130 pb-110">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">We design and develop
                    outstanding Digital <br> Products
                    and digital-first Brands.</h2>
                </div>
                <div class="sec-text-wrapper">
                  <div class="sec-text text-anim">
                    <p>We help brands stand out through powerful, elegant visual design. Our design philosophy is shaped
                      by our experience growing up at our father’s bookbindery. Surrounded by the highest-quality
                      materials and turn-of-the-century machines, we observed the art of true craftsmanship firsthand.
                    </p>
                  </div>
                  <div class="sec-btn btn_wrapper">
                    <a class="wc-btn-pink btn-hover btn-item" href="{{ asset('about.html') }}"><span></span> Explore Us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="about__img-2 pb-130">
            <img src="{{asset('assets/imgs/about/2/1.jpg')}}" alt="About Image" data-speed="0.2">
          </div>

          <div class="container pb-140">
            <div class="row">
              <div class="col-xxl-12">
                <h2 class="brand__title-2 title-anim">We worked with global largest brands
                </h2>
                <div class="brand__list-2">
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
        <!-- About area end -->


        <!-- Service area start -->
        <section class="service__area-2 pt-130 pb-110">
          <div class="container">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-text text-anim">
                  <p>We are passionate to create connected brands and services, and campaigns to enable stable and
                    successful relationships between businesses and customers.</p>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">We grow your brands through
                    bold service
                    we’re providing</h2>
                </div>
              </div>
            </div>

            <div class="row pt-140">
              <div class="col-xxl-12">
                <div class="service__list-2 animation__service-2">
                  <div class="service__item-2">
                    <div>
                      <img src="{{asset('assets/imgs/service/2/1.png')}}" alt="Service Icon">
                      <h3 class="service__title-2">Branding <br>Design</h3>
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul>
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="{{asset('assets/imgs/service/2/2.png')}}" alt="Service Icon">
                      <h3 class="service__title-2 ">Digital Product <br>Design</h3>
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul>
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="{{asset('assets/imgs/service/2/3.png')}}" alt="Service Icon">
                      <h3 class="service__title-2">Architectural <br>Design</h3>
                      <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.
                      </p>
                      <ul>
                        <li>+ Logo Design</li>
                        <li>+ Advertisement</li>
                        <li>+ Promotion</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-12">
                <div class="service__btn-2 btn_wrapper">
                  <a href="{{ asset('service.html') }}" class="wc-btn-pink btn-hover btn-item"><span></span> View <br>all services
                    <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service area end -->


        <!-- Award area start -->
        <section class="award__area pt-130 pb-140">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper pb-140">
                  <h2 class="sec-title title-anim">We’re nominated as Agency of
                    the Year amongst best
                    Digital Agencies
                    Worldwide.</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="award__left">
                  <h4 class="award__text-2">award</h4>
                  <h3 class="award__text">award</h3>
                  <img src="{{asset('assets/imgs/shape/3.png')}}" alt="Shape Image" data-speed="1" data-lag="0.2">
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="award__right">
                  <p>We're passionate about doing the best digital
                    innovation we can and pushing new
                    technology
                    to its limits. And we achieve
                    results we're proud of beyond the realm.</p>
                  <div class="award__list">
                    <div class="award__item">
                      <p>Dribbble</p>
                      <p>Nominee</p>
                      <p>2021</p>
                    </div>
                    <div class="award__item">
                      <p>Behance</p>
                      <p>Winner</p>
                      <p>2020</p>
                    </div>
                    <div class="award__item">
                      <p>Template UI</p>
                      <p>Nominee</p>
                      <p>2018</p>
                    </div>
                    <div class="award__item">
                      <p>Awwwards</p>
                      <p>Winner</p>
                      <p>2016</p>
                    </div>
                    <div class="award__item">
                      <p>Themeforest</p>
                      <p>Winner</p>
                      <p>2012</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Award area end -->


        <!-- CTA area start -->
        <section class="cta__area-2">
          <div class="container line pt-130 pb-120">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content-2">
                  <p class="cta__sub-title-2 title-anim">Have you project in mind?</p>
                  <h2 class="cta__title-2 title-anim">Let’s make something
                    great together!</h2>
                  <div class="btn_wrapper">
                    <a href="{{ asset('contact.html') }}" class="wc-btn-pink btn-hover btn-item"><span></span>Contact <br>with us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- CTA area end -->


        <!-- Blog area start -->
        <section class="blog__area-2 blog__animation">
          <div class="container g-0 pt-150 pb-110">
            <div class="row ">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">Updated Journal</h2>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-4">
                <div class="sec-text text-anim">
                  <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.</p>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-4">
                <div class="sec-btn btn_wrapper">
                  <a href="{{ asset('blog.html') }}" class="wc-btn-pink btn-hover btn-item"><span></span> Read <br>all journal <i
                      class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item-2">
                  <div class="blog__img-wrapper">
                    <a href="{{ asset('blog-details.html') }}">
                      <div class="img-box">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/1.jpg')}}" alt="Blog Thumbnail">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/1.jpg')}}" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta-2"><a href="{{ asset('category.html') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ asset('blog-details.html') }}" class="blog__title-2">Ways of lying to yourself about your
                      new relationship.</a></h5>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item-2">
                  <div class="blog__img-wrapper">
                    <a href="{{ asset('blog-details.html') }}">
                      <div class="img-box">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/2.jpg')}}" alt="Blog Thumbnail">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/2.jpg')}}" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta-2"><a href="{{ asset('category.html') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ asset('blog-details.html') }}" class="blog__title-2">How to manage a talented and
                      successful de sign team</a></h5>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item-2">
                  <div class="blog__img-wrapper">
                    <a href="{{ asset('blog-details.html') }}">
                      <div class="img-box">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/3.jpg')}}" alt="Blog Thumbnail">
                        <img class="{{asset('image-box__item" src="assets/imgs/blog/1/3.jpg')}}" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta-2"><a href="{{ asset('category.html') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ asset('blog-details.html') }}" class="blog__title-2">How to bring fold to your startup
                      company with Axtra</a></h5>
                </article>
              </div>
            </div>
          </div>
        </section>
        <!-- Blog area end -->

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