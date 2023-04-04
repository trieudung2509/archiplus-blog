@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection

@section('content')
    <main>
        <section class=" section section--p-mlarge-top">
        <div class="content">
            <div class="section__header  container text-center ">
            <p class=""> Giới Thiệu </p>
            <h2 class="headline-2 letters js-wordsplit ">Hoạt động của <span class="color-gold">ARCHIPLUS</span></h2>
            <p>Tư vấn đầu tư xây dựng. Thiết kế xây dựng kiến trúc công trình. Kiểm tra và chứng nhận. Cải tạo sửa chữa. Sản xuất và thi công. Thi công hoàn thiện.</p>
            </div>
        </div>
        </section>
        <section class=" section section--p-none-top">
        <div class="container ">
            @foreach($list_categories as $cate)
            <h2 class="headline-1 letters js-wordsplit text-center">{{ $cate->category_name ?: '' }}</span>
            </h2>
            <?php 
                $list_posts = \App\Blog::Where('category_id', $cate->id)->take(6)->select('id','slug', 'banner', 'title', 'published_date', 'short_description')->get();
            ?>
            <div class="row row--g-20 tile-container">
                @foreach($list_posts as $post)
                <article class="col-lg-4 col-md-6">
                    <a href="{{ route('detail_page', ['slug' => $post->slug]) }}" class="tile tile--full-height">
                        <div class="tile__img">
                        <div class="tile__img-box tile__img-box--height-sm animation-imageScale lazy" id="news_01679675579" data-name="news_{{ $post->id }}" data-style="    @media screen and (max-width:500px) {  #news_01679675579 {  background-image: url('{{ uploaded_asset($post->banner) }}')  } }   ">
                            <img class=" lazy" data-src="{{ uploaded_asset($post->banner) }}" alt="{{ $post->title }}">
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
            </div>
            <p class="text-center" style="margin-bottom: 8rem;">
                <a class=" btn btn--bordered " href="{{ route('news_page', ['slug' => $cate->slug]) }}" title="Xem Thêm"> Xem Thêm </a>
            </p>
            @endforeach
        </div>
        </section>
    </main>
@endsection
