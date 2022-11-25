@extends('app')
<style>
     html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    
    .pengelolaan{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-pengelolaan{
        background:  #029B4B;
        width: 514px;
        height: 10px
    }
    .judul2{
        font-style: normal;
        font-weight: bold;
        font-size: 40px;
        line-height: 40px;
        color: #029B4B;
        margin-bottom:8px;
    }
    .content1{
        width: 70%;
        height: auto;
        margin-right: 160px;
        margin-top: 10px;
        margin-bottom: 10px;
        top: 0px;

        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 19px;
        line-height: 32px;
        /* or 160% */

        text-align: left;
    }
    .box4{ 
        width: 32px; 
        height: 32px; 
        margin: 70px 7px 7px 7px;
        background: #029B4B; 
        border-radius: 50%;
    }
    .share{
        margin-top:72px;
        margin-right:10px;
        font-size: 16px;
        color:#595959;
    }

     /* Dukung Jelantah4Change */
    .content7{
        height: auto;
    }
    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
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

    /* Subscribe */
    .content8{
        height: auto;
    }
    .by-entering {

        /* Body 14/medium */

        margin-top: 10px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        /* or 157% */

        text-align: center;
        margin:10%;
        padding-block: 100px;
        /* Neutral/7 */

        color: #8C8C8C;
    }
    .get-article {

        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 23px;
        line-height: 38px;
        /* identical to box height, or 127% */

        text-align: center;

        /* Neutral/10 */

        color: #262626;

    }
    .isi{
        font-size: 20px;
        text-align: left;
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
        .pengelolaan{
            font-size: 28px
        }
        .garis-pengelolaan{
            width: 360px;
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
        .pengelolaan{
            font-size: 25px
        }
        .garis-pengelolaan{
            width: 310px;
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
        .pengelolaan{
            font-size: 22px
        }
        .garis-pengelolaan{
            width: 280px;
            height: 5px;
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
        .pengelolaan{
            font-size: 20px
        }
        .garis-pengelolaan{
            width: 250px;
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
@section('container')

<section style="margin-top: 60px">
<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
    <div class="row">
        <div class="col-lg-12">
            <div class="pengelolaan" data-aos="fade-up">Pengelolaan Jelantah</div>
            <center><div class="garis-pengelolaan" data-aos="fade-up" data-aos-delay="200"></div></center>
        </div>
    </div>
</div>
<br>
<center>
<div class="col-lg-9 col-md-8 col-sm-9">
        <p class="isi" data-aos="fade-up" data-aos-delay="200">
            Jelantah yang terkumpul selanjutnya akan diolah menjadi Biodiesel, lilin atau sabun. Untuk pengolahan menjadi Biodiesel Jelantah4Change memiliki mitra pengolah biodiesel yang terdapat dibeberapa daerah Indonesia. Eits tenang Heroes, mitra yang bekerjasama dengan Jelantah4Change memiliki kualifikasi dalam pengolahan Biodiesel jadi jelantahmu akan aman dan tidak disalahgunakan.   
        </p>
<br>
    <img class="img-fluid" src="{{asset('assets/images/program/pengelolaan1.png')}}" data-aos="zoom-in" alt="">
<br>
        <p class="isi mt-4" data-aos="fade-up">
            Selain biodiesel, Jelantah4Change juga melakukan pemberdayaan masyarakat melalui pengolahan jelantah menjadi lilin dan sabun. Jelantah4Change sudah beberapa kali mengadakan pelatihan pembuatan lilin dan sabun sehingga masyarakat dapat dengan mandiri mengolah jelantahnya jika daerah mu masih belum terjangkau relawan Jelantah4Change.
        </p>
<br>
    <img class="img-fluid" src="{{asset('assets/images/program/pengelolaan2.png')}}" data-aos="zoom-in" alt="">

<br>
    <div class="container" style="margin-bottom:100px;" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center">
                    <h5 class="share">Share On</h5>
                    <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
                    <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</div>
</section>
<center>
<hr style="width: 85%; background:black;">
</center>
<br>

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
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <h3 class="seratus mb-4">JOIN MITRA</h3>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top: 5px">Join<i class="fa fa-laugh" style="padding-left: 20px;" > </i> </span></a></div>
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