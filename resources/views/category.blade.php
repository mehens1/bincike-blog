@extends('layout.app')


{{-- @section('page-content')
<h1>{{ $data['page_name'] }} page</h1>
<p>{{ $data['page_name'] }} page is still under construction</p>

@endsection --}}


@section('page-content')


    <section class="news-category mb-4">
        <div class="section-heading">
            <h2 class="title"><span>Latest {{ $data['page_name'] }}</span></h2>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="featured-article-container">
                    <article class="typography featured">
                        <div style="width:100%;height:100%"><img alt="Image"
                                loading="lazy" decoding="async" data-nimg="fill"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                sizes="100vw"
                                srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=3840&amp;q=75 3840w"
                                src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=3840&amp;q=75" />
                        </div>
                        <div class="article-content matchHeight">
                            <h2 class=""><a
                                    href="/index.php/2024/03/27/mbah-inaugurates-esut-governing-council-says-education-strongest-weapon-against-poverty"><span>Mbah
                                        Inaugurates ESUT Governing Council, Says
                                        Education Strongest Weapon against
                                        Poverty</span></a></h2>
                            <div class="excerpt">
                                <p>Governor of Enugu State, Dr. Peter Mbah, has
                                    inaugurated the newly constituted Governing
                                    Council of the Enugu State University of
                                    Science and Technology, ESUT, in line with
                                    Section 6 (1)</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="article-column">
                    <article class="typography horizontal">
                        <div class="article-image thumbnail"><a
                                title="Tinubu Confers National Honours on Slain Military Personnel"
                                href="/index.php/2024/03/27/tinubu-confers-national-honours-on-slain-military-personnel">
                                <div
                                    style="width:100%;padding-top:100%;position:relative">
                                    <img alt="Image" loading="lazy"
                                        decoding="async" data-nimg="fill"
                                        class="attachment-thumbnail"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                        sizes="100vw"
                                        srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=3840&amp;q=75 3840w"
                                        src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=3840&amp;q=75" />
                                </div>
                            </a></div>
                        <div class="article-content matchHeight">
                            <h2 class="h6"><a
                                    href="/index.php/2024/03/27/tinubu-confers-national-honours-on-slain-military-personnel"><span>Tinubu
                                        Confers National Honours on Slain
                                        Military Personnel</span></a></h2>
                        </div>
                    </article>
                    <article class="typography horizontal">
                        <div class="article-image thumbnail"><a
                                title="Tinubu Steps Up Move to Revive Nigeria&amp;#8217;s Economy"
                                href="/index.php/2024/03/27/tinubu-steps-up-move-to-revive-nigerias-economy">
                                <div
                                    style="width:100%;padding-top:100%;position:relative">
                                    <img alt="Image" loading="lazy"
                                        decoding="async" data-nimg="fill"
                                        class="attachment-thumbnail"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                        sizes="100vw"
                                        srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=3840&amp;q=75 3840w"
                                        src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=3840&amp;q=75" />
                                </div>
                            </a></div>
                        <div class="article-content matchHeight">
                            <h2 class="h6"><a
                                    href="/index.php/2024/03/27/tinubu-steps-up-move-to-revive-nigerias-economy"><span>Tinubu
                                        Steps Up Move to Revive Nigeria&#8217;s
                                        Economy</span></a></h2>
                        </div>
                    </article>
                    <article class="typography horizontal">
                        <div class="article-image thumbnail"><a
                                title="News in Photographs: Burial of 18 Military Personnel"
                                href="/index.php/2024/03/27/news-in-photographs-burial-of-18-military-personnel">
                                <div
                                    style="width:100%;padding-top:100%;position:relative">
                                    <img alt="Image" loading="lazy"
                                        decoding="async" data-nimg="fill"
                                        class="attachment-thumbnail"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                        sizes="100vw"
                                        srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=3840&amp;q=75 3840w"
                                        src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=3840&amp;q=75" />
                                </div>
                            </a></div>
                        <div class="article-content matchHeight">
                            <h2 class="h6"><a
                                    href="/index.php/2024/03/27/news-in-photographs-burial-of-18-military-personnel"><span>News
                                        in Photographs: Burial of 18 Military
                                        Personnel</span></a></h2>
                        </div>
                    </article>
                    <article class="typography horizontal">
                        <div class="article-image thumbnail"><a
                                title="APC Leaders Hail Uzodimma’s Appointment as Party’s Coordinator in S&amp;#8217;East"
                                href="/index.php/2024/03/27/apc-leaders-hail-uzodimmas-appointment-as-partys-coordinator-in-seast">
                                <div
                                    style="width:100%;padding-top:100%;position:relative">
                                    <img alt="Image" loading="lazy"
                                        decoding="async" data-nimg="fill"
                                        class="attachment-thumbnail"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                        sizes="100vw"
                                        srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=3840&amp;q=75 3840w"
                                        src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=3840&amp;q=75" />
                                </div>
                            </a></div>
                        <div class="article-content matchHeight">
                            <h2 class="h6"><a
                                    href="/index.php/2024/03/27/apc-leaders-hail-uzodimmas-appointment-as-partys-coordinator-in-seast"><span>APC
                                        Leaders Hail Uzodimma’s Appointment as
                                        Party’s Coordinator in
                                        S&#8217;East</span></a></h2>
                        </div>
                    </article>
                    <article class="typography horizontal">
                        <div class="article-image thumbnail"><a
                                title="Terror Attack: Olawepo-Hashim Canvasses Stronger Global Peace"
                                href="/index.php/2024/03/27/terror-attack-olawepo-hashim-canvasses-stronger-global-peace">
                                <div
                                    style="width:100%;padding-top:100%;position:relative">
                                    <img alt="Image" loading="lazy"
                                        decoding="async" data-nimg="fill"
                                        class="attachment-thumbnail"
                                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                        sizes="100vw"
                                        srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=3840&amp;q=75 3840w"
                                        src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=3840&amp;q=75" />
                                </div>
                            </a></div>
                        <div class="article-content matchHeight">
                            <h2 class="h6"><a
                                    href="/index.php/2024/03/27/terror-attack-olawepo-hashim-canvasses-stronger-global-peace"><span>Terror
                                        Attack: Olawepo-Hashim Canvasses
                                        Stronger Global Peace</span></a></h2>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <div class="contentAd"><ins adsbygoogle data-revive-zoneid=10
            data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
        <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php">
        </script>
    </div>
    <section class="news-category mb-3">
        <div class="section-heading">
            <h2><span>More
                    <!-- --> Articles
                </span></h2>
        </div>
        <div class="row mb-3">
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="Easter: FG Declares Friday, Monday Public Holidays"
                            href="/index.php/2024/03/27/easter-fg-declares-friday-monday-public-holidays">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-800x450.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/easter-fg-declares-friday-monday-public-holidays"><span>Easter:
                                    FG Declares Friday, Monday Public
                                    Holidays</span></a></h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">05:12, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Michael Olugbode"
                                    href="/author/michael">Michael
                                    Olugbode</a></span></div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="Shun Autocracy, FCT Minister Admonishes Nigerian Leaders"
                            href="/index.php/2024/03/27/shun-autocracy-fct-minister-admonishes-nigerian-leaders">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/shun-autocracy-fct-minister-admonishes-nigerian-leaders"><span>Shun
                                    Autocracy, FCT Minister Admonishes Nigerian
                                    Leaders</span></a></h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">04:11, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Olawale Ajimotokan"
                                    href="/author/olawale">Olawale
                                    Ajimotokan</a></span></div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="Tinubu Congratulates Bassirou Faye on Election As Senegalese President "
                            href="/index.php/2024/03/27/tinubu-congratulates-bassirou-faye-on-election-as-senegalese-president">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-congratulates-bassirou-faye-on-election-as-senegalese-president"><span>Tinubu
                                    Congratulates Bassirou Faye on Election As
                                    Senegalese President </span></a></h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">02:58, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Deji Elumoye"
                                    href="/author/elumoye">Deji
                                    Elumoye</a></span></div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="Easter: FRSC Deploys 743 Vehicles, 144 Motorbikes for Enhanced Patrol Logistics "
                            href="/index.php/2024/03/27/easter-frsc-deploys-743-vehicles-144-motorbikes-for-enhanced-patrol-logistics">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-800x450.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/easter-frsc-deploys-743-vehicles-144-motorbikes-for-enhanced-patrol-logistics"><span>Easter:
                                    FRSC Deploys 743 Vehicles, 144 Motorbikes
                                    for Enhanced Patrol Logistics </span></a>
                        </h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">02:54, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Kasim Sumaina"
                                    href="/author/kasim">Kasim
                                    Sumaina</a></span></div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="NSCDC Uncovers 10 Illegal Refineries, Arrest Five  Suspects in Rivers"
                            href="/index.php/2024/03/27/nscdc-uncovers-10-illegal-refineries-arrest-five-suspects-in-rivers">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-800x450.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/nscdc-uncovers-10-illegal-refineries-arrest-five-suspects-in-rivers"><span>NSCDC
                                    Uncovers 10 Illegal Refineries, Arrest Five
                                    Suspects in Rivers</span></a></h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">12:10, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Ima Ekanem"
                                    href="/author/ima">Ima Ekanem</a></span>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography vertical">
                    <div class="article-image medium"><a
                            title="NISER: Digital Policing ‘ll Enhance Effective Crime Control in Nigeria"
                            href="/index.php/2024/03/27/niser-digital-policing-ll-enhance-effective-crime-control-in-nigeria">
                            <div
                                style="width:100%;height:0;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-800x450.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <div class="post-meta mb-1"><span class="category"><a
                                    href="/category/nigeria"><span>Nigeria</span></a></span>
                        </div>
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/niser-digital-policing-ll-enhance-effective-crime-control-in-nigeria"><span>NISER:
                                    Digital Policing ‘ll Enhance Effective Crime
                                    Control in Nigeria</span></a></h2>
                        <div class="post-date"><span class="date-container"><i
                                    class="fa-light fa-calendar-days"></i><span
                                    class="date">11:43, 27th Mar,
                                    2024</span></span><span> by <a
                                    title="Posts by Yinka Kolawole"
                                    href="/author/yinkakolawole">Yinka
                                    Kolawole</a></span></div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Mbah Inaugurates ESUT Governing Council, Says Education Strongest Weapon against Poverty"
                            href="/index.php/2024/03/27/mbah-inaugurates-esut-governing-council-says-education-strongest-weapon-against-poverty">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-14.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/mbah-inaugurates-esut-governing-council-says-education-strongest-weapon-against-poverty"><span>Mbah
                                    Inaugurates ESUT Governing Council, Says
                                    Education Strongest Weapon against
                                    Poverty</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu Confers National Honours on Slain Military Personnel"
                            href="/index.php/2024/03/27/tinubu-confers-national-honours-on-slain-military-personnel">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-29.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-confers-national-honours-on-slain-military-personnel"><span>Tinubu
                                    Confers National Honours on Slain Military
                                    Personnel</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu Steps Up Move to Revive Nigeria&amp;#8217;s Economy"
                            href="/index.php/2024/03/27/tinubu-steps-up-move-to-revive-nigerias-economy">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-21.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-steps-up-move-to-revive-nigerias-economy"><span>Tinubu
                                    Steps Up Move to Revive Nigeria&#8217;s
                                    Economy</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="News in Photographs: Burial of 18 Military Personnel"
                            href="/index.php/2024/03/27/news-in-photographs-burial-of-18-military-personnel">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBurial.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/news-in-photographs-burial-of-18-military-personnel"><span>News
                                    in Photographs: Burial of 18 Military
                                    Personnel</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="APC Leaders Hail Uzodimma’s Appointment as Party’s Coordinator in S&amp;#8217;East"
                            href="/index.php/2024/03/27/apc-leaders-hail-uzodimmas-appointment-as-partys-coordinator-in-seast">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHope-Uzodimma.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/apc-leaders-hail-uzodimmas-appointment-as-partys-coordinator-in-seast"><span>APC
                                    Leaders Hail Uzodimma’s Appointment as
                                    Party’s Coordinator in
                                    S&#8217;East</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Terror Attack: Olawepo-Hashim Canvasses Stronger Global Peace"
                            href="/index.php/2024/03/27/terror-attack-olawepo-hashim-canvasses-stronger-global-peace">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGbenga-Olawepo-Hashim-150x150.jpeg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/terror-attack-olawepo-hashim-canvasses-stronger-global-peace"><span>Terror
                                    Attack: Olawepo-Hashim Canvasses Stronger
                                    Global Peace</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Easter: FG Declares Friday, Monday Public Holidays"
                            href="/index.php/2024/03/27/easter-fg-declares-friday-monday-public-holidays">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFederal-Government-1-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/easter-fg-declares-friday-monday-public-holidays"><span>Easter:
                                    FG Declares Friday, Monday Public
                                    Holidays</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Shun Autocracy, FCT Minister Admonishes Nigerian Leaders"
                            href="/index.php/2024/03/27/shun-autocracy-fct-minister-admonishes-nigerian-leaders">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMariya-Mahmoud.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/shun-autocracy-fct-minister-admonishes-nigerian-leaders"><span>Shun
                                    Autocracy, FCT Minister Admonishes Nigerian
                                    Leaders</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu Congratulates Bassirou Faye on Election As Senegalese President "
                            href="/index.php/2024/03/27/tinubu-congratulates-bassirou-faye-on-election-as-senegalese-president">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FBassirou-Faye.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-congratulates-bassirou-faye-on-election-as-senegalese-president"><span>Tinubu
                                    Congratulates Bassirou Faye on Election As
                                    Senegalese President </span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Easter: FRSC Deploys 743 Vehicles, 144 Motorbikes for Enhanced Patrol Logistics "
                            href="/index.php/2024/03/27/easter-frsc-deploys-743-vehicles-144-motorbikes-for-enhanced-patrol-logistics">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FFRSC-150x150.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/easter-frsc-deploys-743-vehicles-144-motorbikes-for-enhanced-patrol-logistics"><span>Easter:
                                    FRSC Deploys 743 Vehicles, 144 Motorbikes
                                    for Enhanced Patrol Logistics </span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="NSCDC Uncovers 10 Illegal Refineries, Arrest Five  Suspects in Rivers"
                            href="/index.php/2024/03/27/nscdc-uncovers-10-illegal-refineries-arrest-five-suspects-in-rivers">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fnscdc-logo-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/nscdc-uncovers-10-illegal-refineries-arrest-five-suspects-in-rivers"><span>NSCDC
                                    Uncovers 10 Illegal Refineries, Arrest Five
                                    Suspects in Rivers</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="NISER: Digital Policing ‘ll Enhance Effective Crime Control in Nigeria"
                            href="/index.php/2024/03/27/niser-digital-policing-ll-enhance-effective-crime-control-in-nigeria">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNISER-150x150.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/niser-digital-policing-ll-enhance-effective-crime-control-in-nigeria"><span>NISER:
                                    Digital Policing ‘ll Enhance Effective Crime
                                    Control in Nigeria</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Mbah Signs Bill to Establish Teaching Hospital in Enugu North"
                            href="/index.php/2024/03/27/mbah-signs-bill-to-establish-teaching-hospital-in-enugu-north">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPeter-Mbah-7.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/mbah-signs-bill-to-establish-teaching-hospital-in-enugu-north"><span>Mbah
                                    Signs Bill to Establish Teaching Hospital in
                                    Enugu North</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Barau, Oluwo Harp on Unity, Say Diversity, Beauty of Nigeria "
                            href="/index.php/2024/03/27/barau-oluwo-harp-on-unity-say-diversity-beauty-of-nigeria">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FJibrin-Barau-and-Oba-Abdulrasheed-Akanbi.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/barau-oluwo-harp-on-unity-say-diversity-beauty-of-nigeria"><span>Barau,
                                    Oluwo Harp on Unity, Say Diversity, Beauty
                                    of Nigeria </span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Ex-Kwara Finance Commissioner Faults EFCC over  Declaration, Denies N411m Fraud"
                            href="/index.php/2024/03/27/ex-kwara-finance-commissioner-faults-efcc-over-declaration-denies-n411m-fraud">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAdemola-Banu-150x150.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/ex-kwara-finance-commissioner-faults-efcc-over-declaration-denies-n411m-fraud"><span>Ex-Kwara
                                    Finance Commissioner Faults EFCC over
                                    Declaration, Denies N411m Fraud</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Rainfall Washes Off Newly Constructed Road in Anambra"
                            href="/index.php/2024/03/27/rainfall-washes-off-newly-constructed-road-in-anambra">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAnambra-State-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/rainfall-washes-off-newly-constructed-road-in-anambra"><span>Rainfall
                                    Washes Off Newly Constructed Road in
                                    Anambra</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="CBN Doubles Down on Monetary Tightening, Again, Raises MPR to 24.75% to Curb Inflation"
                            href="/index.php/2024/03/27/cbn-doubles-down-on-monetary-tightening-again-raises-mpr-to-24-75-to-curb-inflation">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCBN-3.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/cbn-doubles-down-on-monetary-tightening-again-raises-mpr-to-24-75-to-curb-inflation"><span>CBN
                                    Doubles Down on Monetary Tightening, Again,
                                    Raises MPR to 24.75% to Curb
                                    Inflation</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu: We Must Treat Kidnappers as Terrorists, They&amp;#8217;re Cowards"
                            href="/index.php/2024/03/27/tinubu-we-must-treat-kidnappers-as-terrorists-theyre-cowards">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTINUBU-PIX-3-1.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-we-must-treat-kidnappers-as-terrorists-theyre-cowards"><span>Tinubu:
                                    We Must Treat Kidnappers as Terrorists,
                                    They&#8217;re Cowards</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Lokpobiri Seeks Reduction of Bureaucracy in Petroleum Sector, Eyes $5bn in Bonga North Project"
                            href="/index.php/2024/03/27/lokpobiri-seeks-reduction-of-bureaucracy-in-petroleum-sector-eyes-5bn-in-bonga-north-project">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHeineken-Lokpobiri-1.jpeg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/lokpobiri-seeks-reduction-of-bureaucracy-in-petroleum-sector-eyes-5bn-in-bonga-north-project"><span>Lokpobiri
                                    Seeks Reduction of Bureaucracy in Petroleum
                                    Sector, Eyes $5bn in Bonga North
                                    Project</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="NACCIMA Writes Edun, Cardoso, Says Govt Borrowing from Banks Blocking Private Sector Access to Credit"
                            href="/index.php/2024/03/27/naccima-writes-edun-cardoso-says-govt-borrowing-from-banks-blocking-private-sector-access-to-credit">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNACCIMA-1.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/naccima-writes-edun-cardoso-says-govt-borrowing-from-banks-blocking-private-sector-access-to-credit"><span>NACCIMA
                                    Writes Edun, Cardoso, Says Govt Borrowing
                                    from Banks Blocking Private Sector Access to
                                    Credit</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Niger Assembly Asks State Governor to Pullout of AEDC"
                            href="/index.php/2024/03/27/niger-assembly-asks-state-governor-to-pullout-of-aedc">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FMohammed-Umaru-Bago.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/niger-assembly-asks-state-governor-to-pullout-of-aedc"><span>Niger
                                    Assembly Asks State Governor to Pullout of
                                    AEDC</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="National Assembly Seeks WTO Collaboration on Digital, Marine Economies"
                            href="/index.php/2024/03/27/national-assembly-seeks-wto-collaboration-on-digital-marine-economies">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNational-Assembly--150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/national-assembly-seeks-wto-collaboration-on-digital-marine-economies"><span>National
                                    Assembly Seeks WTO Collaboration on Digital,
                                    Marine Economies</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Value Re-Orientation: NOA to Establish Citizens’ Brigade in Schools"
                            href="/index.php/2024/03/27/value-re-orientation-noa-to-establish-citizens-brigade-in-schools">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNOA-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/value-re-orientation-noa-to-establish-citizens-brigade-in-schools"><span>Value
                                    Re-Orientation: NOA to Establish Citizens’
                                    Brigade in Schools</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="NUPRC Meets with Crude Producers, Refineries’ Owners, Wants Full Adherence to Domestic Supply Policy"
                            href="/index.php/2024/03/27/nuprc-meets-with-crude-producers-refineries-owners-wants-full-adherence-to-domestic-supply-policy">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNUPRC-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/nuprc-meets-with-crude-producers-refineries-owners-wants-full-adherence-to-domestic-supply-policy"><span>NUPRC
                                    Meets with Crude Producers, Refineries’
                                    Owners, Wants Full Adherence to Domestic
                                    Supply Policy</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="AfDB Approves $50m Loan to Support Climate Change Resilience, Improve Livelihoods in Yobe"
                            href="/index.php/2024/03/27/afdb-approves-50m-loan-to-support-climate-change-resilience-improve-livelihoods-in-yobe">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAfDB-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/afdb-approves-50m-loan-to-support-climate-change-resilience-improve-livelihoods-in-yobe"><span>AfDB
                                    Approves $50m Loan to Support Climate Change
                                    Resilience, Improve Livelihoods in
                                    Yobe</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="FG, OPS Commit to Addressing Post-harvest Losses with Cold Chain Technology"
                            href="/index.php/2024/03/27/fg-ops-commit-to-addressing-post-harvest-losses-with-cold-chain-technology">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAbubakar-Kyari.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/fg-ops-commit-to-addressing-post-harvest-losses-with-cold-chain-technology"><span>FG,
                                    OPS Commit to Addressing Post-harvest Losses
                                    with Cold Chain Technology</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="China Files WTO Dispute against US over Discriminatory Subsidies"
                            href="/index.php/2024/03/27/china-files-wto-dispute-against-us-over-discriminatory-subsidies-2">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FChina-150x150.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/china-files-wto-dispute-against-us-over-discriminatory-subsidies-2"><span>China
                                    Files WTO Dispute against US over
                                    Discriminatory Subsidies</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Insurance Assets Hit N2.67 Trillion as Oil &amp;amp; Gas Drives Industry&amp;#8217;s Growth"
                            href="/index.php/2024/03/27/insurance-assets-hit-n2-67-trillion-as-oil-gas-drives-industrys-growth">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FInsurance-1-150x150.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/insurance-assets-hit-n2-67-trillion-as-oil-gas-drives-industrys-growth"><span>Insurance
                                    Assets Hit N2.67 Trillion as Oil &amp; Gas
                                    Drives Industry&#8217;s Growth</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Climate Change: Lagos Govt Alerts Residents in Vulnerable Location of Possible Flooding"
                            href="/index.php/2024/03/27/climate-change-lagos-govt-alerts-residents-in-vulnerable-location-of-possible-flooding">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fclimate-change.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/climate-change-lagos-govt-alerts-residents-in-vulnerable-location-of-possible-flooding"><span>Climate
                                    Change: Lagos Govt Alerts Residents in
                                    Vulnerable Location of Possible
                                    Flooding</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Moghalu Briefs EU on Nigerian Economy, Named Fellow of AIA"
                            href="/index.php/2024/03/27/moghalu-briefs-eu-on-nigerian-economy-named-fellow-of-aia">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKingsley-Moghalu-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/moghalu-briefs-eu-on-nigerian-economy-named-fellow-of-aia"><span>Moghalu
                                    Briefs EU on Nigerian Economy, Named Fellow
                                    of AIA</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Shettima to Public Relations Experts: Reinvent Nigeria&amp;#8217;s Story with Truthful Narratives"
                            href="/index.php/2024/03/27/shettima-to-public-relations-experts-reinvent-nigerias-story-with-truthful-narratives">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/shettima-to-public-relations-experts-reinvent-nigerias-story-with-truthful-narratives"><span>Shettima
                                    to Public Relations Experts: Reinvent
                                    Nigeria&#8217;s Story with Truthful
                                    Narratives</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Nigeria to Kick-start ‘Roll Out Malaria Vaccines’ Initiative in Kebbi, Bayelsa States"
                            href="/index.php/2024/03/27/nigeria-to-kick-start-roll-out-malaria-vaccines-initiative-in-kebbi-bayelsa-states">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fmalaria-150x150.jpeg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/nigeria-to-kick-start-roll-out-malaria-vaccines-initiative-in-kebbi-bayelsa-states"><span>Nigeria
                                    to Kick-start ‘Roll Out Malaria Vaccines’
                                    Initiative in Kebbi, Bayelsa
                                    States</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Optiva Capital Delivers on Promise to Clients with Completion of Five-Star Resort in Grenada"
                            href="/index.php/2024/03/27/optiva-capital-delivers-on-promise-to-clients-with-completion-of-five-star-resort-in-grenada">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FOptiva-Capital.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/optiva-capital-delivers-on-promise-to-clients-with-completion-of-five-star-resort-in-grenada"><span>Optiva
                                    Capital Delivers on Promise to Clients with
                                    Completion of Five-Star Resort in
                                    Grenada</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="We&amp;#8217;re Not Under Generational Curse, Wigwe&amp;#8217;s Family Replies Apostle Suleman"
                            href="/index.php/2024/03/27/were-not-under-generational-curse-wigwes-family-replies-apostle-suleman">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FHerbert-Wigwe--150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/were-not-under-generational-curse-wigwes-family-replies-apostle-suleman"><span>We&#8217;re
                                    Not Under Generational Curse, Wigwe&#8217;s
                                    Family Replies Apostle Suleman</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Okuama: Clark Laments Army Invasion of His Country Home in Kiagbodo and Father&amp;#8217;s Ughelli House"
                            href="/index.php/2024/03/27/okuama-clark-laments-army-invasion-of-his-country-home-in-kiagbodo-and-fathers-ughelli-house">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FEdwin-Clark-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/okuama-clark-laments-army-invasion-of-his-country-home-in-kiagbodo-and-fathers-ughelli-house"><span>Okuama:
                                    Clark Laments Army Invasion of His Country
                                    Home in Kiagbodo and Father&#8217;s Ughelli
                                    House</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Legal Experts Call for Amendment of NDDC Act to End Generated Controversies"
                            href="/index.php/2024/03/27/legal-experts-call-for-amendment-of-nddc-act-to-end-generated-controversies">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNDDC-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/legal-experts-call-for-amendment-of-nddc-act-to-end-generated-controversies"><span>Legal
                                    Experts Call for Amendment of NDDC Act to
                                    End Generated Controversies</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="FG Moves to End Gas Flaring in Nigeria by 2030"
                            href="/index.php/2024/03/27/fg-moves-to-end-gas-flaring-in-nigeria-by-2030">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FIziaq-Adekunle-Salako.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/fg-moves-to-end-gas-flaring-in-nigeria-by-2030"><span>FG
                                    Moves to End Gas Flaring in Nigeria by
                                    2030</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="EKEDC Appoints Rekhiat Momoh Acting CEO"
                            href="/index.php/2024/03/27/ekedc-appoints-rekhiat-momoh-acting-ceo">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fekedcp_logo-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/ekedc-appoints-rekhiat-momoh-acting-ceo"><span>EKEDC
                                    Appoints Rekhiat Momoh Acting CEO</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="PDP to 26 State Chairmen: Your Tenures Expire Soon"
                            href="/index.php/2024/03/27/pdp-to-26-state-chairmen-your-tenures-expire-soon">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FPDP-LOGO-150x150.gif&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/pdp-to-26-state-chairmen-your-tenures-expire-soon"><span>PDP
                                    to 26 State Chairmen: Your Tenures Expire
                                    Soon</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Rivers Crisis: Wike Loses More Supporters to Fubara"
                            href="/index.php/2024/03/27/rivers-crisis-wike-loses-more-supporters-to-fubara">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FNyesom-Wike-4.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/rivers-crisis-wike-loses-more-supporters-to-fubara"><span>Rivers
                                    Crisis: Wike Loses More Supporters to
                                    Fubara</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="You Can’t Underestimate Power of Word as Stabiliser, Shettima Warns"
                            href="/index.php/2024/03/27/you-cant-underestimate-power-of-word-as-stabiliser-shettima-warns">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FKashim-Shettima-3.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/you-cant-underestimate-power-of-word-as-stabiliser-shettima-warns"><span>You
                                    Can’t Underestimate Power of Word as
                                    Stabiliser, Shettima Warns</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu Approves Dualisation of Ado-Ekiti-Ikere-Akoko Road After Students’ Protest"
                            href="/index.php/2024/03/27/tinubu-approves-dualisation-of-ado-ekiti-ikere-akoko-road-after-students-protest">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-24.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-approves-dualisation-of-ado-ekiti-ikere-akoko-road-after-students-protest"><span>Tinubu
                                    Approves Dualisation of
                                    Ado-Ekiti-Ikere-Akoko Road After Students’
                                    Protest</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Kano Court Sentences Chinese National to Death By Hanging for Killing Girlfriend"
                            href="/index.php/2024/03/27/kano-court-sentences-chinese-national-to-death-by-hanging-for-killing-girlfriend">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FCourt.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/kano-court-sentences-chinese-national-to-death-by-hanging-for-killing-girlfriend"><span>Kano
                                    Court Sentences Chinese National to Death By
                                    Hanging for Killing Girlfriend</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Tinubu Appoints Maj-Gen Laka National Coordinator for Counter-Terrorism Centre"
                            href="/index.php/2024/03/27/tinubu-appoints-maj-gen-laka-national-coordinator-for-counter-terrorism-centre">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FTinubu-2-4.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/tinubu-appoints-maj-gen-laka-national-coordinator-for-counter-terrorism-centre"><span>Tinubu
                                    Appoints Maj-Gen Laka National Coordinator
                                    for Counter-Terrorism Centre</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="ECOWAS Seeks Improved Collaboration to Curb Humanitarian Crisis in West Africa"
                            href="/index.php/2024/03/27/ecowas-seeks-improved-collaboration-to-curb-humanitarian-crisis-in-west-africa">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2Fecowas-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/ecowas-seeks-improved-collaboration-to-curb-humanitarian-crisis-in-west-africa"><span>ECOWAS
                                    Seeks Improved Collaboration to Curb
                                    Humanitarian Crisis in West
                                    Africa</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Otti: Our Economic Programme Structured to Achieve Balanced Economic Development"
                            href="/index.php/2024/03/27/otti-our-economic-programme-structured-to-achieve-balanced-economic-development">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FAlex-Otti-5.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/otti-our-economic-programme-structured-to-achieve-balanced-economic-development"><span>Otti:
                                    Our Economic Programme Structured to Achieve
                                    Balanced Economic Development</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Yusuf Nominates Kwankwaso&amp;#8217;s Son, 3 Others as Commissioners"
                            href="/index.php/2024/03/27/yusuf-nominates-kwankwasos-son-3-others-as-commissioners">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FYusuf-Kabir-Abba-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/yusuf-nominates-kwankwasos-son-3-others-as-commissioners"><span>Yusuf
                                    Nominates Kwankwaso&#8217;s Son, 3 Others as
                                    Commissioners</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Alake Lauds $600 Million Iron-Ore Mining, Processing Facility in Kaduna"
                            href="/index.php/2024/03/27/alake-lauds-600-million-iron-ore-mining-processing-facility-in-kaduna">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FDele-Alake-2.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/alake-lauds-600-million-iron-ore-mining-processing-facility-in-kaduna"><span>Alake
                                    Lauds $600 Million Iron-Ore Mining,
                                    Processing Facility in Kaduna</span></a>
                        </h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Fubara Approves N80.8bn for Fresh Road Projects in Rivers"
                            href="/index.php/2024/03/27/fubara-approves-n80-8bn-for-fresh-road-projects-in-rivers">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FSiminalayi-Fubara.png&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/fubara-approves-n80-8bn-for-fresh-road-projects-in-rivers"><span>Fubara
                                    Approves N80.8bn for Fresh Road Projects in
                                    Rivers</span></a></h2>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-md-4">
                <article class="typography horizontal">
                    <div class="article-image thumbnail"><a
                            title="Edo: We Have Secured 40 New Licenses for Solid Minerals, Ready for Investors"
                            href="/index.php/2024/03/27/edo-we-have-secured-40-new-licenses-for-solid-minerals-ready-for-investors">
                            <div
                                style="width:100%;padding-top:100%;position:relative">
                                <img alt="Image" loading="lazy" decoding="async"
                                    data-nimg="fill"
                                    class="attachment-thumbnail"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    srcSet="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=3840&amp;q=75 3840w"
                                    src="/_next/image?url=https%3A%2F%2Fglobal.ariseplay.com%2Famg%2Fwww.thisdaylive.com%2Fuploads%2FGodwin-Obaseki-150x150.jpg&amp;w=3840&amp;q=75" />
                            </div>
                        </a></div>
                    <div class="article-content matchHeight">
                        <h2 class="h6"><a
                                href="/index.php/2024/03/27/edo-we-have-secured-40-new-licenses-for-solid-minerals-ready-for-investors"><span>Edo:
                                    We Have Secured 40 New Licenses for Solid
                                    Minerals, Ready for Investors</span></a>
                        </h2>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-xs-12">
            <div>
                <ul class="pagination-bar" role="navigation"
                    aria-label="Pagination">
                    <li class="previous disabled"><a class=" " tabindex="-1"
                            role="button" aria-disabled="true"
                            aria-label="Previous page" rel="prev">« Previous</a>
                    </li>
                    <li class="active"><a rel="canonical" role="button"
                            tabindex="-1"
                            aria-label="Page 1 is your current page"
                            aria-current="page">1</a></li>
                    <li><a rel="next" role="button" tabindex="0"
                            aria-label="Page 2">2</a></li>
                    <li><a role="button" tabindex="0" aria-label="Page 3">3</a>
                    </li>
                    <li><a role="button" tabindex="0" aria-label="Page 4">4</a>
                    </li>
                    <li><a role="button" tabindex="0" aria-label="Page 5">5</a>
                    </li>
                    <li class="break"><a role="button" tabindex="0"
                            aria-label="Jump forward">...</a></li>
                    <li><a role="button" tabindex="0"
                            aria-label="Page 2922">2922</a></li>
                    <li><a role="button" tabindex="0"
                            aria-label="Page 2923">2923</a></li>
                    <li><a role="button" tabindex="0"
                            aria-label="Page 2924">2924</a></li>
                    <li class="next"><a class="" tabindex="0" role="button"
                            aria-disabled="false" aria-label="Next page"
                            rel="next">Next »</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
