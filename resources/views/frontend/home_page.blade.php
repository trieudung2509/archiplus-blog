@extends('frontend.layouts.app')

@section('meta_title')
    {{ get_setting('meta_title').' | '.get_setting('site_motto') }}
@endsection

@section('canonical') {{ url('') }} @endsection

@section('content')
    <main>
        <section class=" section section--p-mlarge-top     ">
        <div class="content">
            <div class="section__header  container text-center ">
            <p class=""> INTRODUCTION </p>
            <h2 class="headline-2 letters js-wordsplit ">THE <span class="color-gold">XAVIO</span> WAY </h2>
            <p>DESIGN LIKE ARTISTS. STUDY LIKE ANALYSTS. THINK LIKE ENGINEERS.</p>
            </div>
        </div>
        </section>
        <section class=" section section--p-none-top">
        <div class="container  ">
            <h2 class="headline-1 letters js-wordsplit text-center">Our areas of <span class="color-gold">expertise</span>
            </h2>
            <div class="row tile-container">
            <article class="col-lg-4">
                <a href="/what-we-do/residential" class="tile text-center">
                <div class="tile__img">
                    <div class="tile__img-box animation-imageScale lazy" id="image_block_11679676852_2" data-name="image_block_11679676852_2" data-style="    @media screen and (max-width:500px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=445&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:501px) and (max-width:768px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=690&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:769px) and (max-width:992px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=895&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:993px) and (max-width:1025px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=296&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1026px) and (max-width:1300px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=375&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1301px) and (max-width:1301px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=465&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1302px) and (max-width:1921px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=930&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1922px) {  #image_block_11679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }   ">
                    <picture>
                        <img class=" lazy" data-src="https://xavio-design.imgix.net/storage/uploads/Homepage/Hanover%20Lodge%20(23)_cdjjb.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" alt="Residential Lighting">
                    </picture>
                    </div>
                    <span class="tile__img-curtain slideInUp"></span>
                </div>
                <div class="tile__content">
                    <h3 class="headline-4 tile__headline">Residential</h3>
                    <span class="tile__btn">Super-Prime | Ultra-Prime</span>
                </div>
                </a>
            </article>
            <article class="col-lg-4">
                <a href="/what-we-do/hospitality" class="tile text-center">
                <div class="tile__img">
                    <div class="tile__img-box animation-imageScale lazy" id="image_block_21679676852_2" data-name="image_block_21679676852_2" data-style="    @media screen and (max-width:500px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=445&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:501px) and (max-width:768px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=690&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:769px) and (max-width:992px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=895&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:993px) and (max-width:1025px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=296&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1026px) and (max-width:1300px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=375&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1301px) and (max-width:1301px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=465&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1302px) and (max-width:1921px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=930&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1922px) {  #image_block_21679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }   ">
                    <picture>
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=445&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 500px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=690&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 768px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=895&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 992px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=296&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1025px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=375&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1300px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=465&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1301px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=930&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1921px)">
                        <img class=" lazy" data-src="https://xavio-design.imgix.net/storage/uploads/Homepage/fm1_ltqhw.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" alt="Hospitality Lighting">
                    </picture>
                    </div>
                    <span class="tile__img-curtain slideInUp"></span>
                </div>
                <div class="tile__content">
                    <h3 class="headline-4 tile__headline">Hospitality</h3>
                    <span class="tile__btn">Luxury | 5-7 Star</span>
                </div>
                </a>
            </article>
            <article class="col-lg-4">
                <a href="/what-we-do/commercial" class="tile text-center">
                <div class="tile__img">
                    <div class="tile__img-box animation-imageScale lazy" id="image_block_31679676852_2" data-name="image_block_31679676852_2" data-style="    @media screen and (max-width:500px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=445&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:501px) and (max-width:768px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=690&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:769px) and (max-width:992px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=895&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:993px) and (max-width:1025px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=296&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1026px) and (max-width:1300px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=375&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1301px) and (max-width:1301px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=465&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1302px) and (max-width:1921px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=930&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }    @media screen and (min-width:1922px) {  #image_block_31679676852_2 {  background-image: url('https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges')  } }   ">
                    <picture>
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=445&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 500px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=690&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 768px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=895&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 992px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=296&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1025px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=375&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1300px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=465&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1301px)">
                        <source data-srcset="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=930&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" media="(max-width: 1921px)">
                        <img class=" lazy" data-src="https://xavio-design.imgix.net/storage/uploads/What%20We%20Do/Rossco%202a_drehr.jpg?w=1860&h=&fit=crop&q=80&auto=format&fm=png&crop=faces,edges" alt="Commercial Lighting">
                    </picture>
                    </div>
                    <span class="tile__img-curtain slideInUp"></span>
                </div>
                <div class="tile__content">
                    <h3 class="headline-4 tile__headline">Commercial</h3>
                    <span class="tile__btn">Workspace | Showrooms</span>
                </div>
                </a>
            </article>
            </div>
            <p class="text-center">
            <a class=" btn btn--bordered " href="/what-we-do" title="See all our sectors"> See all our sectors </a>
            </p>
        </div>
        </section>
    </main>
@endsection
