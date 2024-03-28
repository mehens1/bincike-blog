@extends('layout.app')


@section('page-content')

    <section id="single_article">
        <h1 class="article-title mb-2">{{ $data['title'] }}</h1>
        <div class="post-meta mb-2"><span class="category">
            <a href="{{ route('category', ['pageName' => 'business']) }}">Business</a></span> | <span class="date-container"><i class="fa-light fa-calendar-days"></i> <span class="date"></span></span></div>
        <div class="article-image" style="width:100%;height:100%;position:relative">
            <img src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Infinix-featured.jpeg"
                class="attachment-full size-full wp-post-image" width="1024"
                height="1024"
                alt="Infinix Launches Note 40 Series in Nigeria, Partners Showmax"
                title="Infinix Launches Note 40 Series in Nigeria, Partners Showmax" />
        </div>
        <div class="article-content">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-11">
                    <div></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-11">
                    <div style="margin-top: 0px; margin-bottom: 0px;"
                        class="sharethis-inline-share-buttons"></div>
                    <p></p>



                    <p>Smartphone manufacturer, Infinix, has launched the Note 40
                        series into the Nigerian market, with a strategic
                        partnership with Showmax to further drive the smartphone
                        sales in Nigeria.</p>



                    <p>Speaking during the launch in Lagos recently, Integrated
                        Marketing Communications and Public Relations Manager at
                        Infinix, Oluwayemisi Ode, said the Note 40 series was
                        designed with unique features that would improve user
                        experience with enhanced quality.</p>



                    <p>According to Ode, the new products would enable the brand to
                        continue its tradition of delighting its customers, through
                        the use of its products.</p>



                    <p>Giving reasons for the choice of Showmax, Uche Michael,
                        Showmax’s representative at the launch said both Infinix and
                        Showmax share the same digital technology drive, hence the
                        choice of partnership. “Showmax is tech driven, and there
                        were certain factors considered before we decided to partner
                        with Infinix. One of these qualities is that Infinix fits in
                        the description of quality and affordability, with a strong
                        drive for digital innovation, just like Showmax,” Michael
                        said.</p>



                    <p>Giving details of the features of the Note 40 series, Ode
                        said the new series which includes the NOTE 40, NOTE 40 Pro,
                        NOTE 40 Pro 5G, and the NOTE 40 Pro+ 5G, marked a new era of
                        smartphone excellence in Nigeria.</p>



                    <p>According to her “The NOTE 40 Series introduces cutting-edge
                        All-Round FastCharge 2.0 technology, with the NOTE 40 Pro
                        featuring a 70W Multi-Speed FastCharge that can reach up to
                        50 per cent charge in just 20 minutes. The series includes
                        magnetic and wireless charging capabilities, ensuring users
                        stay powered at every point. The batteries, boasting
                        high-energy density, ensure up to 1600 charging cycles,
                        offering durability and an extended lifespan.”</p>



                    <p>She added that the Series features are combined with the
                        exclusive partnership with Showmax to equip customers with
                        not just a great device, but also an enriched lifestyle.</p>



                    <p>Speaking about the Infinix partnership, Michael said the
                        purchase of the new Infinix Note 40 series would offer
                        customers the opportunity to enjoy the best of two worlds of
                        Showmax and Infinix.</p>



                    <p>According to him, the partnership involves bringing the
                        English Premier League straight down on the mobile device of
                        the Note 40 series, adding that the purchase of the Note 40
                        series would come with a three-month free subscription and
                        subsequent subscription of N8500 as against the usual
                        N12,500 subscription.</p>



                    <p>NOTE 40 Series users can access the English Premier League,
                        having to watch matches and other entertainment shows on
                        your phone on the go, which means that you don’t have to be
                        confined with the TV at home, you can watch anywhere from
                        your phone.</p>



                    <p>“It is affordable, what we have done with the EPL product is
                        to ensure that the average Nigerian can afford to watch the
                        380 games on their mobile phones wherever they are. With our
                        new tag line which is ‘Streaming for Africa.” Michael said.
                    </p>



                    <p>Highlight of the launch is the announcement of content
                        creators’ challenge where the winner goes home with a Note
                        40, including consolation prizes for other winners.</p>



                    <p>Digital Marketing Manager, Infinix, Tobi Andonu, who
                        announced the competition, said both models support a robust
                        5000mAh battery with PD agreement support, allowing for
                        versatile charging solutions. The Pro models boast a 3D
                        Corning Gorilla Glass for an immersive viewing experience,
                        while the NOTE 40 features an ultra-narrow bezel flat screen
                        design, providing superior visual comfort.</p>



                    <p>Customers of the NOTE 40 series in Nigeria will be rewarded
                        with an exclusive ‘First Sales’ offer from March 19th to
                        March 31st, 2024. Those who purchase the NOTE 40 or NOTE 40
                        Pro from accredited retail outlets nationwide will receive a
                        complimentary First Sales gift box, which includes a JBL
                        speaker and TWS earbuds.</p>
                </div>
                <div class="contentAd"><ins adsbygoogle data-revive-zoneid=14
                        data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                    <script async
                        src="//adserver.thisdaylive.com/www/delivery/asyncjs.php">
                    </script>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div id="disqus_thread"></div>
            </div>
        </div>
    </section>

@endsection
