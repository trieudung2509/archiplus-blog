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
@if (count($list_posts) > 0)
<p class="row__full-width-child text-center">
    <button type="button" class="btn btn--bordered" onclick="javascript:App.loadMore({obj: this, target: '.js-load-more-container', url: '/ajax_category/{{ $slug }}?page={{ $page }}'});">
        <span class="btn__inner">Tải Thêm</span>
    </button>
</p>
@endif