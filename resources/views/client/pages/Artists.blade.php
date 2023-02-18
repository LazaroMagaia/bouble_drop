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
            @for ($i=0;$i<10;$i++)
                <div class="col-md-6">
                    <div class="single-artist">
                        <a href="/single_artist/{{$i}}">
                            <img src="/images/gb-home2.jpg" alt="">
                        </a>
                        <div class="link-to-artist">
                            <a href="/single_artist/{{$i}}">
                                <p>
                                    Double Drop
                                </p>
                            </a>
                        </div>
                    </div>
                </div><!--col-md-6-->
            @endfor

        </div><!--row-->
    </div>
   
</section>
 
@include("client.template.footer")