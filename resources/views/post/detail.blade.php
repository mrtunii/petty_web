@extends('shared.layout')


@section('content')
<style type="text/css">
    .hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}

.media .media-object { max-width: 60px; }
.media-body { position: relative; }
.media-date { 
    position: absolute; 
    right: 25px;
    top: 25px;
}
.media-date li { padding: 0; }
.media-date li:first-child:before { content: ''; }
.media-date li:before { 
    content: '.';
    margin-left: -2px; 
    margin-right: 2px;
}
.media-comment { margin-bottom: 20px; }
.media-replied { margin: 0 0 20px 50px; }
.media-replied .media-heading { padding-left: 6px; }
</style>
    
            <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    About Us Start
            *************************************-->
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
                            <aside id="tg-sidebar" class="tg-sidebar">
                                <div class="tg-sellercontactdetail">
                                    <div class="tg-sellertitle"><h1 class="roboto">პატრონი</h1></div>
                                    <div class="tg-sellercontact">
                                        <div class="tg-memberinfobox">
                                            <figure><a href="javascript:void(0);"><img src="http://www.gravatar.com/avatar/{{ md5($post->user->email) }}?size=70" alt="image description"></a></figure>
                                            <div class="tg-memberinfo">
                                                <h3><a href="javascript:void(0);" class="roboto">{{ $post->user->firstname.' '.$post->user->lastname }}</a></h3>
                                            </div>
                                        </div>
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span>
                                                <em>{{ $post->user->phone }}</em>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tg-sellerlocation">
                                        
                                        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3 hidden">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                            <h3 class="roboto">{{ $post->pet_name }}</h3>
                                        </div>
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    @foreach($post->images as $image)
                                       @if($loop->first)
                                        <div class="active item" data-slide-number="0">
                                            <img src="/uploads/{{ $image->path }}"></div>
                                            @else
                                            <div class="item" data-slide-number="0">
                                            <img src="/uploads/{{ $image->path }}"></div>
                                            @endif
                                    @endforeach
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
         <div style="margin-top:50px;" class="text-center">
            <!--/Slider-->
            @if(Auth::check())
            <a class="tg-btn" href="/comment/add/{{ $post->id }}">
                                <i class="icon-bookmark"></i>
                                <span class="roboto">კომენტარის დამატება</span>
                            </a>
                            @endif
                        </div>
                                    </div>
                                </div>
                               
                                
                            </aside>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
                            <div id="tg-content" class="tg-content">
                                <div class="tg-ad tg-detail tg-addetail">
                                    <div class="tg-adcontent">
                                      
                                        <div class="tg-adtitle">
                                            <h2>{{ $post->title }}</h2>
                                            <div class="tg-adadded">
                                                <i class="icon-smartphone"></i>
                                                <span class="roboto">დამატების თარიღი: {{ $post->created_at }}</span>
                                            </div>
                                        </div>
                                       
                                        <div class="tg-share">
                                            
                                        </div>
                                    </div>
                                    <div id="tg-locationmap" class="tg-locationmap"></div>
                                    <div class="tg-description" style="margin-top: 20px;">
                                        <ul class="roboto">
                                            <li>სახელი:  <b class="roboto_bold">{{ $post->pet_name }}</b> </li>
                                            <li>დაკარგვის თარიღი: <b class="roboto_bold"> {{ Carbon\Carbon::parse($post->lost_date)->toDateString() }}</b> </li>
                                             <li>დაკარგვის ადგილი: <b class="roboto_bold"> {{ $post->lost_address }} </b></li>
                                        </ul>
                                            <h3 class="roboto">დამატებითი კომენტარი</h3> <br>
                                        {{ $post->description }}
                                        <hr>
                                        <div style="margin-top:30px;">
                                            <div class="text-center">
                                                <h3 class="roboto">გამოხმაურებები({{ $post->comments->count() }})</h3>
                                            </div>
                                            @if($post->comments->count() > 0)
                                            <ul class="media-list">
                    @foreach($post->comments()->orderBy('seen_date','desc')->get() as $comment)
                      <li class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="http://www.gravatar.com/avatar/{{ md5($comment->user->email) }}?size=70" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews roboto">{{ $comment->user->firstname.' '.$comment->user->lastname }} :
                                {{ $comment->seen_date }}
                              </h4>
                              <address class="roboto" style="font-size:12px;">{{ $post->lost_address }}</address>
                              
                              <p class="media-comment">
                                {{ $comment->description }}
                              </p>
                              @if($comment->image_path != null)
                              <div class="embed-responsive embed-responsive-16by9">
                                  <a href="/uploads/{{ $comment->image_path }}" target="_blank">
                                      <img src="/uploads/{{ $comment->image_path }}" style="width: 300px; height: 300px;">
                                  </a>
                              </div>
                              @endif
                              
                              @if( Auth::check() && $post->user_id == Auth::user()->id)
                             <a class="btn btn-danger btn-circle text-uppercase" href="/comments/remove/{{ $comment->id }}" id="reply"><span class="glyphicon glyphicon-remove"></span> არ არის ჩემი</a>
                             @endif

                          </div>              
                        </div>
                      </li>
                      @endforeach
                     
                    </ul>
                     @endif
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!--************************************
                    About Us End
            *************************************-->
        </main>
        <!--************************************
                Main End
        *************************************-->

@stop


@section('scripts')
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>

<script type="text/javascript">
      jQuery(document).ready(function($) {
    
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });

        var myLatlng = new google.maps.LatLng({{ $post->lat }},{{ $post->long }});
var mapOptions = {
  zoom: 12,
  center: myLatlng
  
}
var map = new google.maps.Map(document.getElementById("tg-locationmap"), mapOptions);
var defaultMarker = new google.maps.Marker({
    position: myLatlng,
    title:"დაკარგვის ადგილი",
    animation: google.maps.Animation.DROP,
    icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png'
});

// To add the marker to the map, call setMap();
defaultMarker.setMap(map);
$.get('/api/comments/get/positions/{{ $post->id }}', function(data) {
    for(i=0; i<data.length; i++) {
        label = (i+1).toString();
        var latlang = new google.maps.LatLng(data[i].lat,data[i].long);
var marker = new google.maps.Marker({
    position: latlang,
    animation: google.maps.Animation.DROP,
    label: label
});

// To add the marker to the map, call setMap();
marker.setMap(map);
    }
});

});


</script>
@stop
