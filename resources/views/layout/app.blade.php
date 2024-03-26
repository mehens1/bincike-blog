<!DOCTYPE html>
<html lang="en">
<head>
    <meta charSet="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/logo.jpg') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/logo.jpg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/logo.jpg') }}" />
    {{-- <link rel="manifest" href="{{ asset('assets/images/favicon/logo.jpg') }}" /> --}}
    <link rel="mask-icon" href="{{ asset('assets/images/favicon/logo.jpg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/logo.jpg') }}" />
    <title> {{ $data['page_name'] }} :: BINCIKE BLOG - ...Unleashing the Power of Knowledge!</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link data-next-font="size-adjust" rel="preconnect" href="/" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" data-n-g="" />

    <script defer="" nomodule="" src="https://www.thisdaylive.com/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/webpack-a6b6ca5a4def3fb4.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/framework-2c79e2a64abdb08b.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/main-4d4497fa46aa99a8.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/pages/_app-2648c6c3b1dc5023.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/197-4c9ea968e657ddac.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/958-511bf9f581717555.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/741-db3d8d0650590b82.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/676-ff2103091cfd78ce.js" defer=""></script>
    <script src="https://www.thisdaylive.com/_next/static/chunks/pages/index-46e56335011db4e5.js" defer=""></script>



    {{-- <script src="{{ asset('assets/js/webpack-a6b6ca5a4def3fb4.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/framework-2c79e2a64abdb08b.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/main-4d4497fa46aa99a8.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/_app-2648c6c3b1dc5023.js')  }}" defer=""></script>
    <script src="{{ asset('assets/js/197-4c9ea968e657ddac.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/958-511bf9f581717555.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/741-db3d8d0650590b82.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/676-ff2103091cfd78ce.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/index-46e56335011db4e5.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/_buildManifest.js') }}" defer=""></script>
    <script src="{{ asset('assets/js/_ssgManifest.js') }}" defer=""></script> --}}

    {{-- font awesome 6 --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}" data-n-g="" />
    <script src="{{ asset('assets/fontawesome/js/all.js') }}" defer=""></script>

    <style
        data-href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Oswald:wght@500&display=swap">
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0C4k.woff) format('woff')
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1y4k.woff) format('woff')
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvgUI.woff) format('woff')
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTVOmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0330, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2034-2037, U+2057, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2102, U+210A-210E, U+2110-2112, U+2115, U+2119-211D, U+2124, U+2128, U+212C-212D, U+212F-2131, U+2133-2138, U+213C-2140, U+2145-2149, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B6, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTUGmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F10C, U+1F110-1F16C, U+1F170-1F190, U+1F19B-1F1AC, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F579, U+1F57B-1F594, U+1F597-1F5A3, U+1F5A5-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CB, U+1F6CD-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8B1, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA74, U+1FA78-1FA7A, U+1FA80-1FA86, U+1FA90-1FAA8, U+1FAB0-1FAB6, U+1FAC0-1FAC2, U+1FAD0-1FAD6, U+1FB00-1FBFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-mu0SC55I.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSKmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSumu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSOmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+1F00-1FFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSymu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0370-03FF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS2mu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTVOmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0330, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2034-2037, U+2057, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2102, U+210A-210E, U+2110-2112, U+2115, U+2119-211D, U+2124, U+2128, U+212C-212D, U+212F-2131, U+2133-2138, U+213C-2140, U+2145-2149, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B6, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTUGmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F10C, U+1F110-1F16C, U+1F170-1F190, U+1F19B-1F1AC, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F579, U+1F57B-1F594, U+1F597-1F5A3, U+1F5A5-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CB, U+1F6CD-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8B1, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA74, U+1FA78-1FA7A, U+1FA80-1FA86, U+1FA90-1FAA8, U+1FAB0-1FAB6, U+1FAC0-1FAC2, U+1FAD0-1FAD6, U+1FB00-1FBFF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSCmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTSGmu0SC55K5gw.woff2) format('woff2');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: 100%;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v40/memvYaGs126MiZpBA-UvWbX2vVnXBbObj2OVTS-mu0SC55I.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUtiYySUhiCXABTV.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUJiYySUhiCXABTV.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUliYySUhiCXABTV.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUhiYySUhiCXABTV.woff) format('woff');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
        }

        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/oswald/v53/TK3_WkUHHAIjg75cFRf3bXL8LICs18NvsUZiYySUhiCXAA.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
        }
    </style>
