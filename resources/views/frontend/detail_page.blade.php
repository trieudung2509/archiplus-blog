@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection
 
@section('content')
<main class="l-main">
          <div class="l-header__container-wrapper">
            <div class="l-header__container">
              <h1 class="headline-2 letters js-wordsplit text-center">{{ $post->title }}</h1>
            </div>
          </div>
          <article class="container">
            <div class="container-medium outline">
              <div class="container-super-narrow content mt-30em mb-20em">
                  {!! $post->description !!}
              </div>
            </div>
          </article>
        </main>
@endsection