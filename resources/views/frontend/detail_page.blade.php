@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection
 
@section('content')
<main class="l-main">
          <article class="container">
            <header class="l-header text-center l-header--mt-lg content">
              <div class="l-header__container container-super-narrow mb-30em">
                <h1 class="headline-2 letters js-wordsplit text-center">{{ $post->title }}</h1>
                <time class="l-header__time" datetime="{{ Carbon\Carbon::parse($post->created_at, 'UTC')->setTimezone('Asia/Bangkok')->locale('vi')->diffForHumans() }}">{{ Carbon\Carbon::parse($post->created_at, 'UTC')->setTimezone('Asia/Bangkok')->locale('vi')->diffForHumans() }}</time>
              </div>
              <style>
                @media screen and (max-width:499px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:500px) and (max-width:500px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:501px) and (max-width:641px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:642px) and (max-width:769px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:770px) and (max-width:902px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:903px) and (max-width:1025px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:1026px) and (max-width:1200px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:1201px) and (max-width:1582px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:1583px) and (max-width:1920px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }

                @media screen and (min-width:1921px) {
                  #news-lead-<?php echo $post->id; ?> {
                    background-image: url('{{ uploaded_asset($post->banner) }}')
                  }
                }
              </style>
              <div class="l-header__bg-img" id="news-lead-<?php echo $post->id; ?>">
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
            </header>
            <div class="container-medium outline">
              <div class="container-super-narrow content mt-30em mb-20em">
                  {!! $post->description !!}
              </div>
            </div>
          </article>
        </main>
@endsection