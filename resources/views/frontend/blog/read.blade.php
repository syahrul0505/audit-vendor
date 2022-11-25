@extends('app')

@section('container')

<style>
    html,body{
        max-width: 100%;
        overflow-x: hidden;
    }
  .head{
    /* width: 720px; */

    /* Large heading 38/bold */

    font-family: Poppins;
    font-style: normal;
    font-weight: 500;
    font-size: 38px;
    line-height: 46px;
    /* or 121% */

    text-align: left;
    /* Neutral/9 */

    color: #434343;


    /* Inside Auto Layout */
/* 
    flex: none;
    order: 0;
    flex-grow: 1;
    margin: 0px 10px; */
  }

  .text--left{
      text-align: left!important;
  }

  .comment{
      font-size: 25px;
  }
    .line{
        border: 1px solid #8C8C8C
    }

  .lihat {
        text-align: center;
        background: white;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
        color: #029B4B;
    }

    .post {
        margin-top: 15px;
        width: 200px;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 12px;
    }

    .artikel-terkait {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 30px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: center;

        /* Color Pallete/Green 1 */

        color: #029B4B;


        /* Inside Auto Layout */

        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 20px 0px;
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

    .lihat-lebih {
        text-align: center;
        background: #029B4B;
        box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
        border-radius: 10px;
    }

    .garis7 {
        width: 580px;
        height: 8px;
        background-color: #3eb65f;
    }

    .radius--50{
        border-radius: 50px;
    }
    .link{
        color: #1890FF;
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
        font-weight: 500;
        font-size: 16px;
        color: #595959;
    }

    .post {
        margin-top: 15px;
        width: 200px;
        background: #029B4B;
        box-shadow: 0px 12px 32px 0px #029B4B80;
        border-radius: 12px;
    }
    .default-button {
    position: relative;
    overflow: hidden;
    padding: 15px;
    width: 107px;
    height: 56px;
    border-radius: 8px;
    display: inline-block;
    color: white;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color: #029B4B;
    font-size: 15px;
    font-weight: 600;
    }

    .default-button span {
        position: relative;
        z-index: 9
    }

    .default-button i {
        position: relative;
        top: 2px;
        margin-left: 2px
    }

    .default-button::before {
        content: '';
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        position: absolute;
        border-radius: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: .5s ease-in-out;
        transition: .5s ease-in-out;
        background-color: black
    }

    .default-button:hover {
        color: white
    }

    .default-button:hover::before {
        width: 300%;
        height: 300%
    }

    .btn{
        float: right;
    }
    .date{
        font-size: 20px; font-weight: 500; text-align: left
    }
    .konten-read{
        width: 720px;
    }
    .isi{
        font-weight: normal;
        font-size: 20px;
        text-align: justify;
        color: #595959;
    }
    .isi-judul{
        font-size: 20px;
        font-weight: 600;
        text-align: left;
        color: #029B4B;

    }
    .gmb-komen{
        border-radius: 50%; width: 80px; height: 80px
    }
    .name{
        font-size: 20px; font-weight: 600;text-align: left
    }
    .komentar{
        font-size: 16px; text-align: left
    }
    .latest{
        text-align: right;
    }
    
    @media only screen and (min-width:1024px)and (max-width:1199px){
        .uni-blog-read{
            height: 617px;
        }
        #header{
            padding: 20px
        }
    }
    @media only screen and (min-width:768px) and (max-width:1023px){
        .uni-blog-read{
            height: 460px
        }
        .komentar{
            margin-bottom: 50px
        }
        .konten-read{
            width: 100%
        }
    }
    @media only screen and (min-width:540px) and (max-width:767px){
        .uni-blog-read{
            height: 328px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px){
        .uni-blog-read{
            height: 256px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 26px
        }
        .garis7{
            width: 380px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:375px) and (max-width:410px){
        .uni-blog-read{
            height: 225px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
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
    }
    @media only screen and (min-width:360px) and (max-width:374px){
        .uni-blog-read{
            height: 215px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 25px
        }
        .isi{
            font-size: 16px
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
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
    }
    @media only screen and (min-width:300px) and (max-width:359px){
        .uni-blog-read{
            height: 195px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 20px
        }
        .link{
            font-size: 14px
        }
        .date{
            font-size: 16px
        }
        .isi{
            font-size: 16px;
            text-align: left
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 222px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px){
        .uni-blog-read{
            height: 170px
        }
        .konten-read{
            width: 100%
        }
        .head{
            font-size: 18px;
            line-height: 20px;
        }
        .link{
            font-size: 12px
        }
        .date{
            font-size: 16px
        }
        .isi{
            font-size: 16px;
            text-align: left
        }
        .latest{
            position: relative;
            bottom: 26px;
        }
        .gmb-komen{
            float: left
        }
        .info{
            padding: 25px 12px
        }
        .comment{
            margin-top: 50px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 222px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
</style>
<section>
<div class="uni-blog-read">
    <div class="container">
        <div class="uni-banner-text">
        </div>
    </div>
</div>
<div class="container">
        <center>
        <div class="col-xl-8 mt-5 konten-read mx-auto">
                <p class="head lorem mb-2">Minyak Jelantah Bersifat Karsinogenik, Kok Bisa</p>
                <p class="date">2021</p>
                <p class="isi mb-4">Siapa yang tidak mengenal makanan gorengan yang menjadi makanan favorit masyarakat karena teksturnya yang renyah dan gurih. Dalam proses pembuatannya memerlukan pemanasan dan seringkali minyak goreng tersebut digunakan berulang kali. Nah tahukah kamu jika batas maksimal suhu pemanasan minyak goreng pada 180 Celcius. Jika pemanasan dilakukan pada suhu maksimal atau tinggi yang ditandai dengan minyak yang terlalu panas dan berasap maka minyak goreng hanya boleh digunakan satu kali, sedangkan pada suhu sedang atau rendah minyak goreng dapat digunakan maksimal tiga kali. Wah padahal warnanya masih terlihat baru, kok maksimal 3 kali penggorengan? Eits, meski warna minyak goreng masih terlihat baik namun sudah terjadi perubahan secara kimiawi. Hal tersebut yang memicu timbulnya senyawa karsinogenik yang berbahaya bagi kesehatan. Seperti gambar di bawah ini pada botol 1 merupakan minyak goreng baru dengan FFA (Asam lemak bebas) <1% sedangkan botol 3 merupakan minyak goreng kurang baik dengan FFA =>3% dan botol 5 merupakan minyak goreng dengan kondisi sangat tidak baik dengan FFA >10%. Pada botol ketiga dari segi fisik yaitu warnanya masih baik namun kandungan asam lemak bebas (FFA) =>3%.</p>
<br>
                
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/minyakjelantah.png')}}" alt="">
<br>
                <p class="isi text-center">Perubahan Fisik dan Kimiawi pada Minyak Goreng Baru dan Minyak Jelantah</p>
<br>
                <p class="isi mb-3">Hal tersebut terjadi karena adanya reaksi kimia yang membuat perubahan secara kimiawi dan fisik pada minyak goreng. Reaksi kimia yang terjadi seperti oksidasi, polimerisasi dan hidrolisis. Reaksi tersebut mengakibatkan perubahan secara fisik ditandai dengan minyak goreng yang lebih kental, warna yang semakin coklat hingga kehitaman, meningkatnya gelembung dan menurunnya titik asap. Saat proses penggorengan terjadi reaksi kimia berikut:</p>
<br>
                <h5 class="isi-judul">1. Hidrolisis</h5>
                <p class="isi mb-4">
                    Reaksi hidrolisis melibatkan pemecahan trigliserida dengan adanya air dan uap. Hal tersebut menghasilkan monogliserida, digliserida, asam lemak bebas dan gliserol.
                    Tingkat hidrolisis tergantung pada suhu minyak, luas permukaan antara minyak dan fase air, jumlah air dan uap. Produk FFA atau asam lemak bebas dan asam dengan berat molekul lebih rendah timbul dari oksidasi lemak yang meningkatkan proses hidrolisis dengan hadirnya uap pada proses menggoreng. </p>
<br>
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/blog/blog3.png')}}" alt="">
<br>
                <h5 class="isi-judul">2. Oksidasi</h5>
                <p class="isi mb-4">
                    Reaksi hidrolisis melibatkan pemecahan trigliserida dengan adanya air dan uap. Hal tersebut menghasilkan monogliserida, digliserida, asam lemak bebas dan gliserol.
                    Tingkat hidrolisis tergantung pada suhu minyak, luas permukaan antara minyak dan fase air, jumlah air dan uap. Produk FFA atau asam lemak bebas dan asam dengan berat molekul lebih rendah timbul dari oksidasi lemak yang meningkatkan proses hidrolisis dengan hadirnya uap pada proses menggoreng. 
                </p>
<br>
                
                <img class="img-fluid img-read mb-5" src="{{asset('assets/images/blog/blog4.png')}}" alt="">
<br>
                <p class="isi mb-4">
                    Pada rantai inisiasi terjadi pembentukan alkil radikal bebas, pada propagasi terbentuk radikal peroksida dan pada proses terminasi terbentuk produk terakhir seperti dimer nonpolar, oksidasi monomer, oligimer, alkohol, aldehid, keton, asam, lakton dan lain sebagainya. Oksidasi merupakan reaksi kimia yang paling merusak dalam proses menggoreng. 
                    <br><br>
                    Dari proses kimia tersebut maka terbentuklah senyawa yang bersifat karsinogenik seperti
                    <ol  class="isi">
                        <li>
                            Asam lemak trans meningkat ketika minyak goreng dipanaskan berulangkali yang dapat meningkatkan kolestrol buruk dan memicu stroke, kanker dan parkinson
                        </li>
                        <br>
                        <li>
                            Hidroperoksida dan aldehid terbentuk yang dapat menyebabkan kanker, sakit jantung, alzheimer, hipertensi
                        </li>
                        <br>
                        <li>
                            Radikal bebas dapat merusak fungsi sel dalam tubuh hal ini dapat menyebabkan komplikasi yang begitu serius seperti kanker, aterosklerosis kondisi dimana arteri dipenuhi oleh plek yang menyebabkan blokade dan meningkatkan kolestrol jahat 
                        </li>
                    </ol>
                </p>

                <p class="isi mb-4">
                    Nah oleh karena itu, menggoreng menggunakan minyak yang sudah digunakan tiga kali sangat tidak disarankan ya Heroes, meskipun warna minyak goreng mu terlihat belum menghitam.
                </p>

                <div class="container">
                <p class="isi mb-4">
                Sumber : <br>
                    <ol class="isi">
                        <li>
                            Ther, Austin J Pharmacol. 2015. Effect of Repeated Heating of Cooking Oils on Antioxidant Content and Endothelial Function. Journal Pharmacology and Therapeutics. <u><a class="link" href="https://austinpublishinggroup.com">https://austinpublishinggroup.com</a></u> 
                        </li>
                        <br>
                        <li>
                            TIMESOFINDIA.COM. 2019. Here’s why you should never reheat cooking oil <u><a class="link" href="https://timesofindia.indiatimes.com">https://timesofindia.indiatimes.com</a></u>
                        </li>
                        <br>
                        <li>
                            Nayak, Prakash Kumar., Dash, Uma., Rayaguru, Kalpana., Krishnan, Keasvan Radha. 2015. Physio-Chemical Changes During Repeated Frying of Cooked Oil: A Review. Journal of Food Biochemistry
                        </li>
                    </ol>
                </p>
                </div>
            <div class="container" style="margin-bottom:100px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <p class="share">Share On</p>
                            <div class="box4"><a href=""><i class="fab fa-facebook-f" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-twitter" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-instagram" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fab fa-linkedin-in" style="color: white; margin-top:8px;"></i></a></div>
                            <div class="box4"><a href=""><i class="fas fa-clone" style="color: white; margin-top:8px;"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>


        
                <hr class="line">
                    <div class="row">
                        <div class="col-lg-6" style="text-align: left">
                            <label for="">999</label>
                            <label for="">Comments</label>
                        </div>
                        <div class="col-lg-6 latest">
                            <a href=""><label class="text-decoration-underline" for="">Newest</label></a>
                            <label for="">Oldest</label>
                        </div>
                    </div>
<br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/foto-read.png')}}" class="gmb-komen" alt="">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Marcell Santiago</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                20 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/2.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Ralph Edwards</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                19 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/3.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Kathryn Murphy</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                12 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/4.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Guy Hawkins</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <br>
                                08 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-12 mb-lg-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <img src="{{asset('assets/images/foto/5.png')}}" alt="" class="gmb-komen">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-4 info">
                            <h4 class="name">Devon Lane</h4><br>
                            <h6 class="komentar">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <br>
                                03 Maret 2021
                            </h6>
                        </div>
                    </div>
                </div>
            
                <center>
                    <div class="container">
                        <div class="default-section-heading default-section-heading-middle">
                            <a class="lihat btn-outline-success border-3 btn-lg btn-sm" style="border: 1px solid #029B4B" href=""><span>Tamplikan Lebih Banyak</span></a>
                        </div>
                    </div>
                </center>

                <div class="col-lg-12 mt-3 text--left">
                    <p class="comment">Comments</p>
                </div>

                <div class="col-lg-12 mt-3 text--left">
                    <div class="sidebar-searchbox" style="border :1px solid #029B4B; border-radius: 8px">
                        <div class="input-group ">
                            <textarea class="form-control" style="text-align: left; border-radius: 8px" cols="30" rows="10" placeholder="Your Comments.. "></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 mt-3 text--left">
                    <div class="btn">
                        <a class="default-button post" href=""><span>Post</span></a>
                    </div>
                </div><br>
                
        </div>
    </center>
</div>
</section>
<center><hr style="width: 95%;"></center>
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
