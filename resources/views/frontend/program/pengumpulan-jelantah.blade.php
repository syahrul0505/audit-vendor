@extends('app')
<style>
html,body{
    max-width: 100%;
    overflow-x: hidden;
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
    .pengumpulan{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-pengumpulan{
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
        margin-right: 175px;
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
        margin: 50px 7px 7px 7px;
        background: #029B4B; 
        border-radius: 50%;
    }
    .share{
        margin-top:52px;
        margin-right:10px;
        font-size: 16px;
        color:#595959;
    }

    .isi{
        font-size: 20px;
        text-align: left;
    }
    .judul-isi{
        color: #029B4B; font-size: 20px; text-align:left;font-weight:600
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
        .pengumpulan{
            font-size: 28px
        }
        .garis-pengumpulan{
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
        .pengumpulan{
            font-size: 23px
        }
        .garis-pengumpulan{
            width: 300px;
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
        .pengumpulan{
            font-size: 22px
        }
        .garis-pengumpulan{
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
        .pengumpulan{
            font-size: 19px
        }
        .garis-pengumpulan{
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
        <div class="pengumpulan" data-aos="fade-up">Pengumpulan Jelantah</div>
        <center><div class="garis-pengumpulan" data-aos="fade-up" data-aos-delay="200"></div></center>
    </div>
</div>
<br>
<center>
<div class="col-lg-9 col-md-8 col-sm-9 mt-4">
    <img class="img-fluid" src="{{asset('assets/images/program/pengumpulan1.png')}}" data-aos="zoom-in" alt="">
<br>
<div class="mt-4">
    <p class="isi" data-aos="fade-up">
        Feedback yang diharapkan setelah dilakukan edukasi adalah adanya kesadaran akan tidak membuang jelantah ke lingkungan dan menggunakan jelantah secara bijak. Jelantah4Change hadir untuk menampung jelantah dari Jelantah Heroes yang nantinya akan diolah dan dikelola secara bijak menjadi biodiesel, lilin dan sabun. Bagaimana mekanisme pengumpulan jelantah?
        <br><br>    
        Yuk simak mekanisme jika kamu ingin mendonasikan jelantah mu <br>
        <ol class="isi">
            <li data-aos="fade-up" data-aos-delay="300">
                Cek apakah daerahmu atau daerah terdekat terdapat relawan Jelantah4Change, kamu bisa melihatnya pada <u><a style="color: #1890FF;" href="https://u.pcloud.link/publink/show?code=kZ9A9EXZAK5WmgGTmspjYr0z7pEIdpyNLh7X#returl=https%3A//u.pcloud.link/publink/show%3Fcode%3DkZ9A9EXZAK5WmgGTmspjYr0z7pEIdpyNLh7X&page=login">bit.ly/SapaRelawanJelantah4Change</a></u>
            </li>
            <br>
            <li data-aos="fade-up" data-aos-delay="300">
                    Hubungi Relawan yang berada pada daerah mu, contact person terdapat pada peta relawan
            </li>
            <br>
            <li data-aos="fade-up" data-aos-delay="300">
                Diskusi dengan relawan terkait, apakah jelantah mu di pick up atau delivery secara mandiri
            </li>
            <br>
            <li data-aos="fade-up" data-aos-delay="300">
                Jelantah tidak ada batasan minimum ya Heroes
            </li>
            <br>
            <li data-aos="fade-up" data-aos-delay="300">
                Jelantah yang dapat didonasikan pastikan tidak mengandung tepung
            </li>
        </ol>
    </p>
</div>
    <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4">
        <div class="d-flex justify-content-center"  data-aos="fade-up">
            <h5 class="share">Share On</h5>
            <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
            <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
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