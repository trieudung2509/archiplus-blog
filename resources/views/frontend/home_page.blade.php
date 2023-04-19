@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection

@section('content')
    <main>
        <!-- <section class=" section section--p-mlarge-top">
        <div class="content">
            <div class="section__header  container text-center ">
            <p class=""> Giới Thiệu </p>
            <h2 class="headline-2 letters js-wordsplit ">Hoạt động của <span class="color-gold">ARCHIPLUS</span></h2>
            <p>Tư vấn đầu tư xây dựng. Thiết kế xây dựng kiến trúc công trình. Kiểm tra và chứng nhận. Cải tạo sửa chữa. Sản xuất và thi công. Thi công hoàn thiện.</p>
            </div>
        </div>
        </section> -->
        <section class="banner__slider">
            <div class="slider stick-dots">
                @php
                    $slider_bannerIds = $slider_banner != null ? explode(",", $slider_banner->image_thumb_ids) : [];
                @endphp
                @if (count($slider_bannerIds) > 0)
                    @foreach($slider_bannerIds as $bannerId)
                    <div class="slide">
                        <div class="slide__img">
                            <img src="{{ uploaded_asset($bannerId) }}" alt="" data-lazy="{{ uploaded_asset($bannerId) }}" class="full-image animated" data-animation-in="zoomInImage"/>
                        </div>
                        
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="slide__content ">
                <div class="slide__content--headings text-center">
                    <h2 class="animated title" data-animation-in="fadeInUp">{{ $slider_banner->short_description ?? '' }}</h2>
                    <a class=" btn btn--bordered btn-introduct" href="{{ route('about_page') }}" title="Xem Thêm"><span class="btn__inner"> Xem Thêm </span></a>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
                    <circle r="20" cy="22" cx="22" id="test">
                </symbol>
            </svg>
        </section>
        <section class=" section section--p-none-top">
        <div class="container ">
            @foreach($list_categories as $cate)
            <h2 class="headline-1 letters js-wordsplit text-center">{{ $cate->category_name ?: '' }}</span>
            </h2>
            <?php 
                $list_posts = \App\Blog::Where('category_id', $cate->id)->orderBy('published_date')->take(6)->select('id','slug', 'banner', 'title', 'published_date', 'short_description')->get();
            ?>
            <div class="row row--g-20 tile-container">
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
                        <time datetime="{{ utcToLocalTime($post->published_date) }}"> {{ utcToLocalTime($post->published_date)->toDateString() }}</time>
                        <p class="content__small-text">{{ $post->short_description }}</p>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
            <p class="text-center" style="margin-bottom: 8rem;">
                <a class=" btn btn--bordered " href="{{ route('news_page', ['slug' => $cate->slug]) }}" title="Xem Thêm"> Xem Thêm </a>
            </p>
            @endforeach
        </div>
        </section>
    </main>
@endsection
