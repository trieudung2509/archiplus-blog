@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection

@section('content')
        <main class="l-main">
          <section class="section section--p-mlarge container">
            <div class="row row--g-20 js-load-more-container">
              @foreach($list_posts as $post)
              <article class="col-lg-4 col-md-6">
                <a href="{{ url($post->slug) }}" class="tile tile--full-height">
                  <div class="tile__img">
                    <div class="tile__img-box tile__img-box--height-sm animation-imageScale lazy" id="news_01679675579" data-name="news_{{ $post->id }}" data-style="    @media screen and (max-width:500px) {  #news_01679675579 {  background-image: url('{{ uploaded_asset($post->banner) }}')  } }   ">
                        <img class=" lazy" data-src="{{ uploaded_asset($post->banner) }}" alt="{{ $post->title }}">
                    </div>
                    <span class="tile__img-curtain slideInUp"></span>
                  </div>
                  <div class="tile__content content">
                    <h2 class="headline-5">{{ $post->title }}</h2>
                    <time datetime="{{ Carbon\Carbon::parse($post->created_at, 'UTC')->setTimezone('Asia/Bangkok')->locale('vi')->diffForHumans() }}">{{ Carbon\Carbon::parse($post->created_at, 'UTC')->setTimezone('Asia/Bangkok')->locale('vi')->diffForHumans() }}</time>
                    <p class="content__small-text">{{ $post->short_description }}</p>
                  </div>
                </a>
              </article>
              @endforeach
              <p class="row__full-width-child text-center">
                <button type="button" class="btn btn--bordered" onclick="javascript:App.loadMore({obj: this, target: '.js-load-more-container', url: 'https://www.xavio-design.com/news?category=&amp;page=2'});">
                  <span class="btn__inner">Load more</span>
                </button>
              </p>
            </div>
            <div class="loading"></div>
          </section>
        </main>
@endsection