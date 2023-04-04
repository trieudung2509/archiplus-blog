@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection

@section('content')
        <main class="l-main">
          <section class="section section--p-mlarge container">
          @if(count($arrCategoryList) > 0)
          <!-- show tab -->
          <div class="row block-list-tab">
            <nav class="nav-block">
              <div class="nav nav-tabs nav-fill">
                @foreach ($arrCategoryList as $cate)
                <a class="l-footer__menu-link {{ $cate->slug == $slug ? 'active' : '' }}" href="{{ route('news_page', ['slug' => $cate->slug]) }}">{{ $cate->category_name }}</a>
                @endforeach
              </div>
            </nav>
          </div>
          @endif
            <div class="row row--g-20 js-load-more-container">
              @foreach($list_posts as $post)
              <article class="col-lg-4 col-md-6">
                <a href="{{ route('detail_page', ['slug' => $post->slug]) }}" class="tile tile--full-height">
                  <div class="tile__img">
                    <div class="tile__img-box tile__img-box--height-sm animation-imageScale lazy" id="news_{{ $post->id }}" data-name="news_{{ $post->id }}" data-style="    @media screen and (max-width:500px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=600&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:501px) and (max-width:768px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=700&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:769px) and (max-width:991px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=500&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:992px) and (max-width:1199px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=500&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1200px) and (max-width:1400px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=600&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1401px) {  #news_{{ $post->id }} {  background-image: url('{{ uploaded_asset($post->banner) }}?w=600&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }   ">
                        <picture>
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=499&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 499px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=500&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 500px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=641&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 641px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=769&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 769px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=902&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 902px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=1025&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1025px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=1200&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1200px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=1582&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1582px)">
                          <source data-srcset="{{ uploaded_asset($post->banner) }}?w=1920&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1920px)">
                          <img class=" lazy" data-src="{{ uploaded_asset($post->banner) }}?w=3860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" alt="{{ $post->title }}">
                        </picture>
                      </div>
                    <span class="tile__img-curtain slideInUp"></span>
                  </div>
                  <div class="tile__content content">
                    <h2 class="headline-5">{{ $post->title }}</h2>
                    <time datetime="{{ utcToLocalTime($post->published_date) }}"> {{ utcToLocalTime($post->published_date) }}</time>
                    <p class="content__small-text">{{ $post->short_description }}</p>
                  </div>
                </a>
              </article>
              @endforeach
              <p class="row__full-width-child text-center">
                <button type="button" class="btn btn--bordered" onclick="javascript:App.loadMore({obj: this, target: '.js-load-more-container', url: '/ajax_category/{{ $slug }}?page=2'});">
                  <span class="btn__inner">Tải Thêm</span>
                </button>
              </p>
            </div>
            <div class="loading"></div>
          </section>
        </main>
@endsection
@section('script')
<script>
  function onCategoryList(slug) {
    console.log({ slug })
  }
</script>
  
@endsection