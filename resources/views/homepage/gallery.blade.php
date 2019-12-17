@extends('welcome')
@section('title','| Gallery')
@section('content')
<div id="slider" class="inspiro-slider dots-creative" data-height-xs="360">

    <div class="slide kenburns" style="background-image:url('{!!asset('storage/bg/parallax-1.jpg')!!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">

                <span class="strong">Our collections</span>
                <h1>DOCUMENTATION GALLERY</h1>

            </div>
        </div>
    </div>

</div>
<section id="page-content">
    <div class="container">

        <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-1.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-1.jpg')!!}"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-2.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-2.jpg')!!}"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-3.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-3.jpg')!!}"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-4.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-4.jpg')!!}"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-5.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-5.jpg')!!}"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="{!!asset('storage/gallery/gal-6.jpg')!!}"
                    data-lightbox="gallery-image"><img src="{!!asset('storage/gallery/gal-6.jpg')!!}"></a>
            </div>
        </div>

    </div>
</section>

@endsection
