@include("client.template.header")

    <div class="pages-banner">
        <div class="social-network">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div><!--social Network-->

        <div class="home container">
            <div class="banner">
                <div class="row">
                    <div class="col-md-12">

                            @foreach ($all_page as $page)
                                <div class="title">
                                    <h1>{!!$page->title!!}</h1>
                                    <p>{!!$page->nation!!}</p>
                                </div>

                                <div class="desc">
                                    <p>
                                        {!!$page->description!!}
                                    </p>
                                    <div class="btn-call-to-artists">
                                        <a href="/artists">saber mais</a>
                                    </div>
        
                                </div>
                            @endforeach
 
   
        
                    </div>
                </div><!--row-->
            </div>
        </div><!---home container -->
        
    </div>

</div>
<!---END HEADER-->

<div class="home-page container">
    <h1>Nosso Instagram</h1>

    {{--<div id="instafeed"></div>--}}

    <div id="Inst"></div>

</div>


<script>
 /* var feed = new Instafeed({
        limit:8,
        accessToken: 'IGQVJWcFMybHpPX2xLc1ZABWFRnWkxtekpmRjNxNk1aT1dFNkRFcEphcm9TUlJhOTdYdk5lNGluR2ZACMXRwN2lwXzN3N3Fac0ZA6cENOdTRIYUZAUaldVOW1iNjRBYm9KM3BYS09WemNQT2NZAYU5VUURGcwZDZD',
        
    });
    feed.run();*/

</script>

@include("client.template.footer")