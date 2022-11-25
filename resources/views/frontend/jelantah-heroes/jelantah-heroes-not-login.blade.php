@extends('frontend.app')

@section('container')
<style>
    html,body{
        overflow-x: hidden;
        max-width: 100%;
    }

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


    .bulat1{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        left: 682px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat2{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        bottom: 419px;
        right: 698px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .isi{
        font-family: 'Poppins',sans-serif; font-size: 20px; font-style: normal; font-weight: 500; line-height: 28px; 
        letter-spacing: 0em; text-align: center; margin-top:42px;
    }
    .form{
        width: 534px; height:470px; margin-top:40px;
    }
    .konten{
        position: relative;
        bottom: 837px;
    }
    .main{
        height:  1482px
    }

    @media only screen and (min-width:1024px)
    {
        #header{
            padding: 20px;
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .form{
            width: 307px;
            height: 300px
        }
        .main{
            height: 990px
        }
        .bulat1{
            display:none;
        }
        .bulat2{
            display:none;
        }
        .konten{
            bottom: 50px;
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 25px
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
        .isi{
            font-size: 16px;
            width: 307px
        }
        .judul{
            font-size: 22px
        }
        .form{
            width: 307px;
            height: 300px
        }
        .main{
            height: 990px
        }
        .bulat1{
            display:none;
        }
        .bulat2{
            display:none;
        }
        .konten{
            bottom: 50px;
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
        .form{
            width: 307px;
            height: 300px
        }
        .main{
            height: 890px
        }
        .bulat1{
            display:none;
        }
        .bulat2{
            display:none;
        }
        .konten{
            bottom: 50px;
        }
        .isi{
            font-size: 14px
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
        .isi{
            font-size: 14px
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
<section style="margin-top: 60px">
<center>
<div class="container main">
    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
        <div class="bulat1"></div>
        <div class="bulat2"></div>
    </div>
<div class="col-lg-9 col-md-8 col-sm-9 mt-4 konten">
        <img src="{{ asset('assets/images/icons/login.png') }}" alt="" class="img-fluid form">
        <p class="isi">Kamu harus login terlebih dahulu untuk bisa mengakses menu ini</p>
            <a class="default-button2" href="" style="width:154px; height:56px; margin-top:40px; margin-bottom:110px;">
                <span>Login <i class="far fa-user"></i>
                </span>
            </a>

        <hr>
            <img src="{{ asset('assets/images/kota.png') }}" class="img-fluid" alt="">
</div>
</div>
</center>
</section>
{{-- Dukung Jelantah --}}
<div class="row">
    <div class="content7">
        <div class="title" style="margin-bottom: 48px;" data-aos="fade-up">
        <span style="margin-top:-50px;" class="judul"><center>DUKUNG JELANTAH4CHANGE</center></span>
        <center><div class="garis7"></div></center>
        </div>

            <div class="container" data-aos="fade-up">
                <p class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</p>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="jelantah-card">
                                <h3 class="seratus mb-4">JELANTAH HEROES</h3>
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="jelantah-card">
                                <h3 class="seratus mb-4">JOIN MITRA</h3>
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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