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
                        <h1>Double Drop</h1>
                        <p>Mozambique</p>
                    </div>

                    <div class="line"></div>

                    <div class="desc-artist">
                        <p>Genero: <span>Afro House</span></p>
                        <p>Label: 
                            <span class="label">
                            Villahangar, MoBlack Records, Redolent, Inward, Wayu
                            </span>
                        </p>
                    </div>

                    <div class="line"></div>
                    
                    <div class="desc">
                        <p>
                            Double Drop soon became interested in music. In 2006, he began his adventure
                            in the world of production in styles such as HipHop and R & B. In 2018
                            he took a break from music for a year, and outside the city he realized
                            the need for a change in the music he was producing. Today, he is back
                            with a new creative lymph, riding on the evolution of the times but 
                            always tied to his roots. Which allowed him to sign with major labels like Go
                            Deeva, Inward, MoBlack, Transa Records.With the talent of young producers to
                            flourish in Mozambique, he decided to create his label Xibalo, focus on afro
                            and organic contest. His genre of reference is Afro House: a contagious sound,
                            warm and without limits as regards creativity and the fusion of styles. He has
                            a positive spirit, and he loves to enrich himself thanks to the encounter with
                            people and other artists, under the sign of respect and love for humanity, 
                            and with the aim of instilling hope, touching the soul of the listeners, 
                            beyond any race, sex or religion. A nature that is fully reflected in his
                            music.
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