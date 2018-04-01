@extends('shared.layout')


@section('content')

        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
  
            <!--************************************
                    Featured Ads Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <div class="tg-title">
                                    <h2 class="roboto">დაკარგული ცხოველები</h2>
                                </div>
                                <div class="tg-description">
                                    <p class="roboto">სულ: {{ $posts->count() }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="tg-ads">
                            @foreach($posts as $post)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                <div class="tg-ad ">
                                    <figure>
                                        @if($post->images->count() > 0)
                                        <a href="javascript:void(0);"><img src="/uploads/{{ $post->images->first()->path }}" alt="image description"></a>
                                        @else
                                        <a href="javascript:void(0);"><img src=" https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="image description"></a>
                                       @endif
                                    </figure>
                                    <div class="tg-adcontent">
                                        
                                        <div class="tg-adtitle">
                                            <h3 class="roboto"><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
                                        </div>
                                        <time datetime="{{ $post->lost_date }}" class="roboto">დაკარგვის თარიღი: {{ Carbon\Carbon::parse($post->lost_date)->toDateString() }}</time>
                                        <div class="tg-adprice roboto" >სახელი: {{ $post->pet_name }}</div>
                                        <address class="roboto">{{ $post->lost_address }}</address>
                                        <div class="tg-phonelike">
                                            <a class="tg-btnphone" href="javascript:void(0);">
                                                <i class="icon-phone-handset"></i>
                                                <span><em>{{ $post->user->phone }}</em></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--************************************
                    Featured Ads End
            *************************************-->
                    </main>
        <!--************************************
                Main End
        *************************************-->

@stop
