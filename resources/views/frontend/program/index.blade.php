@extends('frontend.app')

@section('container')
<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    .misi {
        text-align: left;
    }

    .manajemen {
        font-size: 40px;
        color: black;
        text-transform: uppercase;
        font-weight: 700;
    }

    .box--br-rounded {
        border-bottom-right-radius: 60px;
        overflow: hidden;
    }

    .box--bg-primary-left {
        background-color: #2a9b02;
    }

    .box--half-pad {
        padding: 30px;
    }

    .section-legalitas {
        background-color: #dfe2e2;
    }

    .section-legalitas__item:nth-child(odd) {
        position: relative;
        padding-right: 40px;
    }

    .section-legalitas__item:nth-child(odd):after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        width: 2px;
        background: #2a9b02;
    }

    .legalitas {
        font-size: 40px;
        color: #333;
        text-transform: uppercase;
        font-weight: 700;
    }

    .section--icon-yakesma-header {
        background-color: #dfe2e2;
        background-position: bottom right;
        background-size: auto;
        background-repeat: no-repeat;
    }

    .page-title__text {
        color: #145f35;
        font-weight: bolder;
        font-size: 2.1rem;
        line-height: 1.1em;
    }

    .zakat-img{
        border-radius: 0 0 0 40px;
    }
    .post-grid--ellipsis-4 {
    height: 66px;
}

.post-grid--ellipsis-4 {
    height: 66px;
    line-height: 1.2em;
    display: block;
    display: -webkit-box;
    overflow: hidden;
    line-clamp: 4;
    -webkit-line-clamp: 4;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
}
.post-grid__link {
    position: absolute;
    bottom: 0;
    color: #67b801;
    text-decoration: underline;
}

.post-grid__title .post-grid__title-link {
    color: inherit;
    font-weight: inherit;
    font-size: inherit;
    text-transform: capitalize;
}
</style>
{{-- tentang kami --}}
<section class="page-title jumbotron jumbotron-fluid section--icon-yakesma-header" style="margin-top: 100px;">
    <div class="container">
        <h1 class="page-title__text">Program</h1>
        <div class="text-muted">
            <p>Program</p>
        </div>
    </div>
</section>
{{-- end tentang kami --}}
<section class="section section--full-pad">
    <div class="container">
        <div class="row post-grid">

            <div class="col-md-6">
                <div id="post-23"
                    class="row post-grid__item mb-5 post-23 program type-program status-publish has-post-thumbnail hentry">
                    <div class="col-6 post-grid__thumbnail">
                        <div class="post-grid__box-bl-rounded box--bl-rounded">
                            <img class="section__img zakat-img" src="{{asset('assets/img/program/zakat25.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-6 post-grid__content">
                        <div class="post-grid__title post-grid--ellipsis-4">
                            <a class="post-grid__title-link" href="https://yakesma.org/program/zis/">ZIS</a>
                        </div>
                        <a class="post-grid__link text-uppercase font-italic text-underline"
                            href="https://yakesma.org/program/zis/">Baca Selengkapnya</a>
                    </div>
                </div> <!-- #post-23 post-grid__item -->
            </div>
            <div class="col-md-6">
                <div id="post-21"
                    class="row post-grid__item mb-5 post-21 program type-program status-publish has-post-thumbnail hentry">
                    <div class="col-6 post-grid__thumbnail">
                        <div class="post-grid__box-bl-rounded box--bl-rounded">
                            <img class="section__img"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                alt=""
                                data-lazy-src="https://i0.wp.com/yakesma.org/wp-content/uploads/2019/01/a72c3eba-ed1e-4e2d-99e8-3a730a79658b.jpeg?resize=256%2C140&#038;ssl=1"><noscript><img
                                    class="section__img"
                                    src="https://i0.wp.com/yakesma.org/wp-content/uploads/2019/01/a72c3eba-ed1e-4e2d-99e8-3a730a79658b.jpeg?resize=256%2C140&#038;ssl=1"
                                    alt=""></noscript>
                        </div>
                    </div>
                    <div class="col-6 post-grid__content">
                        <div class="post-grid__title post-grid--ellipsis-4">
                            <a class="post-grid__title-link" href="https://yakesma.org/program/wakaf/">WAKAF</a>
                        </div>
                        <a class="post-grid__link text-uppercase font-italic text-underline"
                            href="https://yakesma.org/program/wakaf/">Baca Selengkapnya</a>
                    </div>
                </div> <!-- #post-21 post-grid__item -->
            </div>
            <div class="col-md-6">
                <div id="post-19"
                    class="row post-grid__item mb-5 post-19 program type-program status-publish has-post-thumbnail hentry">
                    <div class="col-6 post-grid__thumbnail">
                        <div class="post-grid__box-bl-rounded box--bl-rounded">
                            <img class="section__img"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                alt=""
                                data-lazy-src="https://i0.wp.com/yakesma.org/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-17-at-11.59.12.jpeg?resize=256%2C140&#038;ssl=1"><noscript><img
                                    class="section__img"
                                    src="https://i0.wp.com/yakesma.org/wp-content/uploads/2022/01/WhatsApp-Image-2022-01-17-at-11.59.12.jpeg?resize=256%2C140&#038;ssl=1"
                                    alt=""></noscript>
                        </div>
                    </div>
                    <div class="col-6 post-grid__content">
                        <div class="post-grid__title post-grid--ellipsis-4">
                            <a class="post-grid__title-link" href="https://yakesma.org/program/kurban/">RAMADHAN</a>
                        </div>
                        <a class="post-grid__link text-uppercase font-italic text-underline"
                            href="https://yakesma.org/program/kurban/">Baca Selengkapnya</a>
                    </div>
                </div> <!-- #post-19 post-grid__item -->
            </div>
        </div>
    </div>
</section>
{{-- End Legalitas --}}
@endsection
