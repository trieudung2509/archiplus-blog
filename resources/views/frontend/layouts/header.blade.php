</head><body itemscope itemtype="http://schema.org/WebPage">
    <div id="barba-wrapper">
      <div class="barba-container">
        <div class="l-navbar js-navbar-scroll ">
          <div class="l-navbar__logo "><a class="l-navbar__logo-icon" href="/" title="Go to homepage"><span>Go to homepage</span><video src="/images/video/xavio-logo-video-light-fix.mp4" autoplay muted loop webkit-playsinline="true" playsinline="true"></video></a></div><button class="l-navbar__burger js-burger-btn custom-cursor" type="button" aria-label="menu"><span class="l-navbar__burger-text">Menu</span><span class="burger custom-cursor"><span class="burger-item burger-item--first"></span><span class="burger-item burger-item--second"></span></span></button>
        </div>
        <div class="l-navbar-mobile l-navbar-mobile--hide js-nav-mobile"><a href="/" title="Go to homepage"><img class="l-navbar-mobile__logo" src="/images/logo-mobile.svg" alt="Xavio Design"></a><button class="burger js-burger-btn custom-cursor" type="button" aria-label="menu"><span class="burger-item burger-item--first"></span><span class="burger-item burger-item--second"></span></button></div>
        <nav class="l-menu-wrapper js-menu-wrapper hide">
          <div class="container-large">
            <div class="row row--no-gutters align-items-center l-menu">
              <ul class="col-lg-11 offset-pad-lg-1 l-menu-left">
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/portfolio" title="Portfolio">Portfolio</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/services" title="Our Services">Our Services</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/what-we-do" title="Project Sectors">Project Sectors</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/about-us" title="About Us">About Us</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/our-team" title="Our Team">Our Team</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/news" title="News">News</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="https://www.xavio-design.com/careers" title="Careers">Careers</a></li>
                <li class="l-menu-left__item"><a class="l-menu-left__link js-wordsplit" href="/contact" title="Contact">Contact</a></li>
              </ul>
              <div class="l-menu-right">
                <p class="headline-6 mb-5em">Address</p>
                <address class="address">
                  <p><span>{{ get_setting('contact_address',null,'en') }}</span><br></p>
                </address>
                <p class="headline-6 mt-20em mb-5em">Telephone</p><a href="tel:{{ get_setting('contact_phone') }}" title="Call us"> {{ get_setting('contact_phone') }} </a>
                <p class="headline-6 mt-20em mb-5em">Email</p><a href="mailto:{{ get_setting('contact_email') }}" title="Email us"> {{ get_setting('contact_email') }} </a>
                <p class="headline-6 mt-20em mb-5em">Social</p>
                <ul class="social">
                  <li class="social__item"><a class="social__link" href="https://www.instagram.com/xaviodesign/" title="Our Instagram" target="_blank" rel="noopener noreferrer"> Instagram </a></li>
                  <li class="social__item"><a class="social__link" href="https://www.linkedin.com/company/xavio-design" title="Our Linkedin" target="_blank" rel="noopener noreferrer"> Linkedin </a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <header class="l-header l-header--mt l-header--mt-none-desktop container-mlarge text-center">
          <div class="l-header__logo l-header__logo--cover js-header-logo"><a class="l-header__logo-icon" href="/" title="Go to homepage"><video class="lazy" data-src="/images/video/xavio-logo-video-light-fix.mp4" autoplay muted loop webkit-playsinline="true" playsinline="true"></video></a></div>
          <div class="l-header__container-wrapper">
            <div class="l-header__container">
            @if(Route::is('home') )
              <h1 class="headline-2 letters js-wordsplit text-center">Với slogan<span class="color-archiplus">"Kiến tạo giá trị sống đích thực"</span> thể hiện tiêu chí rõ ràng, đem lại những giá trị sống cao cấp, tiện nghi và hoàn hảo nhất cho bất cứ khách hàng nào đến với<span class="color-archiplus"> Archiplus</span></h1>
            @endif

            @if(Route::is('about_page') || Route::is('contact_page'))
              <h1 class="headline-2 letters js-wordsplit text-center">{{ $title }}</h1>
              <div class="content">
                <p>{{ $description }}</p>
              </div>
            @endif
            </div>
          </div>
        </header>