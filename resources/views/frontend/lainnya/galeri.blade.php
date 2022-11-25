@extends('app')

@section('container')
<style>

    html,body{
        overflow-x: hidden;
        max-width: 100%;
    }
    .gambar{
        margin-bottom: 60px
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
    .galeri{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-galeri{
        background:  #029B4B;
        width: 250px;
        height: 10px
    }

    /* Dokumentasi Foto */
    .content3{
        height: auto;
        margin-bottom: 100px;
    }

    .box4{ 
        width: 32px; 
        height: 32px; 
        margin: 7px;
        background: #029B4B; 
        border-radius: 50%;
    }
    .share{
        margin-top:10px;
        margin-right:10px;
        font-size: 16px;
        color:#595959;
    }

    .jelantah-mitra{  
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 38px;
        text-align: center;
        color: #262626;
    }

    .bulat1{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        right: 316px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat2{ 
        z-index: 0;
        width: 568px; 
        height: 568px; 
        position: relative;
        top: 762px;
        left: 913px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat3{ 
        z-index: 0;
        width: 536px; 
        height: 536px; 
        position: relative;
        top: 1685px;
        right: 325px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .gmb1{
        height: 436px;
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
        margin-top: 60px; height:4710px
    }
    .konten{
        position: relative; bottom: 1567px
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
            height: 4580px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .gmb1{
            width: 100%;
            height: 500px;
            margin-bottom: 10px
        }
        .gmb2{
            width: 100%
        }
        .full-konten{
            height: 9181px;
        }
        .col-gmb{
            width: 100%
        }
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .gmb1{
            height: 370px;
            margin-bottom: 20px
        }
        .full-konten{
            height: 8080px
        }
        .galeri{
            font-size: 28px
        }
        .garis-galeri{
            width: 175px;
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
        .gambar{
            margin-bottom: 20px
        }
        .gmb1{
            height: 370px;
            margin-bottom: 10px
        }
        .gmb2{
            height: 190px;
        }
        .full-konten{
            height: 7670px;
        }
        .galeri{
            font-size: 25px
        }
        .garis-galeri{
            width: 155px;
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
        .gambar{
            margin-bottom: 0px;
        }
        .gmb1{
            height: 340px;
            margin-bottom: 10px
        }
        .gmb2{
            height: 170px
        }
        .full-konten{
            height: 7240px;
        }
        .galeri{
            font-size: 23px
        }
        .garis-galeri{
            width: 145px;
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
        .galeri{
            font-size: 25px
        }
        .garis-galeri{
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
    <div class="container" style="z-index: 0">
        <div class="bulat1" data-aos="zoom-out" data-aos-delay="200"></div>
        <div class="bulat2" data-aos="zoom-out"></div>
        <div class="bulat3"></div>
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 konten">
    <div class="row mt-4 mb-4">
        <div class="container">
            <div class="galeri" data-aos="fade-up">GALERI FOTO</div>
            <center><div class="garis-galeri" data-aos="fade-up" data-aos-delay="200"></div></center>
        </div>
    </div>
    
    {{-- Dokumentasi Foto --}}
    <div class="content3">
        {{-- Baris Pertama --}}
            <div class="container gambar">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                        <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/1 Foto.png') }}" class="img-fluid gmb1" alt="">
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                        <div class="row" data-aos="fade-down" data-aos-delay="200">
                            <div class="col-6 gmb2-kanan">
                                <img 
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/3 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                            </div>
                            <div class="col-6 gmb2-kiri">
                                <img 
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/2 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                            </div>
                        </div>

                        <div class="row" data-aos="fade-down">
                            <div class="col-6 gmb2-kanan">
                                <img 
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/5 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                            </div>
                            <div class="col-6 gmb2-kiri">
                                <img 
                                src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/4 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- Baris Kedua --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos-delay="200" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/8 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/7 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/10 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri" style="margin: 10px 0px 10px 0px; padding:0px 10px 0px 0px;">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/9 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/6 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Ketiga --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/11 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/13 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/12 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/15 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/14 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Baris Keempat --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/18 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/17 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/20 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/19 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/16 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Kelima --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos-delay="300" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/22 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/21 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/24 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/23 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="padding: 0px 10px 0px 0px" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/25 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Keenam --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/27 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/26 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/29 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/28 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/30 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Ketujuh --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/32 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/31 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/34 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/33 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/35 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Kedelapan --}}
        <div class="container gambar">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/37 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/36 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/39 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/38 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/40 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>

        {{-- Baris Kesembilan --}}
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 col-gmb">
                    <div class="row" data-aos="fade-down" data-aos-delay="200">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/43 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/42 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>

                    <div class="row" data-aos="fade-down">
                        <div class="col-6 gmb2-kanan">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/17 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                        <div class="col-6 gmb2-kiri">
                            <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/22 Foto.jpg') }}" class="img-fluid gmb2" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="zoom-out" data-aos-delay="300"> 
                    <img src="{{ asset('assets/images/LAINNYA/LAINNYA - GALERI/41 Foto.jpg') }}" class="img-fluid gmb1" alt="">
                </div>
            </div>
        </div>
    </div>
    {{-- end Dokumentasi Foto --}}
    
       
</div>
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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px;"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px;">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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