<x-app-layout>
    @include('components.banner', ['title' => 'Organizer', 'subtitle' => 'index'])

    <!--Team Section-->
    <section class="team-section">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/team-icon-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="auto-container">
            <div class="title-box centered">
                <h2><span>Meet Our Tour Guide</span></h2>
            </div>
            <div class="carousel-box">
                <div class="team-carousel owl-theme owl-carousel">

                    @foreach ($organizers as $org)
                        <!--Block-->
                        <div class="team-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="#"><img src="{{ asset('storage/images/resource/team-1.jpg') }}" alt="" title=""></a></div>
                                </div>
                                <div class="lower-box">
                                    <h4><a href="#">{{ $org->name }}</a></h4>
                                    <div class="designation">Tour Guide || Agency Tour</div>
                                    <div class="phone">
                                        <a href="/organizers/{{ $org->id }}" class="theme-btn call-btn"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-app-layout>