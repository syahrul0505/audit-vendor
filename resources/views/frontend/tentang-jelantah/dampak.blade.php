@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden
    }
    .dampak{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-dampak{
        background:  #029B4B;
        width: 375px;
        height: 10px
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
        font-style: Medium;
        font-size: 16px;
        color:#595959;
    }
    .isi{
        font-size: 20px;
        text-align: left;
    }
    .seratus{
        font-size: 20px;
        color: #262626;
        font-weight: 500;
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
        .dampak{
            font-size: 30px
        }
        .garis-dampak{
            width: 300px;
            height: 5px 
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
        .dampak{
            font-size: 30px
        }
        .garis-dampak{
            width: 285px;
            height: 5px 
        }
        .isi{
            font-size: 16px
        }
        .judul{
            font-size: 23px
        }
        .judul-isi{
            font-size: 16px
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
        .dampak{
            font-size: 25px
        }
        .garis-dampak{
            width: 235px;
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
        .dampak{
            font-size: 25px
        }
        .garis-dampak{
            width: 235px;
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
        .seratus{
            
        }
        .footer .footer-top {
        background-position: center bottom;
        height: auto;
        padding-bottom: 20px
        }
    }
</style>

<section style="margin-top: 60px">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4 justify-content-center">
        <div class="row">
            <span class="dampak" data-aos="fade-up">Dampak Jelantah</span>
            <center><div class="garis-dampak" data-aos="fade-up" data-aos-delay="200"></div></center>
        </div>
        </div>
        <center>
    <div class="col-lg-9 col-md-8 col-sm-9 mt-lg-4">
        <div class="mt-4">
            <p class="isi" data-aos="fade-up" data-aos-delay="200">Jelantah dapat dikatakan limbah yang tidak dikelola dengan baik akan menimbulkan beberapa dampak yang tentu saja merugikan. Apa saja dampaknya?</p>
            <ol class="isi">
                <li data-aos="fade-up" data-aos-delay="200">
                    Menggangu ekosistem air, Jelantah yang dibuang ke lingkungan air akan mengapung diatas permukaan air sehingga menghalangi sinar matahari masuk perairan dan mengganggu proses fotosintesis tumbuhan air. Hal itu mengakibatkan oksigen terlarut dalam air akan berkurang sehingga berpotensi mematikan biota laut dan sungai.
                </li><br>
                <li data-aos="fade-up" data-aos-delay="200">
                    Menurunkan kesuburan tanah, Minyak bekas yang dibuang ke tempat sampah berpotensi meresap ke dalam tanah dan mengalir ke dalam air tanah yang merupakan sumber penting dari air minum. Jelantah yang langsung dibuang ke tanah juga berbahaya bagi kesuburan tanah karena jelantah menjadi racun bagi cacing tanah dan memberikan dampak negatif pada fase perkecambahan dan pertumbuhan radikula
                </li><br>
                <li data-aos="fade-up" data-aos-delay="200">
                    Membuat sistem drainase buntu, Jelantah yang seringkali dibuang pada sistem saluran air mengakibatkan tumpukan flek-flek akibat jelantah yang dasarnya adalah lemak yang sulit terurai dengan air. Hal ini akan mengakibatkan buntunya drainase sehingga aliran pembuangan air menjadi tidak lancar.
                </li><br>
                <li data-aos="fade-up" data-aos-delay="200">
                    Praktek Penjernihan, Maraknya jual-beli jelantah pada pengepul yang tidak bertanggung jawab berpotensi terjadinya praktek penjernihan minyak jelantah dan diolah menjadi minyak goreng baru. Perlu dicatat bahwa penjernihan jelantah hanya merubah fisik minyak goreng tetapi tidak merubah kualitas yang mana minyak goreng tersebut masih mengandung senyawa karsinogenik yang berbahaya bagi kesehatan.
                </li>
            </ol>

            <div class="col-lg-12 col-md-12 col-sm-12 mt-lg-4" data-aos="fade-up" data-aos-delay="200">
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
        </center>
    </div>

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
                                    <span class="seratus">JELANTAH HEROES</span>
                                    <div class="d-flex justify-content-center"><a class="default-button2 join" href=""><span style="position:relative; top:5px"> Daftar<i class="fa fa-running "  style="padding-left: 20px;"></i></span></a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="fade-up">
                                <div class="jelantah-card">
                                    <span class="seratus">JOIN MITRA</span>
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
</div>
</section>
@endsection