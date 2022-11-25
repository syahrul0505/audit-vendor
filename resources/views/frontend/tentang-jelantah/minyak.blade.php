@extends('app')

@section('container')
<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
    .minyak{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-minyak{
        background:  #029B4B;
        width: 375px;
        height: 10px
    }

    .jelantah-card{
    text-align: center;
    padding: 25px 25px;
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
        .minyak{
            font-size: 30px
        }
        .garis-minyak{
            width: 300px;
            height: 5px;
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
        .minyak{
            font-size: 30px
        }
        .garis-minyak{
            width: 285px;
            height: 5px;
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
        .minyak{
            font-size: 25px
        }
        .garis-minyak{
            width: 235px;
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
        .minyak{
            font-size: 25px
        }
        .garis-minyak{
            width: 235px;
            height: 5px;
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
        <span class="minyak" data-aos="fade-up">Minyak Jelantah</span>
        <center><div class="garis-minyak" data-aos="fade-up" data-aos-delay="200"></div></center>
    </div>
    </div>
    <center>
    <div class="col-lg-9 col-md-8 col-sm-9 mt-lg-4">
        <p class="isi mt-4" data-aos="fade-up" data-aos-delay="300">Heroes, minyak goreng yang sudah digunakan lebih dari dua atau tiga kali penggorengan sudah dikategorikan 
            sebagai jelantah dan termasuk limbah yang dapat merusak lingkungan dan kesehatan. Minyak jelantah biasa ditandai 
            dengan minyak yang berubah warna menjadi coklat tua atau kehitaman, bau tidak sedap dan lebih kental dibandingkan 
            minyak baru selain itu mengandung senyawa-senyawa bersifat karsinogenik yang terjadi akibat pemanasan yang berulang. 
            Senyawa karsinogenik pada minyak jelantah seperti hidroperoksida dan aldehida yang menyebabkan kanker, sakit jantung dan 
            hipertensi.
            <br>
            <br>
            Yuk coba kita mengenal minyak jelantah :
        </p>
        <br>
        <img src="{{ asset('assets/images/minyakjelantah.png') }}" data-aos="zoom-in" data-aos-delay="300" class="img-fluid" alt="">
        <br>
        <p class="isi mt-4" data-aos="fade-up">
            Botol 1: Minyak baru dengan kondisi sangat baik dengan FFA <1%
            <br>
            Botol 2: Minyak goreng baik dengan FFA >2%
            <br>
            Botol 3: Minyak goreng kurang baik dengan FFA =>3% 
            <br>
            Botol 4: Minyak goreng tidak baik dengan FFA >5%
            <br>
            Botol 5: Minyak goreng sangat tidak baik dengan FFA >10%
            <br>
            *FFA: Asam lemak bebas
        </p>
        <br>
        <p class="isi" data-aos="fade-up">
            Dapat dilihat bahwa minyak goreng yang sudah digunakan mengalami perubahan warna dan kekentalan. 
            Hal itu terjadi karena pemanasan pada minyak goreng terjadi proses oksidasi, polimerisasi dan hidrolisis yang dapat 
            merubah sifat fisika dan kimia minyak goreng.  Pembentukan dimer, polimer asam dan gliserid menyebabkan minyak goreng 
            bekas lebih kental. Sedangkan perubahan warna menjadi lebih gelap dikarenakan perkembangan pigmen 
            (produk dekomposisi nonvolatil [NVDP] dan α-, β- senyawa karbonil tak jenuh) selama oksidasi dan dekomposisi termal 
            asam lemak yang berdifusi ke dalam minyak selama menggoreng, meskipun jejak karotenoid tersedia dalam minyak. 
            Pemanasan yang berulang kali pada minyak goreng dapat mempercepat hidrolisis trigliserida dan meningkatkan kandungan 
            asam lemak bebas (FFA) pada minyak goreng. 
            <br>
            <br>
            Yuk coba kita bahas kenapa minyak jelantah bersifat karsinogenik. 
            Minyak goreng yang dipanaskan berulang kali pada temperatur tinggi akan terjadi perubahan secara kimiawi yang bersifat 
            karsinogenik dan berbahaya bagi kesehatan diantaranya :
        </p>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-9 mt-lg-4">
        <br>
        <img src="{{ asset('assets/images/zat.png') }}" data-aos="zoom-in" data-aos-delay="300" class="img-fluid" alt="">

        <br>
        <ul class="isi mt-4">
            <li data-aos="fade-up">
                Asam lemak trans meningkat ketika minyak goreng dipanaskan berulangkali yang dapat meningkatkan kolestrol buruk dan memicu stroke, kanker dan parkinson
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Hidroperoksida dan aldehid terbentuk yang dapat menyebabkan kanker, sakit jantung, alzheimer, hipertensi
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Radikal bebas dapat merusak fungsi sel dalam tubuh hal ini dapat menyebabkan komplikasi yang begitu serius seperti kanker, aterosklerosis kondisi dimana arteri dipenuhi oleh plek yang menyebabkan blokade dan meningkatkan kolestrol jahat 
            </li>
        </ul>
        <br>
            <p class="isi" data-aos="fade-up">Sudah mengenal bagaimana minyak jelantah berbahaya bagi kesehatan lalu bagaimana mengelola minyak goreng dengan bijak yuk. Ada beberapa yang harus diperhatikan dalam penggunaan minyak goreng secara bijak yaitu:
        <br>
        <ul class="isi">
            <li data-aos="fade-up">
                Gunakan minyak goreng baru dalam kemasan (PERMENDAG RI No. 80./M-DAG/PER/10/2014).
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Simpan pada wadah tertutup.
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Gunakan minyak goreng sesuai keperluan dan tiriskan hasil penggorengan dalam waktu yang cukup.
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Maksimal penggunaan minyak goreng 3 kali pada suhu rendah dan 1 kali pada suhu tinggi.
            </li><br>
            <li data-aos="fade-up" data-aos-delay="200">
                Hindari penggunaan minyak goreng yang telah berubah warna dan mengeluarkan bau menyengat.
            </li>
        </ul>
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
    </center>
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
@endsection