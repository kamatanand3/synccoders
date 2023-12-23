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

<!-- Contact area start -->
<section class="contact__area-6">
  <div class="container g-0 line pt-120 pb-110">
    <span class="line-3"></span>
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="sec-title-wrapper">
          <h2 class="sec-title-2 animation__char_come">Let’s get in touch</h2>
        </div>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
        <div class="contact__text">
          <p>Great! We're excited to hear from you and let's start
            something special togerter. call us for any inquery.</p>
        </div>
      </div>
    </div>
    <div class="row contact__btm">
      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
        <div class="contact__info">
          <h3 class="sub-title-anim-top animation__word_come">Don't be afraid man ! <br>say hello</h3>
          <ul>
            <li><a href="tel:+(2)578365379">+(2) 578 - 365 - 379</a></li>
            <li><a href="mailto:hello@example.com">hello@example.com</a></li>
            <li><span>230 Norman Street New York, <br> QC (USA) H8R 1A1</span></li>
          </ul>
        </div>
      </div>
      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
        <div class="contact__form">
          <form action="{{ route('send.email') }}" method="POST">
            @csrf
            <div class="row g-3">
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="text" name="name" placeholder="Name *">
              </div>
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="email" name="email" placeholder="Email *">
              </div>
            </div>
            <div class="row g-3">
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="tel" name="phone" placeholder="Phone">
              </div>
              <div class="col-xxl-6 col-xl-6 col-12">
                <input type="text" name="subject" placeholder="Subject *">
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                <textarea name="message" placeholder="Messages *"></textarea>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                
                  <!-- Captcha field -->
                  <label for="captcha">Please solve this simple math problem:</label>
                  <div>
                    <!-- Generating random numbers for the captcha -->
                    <?php
                    $num1 = rand(1, 10);
                    $num2 = rand(1, 10);
                    $sum = $num1 + $num2;
                    ?>
                    {{ $num1 }} + {{ $num2 }} =
                    <input type="number" id="captcha" name="captcha" required>
                    <input type="hidden" name="captcha_sum" value="{{ $sum }}">
                  </div>
              </div>
            </div>
            <div class="row g-3">
              <div class="col-12">
                <div class="btn_wrapper">
                  <button type="submit" class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                      class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact area end -->

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