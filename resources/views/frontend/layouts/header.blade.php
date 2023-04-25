 <?php 
    $classHeader = 'l-header l-header--mt l-header--mt-none-desktop  text-center';
    if (Route::is('home')) {
      $classHeader = 'l-header l-header--mt l-header--mt-none-desktop text-center home-page';
    }

    if (Route::is('about_page') || Route::is('contact_page')) {
      $classHeader = 'l-header container-super-narrow text-center l-header--mb content';
    }

    if (Route::is("news_page")) {
      $classHeader = 'l-header l-header--with-filter container-super-narrow text-center content';
    }

 ?>
 <header class="{{ $classHeader }}" style="background: #000; padding: 20px 40px;">
    <div class="l-header__logo l-header__logo--cover js-header-logo">
      <a class="l-header__logo-icon reload-home" href="#" title="Go to homepage">
        <img src="{{ uploaded_asset(get_setting('header_logo')) }}" />
      </a>
      <div clas="l-navbar-right">
                  <div class="edgtf-position-right-inner">
                    <nav class="edgtf-main-menu edgtf-drop-down edgtf-default-nav">
                      <ul id="menu-main-menu-main-navigation-mobile-navigation" class="clearfix">
                        <li id="nav-menu-item-3541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-108 current_page_item edgtf-active-item narrow">
                          <a href="https://bluedesignvn.com/" class=" current ">
                            <span class="item_outer">
                              <span class="item_text">Trang Chủ</span>
                            </span>
                          </a>
                        </li>
                        <li id="nav-menu-item-3667" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  has_sub narrow">
                          <a href="https://bluedesignvn.com/du-an/" class="">
                            <span class="item_outer">
                              <span class="item_text">Dự Án</span>
                              <i class="edgtf-menu-arrow fa fa-angle-down"></i>
                            </span>
                          </a>
                          <div class="second">
                            <div class="inner">
                              <ul>
                                <li id="nav-menu-item-4196" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                  <a href="https://bluedesignvn.com/du-an/kien-truc/" class="">
                                    <span class="item_outer">
                                      <span class="item_text">Kiến Trúc</span>
                                    </span>
                                  </a>
                                </li>
                                <li id="nav-menu-item-4201" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                  <a href="https://bluedesignvn.com/du-an/noi-that/" class="">
                                    <span class="item_outer">
                                      <span class="item_text">Nội Thất</span>
                                    </span>
                                  </a>
                                </li>
                                <li id="nav-menu-item-4204" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                  <a href="https://bluedesignvn.com/du-an/xay-dung-hoan-thien/" class="">
                                    <span class="item_outer">
                                      <span class="item_text">Xây Dựng-Hoàn Thiện</span>
                                    </span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>
                        <li id="nav-menu-item-3582" class="menu-item menu-item-type-post_type menu-item-object-page  narrow">
                          <a href="https://bluedesignvn.com/about-us/" class="">
                            <span class="item_outer">
                              <span class="item_text">Blue Design</span>
                            </span>
                          </a>
                        </li>
                        <li id="nav-menu-item-3585" class="menu-item menu-item-type-post_type menu-item-object-page  narrow">
                          <a href="https://bluedesignvn.com/contact-us/" class="">
                            <span class="item_outer">
                              <span class="item_text">Liên Hệ</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <a class="edgtf-side-menu-button-opener edgtf-icon-has-hover" href="javascript:void(0)">
                      <span class="edgtf-side-menu-icon">
                        <span class="edgtf-line"></span>
                        <span class="edgtf-line"></span>
                        <span class="edgtf-line"></span>
                      </span>
                    </a>
                  </div>
              </div>
    </div>
    <!-- <h1 class="headline-2 letters js-wordsplit text-center"><span class="color-archiplus">Kiến tạo giá trị sống đích thực</span> </h1> -->
    @if(Route::is('home') == false)
    <div class="l-header__container-wrapper">
      <div class="l-header__container">
      @if(Route::is('about_page') || Route::is('contact_page'))
        <h1 class="headline-2 letters js-wordsplit text-center">{{ $title ?: '' }}</h1>
        <div class="content">
          <p>{{ $description ?: '' }}</p>
        </div>
      @endif

      @if(Route::is('news_page'))
        <h1 class="headline-2 letters js-wordsplit text-center">{{ $title ?: '' }}</h1>
        <p>{{ $description ?: '' }}</p>
      @endif

      </div>
    </div>
    @endif
  </header>