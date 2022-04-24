

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        {{ config('app.name', 'Laravel') }}
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <link rel="stylesheet" href="https://unpkg.com/lightgallery@2.4.0/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="public gradient">
        @include('components.public.nav')
        @include('components.public.hero')
        {{-- @include('components.public.features')
        @include('components.public.cards')
        @include('components.public.prices')
        @include('components.public.calltoaction') --}}
        <div id="lightgallery" class="flex flex-wrap justify-center">
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aangelicats/_H345007+1.jpg" class="">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aangelicats/_H345007+1.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aangelicats/_H345023.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aangelicats/_H345023.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/yaiamussi/Yaia - 202107240136.jpg" class="">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/yaiamussi/Yaia - 202107240136.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/yaiamussi/Yaia - 202107240151.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/yaiamussi/Yaia - 202107240151.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/yaiamussi/Yaia - 202107240155 1.jpg" class="">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/yaiamussi/Yaia - 202107240155 1.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/yaiamussi/Yaia - 202107240170 1.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/yaiamussi/Yaia - 202107240170 1.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aileenkent/Aileen+202107240003+1.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aileenkent/Aileen+202107240003+1.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aileenkent/Aileen+202107240036.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aileenkent/Aileen+202107240036.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aileenkent/Aileen+202107240038.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aileenkent/Aileen+202107240038.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/aileenkent/Aileen+202107240059.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/aileenkent/Aileen+202107240059.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/islevia_cb/Islevia+-+202111210991+1.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/islevia_cb/Islevia+-+202111210991+1.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/islevia_cb/Islevia+-+202111211179.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/islevia_cb/Islevia+-+202111211179.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/rnadiagabriela/_H342841.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/rnadiagabriela/_H342841.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/rnadiagabriela/Gabriela+-+202111210399.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/rnadiagabriela/Gabriela+-+202111210399.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/rnadiagabriela/Gabriela+-+202111210444.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/rnadiagabriela/Gabriela+-+202111210444.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/sophie/_H341932+2.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/sophie/_H341932+2.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/sophie/_H341964.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/sophie/_H341964.jpg" />
            </a>
            <a href="https://bohemianpublic.s3.amazonaws.com/originals/sophie/_H341970.jpg">
                <img src="https://bohemianpublic.s3.amazonaws.com/thumbnails/sophie/_H341970.jpg" />
            </a>
        </div>
      
        @include('components.public.footer')
        <!-- jQuery if you need it
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" defer></script> --}}
        <script src="/js/landing/scroll.js" defer></script>
        <script src="/js/landing/nav-mobile.js" defer></script>
        <script src="https://unpkg.com/lightgallery@2.4.0/lightgallery.min.js" defer></script>
        <script src="https://unpkg.com/lightgallery@2.4.0/plugins/thumbnail/lg-thumbnail.min.js" defer></script>
        <script src="https://unpkg.com/lightgallery@2.4.0/plugins/zoom/lg-zoom.min.js" defer></script>
        <script>
            document.addEventListener( 'DOMContentLoaded', function () {
              lightGallery(document.getElementById('lightgallery'), {
                  thumbnail: true,
                  speed: 500,
                  download: false,
              });
            });
        </script>
    </body>
</html>
            