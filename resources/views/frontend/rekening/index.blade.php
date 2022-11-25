@extends('frontend.app')

@section('container')
<style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    .minyak {
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }

    .garis-minyak {
        background: #029B4B;
        width: 375px;
        height: 10px
    }

    .jelantah-card {
        text-align: center;
        padding: 25px 25px;
        border-radius: 12px;
        margin-top: 30px;
        -webkit-box-shadow: 0 0 15px -2px #ddd;
        box-shadow: 0 0 15px -2px #ddd;
    }

    .judul {
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px;
    }

    .jelantah-card h3 {
        font-size: 24px;
        margin-bottom: 5px;
    }

    .jelantah-card a {
        font-weight: 600;
    }

    .content7 {
        height: auto;
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }

    .join {
        width: 164px;
        height: 60px;
        font-size: 20px;
        color: white;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 10px !important;
    }

    .jelantah-mitra {
        /* Large heading 30/bold */

        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 38px;
        /* identical to box height, or 127% */

        text-align: center;

        /* Neutral/10 */

        color: #262626;

    }

    .box4 {
        width: 32px;
        height: 32px;
        margin: 7px;
        background: #029B4B;
        border-radius: 50%;
    }

    .share {
        margin-top: 10px;
        margin-right: 10px;
        font-style: Medium;
        font-size: 16px;
        color: #595959;
    }

    .isi {
        font-size: 16px;
        text-align: left;
    }

    .seratus {
        font-size: 20px;
        color: #262626;
        font-weight: 500;
    }

    @media only screen and (min-width:1024px) {
        #header {
            padding: 20px;
        }
    }

    @media only screen and (min-width:768px) and (max-width: 1023px) {}

    @media only screen and (min-width:411px) and (max-width:540px) {
        .minyak {
            font-size: 30px
        }

        .garis-minyak {
            width: 300px;
            height: 5px;
        }

        .isi {
            font-size: 16px
        }

        .judul {
            font-size: 25px
        }

        .garis7 {
            width: 365px
        }

        .jelantah-mitra {
            font-size: 17px;
        }

        .footer .footer-top {
            background-position: center bottom;
            height: auto;
            padding-bottom: 20px
        }
    }

    @media only screen and (min-width:360px) and (max-width:375px) {
        .minyak {
            font-size: 30px
        }

        .garis-minyak {
            width: 285px;
            height: 5px;
        }

        .isi {
            font-size: 16px
        }

        .judul {
            font-size: 23px
        }

        .judul-isi {
            font-size: 16px
        }

        .garis7 {
            width: 325px
        }

        .jelantah-mitra {
            font-size: 17px;
        }

        .footer .footer-top {
            background-position: center bottom;
            height: auto;
            padding-bottom: 20px
        }
    }

    @media only screen and (min-width:300px) and (max-width:320px) {
        .minyak {
            font-size: 25px
        }

        .garis-minyak {
            width: 235px;
            height: 5px;
        }

        .isi {
            font-size: 14px
        }

        .judul-isi {
            font-size: 16px
        }

        .judul {
            font-size: 20px
        }

        .garis7 {
            width: 290px
        }

        .jelantah-mitra {
            font-size: 14px;
        }

        .footer .footer-top {
            background-position: center bottom;
            height: auto;
            padding-bottom: 20px
        }
    }

    @media only screen and (min-width:280px) and (max-width:299px) {
        .minyak {
            font-size: 25px
        }

        .garis-minyak {
            width: 235px;
            height: 5px;
        }

        .isi {
            font-size: 14px
        }

        .judul-isi {
            font-size: 16px
        }

        .judul {
            font-size: 18px
        }

        .garis7 {
            width: 260px
        }

        .jelantah-mitra {
            font-size: 14px;
        }

        .seratus {}

        .footer .footer-top {
            background-position: center bottom;
            height: auto;
            padding-bottom: 20px
        }
    }

    .section-visi-misi .lead {
        font-weight: 400;
        font-size: 26px;
    }

    .section-visi-misi .lead strong {
        color: #2a9b02;
        font-weight: 700;
        font-style: italic;
    }

    .section-visi-misi .list-group-flush .list-group-item .list-group-number {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        width: 30px;
        font-size: 70px;
        font-weight: bolder;
        color: #24A19C;
    }

    .section-visi-misi .list-group-flush .list-group-item {
        position: relative;
        padding-left: 60px;
        padding-top: 1rem;
        padding-bottom: 2rem;
        font-size: 21px;
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

    .section__btn {
        display: block;
        background: #2a9b02;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        font-size: 16px;
        border-radius: 10px;
        padding-left: 25px;
        padding-right: 25px;
    }
    .zakat{
        font-size: 16px;

    }
</style>
{{-- tentang kami --}}
<section class="page-title jumbotron jumbotron-fluid section--icon-yakesma-header" style="margin-top: 100px;">
    <div class="container">
        <h1 class="page-title__text">Rekening</h1>
    </div>
</section>
{{-- end tentang kami --}}
<section style="margin-top: 60px">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
            <div class="row">
                <div class="text-center">
                    <span class="manajemen">MANAJEMEN & DEWAN DIREKSI</span>
                </div>
            </div>
        </div>

        <div class="my-4">
            <h3 class="widget__title text-uppercase">
                <span> <i class="fas fa-angle-right"></i> Zakat</span>
            </h3>
            <div class="row">
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bank.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong id="madani">3130006619</strong><br>
                                AN Kesejahteraan Madani Yys </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="3130006619" onclick="copyToClipboard('#madani')" class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong id="madani1">860033334100</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="860033334100" onclick="copyToClipboard1('#madani1')" class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2510050015</strong><br>
                                AN Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2510050015"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>7088991235</strong><br>
                                AN Yakesma QQ Zakat </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="7088991235"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2182181855</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2182181855"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>1270010009940</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="1270010009940"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->

            </div>
        </div>

        <div class="my-4">
            <h3 class="widget__title text-uppercase">
                <span> <i class="fas fa-angle-right"></i> Wakaf</span>
            </h3>
            <div class="row">

                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2510050026</strong><br>
                                AN Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2510050026"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>7080838257</strong><br>
                                AN Yayasan Kesma </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="7080838257"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>5554446673</strong><br>
                                AN Yakesma </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="5554446673"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>1270008881284</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="1270008881284"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2189922218</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2189922218"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->

            </div>
        </div>

        <div class="my-4">
            <h3 class="widget__title text-uppercase">
                <span> <i class="fas fa-angle-right"></i> Infak</span>
            </h3>
            <div class="row">
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2510060012</strong><br>
                                AN Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2510060012"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>860033336500</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="860033336500"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>3130006620</strong><br>
                                AN Kesejahteraan Madani Yys </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="3130006620"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>8002001129</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="8002001129"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>2182184218</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="2182184218"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->
                <div class="rek-item col-md-6 p-3">
                    <div class="border p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <img src="{{asset('assets/img/program/bni.png')}}" alt="" style="max-width: 40%" class="img-fluid">
                            </div>
                            <div class="col">
                                <strong>1270010010112</strong><br>
                                AN Yayasan Kesejahteraan Madani </div>
                        </div>
                        <a href="#" data-title="tersalin" data-clipboard-text="1270010010112"
                            class="btn btn-sm btn-clipboard section__btn d-table mx-auto yakesma-bg-orange">SALIN NO.
                            REK</a>
                    </div>
                </div> <!-- rek-item -->

            </div>
        </div>

    </div>
</section>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    }

    function copyToClipboard1(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

</script>

@endsection
