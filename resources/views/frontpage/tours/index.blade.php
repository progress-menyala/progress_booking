<x-app-layout>
    @include('components.banner', ['title' => 'Tour Packages', 'subtitle' => 'index'])

    <!--Products Section-->
    <section class="products-section products-page">
        <div class="floated-icon left"><img src="{{ asset('storage/images/resource/stones-left.svg') }}" alt="" title=""></div>
        <div class="floated-icon right"><img src="{{ asset('storage/images/resource/stones-right.svg') }}" alt="" title=""></div>
        <div class="floated-icon right-2"><img src="{{ asset('storage/images/resource/plant-icon.svg') }}" alt="" title=""></div>
        <div class="auto-container">

            <div class="title-box centered">
                <h2><span>Featured Tour Packages</span></h2>
                <div class="text">Since 2014, we’ve helped more than 500,000 people of all ages enjoy the best outdoor experience of their lives. Whether it’s for one day or a two-week vacation, close to home or a foreign land.</div>
            </div>

            <div class="row clearfix">
                <!--Block-->

                @foreach ($tours as $tour)
                    <div class="prod-block col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="why-block">
                                <div class="image-box">
                                    <div class="image">
                                        <a href="/tours/{{ $tour->id }}"><img src="{{ asset('storage/' . $tour->image[0]) }}" alt="" class="aspect-ratio-16-9">
                                        </a>
                                    </div>
                                    <div class="hvr-box">
                                        <div class="hvr-inner">
                                            <div class="hvr-content">
                                                <div class="link"><a href="/tours/{{ $tour->id }}" class="theme-btn"><i class="far fa-bars"></i> Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h5><a href="/tours/{{ $tour->id }}">{{ $tour->name }}</a></h5>
                                    <div class="price"><span>Rp. {{ number_format($tour->price )}}</span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="see-more-link"><a href="#" class="theme-btn btn-style-one"><span>Load More......</span></a></div>
        </div>
    </section>
</x-app-layout>