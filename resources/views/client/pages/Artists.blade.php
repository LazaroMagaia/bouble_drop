@include("client.template.header")

    <div class="pages-banner">
        <div class="social-network">
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div><!--social Network-->    
    </div>
</div>
<!---END HEADER-->

<section class="artists">
    <div class="artists-wrapper container">
        <div class="row">
            @foreach ($artists as $artist)
                <div class="col-md-6">
                    <div class="single-artist">
                        <a href="/single_artist/{{$artist->id}}">
                            <img src="{{url("storage/{$artist->image}")}}" alt="">
                        </a>
                        <div class="link-to-artist">
                            <a href="/single_artist/{{$artist->id}}">
                                <p>
                                    {{$artist->name}}
                                </p>
                            </a>
                        </div>
                    </div>
                </div><!--col-md-6-->
            @endforeach

        </div><!--row-->
    </div>
   
</section>
 
@include("client.template.footer")