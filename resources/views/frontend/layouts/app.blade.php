<!doctype html>
<html dir="ltr" lang="en-GB" prefix="og: http://ogp.me/ns#">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">


    <meta charset="utf-8">
    <title>@yield('meta_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">

    <link rel="icon" href="{{ uploaded_asset(get_setting('site_icon')) }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/css/main.css') }}">
    <script>
      (function(w, d) {
        w.addEventListener('LazyLoad::Initialized', function(e) {
          w.lazyLoadInstance = e.detail.instance;
        }, false);
        var b = d.getElementsByTagName('head')[0];
        var s = d.createElement("script");
        s.async = true;
        var v = !("IntersectionObserver" in w) ? "lazyloadPolyfill.js" : "lazyloadIntersectionObserver.js";
        s.src = "/scripts/" + v;
        w.lazyLoadOptions = {
          elements_selector: ".lazy",
          threshold: 0,
          callback_enter: function(element) {
            var css = element.getAttribute('data-style');
            if (css) {
              css = css.replace(/(\r\n|\n|\r)/gm, "");
              var style = document.createElement('style');
              var head = document.getElementsByTagName('head')[0];
              head.appendChild(style);
              style.setAttribute("type", "text/css");
              if (style.styleSheet) {
                style.styleSheet.cssText = css;
              } else {
                var styleText = document.createTextNode(css);
                style.appendChild(styleText);
              }
              setTimeout(function() {
                element.classList.add('lazy--loaded');
              }, 300);
            }
          }
        };
        b.appendChild(s);
      }(window, document));
    </script>
    <style>
      .aspect {
        position: relative;
        padding-top: calc(var(--height) / var(--width) * 100%);
        height: 0;
        display: block;
      }

      .aspect iframe,
      .aspect video {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
      }
    </style>
    @include('frontend.layouts.header')
    @yield('content')
    @include('frontend.layouts.footer') 
    <div class="cursor" id="cursor"></div>
    <script src="{{ static_asset('assets/frontend/js/vendor.js') }}"></script>
    <script src="{{ static_asset('assets/frontend/js/app.js') }}"></script>
</body>
</html>
