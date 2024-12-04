@extends('master.layout')
@section('content')
        <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row">
            <div class="column large-3 tab-12">
                <img class="s-about__pic" src="images/avatars/user-06.jpg" alt="">
            </div>
            <div class="column large-9 tab-12 s-about__content">
                <h3>About Me</h3>
                <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
                quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit 
                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, 
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore 
                magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
                nostrum exercitationem ullam corporis suscipit laboriosam.
                </p>

                <hr>

                <div class="row s-about__content-bottom">
                    <div class="column w-1000-stack">
                        <h3>Contact Details</h3>
    
                        <p>
                        MD TOMAS UDDIN <br>
                        1600 Amphitheatre Parkway <br>
                        Mountain View, CA 94043 US <br>
                        <a href="+01873050391">+01873050391</a> <br>
                        <a href="mdtomasuddin1@gmail.com">mdtomasuddin1@gmail.com</a>
                        </p>
                        
                    </div>
                    <div class="column w-1000-stack">
                        <a href="#0" class="btn btn--download">
                            <svg xmlns="#" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M12 16L16 11 13 11 13 4 11 4 11 11 8 11z"></path><path d="M20,18H4v-7H2v7c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2v-7h-2V18z"></path></svg>
                            Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </section> <!-- end s-about -->


@endsection