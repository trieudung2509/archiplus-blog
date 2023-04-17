 <?php 
    $classHeader = 'l-header l-header--mt l-header--mt-none-desktop container-mlarge text-center';
    if (Route::is('home')) {
      $classHeader = 'l-header l-header--mt l-header--mt-none-desktop container-mlarge text-center home-page';
    }

    if (Route::is('about_page') || Route::is('contact_page')) {
      $classHeader = 'l-header container-super-narrow text-center l-header--mb content';
    }

    if (Route::is("news_page")) {
      $classHeader = 'l-header l-header--with-filter container-super-narrow text-center content';
    }

 ?>
 <header class="{{ $classHeader }}">
    <div class="l-header__logo l-header__logo--cover js-header-logo"><a class="l-header__logo-icon" href="/" title="Go to homepage">
        <img src="{{ uploaded_asset(get_setting('header_logo')) }}" />
    </a></div>
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