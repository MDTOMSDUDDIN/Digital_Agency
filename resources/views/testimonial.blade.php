@extends('master.layout')
@section('content')
    
    <!-- testimonials
    ================================================== -->
    <section id="testimonials" class="s-testimonials target-section">

        <div class="s-testimonials__bg"></div>

        <div class="row s-testimonials__header">
            <div class="column large-12">
                <h3>Hear What My Clients Says</h3>
            </div>
        </div>

        <div class="row s-testimonials__content">

            <div class="column">

                <div class="swiper-container testimonial-slider">

                    <div class="swiper-wrapper">

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Tim Cook</strong>
                                    <span>CEO, Apple</span>
                                </cite>
                            </div>
                            <p>
                            Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem. 
                            Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.  Nisi dolores quaerat fuga rem nihil nostrum.
                            Laudantium quia consequatur molestias delectus culpa.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->
        
                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-03.jpg" alt="Author image" class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Sundar Pichai</strong>
                                    <span>CEO, Google</span>
                                </cite>
                            </div>
                            <p>
                            Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                            Nisi eaque consequatur. Voluptatem dignissimos ut ducimus accusantium perspiciatis.
                            Quasi voluptas eius distinctio. Atque eos maxime.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->
        
                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Satya Nadella</strong>
                                    <span>CEO, Microsoft</span>
                                </cite>
                            </div>
                            <p>
                            Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                            Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.
                            Voluptatem dignissimos ut.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->

                        <div class="testimonial-slider__slide swiper-slide">
                            <div class="testimonial-slider__author">
                                <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonial-slider__avatar">
                                <cite class="testimonial-slider__cite">
                                    <strong>Jeff Bezos</strong>
                                    <span>CEO, Amazon</span>
                                </cite>
                            </div>
                            <p>
                            Nunc interdum lacus sit amet orci. Vestibulum dapibus nunc ac augue. Fusce vel dui. In ac felis 
                            quis tortor malesuada pretium. Curabitur vestibulum aliquam leo. Qui sed at corrupti expedita voluptas odit. 
                            Nihil ea quia nesciunt. Ducimus aut sed ipsam.
                            </p>
                        </div> <!-- end testimonial-slider__slide -->
    
                    </div> <!-- end testimonial slider swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div> <!-- end swiper-container -->

            </div> <!-- end column -->

        </div> <!-- end row -->

    </section> <!-- end s-testimonials -->

@endsection