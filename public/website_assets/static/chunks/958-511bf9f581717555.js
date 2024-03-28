"use strict";
(self.webpackChunk_N_E = self.webpackChunk_N_E || []).push([
    [958],
    {
        2733: function (e, t, n) {
            var a = n(5893),
                s = n(1163),
                i = n(7294);
            n(3454).env.AD_SERVER_ID;
            let m = (e) => {
                let {
                        zoneID: t,
                        className: n,
                        id: m,
                        disabled: l = !1,
                        height: r = "auto",
                    } = e,
                    c = (0, s.useRouter)(),
                    [o, d] = (0, i.useState)(!1);
                return (
                    (0, i.useEffect)(
                        () => (
                            d(!0),
                            c.events.on("routeChangeComplete", () => {
                                console.log("route change complete");
                            }),
                            c.events.on("routeChangeStart", () => {
                                console.log("route change start");
                            }),
                            () => {
                                d(!1),
                                    c.events.off("routeChangeComplete", () => {
                                        console.log("route change complete 2");
                                    }),
                                    c.events.off("routeChangeStart", () => {
                                        console.log("route change start 2");
                                    });
                            }
                        ),
                        [c]
                    ),
                    l
                        ? (0, a.jsx)(a.Fragment, {})
                        : (0, a.jsx)("div", {
                              className: n,
                              dangerouslySetInnerHTML: {
                                  __html: "".concat(
                                      "<ins adsbygoogle data-revive-zoneid=",
                                      t,
                                      " data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>",
                                      '<script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script>'
                                  ),
                              },
                          })
                );
            };
            t.Z = m;
        },
        6225: function (e, t, n) {
            n.d(t, {
                D: function () {
                    return m;
                },
                q: function () {
                    return i;
                },
            });
            var a = n(5893),
                s = n(2733);
            let i = [
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "2" }), index: 2 },
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "7" }), index: 2 },
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "6" }), index: 2 },
                ].reverse(),
                m = [
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "2" }), index: 3 },
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "7" }), index: 3 },
                    { adCode: (0, a.jsx)(s.Z, { zoneID: "6" }), index: 3 },
                ].reverse();
        },
        6763: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return c;
                },
            });
            var a = n(5893),
                s = n(1664),
                i = n.n(s),
                m = n(8728),
                l = n(5675),
                r = n.n(l);
            function c(e) {
                let { post: t, category: n, options: s } = e,
                    {
                        layout: l,
                        showImage: c,
                        imageSize: o,
                        headingSize: d,
                        showPostMeta: u,
                        dateStyle: h,
                        showExcerpt: p,
                    } = s;
                var x = "";
                return (
                    "featured" == l &&
                        ((x = t.thumbnail),
                        "" != t.thumbnail_full && (x = t.thumbnail_full)),
                    (0, a.jsxs)("article", {
                        className: "typography ".concat(l),
                        style: {},
                        children: [
                            "featured" === l &&
                                (0, a.jsx)("div", {
                                    style: { width: "100%", height: "100%" },
                                    children: (0, a.jsx)(r(), {
                                        src: x,
                                        fill: !0,
                                        style: { objectFit: "cover" },
                                        alt: "Image",
                                    }),
                                }),
                            "featured" !== l &&
                                "" != t.thumbnail &&
                                "thumbnail" === o &&
                                (0, a.jsx)("div", {
                                    className: "article-image ".concat(o),
                                    children: (0, a.jsx)("a", {
                                        title: t.title,
                                        href: t.url,
                                        children: (0, a.jsx)("div", {
                                            style: {
                                                width: "100%",
                                                paddingTop: "100%",
                                                position: "relative",
                                            },
                                            children: (0, a.jsx)(r(), {
                                                src: t.thumbnail,
                                                fill: !0,
                                                style: { objectFit: "cover" },
                                                className:
                                                    "attachment-thumbnail",
                                                alt: "Image",
                                            }),
                                        }),
                                    }),
                                }),
                            "featured" !== l &&
                                "" != t.thumbnail &&
                                "medium" === o &&
                                (0, a.jsx)("div", {
                                    className: "article-image ".concat(o),
                                    children: (0, a.jsx)("a", {
                                        title: t.title,
                                        href: t.url,
                                        children: (0, a.jsx)("div", {
                                            style: {
                                                width: "100%",
                                                height: 0,
                                                paddingTop: "100%",
                                                position: "relative",
                                            },
                                            children: (0, a.jsx)(r(), {
                                                src: t.thumbnail,
                                                fill: !0,
                                                style: { objectFit: "cover" },
                                                className:
                                                    "attachment-thumbnail",
                                                alt: "Image",
                                            }),
                                        }),
                                    }),
                                }),
                            "featured" !== l &&
                                !("" != t.thumbnail) &&
                                (0, a.jsx)("div", {
                                    className: "article-image",
                                    children: (0, a.jsx)("a", {
                                        title: t.title,
                                        href: t.url,
                                    }),
                                }),
                            (0, a.jsxs)("div", {
                                className: "article-content matchHeight",
                                children: [
                                    u &&
                                        (0, a.jsx)("div", {
                                            className: "post-meta mb-1",
                                            children: (0, a.jsx)("span", {
                                                className: "category",
                                                children:
                                                    null != n
                                                        ? (0, a.jsx)("a", {
                                                              href: (0, m.Od)(
                                                                  n.slug
                                                              ),
                                                              children: (0,
                                                              a.jsx)("span", {
                                                                  dangerouslySetInnerHTML:
                                                                      {
                                                                          __html: n.name,
                                                                      },
                                                              }),
                                                          })
                                                        : null != t.category
                                                        ? (0, a.jsx)("a", {
                                                              href: (0, m.Od)(
                                                                  t.category
                                                                      .slug
                                                              ),
                                                              children: (0,
                                                              a.jsx)("span", {
                                                                  dangerouslySetInnerHTML:
                                                                      {
                                                                          __html: t
                                                                              .category
                                                                              .name,
                                                                      },
                                                              }),
                                                          })
                                                        : (0, a.jsx)(
                                                              a.Fragment,
                                                              {}
                                                          ),
                                            }),
                                        }),
                                    (0, a.jsx)("h2", {
                                        className: d,
                                        children: (0, a.jsx)("a", {
                                            href: t.url,
                                            children: (0, a.jsx)("span", {
                                                dangerouslySetInnerHTML: {
                                                    __html: t.title,
                                                },
                                            }),
                                        }),
                                    }),
                                    u &&
                                        "ago" == h &&
                                        (0, a.jsxs)("div", {
                                            className: "post-date",
                                            children: [
                                                (0, a.jsxs)("span", {
                                                    className: "date-container",
                                                    children: [
                                                        (0, a.jsx)("i", {
                                                            className:
                                                                "fa-light fa-calendar-days",
                                                        }),
                                                        (0, a.jsx)("span", {
                                                            className: "date",
                                                            children: t.agoDate,
                                                        }),
                                                    ],
                                                }),
                                                (0, a.jsxs)("span", {
                                                    children: [
                                                        " by ",
                                                        (0, a.jsx)(i(), {
                                                            href: (0, m.B6)(
                                                                t.author.slug
                                                            ),
                                                            title: "Posts by ".concat(
                                                                t.author.name
                                                            ),
                                                            children:
                                                                t.author.name,
                                                        }),
                                                    ],
                                                }),
                                            ],
                                        }),
                                    u &&
                                        "ago" != h &&
                                        (0, a.jsxs)("div", {
                                            className: "post-date",
                                            children: [
                                                (0, a.jsxs)("span", {
                                                    className: "date-container",
                                                    children: [
                                                        (0, a.jsx)("i", {
                                                            className:
                                                                "fa-light fa-calendar-days",
                                                        }),
                                                        (0, a.jsx)("span", {
                                                            className: "date",
                                                            children: (0, m.fh)(
                                                                t.date
                                                            ),
                                                        }),
                                                    ],
                                                }),
                                                (0, a.jsxs)("span", {
                                                    children: [
                                                        " by ",
                                                        (0, a.jsx)(i(), {
                                                            href: (0, m.B6)(
                                                                t.author.slug
                                                            ),
                                                            title: "Posts by ".concat(
                                                                t.author.name
                                                            ),
                                                            children:
                                                                t.author.name,
                                                        }),
                                                    ],
                                                }),
                                            ],
                                        }),
                                    p &&
                                        (0, a.jsx)("div", {
                                            className: "excerpt",
                                            dangerouslySetInnerHTML: {
                                                __html: t.excerpt,
                                            },
                                        }),
                                ],
                            }),
                        ],
                    })
                );
            }
        },
        8361: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return i;
                },
            });
            var a = n(5893),
                s = n(6066);
            function i(e) {
                let { postsList: t } = e;
                return (0, a.jsx)("div", {
                    id: "breaking_news_wrapper",
                    children: (0, a.jsx)("div", {
                        className: "wrapper container-fluid",
                        children: (0, a.jsxs)("div", {
                            className: "breaking-news",
                            children: [
                                (0, a.jsx)("div", {
                                    className: "breaking-news-title",
                                    children: "Breaking News",
                                }),
                                (0, a.jsx)("div", {
                                    className: "content-area",
                                    children: (0, a.jsx)(s.Z, {
                                        dots: !1,
                                        arrows: !1,
                                        infinite: !0,
                                        speed: 500,
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                        vertical: !0,
                                        autoplay: !0,
                                        autoplaySpeed: 4e3,
                                        children:
                                            t.length > 0
                                                ? t.map((e, t) =>
                                                      (0, a.jsx)(
                                                          "div",
                                                          {
                                                              children: (0,
                                                              a.jsxs)("h5", {
                                                                  className:
                                                                      "h6 title",
                                                                  children: [
                                                                      (0,
                                                                      a.jsx)(
                                                                          "a",
                                                                          {
                                                                              href: e.url,
                                                                              children:
                                                                                  (0,
                                                                                  a.jsx)(
                                                                                      "span",
                                                                                      {
                                                                                          dangerouslySetInnerHTML:
                                                                                              {
                                                                                                  __html: e.title,
                                                                                              },
                                                                                      }
                                                                                  ),
                                                                          }
                                                                      ),
                                                                      (0,
                                                                      a.jsx)(
                                                                          "span",
                                                                          {
                                                                              className:
                                                                                  "post-meta",
                                                                              children:
                                                                                  (0,
                                                                                  a.jsxs)(
                                                                                      "span",
                                                                                      {
                                                                                          className:
                                                                                              "date-container",
                                                                                          children:
                                                                                              [
                                                                                                  (0,
                                                                                                  a.jsx)(
                                                                                                      "i",
                                                                                                      {
                                                                                                          className:
                                                                                                              "fa-light fa-calendar-days",
                                                                                                      }
                                                                                                  ),
                                                                                                  (0,
                                                                                                  a.jsx)(
                                                                                                      "span",
                                                                                                      {
                                                                                                          className:
                                                                                                              "date",
                                                                                                          children:
                                                                                                              e.agoDate,
                                                                                                      }
                                                                                                  ),
                                                                                              ],
                                                                                      }
                                                                                  ),
                                                                          }
                                                                      ),
                                                                  ],
                                                              }),
                                                          },
                                                          t
                                                      )
                                                  )
                                                : (0, a.jsx)(a.Fragment, {}),
                                    }),
                                }),
                            ],
                        }),
                    }),
                });
            }
        },
        3478: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return b;
                },
            });
            var a = n(5893),
                s = n(1664),
                i = n.n(s),
                m = n(5675),
                l = n.n(m),
                r = n(2733);
            function c() {
                return (0, a.jsxs)("div", {
                    id: "site_footer",
                    className: "typography",
                    children: [
                        (0, a.jsx)("div", {
                            className: "wrapper container-fluid",
                            children: (0, a.jsxs)("div", {
                                className: "row py-7 between-sm",
                                children: [
                                    (0, a.jsxs)("div", {
                                        className: "col-xs-12 col-sm-4",
                                        children: [
                                            (0, a.jsx)("div", {
                                                className: "footer-widget",
                                                children: (0, a.jsx)(l(), {
                                                    width: 545,
                                                    height: 121,
                                                    src: "https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/2022/02/f15e7f8e-this-day-live-logo.png",
                                                    className:
                                                        "image wp-image-606049 this-day-logo attachment-full size-full",
                                                    alt: "ThisDayLive",
                                                }),
                                            }),
                                            (0, a.jsx)("div", {
                                                className: "footer-widget",
                                                children: (0, a.jsx)("div", {
                                                    className: "textwidget",
                                                    children: (0, a.jsx)("p", {
                                                        children:
                                                            "Founded on January 22, 1995, THISDAY is published by THISDAY NEWSPAPERS LTD., 35 Creek Road Apapa, Lagos, Nigeria with offices in 36 states of Nigeria , the Federal Capital Territory and around the world. It is Nigeria’s most authoritative news media available on all platforms for the political, business, professional and diplomatic elite and broader middle classes while serving as the meeting point of new ideas, culture and technology for the aspirationals and millennials. The newspaper is a public trust dedicated to the pursuit of truth and reason covering a range of issues from breaking news to politics, business, the markets, the arts, sports and community to the crossroads of people and society.",
                                                    }),
                                                }),
                                            }),
                                        ],
                                    }),
                                    (0, a.jsx)("div", {
                                        className: "col-xs-6 col-sm-3",
                                    }),
                                    (0, a.jsx)("div", {
                                        className: "col-xs-6 col-sm-3",
                                    }),
                                    (0, a.jsxs)("div", {
                                        className: "col-xs-6 col-sm-2",
                                        children: [
                                            (0, a.jsxs)("div", {
                                                className: "footer-widget",
                                                children: [
                                                    (0, a.jsx)("div", {
                                                        className:
                                                            "section-heading",
                                                        children: (0, a.jsx)(
                                                            "h4",
                                                            {
                                                                className:
                                                                    "title",
                                                                children: (0,
                                                                a.jsx)("span", {
                                                                    children:
                                                                        "Helpful Links",
                                                                }),
                                                            }
                                                        ),
                                                    }),
                                                    (0, a.jsx)("div", {
                                                        className:
                                                            "menu-helpful-links-container",
                                                        children: (0, a.jsxs)(
                                                            "ul",
                                                            {
                                                                id: "menu-helpful-links",
                                                                className:
                                                                    "menu",
                                                                children: [
                                                                    (0, a.jsx)(
                                                                        "li",
                                                                        {
                                                                            id: "menu-item-606050",
                                                                            className:
                                                                                "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-148 current_page_item menu-item-606050",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    "a",
                                                                                    {
                                                                                        href: "/",
                                                                                        "aria-current":
                                                                                            "page",
                                                                                        children:
                                                                                            "Home",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        "li",
                                                                        {
                                                                            id: "menu-item-606051",
                                                                            className:
                                                                                "menu-item menu-item-type-post_type menu-item-object-page menu-item-606051",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    i(),
                                                                                    {
                                                                                        href: "/about-us/",
                                                                                        children:
                                                                                            "About Us",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        "li",
                                                                        {
                                                                            id: "menu-item-606052",
                                                                            className:
                                                                                "menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-606052",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    i(),
                                                                                    {
                                                                                        rel: "/privacy-policy",
                                                                                        href: "/privacy-policy/",
                                                                                        children:
                                                                                            "Privacy Policy",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        "li",
                                                                        {
                                                                            id: "menu-item-606053",
                                                                            className:
                                                                                "menu-item menu-item-type-post_type menu-item-object-page menu-item-606053",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    i(),
                                                                                    {
                                                                                        href: "/terms-conditions/",
                                                                                        children:
                                                                                            "Terms & Conditions",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                ],
                                            }),
                                            (0, a.jsxs)("div", {
                                                className:
                                                    "widget_text footer-widget",
                                                children: [
                                                    (0, a.jsx)("div", {
                                                        className:
                                                            "section-heading",
                                                        children: (0, a.jsx)(
                                                            "h4",
                                                            {
                                                                className:
                                                                    "title",
                                                                children: (0,
                                                                a.jsx)("span", {
                                                                    children:
                                                                        "Contact Us",
                                                                }),
                                                            }
                                                        ),
                                                    }),
                                                    (0, a.jsxs)("div", {
                                                        className:
                                                            "textwidget custom-html-widget",
                                                        children: [
                                                            (0, a.jsxs)("p", {
                                                                children: [
                                                                    "You can email us at: hello@thisdaylive.com or visit our ",
                                                                    (0, a.jsx)(
                                                                        i(),
                                                                        {
                                                                            href: "/contact-us/",
                                                                            children:
                                                                                "contact us",
                                                                        }
                                                                    ),
                                                                    " page.",
                                                                ],
                                                            }),
                                                            (0, a.jsxs)("p", {
                                                                className:
                                                                    "mb-3",
                                                                children: [
                                                                    (0, a.jsx)(
                                                                        i(),
                                                                        {
                                                                            className:
                                                                                "has-white-color",
                                                                            target: "_blank",
                                                                            href: "http://www.facebook.com/thisdaylive",
                                                                            rel: "noopener",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    "i",
                                                                                    {
                                                                                        className:
                                                                                            "fab fa-facebook-f mr-1 fa-2x",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        i(),
                                                                        {
                                                                            className:
                                                                                "has-white-color",
                                                                            target: "_blank",
                                                                            href: "http://www.twitter.com/thisdaylive",
                                                                            rel: "noopener",
                                                                            children:
                                                                                (0,
                                                                                a.jsx)(
                                                                                    "i",
                                                                                    {
                                                                                        className:
                                                                                            "fab fa-twitter mr-1 fa-2x",
                                                                                    }
                                                                                ),
                                                                        }
                                                                    ),
                                                                ],
                                                            }),
                                                        ],
                                                    }),
                                                ],
                                            }),
                                        ],
                                    }),
                                ],
                            }),
                        }),
                        (0, a.jsx)(r.Z, { zoneID: "8", className: "wideAd" }),
                    ],
                });
            }
            var o = n(9008),
                d = n.n(o),
                u = n(1752),
                h = n.n(u);
            let { publicRuntimeConfig: p } = h()(),
                x = p.SITE_URL;
            function j(e) {
                let { ogImage: t } = e;
                return (0, a.jsxs)(d(), {
                    children: [
                        (0, a.jsx)("link", {
                            rel: "apple-touch-icon",
                            sizes: "180x180",
                            href: "/favicon/apple-icon-180x180.png",
                        }),
                        (0, a.jsx)("link", {
                            rel: "icon",
                            type: "image/png",
                            sizes: "32x32",
                            href: "/favicon/favicon-32x32.png",
                        }),
                        (0, a.jsx)("link", {
                            rel: "icon",
                            type: "image/png",
                            sizes: "16x16",
                            href: "/favicon/favicon-16x16.png",
                        }),
                        (0, a.jsx)("link", {
                            rel: "manifest",
                            href: "/favicon/site.webmanifest",
                        }),
                        (0, a.jsx)("link", {
                            rel: "mask-icon",
                            href: "/favicon/safari-pinned-tab.svg",
                            color: "#000000",
                        }),
                        (0, a.jsx)("link", {
                            rel: "shortcut icon",
                            href: "/favicon/favicon.ico",
                        }),
                        (0, a.jsx)("meta", {
                            name: "msapplication-TileColor",
                            content: "#000000",
                        }),
                        (0, a.jsx)("meta", {
                            name: "msapplication-config",
                            content: "/favicon/browserconfig.xml",
                        }),
                        (0, a.jsx)("meta", {
                            name: "theme-color",
                            content: "#000",
                        }),
                        (0, a.jsx)("link", {
                            rel: "alternate",
                            type: "application/rss+xml",
                            href: "".concat(x, "/index.php?feed=rss"),
                        }),
                        t &&
                            (0, a.jsx)("meta", {
                                property: "og:image",
                                content: "/image.png",
                            }),
                    ],
                });
            }
            var f = n(8728),
                g = n(1649),
                y = n(133);
            function v() {
                let e = (0, g.I0)(),
                    t = (0, g.v9)((e) => e.account),
                    n = () => {
                        document
                            .getElementById("mm-1")
                            .classList.remove("mm-hidden"),
                            setTimeout(() => {
                                document
                                    .getElementById("mm-1")
                                    .classList.add("mm-panel_opened"),
                                    document
                                        .getElementById("panel-menu")
                                        .classList.add(
                                            "mm-panel_opened-parent"
                                        ),
                                    document
                                        .getElementById("panel-menu")
                                        .classList.remove("mm-panel_opened");
                            }, 10),
                            setTimeout(() => {
                                document
                                    .getElementById("panel-menu")
                                    .classList.add("mm-hidden");
                            }, 1e3),
                            document
                                .getElementsByClassName("mm-btn_prev")[0]
                                .classList.remove("mm-hidden");
                        let e = document.querySelector(
                            ".mm-navbar__title span"
                        );
                        e.innerHTML = "International";
                    },
                    s = () => {
                        document
                            .getElementById("panel-menu")
                            .classList.remove("mm-hidden"),
                            setTimeout(() => {
                                document
                                    .getElementById("mm-1")
                                    .classList.remove("mm-panel_opened"),
                                    document
                                        .getElementById("panel-menu")
                                        .classList.remove(
                                            "mm-panel_opened-parent"
                                        ),
                                    document
                                        .getElementById("panel-menu")
                                        .classList.add("mm-panel_opened");
                            }, 10),
                            setTimeout(() => {
                                document
                                    .getElementById("mm-1")
                                    .classList.add("mm-hidden");
                            }, 1e3),
                            document
                                .getElementsByClassName("mm-btn_prev")[0]
                                .classList.add("mm-hidden");
                        let e = document.querySelector(
                            ".mm-navbar__title span"
                        );
                        e.innerHTML = "Menu";
                    },
                    m = () => {
                        console.log(t.searchbar);
                        var n = !1;
                        (n = !1 == t.searchbar), e((0, y.D)(n));
                    },
                    l = () => {
                        document.body.classList.remove(
                            "mm-wrapper_opened",
                            "mm-wrapper_blocking",
                            "mm-wrapper_background",
                            "mm-wrapper_opening"
                        ),
                            document
                                .getElementById("slide_menu")
                                .classList.remove("mm-menu_opened"),
                            document
                                .getElementById("memenu_trigger")
                                .classList.remove("active");
                    };
                return (0, a.jsxs)("div", {
                    id: "slide_menu",
                    style: { zIndex: 2 },
                    className:
                        "mm-menu mm-menu_offcanvas mm-menu_iconbar-right mm-menu_selected-hover mm-menu_selected-parent mm-menu_border-full mm-menu_pagedim-black mm-menu_shadow-page mm-menu_theme-white mm-menu_fx-menu-slide",
                    "aria-hidden": "true",
                    children: [
                        (0, a.jsx)("div", {
                            className: "mm-navbars_top",
                            children: (0, a.jsxs)("div", {
                                className: "mm-navbar",
                                children: [
                                    (0, a.jsx)("a", {
                                        className:
                                            "mm-btn mm-btn_prev mm-navbar__btn mm-hidden",
                                        "aria-hidden": "true",
                                        onClick: s,
                                        style: { cursor: "pointer" },
                                    }),
                                    (0, a.jsx)("a", {
                                        className: "mm-navbar__title",
                                        children: (0, a.jsx)("span", {
                                            children: "Menu",
                                        }),
                                    }),
                                ],
                            }),
                        }),
                        (0, a.jsxs)("div", {
                            className: "mm-iconbar mm-iconbar_tabs",
                            children: [
                                (0, a.jsx)("div", {
                                    className: "mm-iconbar__top",
                                    children: (0, a.jsx)(i(), {
                                        target: "_blank",
                                        href: "/",
                                        children: (0, a.jsx)("i", {
                                            className: "fa fa-home fa-1x",
                                        }),
                                    }),
                                }),
                                (0, a.jsxs)("div", {
                                    className: "mm-iconbar__bottom",
                                    children: [
                                        (0, a.jsx)(i(), {
                                            target: "_blank",
                                            href: "http://www.facebook.com/thisdaylive",
                                            children: (0, a.jsx)("i", {
                                                className: "fab fa-facebook",
                                            }),
                                        }),
                                        (0, a.jsx)(i(), {
                                            target: "_blank",
                                            href: "http://www.twitter.com/thisdaylive",
                                            children: (0, a.jsx)("i", {
                                                className: "fab fa-twitter",
                                            }),
                                        }),
                                    ],
                                }),
                            ],
                        }),
                        (0, a.jsxs)("div", {
                            className: "mm-panels",
                            children: [
                                (0, a.jsx)("div", {
                                    id: "panel-menu",
                                    className: "mm-panel mm-panel_opened",
                                    children: (0, a.jsxs)("ul", {
                                        className: "mm-listview",
                                        children: [
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-148 current_page_item menu-item-606048 mm-listitem mm-listitem_selected",
                                                children: (0, a.jsx)("a", {
                                                    href: "/",
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Home",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606039 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("business"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Business",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606040 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("politics"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Politics",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606041 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("nigeria"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Nigeria",
                                                }),
                                            }),
                                            (0, a.jsxs)("li", {
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-759831 mm-listitem",
                                                children: [
                                                    (0, a.jsx)("a", {
                                                        onClick: l,
                                                        href: (0, f.Od)(
                                                            "international"
                                                        ),
                                                        className:
                                                            "mm-listitem__text",
                                                        children:
                                                            "International",
                                                    }),
                                                    (0, a.jsxs)("a", {
                                                        className:
                                                            "mm-btn mm-btn_next mm-listitem__btn",
                                                        onClick: n,
                                                        style: {
                                                            cursor: "pointer",
                                                        },
                                                        children: [
                                                            (0, a.jsx)("span", {
                                                                className:
                                                                    "mm-counter",
                                                                children: "2",
                                                            }),
                                                            (0, a.jsx)("span", {
                                                                className:
                                                                    "mm-sronly",
                                                                children:
                                                                    "Open submenu",
                                                            }),
                                                        ],
                                                    }),
                                                ],
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606042 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("health"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children:
                                                        "Health & Wellbeing",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606043 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)(
                                                        "education"
                                                    ),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Education",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606044 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)(
                                                        "lifestyle"
                                                    ),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Life & Style",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606045 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("sport"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Sport",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606046 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)(
                                                        "editorial"
                                                    ),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Editorial",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606047 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("backpage"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Backpage",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "search-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-606054 mm-listitem",
                                                children: (0, a.jsx)("div", {
                                                    className:
                                                        "mm-listitem__text",
                                                    style: {
                                                        cursor: "pointer",
                                                    },
                                                    children: (0, a.jsx)("i", {
                                                        className:
                                                            "far fa-search",
                                                        onClick: m,
                                                    }),
                                                }),
                                            }),
                                        ],
                                    }),
                                }),
                                (0, a.jsx)("div", {
                                    id: "mm-1",
                                    className: "mm-panel mm-hidden",
                                    "aria-hidden": "true",
                                    children: (0, a.jsxs)("ul", {
                                        className: "sub-menu mm-listview",
                                        children: [
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759834 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)("africa"),
                                                    className:
                                                        "mm-listitem__text",
                                                    children: "Africa",
                                                }),
                                            }),
                                            (0, a.jsx)("li", {
                                                onClick: l,
                                                className:
                                                    "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759837 mm-listitem",
                                                children: (0, a.jsx)("a", {
                                                    href: (0, f.Od)(
                                                        "rest-of-the-world"
                                                    ),
                                                    className:
                                                        "mm-listitem__text",
                                                    children:
                                                        "Rest of the World",
                                                }),
                                            }),
                                        ],
                                    }),
                                }),
                            ],
                        }),
                    ],
                });
            }
            var N = n(7294),
                _ = n(2920);
            function b(e) {
                let { ogImage: t = !0, children: n } = e,
                    s = (0, N.useRef)(0);
                (0, N.useEffect)(
                    () => (
                        window.addEventListener("scroll", i),
                        () => {
                            window.removeEventListener("scroll", i);
                        }
                    ),
                    []
                );
                let i = () => {
                        let e = window.pageYOffset;
                        var t = s.current > e;
                        !t && e < 200 && (t = !0),
                            (s.current = e),
                            t
                                ? (document.body.classList.add("scroll-up"),
                                  document.body.classList.remove("scroll-down"))
                                : (document.body.classList.add("scroll-down"),
                                  document.body.classList.remove("scroll-up"));
                    },
                    m = () => {
                        document.body.classList.remove(
                            "mm-wrapper_opened",
                            "mm-wrapper_blocking",
                            "mm-wrapper_background",
                            "mm-wrapper_opening"
                        ),
                            document
                                .getElementById("slide_menu")
                                .classList.remove("mm-menu_opened"),
                            document
                                .getElementById("memenu_trigger")
                                .classList.remove("active");
                    };
                return (0, a.jsxs)("div", {
                    id: "home-body",
                    className:
                        "home page-template-default page page-id-148 logged-in admin-bar wp-embed-responsive customize-support mm-wrapper",
                    children: [
                        (0, a.jsx)(j, { ogImage: t }),
                        (0, a.jsx)(v, {}),
                        (0, a.jsx)("div", {
                            className: "mm-page mm-slideout",
                            children: (0, a.jsxs)("div", {
                                className: "page",
                                children: [
                                    (0, a.jsx)("main", { children: n }),
                                    (0, a.jsx)(c, {}),
                                ],
                            }),
                        }),
                        (0, a.jsx)("div", {
                            onClick: m,
                            className: "mm-wrapper__blocker mm-slideout",
                            children: (0, a.jsx)("a", {
                                href: "#",
                                children: (0, a.jsx)("span", {
                                    className: "mm-sronly",
                                    children: "Close menu",
                                }),
                            }),
                        }),
                        (0, a.jsx)(_.Ix, {}),
                    ],
                });
            }
            n(1399);
        },
        2543: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return u;
                },
            });
            var a = n(5893),
                s = n(1664),
                i = n.n(s),
                m = n(8728),
                l = n(1649),
                r = n(133),
                c = n(7294),
                o = n(2098);
            function d() {
                let [e, t] = (0, c.useState)((0, o.aV)());
                return (0, a.jsx)(a.Fragment, {
                    children: (0, a.jsx)("span", {
                        className: "todays-date hide-for-sm-down",
                        suppressHydrationWarning: !0,
                        children: e,
                    }),
                });
            }
            function u(e) {
                let { nowDateString: t } = e,
                    n = (0, l.I0)(),
                    s = (0, l.v9)((e) => e.account),
                    c = () => {
                        var e = "";
                        (e = "light" == s.theme ? "dark" : "light"),
                            n((0, r.U)(e));
                    },
                    o = () => {
                        console.log(s.searchbar);
                        var e = !1;
                        (e = !1 == s.searchbar), n((0, r.D)(e));
                    },
                    u = () => {
                        document.body.classList.add(
                            "mm-wrapper_opened",
                            "mm-wrapper_blocking",
                            "mm-wrapper_background",
                            "mm-wrapper_opening"
                        ),
                            document
                                .getElementById("slide_menu")
                                .classList.add("mm-menu_opened"),
                            document
                                .getElementById("memenu_trigger")
                                .classList.add("active");
                    };
                return (0, a.jsxs)("div", {
                    id: "masthead",
                    className: "header-height",
                    children: [
                        (0, a.jsx)("div", {
                            id: "masthead_main_wrapper",
                            children: (0, a.jsx)("div", {
                                className: "wrapper container-fluid",
                                children: (0, a.jsxs)("div", {
                                    className: "flex-container",
                                    children: [
                                        (0, a.jsx)("div", {
                                            className: "flex-item",
                                            children: (0, a.jsxs)("ul", {
                                                className: "align-left",
                                                children: [
                                                    (0, a.jsx)("li", {
                                                        children: (0, a.jsxs)(
                                                            "a",
                                                            {
                                                                href: "#",
                                                                id: "memenu_trigger",
                                                                className:
                                                                    "menu-button-container overlayTrigger",
                                                                onClick: u,
                                                                children: [
                                                                    (0, a.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "top",
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "middle",
                                                                        }
                                                                    ),
                                                                    (0, a.jsx)(
                                                                        "span",
                                                                        {
                                                                            className:
                                                                                "bottom",
                                                                        }
                                                                    ),
                                                                ],
                                                            }
                                                        ),
                                                    }),
                                                    (0, a.jsx)("li", {
                                                        children: (0, a.jsx)(
                                                            d,
                                                            {}
                                                        ),
                                                    }),
                                                ],
                                            }),
                                        }),
                                        (0, a.jsx)("div", {
                                            className: "flex-spacer",
                                        }),
                                        (0, a.jsx)("div", {
                                            className: "flex-item logo-cont",
                                            children: (0, a.jsx)("a", {
                                                href: "/",
                                                className: "site-logo",
                                            }),
                                        }),
                                        (0, a.jsx)("div", {
                                            className: "flex-spacer",
                                        }),
                                        (0, a.jsx)("div", {
                                            className: "flex-item end-xs",
                                            children: (0, a.jsxs)("ul", {
                                                className: "align-right",
                                                children: [
                                                    (0, a.jsx)("li", {
                                                        className: "social",
                                                        children: (0, a.jsx)(
                                                            i(),
                                                            {
                                                                target: "_blank",
                                                                href: "http://www.facebook.com/thisdaylive",
                                                                children: (0,
                                                                a.jsx)("i", {
                                                                    className:
                                                                        "fa-brands fa-facebook-square",
                                                                }),
                                                            }
                                                        ),
                                                    }),
                                                    (0, a.jsx)("li", {
                                                        className: "social",
                                                        children: (0, a.jsx)(
                                                            i(),
                                                            {
                                                                target: "_blank",
                                                                href: "http://www.twitter.com/thisdaylive",
                                                                children: (0,
                                                                a.jsx)("i", {
                                                                    className:
                                                                        "fa-brands fa-twitter",
                                                                }),
                                                            }
                                                        ),
                                                    }),
                                                    (0, a.jsx)("li", {
                                                        children: (0, a.jsx)(
                                                            "a",
                                                            {
                                                                href: "#",
                                                                className:
                                                                    "theme-switch",
                                                                onClick: c,
                                                            }
                                                        ),
                                                    }),
                                                ],
                                            }),
                                        }),
                                    ],
                                }),
                            }),
                        }),
                        (0, a.jsx)("div", {
                            id: "masthead_menu_wrapper",
                            children: (0, a.jsx)("div", {
                                className: "wrapper container-fluid",
                                children: (0, a.jsxs)("ul", {
                                    className: "main-menu",
                                    children: [
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606048",
                                            className:
                                                "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-148 current_page_item menu-item-606048",
                                            children: (0, a.jsx)("a", {
                                                href: "/",
                                                children: "Home",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606039",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606039",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("business"),
                                                children: "Business",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606040",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606040",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("politics"),
                                                children: "Politics",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606041",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606041",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("nigeria"),
                                                children: "Nigeria",
                                            }),
                                        }),
                                        (0, a.jsxs)("li", {
                                            id: "menu-item-759831",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-759831",
                                            children: [
                                                (0, a.jsx)("a", {
                                                    href: (0, m.Od)(
                                                        "international"
                                                    ),
                                                    children: "International",
                                                }),
                                                (0, a.jsxs)("ul", {
                                                    className: "sub-menu",
                                                    children: [
                                                        (0, a.jsx)("li", {
                                                            id: "menu-item-759834",
                                                            className:
                                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759834",
                                                            children: (0,
                                                            a.jsx)("a", {
                                                                href: (0, m.Od)(
                                                                    "africa"
                                                                ),
                                                                children:
                                                                    "Africa",
                                                            }),
                                                        }),
                                                        (0, a.jsx)("li", {
                                                            id: "menu-item-759837",
                                                            className:
                                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759837",
                                                            children: (0,
                                                            a.jsx)("a", {
                                                                href: (0, m.Od)(
                                                                    "rest-of-the-world"
                                                                ),
                                                                children:
                                                                    "Rest of the World",
                                                            }),
                                                        }),
                                                    ],
                                                }),
                                            ],
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606042",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606042",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("health"),
                                                children: "Health & Wellbeing",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606043",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606043",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("education"),
                                                children: "Education",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606044",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606044",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("lifestyle"),
                                                children: "Life & Style",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606045",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606045",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("sport"),
                                                children: "Sport",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606046",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606046",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("editorial"),
                                                children: "Editorial",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606047",
                                            className:
                                                "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606047",
                                            children: (0, a.jsx)("a", {
                                                href: (0, m.Od)("backpage"),
                                                children: "Backpage",
                                            }),
                                        }),
                                        (0, a.jsx)("li", {
                                            id: "menu-item-606054",
                                            className:
                                                "search-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-606054",
                                            children: (0, a.jsx)("i", {
                                                style: { cursor: "pointer" },
                                                className: "far fa-search",
                                                onClick: o,
                                            }),
                                        }),
                                    ],
                                }),
                            }),
                        }),
                    ],
                });
            }
        },
        8954: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return l;
                },
            });
            var a = n(5893),
                s = n(2215),
                i = n(1163),
                m = n(1649);
            function l(e) {
                let { initQuery: t } = e,
                    n = (0, i.useRouter)(),
                    l = (0, m.v9)((e) => e.account),
                    r = l.searchbar,
                    c = (e) => {
                        console.log("handlesearch"),
                            n.push({ pathname: "/search", query: { s: e } });
                    };
                return (0, a.jsx)("div", {
                    id: "search_container",
                    className: "container-fluid wrapper ".concat(
                        r ? "active" : ""
                    ),
                    children: (0, a.jsx)(s.Z, {
                        initQuery: t,
                        handleSearch: c,
                    }),
                });
            }
        },
        2215: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return i;
                },
            });
            var a = n(5893),
                s = n(7294);
            function i(e) {
                let { initQuery: t, handleSearch: n } = e,
                    [i, m] = (0, s.useState)("");
                (0, s.useEffect)(() => {
                    m(t);
                }, [t]);
                let l = (e) => {
                        e.preventDefault(), n(i);
                    },
                    r = (e) => {
                        m(e.target.value);
                    },
                    c = (e) => {
                        "Enter" === e.key && n(i);
                    };
                return (0, a.jsxs)("form", {
                    role: "search",
                    method: "get",
                    className: "search-form",
                    onSubmit: l,
                    children: [
                        (0, a.jsxs)("label", {
                            children: [
                                (0, a.jsx)("span", {
                                    className: "screen-reader-text",
                                    children: "Search for:",
                                }),
                                (0, a.jsx)("input", {
                                    type: "search",
                                    className: "search-field",
                                    placeholder: "Search …",
                                    value: i,
                                    name: "s",
                                    onChange: r,
                                    onKeyDown: c,
                                }),
                            ],
                        }),
                        (0, a.jsx)("input", {
                            type: "submit",
                            className: "search-submit",
                            value: "Search",
                        }),
                    ],
                });
            }
        },
        5200: function (e, t, n) {
            n.d(t, {
                Z: function () {
                    return s;
                },
            });
            var a = n(5893);
            function s(e) {
                let { html: t, ads: n } = e;
                try {
                    let e = t.map((e, t) =>
                        (0, a.jsx)("div", {
                            className: "sidebar-widget",
                            dangerouslySetInnerHTML: { __html: e },
                        })
                    );
                    for (let t of n) e.splice(t.index, 0, t.adCode);
                    return (
                        (e = e.map((e, t) =>
                            (0, a.jsx)(
                                "li",
                                {
                                    style: { listStyleType: "none" },
                                    children: (0, a.jsx)("div", {
                                        className: "sidebar-widget",
                                        children: e,
                                    }),
                                },
                                t
                            )
                        )),
                        (0, a.jsx)("div", {
                            className: "dynamic-sidebar-item",
                            children: e,
                        })
                    );
                } catch (e) {
                    return (
                        console.log("SIDEBAR ERROR========>", e),
                        (0, a.jsx)("div", {
                            className: "sidebar-widget",
                            dangerouslySetInnerHTML: { __html: t + "BIG BAD" },
                        })
                    );
                }
            }
        },
        2098: function (e, t, n) {
            n.d(t, {
                Nn: function () {
                    return u;
                },
                aV: function () {
                    return h;
                },
                dN: function () {
                    return d;
                },
            });
            var a = n(8728),
                s = n(1752),
                i = n.n(s);
            let { publicRuntimeConfig: m } = i()(),
                l = "".concat(m.WORDPRESS_SITE_URL, "/index.php/wp-json/"),
                r = m.WORDPRESS_ADMIN_NAME,
                c = m.WORDPRESS_ADMIN_APP_PASSWORD;
            async function o() {
                let e =
                        arguments.length > 0 && void 0 !== arguments[0]
                            ? arguments[0]
                            : "",
                    { variables: t } =
                        arguments.length > 1 && void 0 !== arguments[1]
                            ? arguments[1]
                            : {},
                    n = { "Content-Type": "application/json" };
                if (r) {
                    let e = (0, a.oF)("".concat(r, ":").concat(c));
                    n.Authorization = "Basic ".concat(e);
                }
                let s = await fetch("".concat(l).concat(e), {
                    headers: n,
                    method: "POST",
                    body: JSON.stringify({ ...t }),
                });
                console.log("POST ".concat(l).concat(e));
                try {
                    let e = await s.json();
                    if (!e.errors) return e;
                    throw (
                        (console.error(e.errors), Error("Failed to fetch API"))
                    );
                } catch (e) {
                    throw (
                        (e instanceof SyntaxError &&
                        e.message.includes("Unexpected token <")
                            ? console.error("Invalid JSON data")
                            : console.error(e),
                        Error("Invalid Json from fetch API"))
                    );
                }
            }
            async function d(e, t, n, a) {
                let s = await o("/gf/v2/entries", {
                    variables: { form_id: 17, 1.3: e, 1.6: t, 2: n, 3: a },
                });
                return s;
            }
            async function u(e, t, n, s) {
                let i = {
                        FNAME: e,
                        LNAME: t,
                        EMAIL: n,
                        PHONE: s,
                        _mc4wp_honeypot: "",
                        _mc4wp_timestamp: Date.now(),
                        _mc4wp_form_id: "858247",
                        _mc4wp_form_element_id: "mc4wp-form-1",
                    },
                    m = { "Content-Type": "application/json" };
                if (r) {
                    let e = (0, a.oF)("".concat(r, ":").concat(c));
                    m.Authorization = "Basic ".concat(e);
                }
                m["Content-Type"] = "application/x-www-form-urlencoded";
                var d = new URLSearchParams();
                d.append("FNAME", e),
                    d.append("LNAME", t),
                    d.append("PHONE", s),
                    d.append("EMAIL", n),
                    d.append("_mc4wp_honeypot", ""),
                    d.append("_mc4wp_timestamp", "1687364736"),
                    d.append("_mc4wp_form_id", "858247"),
                    d.append("_mc4wp_form_element_id", "mc4wp-form-1");
                let u = await fetch("".concat(l, "/mc4wp/v1/form"), {
                    headers: m,
                    method: "POST",
                    body: d,
                });
                try {
                    let e = await u.json();
                    if (!e.errors) return e;
                    throw (
                        (console.error(e.errors), Error("Failed to fetch API"))
                    );
                } catch (e) {
                    throw (
                        (e instanceof SyntaxError &&
                        e.message.includes("Unexpected token <")
                            ? console.error("Invalid JSON data")
                            : console.error(e),
                        Error("Invalid Json from fetch API"))
                    );
                }
                let h = await o("/mc4wp/v1/form", { variables: i });
                return h;
            }
            function h() {
                let e = new Date(),
                    t = e.toLocaleDateString("en-US", {
                        weekday: "long",
                        day: "numeric",
                        month: "long",
                        year: "numeric",
                    });
                return t;
            }
        },
        4696: function (e, t, n) {
            n.d(t, {
                WV: function () {
                    return i;
                },
                sD: function () {
                    return s;
                },
                yf: function () {
                    return a;
                },
            });
            let a = "THISDAYLIVE",
                s = "Truth and Reason",
                i = "https://www.youtube.com/arisenewschannel/";
        },
        133: function (e, t, n) {
            n.d(t, {
                D: function () {
                    return i;
                },
                U: function () {
                    return s;
                },
            });
            var a = n(9358);
            let s = (e) => async (t) => {
                    t({ type: a.i0, theme: e });
                },
                i = (e) => async (t) => {
                    t({ type: a.eS, searchbar: e });
                };
        },
    },
]);
