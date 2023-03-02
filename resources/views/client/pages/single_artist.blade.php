@include("client.template.header")

    {{--
        <div class="pages-banner">
            <div class="social-network">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div><!--social Network-->    
        </div>
    --}}

</div>
<!---END HEADER-->

<section class="single_artist">
   
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar-artist">
                    <img src="/images/gb-home2.jpg" alt="">
                    <div class="social-network-artist">
                        <a href="" class="single-network">
                            <i class="fa-brands fa-facebook"></i>
                            <p>facebook</p>
                        </a>
                        <a href="" class="single-network">
                            <i class="fa-brands fa-instagram"></i>
                            <p>instagram</p>
                        </a>
                        <a href="" class="single-network">
                            <i class="fa-brands fa-youtube"></i>
                            <p>youtube</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="main-artist">

                    <div class="title">
                        <h1>{{$artist->name}}</h1>
                        <p>Mozambique</p>
                    </div>

                    <div class="line"></div>

                    <div class="desc-artist">
                        <p>Genero: <span>{{$artist->gender}}</span></p>
                        <p>Label: 
                            @foreach ($labels as $label)
                            <span class="label">
                                {{$label->label}},
                            </span>
                            @endforeach

                        </p>
                    </div>

                    <div class="line"></div>
                    
                    <div class="desc">
                        <p>
                            {!!$artist->description!!}
                        </p>
                    </div>

                    <div class="youtube">
                        <iframe src="https://www.youtube.com/embed/8-6aVhvAix8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div><!--youtube-->

                    <div class="line"></div>

                    <div class="Highlights">
                        <h1>Destaques:</h1>

                        @for ($i=0;$i<5;$i++)
                            <div class="Highlights-single">
                            
                                    <h3>2022</h3> 
                                    <h4>Lancamento</h4>
                                    <p><a href="https://www.beatport.com/release/bendingayazi/3852555">
                                        DOUBLE DROP, XABIZO - BENDINGAYAZI [VILLAHANGAR]
                                    </a></p>
                            </div>
                        @endfor
                    </div><!--Highlights-->

                </div>
            </div>

        </div><!--row-->
    </div><!--container-->

</section>
 
@include("client.template.footer")