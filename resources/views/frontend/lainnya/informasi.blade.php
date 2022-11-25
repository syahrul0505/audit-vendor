@extends('app')

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

    .informasi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-informasi{
        background:  #3eb65f;
        width: 225px;
        margin-top: 8px;
        height: 10px
    }
    .jelantah{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-jelantah{
        background:  #3eb65f;
        width: 363px;
        height: 4px;
        margin-top: 10px;
        margin-bottom: 32px;
    }
    .biodiesel{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-biodiesel{
        background:  #3eb65f;
        width: 505px;
        height: 4px;
        margin-top: 10px;
        margin-bottom: 32px;
    }
    .pemanfaatan{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-pemanfaatan{
        background:  #3eb65f;
        width: 520px;
        height: 4px;
        margin-top: 10px;
        margin-bottom: 32px;
    }
    .bahaya{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-bahaya{
        background:  #3eb65f;
        width: 383px;
        height: 4px;
        margin-top: 10px;
        margin-bottom: 32px;
    }
    .sumber{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-sumber{
        background:  #3eb65f;
        width: 375px;
        height: 4px;
        margin-top: 10px;
        margin-bottom: 32px;
    }

    .bulat1{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        right: 367px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat2{ 
        z-index: 0;
        width: 748px; 
        height: 748px; 
        position: relative;
        left: 719px;
        top: 493px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat3{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        top: 2006px;
        right: 367px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat4{ 
        z-index: 0;
        width: 748px; 
        height: 748px; 
        position: relative;
        left: 719px;
        top: 2541px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat5{ 
        z-index: 0;
        width: 416px; 
        height: 416px; 
        position: relative;
        top: 4974px;
        right: 367px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .bulat6{ 
        z-index: 0;
        width: 748px; 
        height: 748px; 
        position: relative;
        left: 719px;
        top: 5405px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .full-konten{
        margin-top: 60px; height: 9138px;
    }
    .konten{
        position: relative; bottom: 3472px
    }
    .gambar{
        width: 960px;height: 720px;margin-bottom: 32px
    }
    .gambar2{
        width: 600px;height: 600px;margin-bottom: 32px
    }

    @media only screen and (min-width:1024px) and (max-width: 1200px)
    {
        #header{
            padding: 20px;
        }
        .gambar{
            height:554px
        }
        .gambar2{
            width: 554px;height: 554px
        }
        .full-konten{
            height: 7435px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .gambar{
            height:410px
        }
        .gambar2{
            width: 410px;height: 410px
        }
        .full-konten{
            height: 5899px;
        }
        
    }
    @media only screen and (min-width:411px) and (max-width:540px)
    {
        .gambar{
            height: 288px;
        }
        .gambar2{
            width: 288px;height: 288px
        }
        .informasi{
            font-size: 36px;
        }
        .garis-informasi{
            width: 191px;
            height: 7px;
        }
        .jelantah{
            font-size: 30px;
        }
        .garis-jelantah{
            width: 273px
        }
        .biodiesel{
            font-size: 30px;
        }
        .garis-biodiesel{
            width: 377px
        }
        .pemanfaatan{
            font-size: 30px;
        }
        .garis-pemanfaatan{
            width: 153px
        }
        .bahaya{
            font-size: 30px;
        }
        .garis-bahaya{
            width: 286px
        }
        .sumber{
            font-size: 30px;
        }
        .garis-sumber{
            width: 273px
        }
        .full-konten{
            height: 4469px
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
        .gambar{
            height: 252px;
        }
        .gambar2{
            width: 252px;
            height: 252px;
        }
        .informasi{
            font-size: 36px;
        }
        .garis-informasi{
            width: 191px;
            height: 7px;
        }
        .jelantah{
            font-size: 30px;
        }
        .garis-jelantah{
            width: 273px
        }
        .biodiesel{
            font-size: 30px;
        }
        .garis-biodiesel{
            width: 153px
        }
        .pemanfaatan{
            font-size: 30px;
        }
        .garis-pemanfaatan{
            width: 153px
        }
        .bahaya{
            font-size: 30px;
        }
        .garis-bahaya{
            width: 286px
        }
        .sumber{
            font-size: 30px;
        }
        .garis-sumber{
            width: 273px
        }
        .full-konten{
            height: 4125px;
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
            height: 252px;
        }
        .gambar2{
            width: 252px;
            height: 252px;
        }
        .informasi{
            font-size: 30px;
        }
        .garis-informasi{
            width: 165px;
            height: 7px;
        }
        .jelantah{
            font-size: 23px;
        }
        .garis-jelantah{
            width: 229px
        }
        .biodiesel{
            font-size: 23px;
        }
        .garis-biodiesel{
            width: 292px
        }
        .pemanfaatan{
            font-size: 23px;
        }
        .garis-pemanfaatan{
            width: 117px
        }
        .bahaya{
            font-size: 23px;
        }
        .garis-bahaya{
            width: 222px
        }
        .sumber{
            font-size: 23px;
        }
        .garis-sumber{
            width: 215px
        }
        .full-konten{
            height: 4000px;
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
        .gambar{
            height: 187px;
        }
        .gambar2{
            width: 187px;
            height: 187px;
        }
        .informasi{
            font-size: 30px;
        }
        .garis-informasi{
            width: 165px;
            height: 7px;
        }
        .jelantah{
            font-size: 23px;
        }
        .garis-jelantah{
            width: 210px
        }
        .biodiesel{
            font-size: 23px;
        }
        .garis-biodiesel{
            width: 116px
        }
        .pemanfaatan{
            font-size: 23px;
        }
        .garis-pemanfaatan{
            width: 117px
        }
        .bahaya{
            font-size: 23px;
        }
        .garis-bahaya{
            width: 217px
        }
        .sumber{
            font-size: 23px;
        }
        .garis-sumber{
            width: 215px
        }
        .full-konten{
            height: 3310px;
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
        <div class="bulat3" data-aos="zoom-in"></div>
        <div class="bulat4" data-aos="zoom-in"></div>
        <div class="bulat5" data-aos="zoom-in"></div>
        <div class="bulat6" data-aos="zoom-in"></div>
    </div>
<center>
<div class="col-lg-9 col-md-9 col-sm-9 konten">
<div class="container">
    <div class="row mt-4" style="margin-bottom: 60px">
        <div class="container" data-aos="fade-up">
            <div class="informasi">INFORMASI</div>
            <center><div class="garis-informasi"></div></center>
        </div>
    </div>

    <div class="row" style="margin-bottom: 60px; margin-top: 60px">
        <div class="container" data-aos="fade-up">
            <div class="jelantah">Jelantah Heroes</div>
            <center><div class="garis-jelantah"></div></center>
        
    
            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 21.png') }}" class="img-fluid gambar" alt="">
            </center>
        </div>
    </div>

    <div class="row" style="margin-bottom: 60px">
        <div class="container" data-aos="fade-up">
            <div class="biodiesel">Biodiesel dan Jelantah</div>
            <center><div class="garis-biodiesel"></div></center>
        
    
            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 22.png') }}" class="img-fluid gambar"  alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 23.png') }}" class="img-fluid gambar"  alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 24.png') }}" class="img-fluid gambar"  alt="">
            </center>
        </div>
    </div>

    <div class="row" style="margin-bottom: 60px">
        <div class="container" data-aos="fade-up">
            <div class="pemanfaatan">Pemanfaatan Jelantah</div>
            <center><div class="garis-pemanfaatan"></div></center>
        
    
            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 25.png') }}" class="img-fluid gambar" alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 27.png') }}" class="img-fluid gambar" alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 26.png') }}" class="img-fluid gambar2" alt="">
            </center>
        </div>
    </div>

    <div class="row" style="margin-bottom: 60px">
        <div class="container" data-aos="fade-up">
            <div class="bahaya">Bahaya Jelantah</div>
            <center><div class="garis-bahaya"></div></center>
        
    
            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 28.png') }}" class="img-fluid gambar"  alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 29.png') }}" class="img-fluid gambar"  alt="">
            </center>

            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 30.png') }}" class="img-fluid gambar"  alt="">
            </center>
        </div>
    </div>

    <div class="row" style="margin-bottom: 60px">
        <div class="container" data-aos="fade-up">
            <div class="sumber">Sumber Jelantah</div>
            <center><div class="garis-sumber"></div></center>
        
    
            <center>
                <img data-aos="zoom-out" src="{{ asset('assets/images/LAINNYA/LAINNYA - INFORMASI/image 31.png') }}" class="img-fluid gambar"  alt="">
            </center>

        </div>
    </div>
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
                <P class="jelantah-mitra">Dukung menjadi Jelantah Heroes / Mitra</P>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="jelantah-card">
                                <h3 class="seratus mb-4">JELANTAH HEROES</h3>
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px; font-weight: 500"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                            <div class="jelantah-card">
                                <h3 class="seratus mb-4">JOIN MITRA</h3>
                                <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px; font-weight: 500">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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