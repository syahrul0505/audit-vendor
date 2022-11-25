@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }

     /* Dukung Jelantah4Change */
    .jelantah-card{
    text-align: center;
    padding: 30px 25px;
    border-radius: 12px;
    margin-top: 30px;
    -webkit-box-shadow: 0 0 15px -2px #ddd;
    box-shadow: 0 0 15px -2px #ddd;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
    }

    .jelantah-card h3{
    font-size: 24px;
    margin-bottom: 5px;
    }

    .jelantah-card a{
    font-weight: 600;
    }

    .content7{
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
    .dokumentasi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-dokumentasi{
        background:  #3eb65f;
        width: 500px;
        height: 10px
    }
    .list{
        background: #029B4B;
        color: white;
        padding: 8px;
    }

    .bulat1{ 
        z-index: 0;
        width: 568px; 
        height: 568px; 
        position: relative;
        top: 725px;
        left: 852px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat2{ 
        z-index: 0;
        width: 536px; 
        height: 536px; 
        position: relative;
        top: 1188px;
        right: 397px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .gmb1{
        height: 443px;
        border-radius: 12px
    }
    .gmb2{
        border-radius: 12px; width:284px; height:212px;
    }
    .gmb2-kanan{
        margin: 0px 0px 10px 0px; padding:0px 10px 0px 10px;
    }
    .gmb2-kiri{
        margin: 0px 0px 10px 0px; padding:0px 10px 0px 0px;
    }
    .col-gmb{
        width:570px;height:443px; padding: 0px 12px 0px 12px
    }
    .full-konten{
        margin-top: 60px; height:2450px
    }
    .konten{
        position: relative; bottom: 1100px
    }
    .title{
        font-size: 20px
    }
    @media only screen and (min-width:1024px) and (max-width: 1200px)
    {
        #header{
            padding: 20px;
        }
        .gmb1{
            width: 100%;
            height: 408px
        }
        .gmb2{
            width: 200px;
            height: 200px
        }
        .col-gmb{
            width: 450px;
        }
        .full-konten{
            height: 2439px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .gmb1{
            width: 100%;
            height: 370px;
            margin-bottom: 10px
        }
        .gmb2{
            width: 100%
        }
        .col-gmb{
            width: 100%
        }
        .full-konten{
            height: 3985px
        }
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .title{
            font-size: 15px
        }
        .gmb1{
            height: 370px;
            margin-bottom: 20px
        }
        .full-konten{
            height: 4112px
        }
        .dokumentasi{
            font-size: 28px
        }
        .garis-dokumentasi{
            width: 350px;
            height: 5px;
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 25px
        }
        .judul-isi{
            font-size: 16px
        }
        .garis7{
            width: 365px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }

    @media only screen and (min-width:360px) and (max-width:375px)
    {
        .lihat{
            font-size: 14px;
        }
        .title{
            font-size: 13px
        }
        .gmb1{
            height: 370px;
            margin-bottom: 10px
        }
        .full-konten{
            height: 4063px;
        }
        .dokumentasi{
            font-size: 25px
        }
        .garis-dokumentasi{
            width: 315px;
            height: 5px
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 22px
        }

        .garis7{
            width: 325px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .lihat{
            font-size: 12px;
        }
        .title{
            font-size: 13px
        }
        .gmb1{
            height: 370px;
            margin-bottom: 10px
        }
        .full-konten{
            height: 4063px;
        }
        .dokumentasi{
            font-size: 23px
        }
        .garis-dokumentasi{
            width: 290px;
            height: 5px
        }
        .isi{
            font-size: 14px
        }
        .judul-isi{
            font-size: 16px
        }
        .judul{
            font-size: 20px
        }

        .garis7{
            width: 290px
        }
        .jelantah-mitra{
            font-size: 14px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .lihat{
            font-size: 12px;
        }
        .title{
            font-size: 13px
        }
        .gmb1{
            height: 200px;
            margin-bottom: 10px
        }
        .gmb2{
            height: 133px;
        }
        .full-konten{
            height: 3257px;
        }
        .dokumentasi{
            font-size: 25px
        }
        .garis-dokumentasi{
            width: 152px;
            height: 5px
        }
        .isi{
            font-size: 14px
        }
        .judul-isi{
            font-size: 16px
        }
        .judul{
            font-size: 18px
        }
        .garis7{
            width: 260px
        }
        .jelantah-mitra{
            font-size: 14px;
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }

</style>
<section class="full-konten">
    <div class="container">
        <div class="bulat1" data-aos="zoom-in"></div>
        <div class="bulat2" data-aos="zoom-in"></div>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 konten">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dokumentasi" data-aos="fade-down" data-aos-delay="300">Dokumentasi Kegiatan</div>
                <center><div class="garis-dokumentasi" data-aos="fade-down"></div></center>
            </div>
        </div>
    </div>

<section id="footer" class="footer">

<div class="footer-newsletter bg-white" style="border: none">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6" data-aos="fade-down">
        <form action="" method="post">
            <input type="text" placeholder="Search Here..." style="border: 0; padding: 8px; width: calc(100% - 140px);"><input type="submit" value="Search">
        </form>
    </div>
    </div>
    </div>
</div>
</section>

<div class="container mt-4" data-aos="zoom-in">
<div class="row row-cols-1 row-cols-md-2 g-2">
    <div class="col">
        <div class="title"><i class="fas fa-stream list ml-5"></i>
        <span class="p-2">Festival Peduli Sampah Nasional (FPSN) 2021</span>
        </div>
    </div>
    <div class="col">
    <div class="p-2 bd-highlight lihat text-end"><a href="{{route('lihat-semuanya-fpsn')}}">Lihat Semuanya<i class="fas fa-angle-double-right" style="margin-left: 10px"></i> </a></div> 
    </div>
</div>
</div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Edukasi Jelantah Kelurahan Margasari Kota Balikpapan.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 3.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Serah Terima Jelantah dari Relawan.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/FPSN 2021 J4C 4.png') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/FPSN 2021/Salinan IMG20180218133903.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Mario Jela Pemasaran --}}
<div class="container mt-4" data-aos="zoom-in">
<div class="row row-cols-1 row-cols-md-2 g-2">
    <div class="col">
        <div class="title"><i class="fas fa-stream list ml-5"></i>
        <span class="p-2">Mario Jela Pemasaran</span>
        </div>
    </div>
    <div class="col">
    <div class="p-2 bd-highlight lihat text-end"><a href="{{route('lihat-semuanya-mario')}}">Lihat Semuanya<i class="fas fa-angle-double-right" style="margin-left: 10px"></i> </a></div> 
    </div>
</div>
</div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA PEMASARAN/IMG_3718.JPG') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA PEMASARAN/IMG_3719.JPG') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA PEMASARAN/IMG_3720.JPG') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>

                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA PEMASARAN/IMG_3721.JPG') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA PEMASARAN/IMG_3722.JPG') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--end Mario Jela Pemasaran --}}

{{-- Mario Jela Batch 3 --}}
<div class="container mt-4" data-aos="zoom-in">
<div class="row row-cols-1 row-cols-md-2 g-2">
    <div class="col">
        <div class="title"><i class="fas fa-stream list ml-5"></i>
        <span class="p-2">Mario Jela Batch 3</span>
        </div>
    </div>
    <div class="col">
    <div class="p-2 bd-highlight lihat text-end"><a href="{{route('lihat-semuanya-mario3')}}">Lihat Semuanya<i class="fas fa-angle-double-right" style="margin-left: 10px"></i></a> </div> 
    </div>
</div>
</div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA BATCH 3/1.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA BATCH 3/2.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA BATCH 3/3.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>

                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA BATCH 3/4.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/MARIO JELA BATCH 3/5.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- end Mario Jela Batch 3 --}}


{{-- Pengelolaan --}}
<div class="container mt-4" data-aos="zoom-in">
<div class="row row-cols-1 row-cols-md-2 g-2">
    <div class="col">
        <div class="title"><i class="fas fa-stream list ml-5"></i>
        <span class="p-2">Pengelolaan</span>
        </div>
    </div>
    <div class="col">
    <div class="p-2 bd-highlight lihat text-end"><a href="{{route('lihat-semuanya-pengelolaan')}}">Lihat Semuanya<i class="fas fa-angle-double-right" style="margin-left: 10px"></i></a>  </div>
    </div>
</div>
</div>

    <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right"> 
                <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/PENGELOLAAN/Ling 2.jpg') }}" class="img-fluid gmb1" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                <div class="row" data-aos="fade-down" data-aos-delay="200">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/PENGELOLAAN/Ling 3.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/PENGELOLAAN/Ling 4.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>

                <div class="row" data-aos="fade-down">
                    <div class="col-6 gmb2-kanan">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/PENGELOLAAN/numpang J4C_190204_0012.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                    <div class="col-6 gmb2-kiri">
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - DOKUMENTASI KEGIATAN/PENGELOLAAN/numpang J4C_190204_0010.jpg') }}" class="img-fluid gmb2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- end Pengelolaan --}}
</section>

{{-- Dukung Jelantah --}}
    <div class="row">
        <div class="content7">
            <div class="title" style="margin-bottom: 48px;" data-aos="fade-up">
            <span style="margin-top:-50px;" class="judul"><center>DUKUNG JELANTAH4CHANGE</center></span>
            <center><div class="garis7"></div></center>
            </div>

                <div class="container" data-aos="fade-up">
                    <P class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</P>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JELANTAH HEROES</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button join" href=""><span style="position:relative; top:15px; font-size: 20px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button join" href=""><span style="position:relative; top:15px; font-size: 20px; font-weight: 500">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Dukung Jelantah --}}
@endsection