</head>

<body>
    <div id="__next">
        <div id="home-body"
            class="home page-template-default page page-id-148 logged-in admin-bar wp-embed-responsive customize-support mm-wrapper">
            <div id="slide_menu" style="z-index:2"
                class="mm-menu mm-menu_offcanvas mm-menu_iconbar-right mm-menu_selected-hover mm-menu_selected-parent mm-menu_border-full mm-menu_pagedim-black mm-menu_shadow-page mm-menu_theme-white mm-menu_fx-menu-slide"
                aria-hidden="true">
                <div class="mm-navbars_top">
                    <div class="mm-navbar"><a class="mm-btn mm-btn_prev mm-navbar__btn mm-hidden" aria-hidden="true"
                            style="cursor:pointer"></a><a class="mm-navbar__title"><span>Menu</span></a></div>
                </div>
                <div class="mm-iconbar mm-iconbar_tabs">
                    <div class="mm-iconbar__top"><a target="_blank" href="/"><i class="fa fa-home fa-1x"></i></a>
                    </div>
                    <div class="mm-iconbar__bottom"><a target="_blank" href="https://facebook.com/bincikeinternational"><i
                                class="fab fa-facebook"></i></a><a target="_blank"
                            href="http://www.twitter.com/bincikeinternational"><i class="fab fa-twitter"></i></a></div>
                </div>
                <div class="mm-panels">
                    <div id="panel-menu" class="mm-panel mm-panel_opened">
                        <ul class="mm-listview">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-148 current_page_item menu-item-606048 mm-listitem mm-listitem_selected">
                                <a href="/" class="mm-listitem__text">Home</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606039 mm-listitem">
                                <a href="/category/business" class="mm-listitem__text">Business</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606040 mm-listitem">
                                <a href="/category/politics" class="mm-listitem__text">Politics</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606041 mm-listitem">
                                <a href="/category/nigeria" class="mm-listitem__text">Nigeria</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-759831 mm-listitem">
                                <a href="/category/international" class="mm-listitem__text">International</a><a
                                    class="mm-btn mm-btn_next mm-listitem__btn" style="cursor:pointer"><span
                                        class="mm-counter">2</span><span class="mm-sronly">Open submenu</span></a>
                            </li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606042 mm-listitem">
                                <a href="/category/health" class="mm-listitem__text">Health &amp; Wellbeing</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606043 mm-listitem">
                                <a href="/category/education" class="mm-listitem__text">Education</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606044 mm-listitem">
                                <a href="/category/lifestyle" class="mm-listitem__text">Life &amp; Style</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606045 mm-listitem">
                                <a href="/category/sport" class="mm-listitem__text">Sport</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606046 mm-listitem">
                                <a href="/category/editorial" class="mm-listitem__text">Editorial</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606047 mm-listitem">
                                <a href="/category/backpage" class="mm-listitem__text">Backpage</a></li>
                            <li
                                class="search-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-606054 mm-listitem">
                                <div class="mm-listitem__text" style="cursor:pointer"><i class="far fa-search"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="mm-1" class="mm-panel mm-hidden" aria-hidden="true">
                        <ul class="sub-menu mm-listview">
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759834 mm-listitem">
                                <a href="/category/africa" class="mm-listitem__text">Africa</a></li>
                            <li
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759837 mm-listitem">
                                <a href="/category/rest-of-the-world" class="mm-listitem__text">Rest of the World</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mm-page mm-slideout">
                <div class="page">
                    <main>
                        <div id="masthead" class="header-height">
                            <div id="masthead_main_wrapper">
                                <div class="wrapper container-fluid">
                                    <div class="flex-container">
                                        <div class="flex-item">
                                            <ul class="align-left">
                                                <li><a href="#" id="memenu_trigger"
                                                        class="menu-button-container overlayTrigger"><span
                                                            class="top"></span><span class="middle"></span><span
                                                            class="bottom"></span></a></li>
                                                <li><span class="todays-date hide-for-sm-down">Tuesday, March 26,
                                                        2024</span></li>
                                            </ul>
                                        </div>
                                        <div class="flex-spacer"></div>
                                        <div class="flex-item logo-cont"><a href="/" class="site-logo"></a>
                                        </div>
                                        <div class="flex-spacer"></div>
                                        <div class="flex-item end-xs">
                                            <ul class="align-right">
                                                <li class="social"><a target="_blank"
                                                        href="https://facebook.com/bincikeinternational"><i
                                                            class="fa-brands fa-facebook-square"></i></a></li>
                                                <li class="social"><a target="_blank"
                                                        href="http://www.twitter.com/bincikeinternational"><i
                                                            class="fa-brands fa-twitter"></i></a></li>
                                                <li><a href="#" class="theme-switch"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="masthead_menu_wrapper">
                                <div class="wrapper container-fluid">
                                    <ul class="main-menu">
                                        <li id="menu-item-606048"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-148 current_page_item menu-item-606048">
                                            <a href="/">Home</a></li>
                                        <li id="menu-item-606039"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606039">
                                            <a href="/category/business">Business</a></li>
                                        <li id="menu-item-606040"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606040">
                                            <a href="/category/politics">Politics</a></li>
                                        <li id="menu-item-606041"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606041">
                                            <a href="/category/nigeria">Nigeria</a></li>
                                        <li id="menu-item-759831"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-759831">
                                            <a href="/category/international">International</a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-759834"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759834">
                                                    <a href="/category/africa">Africa</a></li>
                                                <li id="menu-item-759837"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-759837">
                                                    <a href="/category/rest-of-the-world">Rest of the World</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-item-606042"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606042">
                                            <a href="/category/health">Health &amp; Wellbeing</a></li>
                                        <li id="menu-item-606043"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606043">
                                            <a href="/category/education">Education</a></li>
                                        <li id="menu-item-606044"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606044">
                                            <a href="/category/lifestyle">Life &amp; Style</a></li>
                                        <li id="menu-item-606045"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606045">
                                            <a href="/category/sport">Sport</a></li>
                                        <li id="menu-item-606046"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606046">
                                            <a href="/category/editorial">Editorial</a></li>
                                        <li id="menu-item-606047"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-606047">
                                            <a href="/category/backpage">Backpage</a></li>
                                        <li id="menu-item-606054"
                                            class="search-toggle menu-item menu-item-type-custom menu-item-object-custom menu-item-606054">
                                            <i style="cursor:pointer" class="far fa-search"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="search_container" class="container-fluid wrapper ">
                            <form role="search" method="get" class="search-form"><label><span
                                        class="screen-reader-text">Search for:</span><input type="search"
                                        class="search-field" placeholder="Search …" name="s"
                                        value="" /></label><input type="submit" class="search-submit"
                                    value="Search" /></form>
                        </div>
                        <div id="breaking_news_wrapper">
                            <div class="wrapper container-fluid">
                                <div class="breaking-news">
                                    <div class="breaking-news-title">Breaking News</div>
                                    <div class="content-area">
                                        <div class="slick-slider slick-vertical slick-initialized" dir="ltr">
                                            <div class="slick-list">
                                                <div class="slick-track" style="width:900%;left:-100%">
                                                    <div data-index="-1" tabindex="-1"
                                                        class="slick-slide slick-cloned" aria-hidden="true"
                                                        style="width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/25/nigerian-army-hands-over-rescued-kaduna-schoolchildren-to-gov-sani"><span>Nigerian
                                                                            Army Hands over Rescued Kaduna
                                                                            Schoolchildren to Gov Sani</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">14 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="0" class="slick-slide slick-active slick-current"
                                                        tabindex="-1" aria-hidden="false"
                                                        style="outline:none;width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/fg-no-ransom-paid-for-release-of-kaduna-schoolchildren"><span>FG:
                                                                            No Ransom Paid for Release of Kaduna
                                                                            Schoolchildren</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="1" class="slick-slide" tabindex="-1"
                                                        aria-hidden="true"
                                                        style="outline:none;width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/cbn-approves-fresh-fx-allocation-to-bdcs-at-lower-rate"><span>CBN
                                                                            Approves Fresh FX Allocation to BDCs at
                                                                            Lower Rate</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="2" class="slick-slide" tabindex="-1"
                                                        aria-hidden="true"
                                                        style="outline:none;width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/tinubu-approves-creation-of-renewed-hope-infrastructure-fund-to-bridge-infrastructure-gap"><span>Tinubu
                                                                            Approves Creation of Renewed Hope
                                                                            Infrastructure Fund to Bridge Infrastructure
                                                                            Gap</span></a><span class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="3" class="slick-slide" tabindex="-1"
                                                        aria-hidden="true"
                                                        style="outline:none;width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/25/nigerian-army-hands-over-rescued-kaduna-schoolchildren-to-gov-sani"><span>Nigerian
                                                                            Army Hands over Rescued Kaduna
                                                                            Schoolchildren to Gov Sani</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">14 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="4" tabindex="-1"
                                                        class="slick-slide slick-cloned" aria-hidden="true"
                                                        style="width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/fg-no-ransom-paid-for-release-of-kaduna-schoolchildren"><span>FG:
                                                                            No Ransom Paid for Release of Kaduna
                                                                            Schoolchildren</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="5" tabindex="-1"
                                                        class="slick-slide slick-cloned" aria-hidden="true"
                                                        style="width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/cbn-approves-fresh-fx-allocation-to-bdcs-at-lower-rate"><span>CBN
                                                                            Approves Fresh FX Allocation to BDCs at
                                                                            Lower Rate</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="6" tabindex="-1"
                                                        class="slick-slide slick-cloned" aria-hidden="true"
                                                        style="width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/26/tinubu-approves-creation-of-renewed-hope-infrastructure-fund-to-bridge-infrastructure-gap"><span>Tinubu
                                                                            Approves Creation of Renewed Hope
                                                                            Infrastructure Fund to Bridge Infrastructure
                                                                            Gap</span></a><span class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">8 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="7" tabindex="-1"
                                                        class="slick-slide slick-cloned" aria-hidden="true"
                                                        style="width:11.11111111111111%">
                                                        <div>
                                                            <div tabindex="-1"
                                                                style="width:100%;display:inline-block">
                                                                <h5 class="h6 title"><a
                                                                        href="/index.php/2024/03/25/nigerian-army-hands-over-rescued-kaduna-schoolchildren-to-gov-sani"><span>Nigerian
                                                                            Army Hands over Rescued Kaduna
                                                                            Schoolchildren to Gov Sani</span></a><span
                                                                        class="post-meta"><span
                                                                            class="date-container"><i
                                                                                class="fa-regular fa-calendar-days"></i><span
                                                                                class="date">14 hours
                                                                                ago</span></span></span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="index-body">
                            <div class="skyscraperAd-L"><ins adsbygoogle data-revive-zoneid=4
                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                {{-- <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script> --}}
                            </div>
                            <div class="skyscraperAd-R"><ins adsbygoogle data-revive-zoneid=11
                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                {{-- <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script> --}}
                            </div>
                        </div>
                        <div>
                            <div class="wideAd"><ins adsbygoogle data-revive-zoneid=8
                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                {{-- <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script> --}}
                            </div>
                            <div id="latest_headlines_wrapper" class="typography">
                                <div class="wrapper container-fluid">
                                    <div class="row middle-md">
                                        <div class="col-xs-12 col-md-2">
                                            <h5 class="section-title">Latest Headlines</h5>
                                        </div>
                                        <div class="col-xs-12 col-md-10"></div>
                                    </div>
                                </div>
                            </div>
                            <section>
                                <div class="wrapper container-fluid typography">
                                    <hr />
                                    <div class="row">
                                        <div class="col-xs-12 col-md-9">
                                            @yield('page-content')
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div id="sidebar">
                                                <div class="dynamic-sidebar-item">
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget"></div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <div
                                                                        style="position:relative;padding-top:max(60%,326px);height:0;width:100%">
                                                                        <iframe allow="clipboard-write"
                                                                            sandbox="allow-top-navigation allow-top-navigation-by-user-activation allow-downloads allow-scripts allow-same-origin allow-popups allow-modals allow-popups-to-escape-sandbox allow-forms"
                                                                            allowfullscreen="true"
                                                                            style="position:absolute;border:none;width:100%;height:100%;left:0;right:0;top:0;bottom:0;"
                                                                            src="https://e.issuu.com/embed.html?backgroundColor=%23be0606&backgroundColorFullscreen=%23d10d0d&d=tdla_0326_cb4f42a0ded8f7&hideIssuuLogo=true&showOtherPublicationsAsSuggestions=true&u=thisdaylive"></iframe>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div><ins adsbygoogle data-revive-zoneid=2
                                                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                                                <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div><ins adsbygoogle data-revive-zoneid=7
                                                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                                                <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div><ins adsbygoogle data-revive-zoneid=6
                                                                    data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                                                                <script async src="//adserver.thisdaylive.com/www/delivery/asyncjs.php"></script>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <figure class="wp-block-image size-full"><a
                                                                            href="https://www.thisdaylive.com/index.php/2023/04/21/how-ai-is-changing-the-landscape-of-content-creation/"
                                                                            target="_blank"
                                                                            rel=" noreferrer noopener"><img
                                                                                decoding="async" loading="lazy"
                                                                                width="602" height="601"
                                                                                src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/sidebarPromo_AI.png"
                                                                                alt=""
                                                                                class="wp-image-861212" /></a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <figure class="wp-block-image size-full"><a
                                                                            href="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/TDSM_0324.pdf"
                                                                            target="_blank"
                                                                            rel=" noreferrer noopener"><img
                                                                                decoding="async" loading="lazy"
                                                                                width="822" height="1190"
                                                                                src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/TDSM_0324.jpg"
                                                                                alt=""
                                                                                class="wp-image-963373" /></a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <figure class="wp-block-image size-full"><a
                                                                            href="https://www.ariseplay.com/movie-detail/244/1871"
                                                                            target="_blank"
                                                                            rel=" noreferrer noopener"><img
                                                                                decoding="async" loading="lazy"
                                                                                width="1600" height="1600"
                                                                                src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/ARISEOriginals.ad_.jpg"
                                                                                alt=""
                                                                                class="wp-image-901514" /></a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <section
                                                                        class="news-category mb-4 wp-block-wppros-rolling-posts">
                                                                        <div class="section-heading">
                                                                            <h2 class="title"><span>Latest</span>
                                                                            </h2>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <div
                                                                                    class="featured-article-container">

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="NSA Office Confirms Escape of Binance Executive, Nadeem Anjarwalla"
                                                                                                href="/index.php/2024/03/25/nsa-office-confirms-escape-of-binance-executive-nadeem-anjarwalla/">

                                                                                                <img width="150"
                                                                                                    height="113"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Nadeem-Anjarwalla.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/25/nsa-office-confirms-escape-of-binance-executive-nadeem-anjarwalla/">NSA
                                                                                                    Office Confirms
                                                                                                    Escape of Binance
                                                                                                    Executive, Nadeem
                                                                                                    Anjarwalla</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="DHQ Releases Pictures of Freed Kaduna Schoolchildren"
                                                                                                href="/index.php/2024/03/25/dhq-releases-pictures-of-freed-kaduna-schoolchildren/">

                                                                                                <img width="150"
                                                                                                    height="113"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/pic-126.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/25/dhq-releases-pictures-of-freed-kaduna-schoolchildren/">DHQ
                                                                                                    Releases Pictures of
                                                                                                    Freed Kaduna
                                                                                                    Schoolchildren</a>
                                                                                            </h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Tinubu Welcomes Release of Kaduna, Sokoto Schools&#8217; Pupils"
                                                                                                href="/index.php/2024/03/24/tinubu-welcomes-release-of-kaduna-sokoto-schools-pupils/">

                                                                                                <img width="150"
                                                                                                    height="113"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/TINUBU-7.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/24/tinubu-welcomes-release-of-kaduna-sokoto-schools-pupils/">Tinubu
                                                                                                    Welcomes Release of
                                                                                                    Kaduna, Sokoto
                                                                                                    Schools&#8217;
                                                                                                    Pupils</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="DHQ: How Abducted Kaduna Schoolchidren Were Rescued in Zamfara"
                                                                                                href="/index.php/2024/03/24/dhq-how-abducted-kaduna-schoolchidren-were-rescued-in-zamfara/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Defence-Headquarters-DHQ-150x150.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/24/dhq-how-abducted-kaduna-schoolchidren-were-rescued-in-zamfara/">DHQ:
                                                                                                    How Abducted Kaduna
                                                                                                    Schoolchidren Were
                                                                                                    Rescued in
                                                                                                    Zamfara</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Police Release Identities of 12 Slain, Missing Officers in Delta Attack"
                                                                                                href="/index.php/2024/03/24/police-release-identities-of-12-slain-missing-officers-in-delta-attack/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Defence-Headquarters-DHQ-150x150.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/24/police-release-identities-of-12-slain-missing-officers-in-delta-attack/">Police
                                                                                                    Release Identities
                                                                                                    of 12 Slain, Missing
                                                                                                    Officers in Delta
                                                                                                    Attack</a></h2>






                                                                                        </div>

                                                                                    </article>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <section
                                                                        class="news-category mb-4 wp-block-wppros-rolling-posts">
                                                                        <div class="section-heading">
                                                                            <h2 class="title"><span>Editorial</span>
                                                                            </h2>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <div
                                                                                    class="featured-article-container">

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="REFORMING THE CRIMINAL JUSTICE SYSTEM"
                                                                                                href="/index.php/2024/03/26/reforming-the-criminal-justice-system/">

                                                                                                <img width="150"
                                                                                                    height="113"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Screenshot_26-3-2024_13619_.jpeg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/26/reforming-the-criminal-justice-system/">REFORMING
                                                                                                    THE CRIMINAL JUSTICE
                                                                                                    SYSTEM</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="CEO Fix All Africa sheds light on Redefining Access to Skilled Workers"
                                                                                                href="/index.php/2024/03/26/ceo-fix-all-africa-sheds-light-on-redefining-access-to-skilled-workers/">

                                                                                                <img width="150"
                                                                                                    height="118"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Screenshot_20240326-110715.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/26/ceo-fix-all-africa-sheds-light-on-redefining-access-to-skilled-workers/">CEO
                                                                                                    Fix All Africa sheds
                                                                                                    light on Redefining
                                                                                                    Access to Skilled
                                                                                                    Workers</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="NIGERIA AND THE TUBERCULOSIS BURDEN"
                                                                                                href="/index.php/2024/03/25/nigeria-and-the-tuberculosis-burden/">

                                                                                                <img width="150"
                                                                                                    height="102"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Screen-Shot-2024-03-24-at-5.58.42-PM.png"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/25/nigeria-and-the-tuberculosis-burden/">NIGERIA
                                                                                                    AND THE TUBERCULOSIS
                                                                                                    BURDEN</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="ISSUES IN THE OKUAMA TRAGEDY"
                                                                                                href="/index.php/2024/03/24/issues-in-the-okuama-tragedy/">

                                                                                                <img width="150"
                                                                                                    height="145"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/editorial-cartoons.jpeg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/24/issues-in-the-okuama-tragedy/">ISSUES
                                                                                                    IN THE OKUAMA
                                                                                                    TRAGEDY</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="PADDING ACCORDING TO NINGI AND HIS FRIENDS"
                                                                                                href="/index.php/2024/03/22/padding-according-to-ningi-and-his-friends/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Bolaji-Adebiyi-2-150x150.gif"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/22/padding-according-to-ningi-and-his-friends/">PADDING
                                                                                                    ACCORDING TO NINGI
                                                                                                    AND HIS FRIENDS</a>
                                                                                            </h2>






                                                                                        </div>

                                                                                    </article>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <section
                                                                        class="news-category mb-4 wp-block-wppros-rolling-posts">
                                                                        <div class="section-heading">
                                                                            <h2 class="title"><span>Back Page</span>
                                                                            </h2>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <div
                                                                                    class="featured-article-container">

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="The Abducted Children Of Kuriga And Other Stories"
                                                                                                href="/index.php/2024/03/26/the-abducted-children-of-kuriga-and-other-stories/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/REUBEN-ABATI-150x150.png"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/26/the-abducted-children-of-kuriga-and-other-stories/">The
                                                                                                    Abducted Children Of
                                                                                                    Kuriga And Other
                                                                                                    Stories</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Ramadan feeding as gift of fish"
                                                                                                href="/index.php/2024/03/25/ramadan-feeding-as-gift-of-fish/">

                                                                                                <img width="109"
                                                                                                    height="68"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/mahmud-jega.png"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/25/ramadan-feeding-as-gift-of-fish/">Ramadan
                                                                                                    feeding as gift of
                                                                                                    fish</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="The Morality Question"
                                                                                                href="/index.php/2024/03/25/the-morality-question/">

                                                                                                <img width="150"
                                                                                                    height="109"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/DAKUKU-PETERSIDE.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/25/the-morality-question/">The
                                                                                                    Morality
                                                                                                    Question</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="How Lawmakers Underdevelop Nigeria"
                                                                                                href="/index.php/2024/03/24/how-lawmakers-underdevelop-nigeria/">

                                                                                                <img width="150"
                                                                                                    height="87"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/SIMON-KOLAWOLE.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/24/how-lawmakers-underdevelop-nigeria/">How
                                                                                                    Lawmakers
                                                                                                    Underdevelop
                                                                                                    Nigeria</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Well-Done Mr. President, Allex Oti"
                                                                                                href="/index.php/2024/03/23/well-done-mr-president-allex-oti/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/OKEY-IKECHUKWU-1-150x150.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/23/well-done-mr-president-allex-oti/">Well-Done
                                                                                                    Mr. President, Allex
                                                                                                    Oti</a></h2>






                                                                                        </div>

                                                                                    </article>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li style="list-style-type:none">
                                                        <div class="sidebar-widget">
                                                            <div class="sidebar-widget">
                                                                <div class="sidebar-widget">
                                                                    <section
                                                                        class="news-category mb-4 wp-block-wppros-rolling-posts">
                                                                        <div class="section-heading">
                                                                            <h2 class="title"><span>Column</span>
                                                                            </h2>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12">
                                                                                <div
                                                                                    class="featured-article-container">

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="In Defence of Citizen Rebecca"
                                                                                                href="/index.php/2024/03/26/in-defence-of-citizen-rebecca/">

                                                                                                <img width="150"
                                                                                                    height="76"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Onikepo-Braithwaite-1.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/26/in-defence-of-citizen-rebecca/">In
                                                                                                    Defence of Citizen
                                                                                                    Rebecca</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Notorious Missteps of Cardoso’s CBN"
                                                                                                href="/index.php/2024/03/23/notorious-missteps-of-cardosos-cbn/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Femi-Akintunde-Johnson-1-150x150.png"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/23/notorious-missteps-of-cardosos-cbn/">Notorious
                                                                                                    Missteps of
                                                                                                    Cardoso’s CBN</a>
                                                                                            </h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="THE TROOPS TRAGEDY IN DELTA STATE"
                                                                                                href="/index.php/2024/03/21/the-troops-tragedy-in-delta-state/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Monday-Philips-Ekpe-150x150.gif"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/21/the-troops-tragedy-in-delta-state/">THE
                                                                                                    TROOPS TRAGEDY IN
                                                                                                    DELTA STATE</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="Erisco Boss and the Senate: A Tale of Two Bullies"
                                                                                                href="/index.php/2024/03/19/erisco-boss-and-the-senate-a-tale-of-two-bullies/">

                                                                                                <img width="150"
                                                                                                    height="76"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Onikepo-Braithwaite-1.jpg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/19/erisco-boss-and-the-senate-a-tale-of-two-bullies/">Erisco
                                                                                                    Boss and the Senate:
                                                                                                    A Tale of Two
                                                                                                    Bullies</a></h2>






                                                                                        </div>

                                                                                    </article>

                                                                                    <article
                                                                                        class="typography horizontal">




                                                                                        <div
                                                                                            class="article-image thumbnail">

                                                                                            <a title="The Diplomacy and Management of Official Corruption in Nigeria: Budget Padding as a Tip of the Iceberg"
                                                                                                href="/index.php/2024/03/17/the-diplomacy-and-management-of-official-corruption-in-nigeria-budget-padding-as-a-tip-of-the-iceberg/">

                                                                                                <img width="150"
                                                                                                    height="150"
                                                                                                    src="https://global.ariseplay.com/amg/www.thisdaylive.com/uploads/Bola-A.-Akinterinwa-150x150.jpeg"
                                                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                                                    alt=""
                                                                                                    decoding="async"
                                                                                                    loading="lazy" />
                                                                                            </a>

                                                                                        </div>





                                                                                        <div
                                                                                            class="article-content matchHeight">


                                                                                            <h2 class="h6"><a
                                                                                                    href="/index.php/2024/03/17/the-diplomacy-and-management-of-official-corruption-in-nigeria-budget-padding-as-a-tip-of-the-iceberg/">The
                                                                                                    Diplomacy and
                                                                                                    Management of
                                                                                                    Official Corruption
                                                                                                    in Nigeria: Budget
                                                                                                    Padding as a Tip of
                                                                                                    the Iceberg</a></h2>






                                                                                        </div>

                                                                                    </article>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </main>
                    <div id="site_footer" class="typography">
                        <div class="wrapper container-fluid">
                            <div class="row py-7 between-sm">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="footer-widget">
                                        <img alt="ThisDayLive" loading="lazy" width="545" height="121" decoding="async" data-nimg="1" class="image wp-image-606049 this-day-logo attachment-full size-full" style="color:transparent" srcSet="{{ asset('assets/images/bincike-blog-logo-dark.png') }}" src="{{ asset('assets/images/bincike-blog-logo-dark.png') }}" />
                                    </div>
                                    <div class="footer-widget">
                                        <div class="textwidget">
                                            <p>Founded on January 22, 2022, BINCIKE is published by BINCIKE INTERNATIONAL,
                                                28/29 Malel Plaza, Bishop Street, Jimeta Yola,
                                                Nigeria. It is Nigeria’s most authoritative news Technology and Media available on all platforms for
                                                the political, business, professional and diplomatic elite and broader
                                                middle classes while serving as the meeting point of new ideas, culture
                                                and technology for the aspirationals and millennials. The newspaper is a
                                                public trust dedicated to the pursuit of truth and reason covering a
                                                range of issues from breaking news to politics, business, the markets,
                                                the arts, sports and community to the crossroads of people and society.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3"></div>
                                <div class="col-xs-6 col-sm-3"></div>
                                <div class="col-xs-6 col-sm-2">
                                    <div class="footer-widget">
                                        <div class="section-heading">
                                            <h4 class="title"><span>Helpful Links</span></h4>
                                        </div>
                                        <div class="menu-helpful-links-container">
                                            <ul id="menu-helpful-links" class="menu">
                                                <li id="menu-item-606050"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-148 current_page_item menu-item-606050">
                                                    <a href="/" aria-current="page">Home</a></li>
                                                <li id="menu-item-606051"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-606051">
                                                    <a href="/about-us">About Us</a></li>
                                                <li id="menu-item-606052"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-606052">
                                                    <a rel="/privacy-policy" href="/privacy-policy">Privacy
                                                        Policy</a></li>
                                                <li id="menu-item-606053"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-606053">
                                                    <a href="/terms-conditions">Terms &amp; Conditions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget_text footer-widget">
                                        <div class="section-heading">
                                            <h4 class="title"><span>Contact Us</span></h4>
                                        </div>
                                        <div class="textwidget custom-html-widget">
                                            <p>You can email us at: hello@bincikeblog.com or visit our <a
                                                    href="/contact-us">contact us</a> page.</p>
                                            <p class="mb-3"><a class="has-white-color" target="_blank"
                                                    rel="noopener" href="https://facebook.com/bincikeinternational"><i
                                                        class="fab fa-facebook-f mr-1 fa-2x"></i></a><a
                                                    class="has-white-color" target="_blank" rel="noopener"
                                                    href="http://www.twitter.com/bincikeinternational"><i
                                                        class="fab fa-twitter mr-1 fa-2x"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wideAd"><ins adsbygoogle data-revive-zoneid=8
                                data-revive-id=f1b2d73c224f637af384b7861f5b193c></ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mm-wrapper__blocker mm-slideout">
                <a href="#"><span class="mm-sronly">Close menu</span></a>
            </div>
            <div class="Toastify"></div>
        </div>
    </div>

</body>

</html>
