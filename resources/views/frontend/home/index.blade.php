@extends('frontend.app')

@section('container')
<style>
    .gambar-yakesma{
        width: 250px;
        height: 450px;
    }
    .card-yakesma{
        height: 250px;
        border-radius: 0 0 0 7px !important;
        padding: 0 0 0 150px;

    }
    h2{
  text-align:center;
  padding: 20px;
}
/* Slider */

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
    html,body{
        overflow-x: hidden;
        max-width: 100%;
    }
    .bulat1{ 
        z-index: 0;
        width: 693px; 
        height: 693px; 
        position: relative;
        left: 863px;
        background: #3EB65F; 
        border-radius: 50%;
    }
    .bulat2{ 
        z-index: 2;
        width: 122px; 
        height: 122px; 
        bottom: 1224px;
        left: 825px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }
    .donut{ 
        z-index: 3;
        width: 108px; 
        height: 108px;
        left: 1099px; 
        bottom: 832px;
        position: relative;
        border: 1vw solid #FFFFFF;
        border-radius: 50%;
    }
    
    .bulat3{ 
        z-index: 0;
        width: 183px; 
        height: 183px; 
        bottom: 1406px;
        right: 248px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }
    .profil{
        font-size: 40px;
        color: black;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-profil{
        background:  #3EB65F;
        width: 250px;
        height: 5px
    }
    .video {
    position: relative;
    border-radius: 10px;
    }

    .video img {
        border-radius: 10px;
        -webkit-box-shadow: 0 0 10px -5px #c2c2c2;
        box-shadow: 0 0 10px -5px #c2c2c2;
        position: relative;
        margin-top: 50px;
        width: 100%
    }
    .video .video-play {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
    }

    .video .video-play a {
        width: 100px;
        height: 100px;
        font-size: 30px;
        border-radius: 50%;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: white;
        background-color: #029B4B;
        -webkit-box-shadow: 0 0 0 5px #029b4b;
        box-shadow: 0 0 0 5px #3EB65F;
    }

    .galeri{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-galeri{
        background: #3EB65F;
        width: 288px;
        height: 10px
    }
    .btn-more{
        width: 300px;
        background: #029B4B;
        color:white;
        border-radius:0 0 25px 0;
        margin-bottom: 100px;
    }

    .artikel{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-artikel{
        background: #3EB65F;
        width: 344px;
        height: 10px
    }
    .statistik{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-statistik{
        background: #3EB65F;
        width: 202px;
        height: 10px
    }
    .card{
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
        transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
        cursor: pointer;
    }
    .card .isi-artikel {
        font-size: 24px;
        color: #434343;
        font-weight: 500;
        margin-bottom: 18px;
        position: relative;
        transition: 0.3s;
    }

    .recent-blog-posts .card:hover .isi-artikel{
        color: #029B4B;
    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }

    .post-box:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
    .card .post-date {
        font-size: 14px;
        font-weight: 500;
        color: #828282;
        display: block;
    }


    .contact-card {
    text-align: center;
    padding: 30px 25px;
    border-radius: 5px;
    margin-top: 30px;
    background: white;
    -webkit-box-shadow: 0 0 15px -2px #ddd;
    box-shadow: 0 0 15px -2px #ddd
    }

    .contact-card i {
        width: 80px;
        height: 60px;
        margin-bottom: 15px;
        border-radius: 5px;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 30px;
        color: var(--whiteColor);
        background-color: var(--mainColor)
    }

    .kata{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-kata{
        background: #3EB65F;
        width: 283px;
        height: 10px
    }

    .img-tommy {
        border-radius: 100%;
        object-fit: cover;
        width: 100px;
        height: 100px;
    }
    .artikel-kami {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: left;


        color: #000000;
    }
    .profilkami {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 40px;
        /* identical to box height, or 100% */

        text-align: left;


        /* Color Pallete/Green 1 */

        color: #029B4B;
    }
    .tommy-desc {
        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 22px;

        text-align: left;

        color: #595959;
    }

    .partner{
        font-size: 40px;
        color: black;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-partner{
        background: #3EB65F;
        width: 297px;
        height: 10px
    }
    .jelantah-tanya{
        font-size: 20px;
        color: #029B4B;
    }

    .qa{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-qa{
        background: #3EB65F;
        width: 426px;
        height: 10px
    }

    .jelantah-card{
    text-align: center;
    padding: 30px 25px;
    border-radius: 12px;
    margin-top: 30px;
    background-color: white;
    box-shadow: 0 0 15px -2px #ddd;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
        margin-top:-50px;
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
    .ketahui {
        width: 300px;
        height: 45px;
        font-size: 20px;
        color: white;
        background: #029B4B;
        box-shadow: 0px 10px 45px rgba(2, 155, 75, 0.5);
        border-radius: 10px !important;
    }

    .rekening {
        width: 200px;
        height: 35px;
        font-size: 20px;
        color: white;
        background: #17a2b8;
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

    .bulat4{ 
        z-index: 0;
        width: 797px; 
        height: 797px; 
        position: relative;
        bottom: 12px;
        right: 407px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .content3{
        height:808px;
        margin-top: 200px;
    }
    .bulat5{ 
        z-index: 0;
        width: 634px; 
        height: 634px; 
        position: relative;
        top: 1059px;
        left: 1007px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    
    .komunitas{
        position: relative; bottom: 633px; width: 1200px
    }
    .full-komunitas{
        margin-top: 60px; height: 663px;
    }
    .gmb-komunitas{
        width: 475px; height:530px; border-radius:50px 0px 50px 0px; float: right;
    }
    .isi-komunitas{
        margin-top: 100px;
        width: 657px;
    }
    .konten-galeri{
        height: 800px
    }
    .gmb-galeri{
        width: 100%;
        height: 167px;
        border-radius: 10px
    }
    .galeri-kami{
        position: relative; bottom: 734px
    }
    .konten-artikel{
        position: relative; bottom: 810px;
    }
    .delpie{
        height: 436px;
    }
    .tita{
        height: 308px
    }
    .partner-kami{
        margin-top: 180px
    }
    .merk-terang{
        width:213px; height: 163px;
    }
    .merk-bumn{
        padding-top: 40px; width:400px; height: 110px;
    }
    .merk-waste{
        padding-top:36px; padding-left: 0px; padding-right: 0px; width:270px; height: 130px;
    }
    .merk-iluni{
        padding: 10px 0px 0px 20px; width: 200px; height: 200px
    }
    .merk-pertamina{
        padding-top:30px; width: 370px; height: 194px;
    }
    .merk-carbon{
        width: 211px; height: 182px;
    }
    .question{
        margin-top:150px
    }
    .card-qa{
        width: 100%;background:#FFFFFF;padding:10px; height: 90px
    }
    .title{
        margin-bottom: 48px;
    }
    .gmb-artikel{
        width: 780px; height: 400px; border-radius: 12px 0px 0px 12px ;
    }
    .container-artikel{
        padding-top: 101px; padding-right: 0px;
    }
    .date{
        font-size: 14px; text-align:left
    }
    
    @media only screen and (min-width:1024px) and (max-width: 1199px)
    {
        #header{
            padding: 20px;
        }
        .komunitas{
            width:980px
        }
        .delpie{
            height: 542px
        }
        .tita{
            height: 352px;
        }
        .bulat2{
            left: 540px
        }
        .donut{
            left: 876px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .recent-blog-posts .post-box .post-img{
            width: 696px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1466px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 447px;
            bottom: 1158px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px;
            padding-left: 105px
        }
        .komunitas{
            width: 540px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px;
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 280px;
        }
        .konten-galeri{
            height: 1260px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 350px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 0px 114px
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            padding: 0px 114px
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 0px 114px
        }
        .merk-pertamina{
            width: 100%; height: 315px;
            padding: 0px 114px
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 114px

        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 114px
        }
        .accordion{
            margin-bottom: 20px
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
    @media only screen and (min-width:540px) and (max-width:767px)
    {
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1466px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 447px;
            bottom: 1158px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 540px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 280px;
        }
        .konten-galeri{
            height: 1260px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 350px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 0px 50px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            padding: 0px 50px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 0px 50px;
        }
        .merk-pertamina{
            width: 100%; height: 315px;padding: 0px 50px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 50px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 350px;
            padding: 0px 50px;
        }
        .accordion{
            margin-bottom: 20px
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
        .recent-blog-posts .post-box .post-img{
            width: 516px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px)
    {
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .galeri-kami{
            bottom: 0px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 312px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 411px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 245px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 368px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
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
    @media only screen and (min-width:375px) and (max-width:410px)
    {
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .img-tommy{
            width: 90px; height: 90px
        }
        .tita{
            height: auto
        }
        .delpie{
            height: auto;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 260px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 360px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 247px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 150px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
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
    @media only screen and (min-width:360px) and (max-width:374px)
    {  
        .question{
            margin-top: 60px
        }
        .partner-kami{
            margin-top: 60px
        }
        .tmbl-lihat{
            position: relative;
            bottom: 172px
        }
        .hide-gmb{
            display: none;
        }
        .bulat4{
            display: none;
        }
        .img-tommy{
            width: 90px; height: 90px
        }
        .tita{
            height: auto
        }
        .delpie{
            height: auto;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1540px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 260px;
            bottom: 1223px;
            width: 100px; height: 100px;
            border: 4vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 30px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 360px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .galeri-kami{
            bottom : 0px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 35px;
        }
        .garis-galeri{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 35px;
        }
        .garis-artikel{
            width: 300px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 35px;
        }
        .garis-kata{
            width: 247px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 35px;
        }
        .garis-statistik{
            width: 170px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 35px;
        }
        .garis-partner{
            width: 250px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 35px;
        }
        .garis-qa{
            width: 150px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 1007px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
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
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .tita{
            height: auto;
        }
        .delpie{
            height: auto;
        }
        .img-tommy{
            width: 80px; height: 80px
        }
        .contact-card{
            padding: 30px 15px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1510px;
            left: 72px;
            width: 100px; height: 100px;
        }
        .donut{
            left: 225px;
            bottom: 1200px;
            width: 100px; height: 100px;
            border: 6vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 25px;
        }
        .hero h6{
            font-size: 18px;
        }
        .hero p{
            font-size: 14px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 320px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 30px;
        }
        .garis-galeri{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 30px;
        }
        .garis-statistik{
            width: 150px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 30px;
        }
        .garis-kata{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 255px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 30px;
        }
        .garis-partner{
            width: 220px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 30px;
        }
        .garis-qa{
            width: 130px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 995px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .tita{
            height: auto;
        }
        .delpie{
            height: auto;
        }
        .img-tommy{
            width: 80px; height: 80px
        }
        .contact-card{
            padding: 30px 15px;
        }
        .counts{
            padding-top: 20px
        }
        .hero .btn-get-started{
            float: left;
        }
        .bulat2{
            bottom: 1550px;
            left: 39px;
            width: 80px; height: 80px;
        }
        .donut{
            left: 197px;
            bottom: 1213px;
            width: 80px;
            height: 80px;
            border: 6vw solid #FFFFFF;
        }
        .hero h1{
            font-size: 25px;
        }
        .hero h6{
            font-size: 18px;
        }
        .hero p{
            font-size: 14px;
        }
        .isi-komunitas{
            width: 100%;
            margin-top: 50px
        }
        .full-komunitas{
            height: 990px
        }
        .komunitas{
            width: 280px;
        }
        .gmb-komunitas{
            float: none;
            width: 100%;
            height: 430px
        }
        .profil{
            font-size: 35px;
        }
        .garis-profil{
            width: 215px;height: 5px; 
        }
        .galeri{
            font-size: 30px;
        }
        .garis-galeri{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .statistik{
            font-size: 30px;
        }
        .garis-statistik{
            width: 150px;height: 8px; margin-bottom: 20px
        }
        .kata{
            font-size: 30px;
        }
        .garis-kata{
            width: 210px;height: 8px; margin-bottom: 20px
        }
        .artikel{
            font-size: 30px;
        }
        .garis-artikel{
            width: 130px;height: 8px; margin-bottom: 20px
        }
        .partner{
            font-size: 30px;
        }
        .garis-partner{
            width: 220px;height: 8px; margin-bottom: 20px
        }
        .qa{
            font-size: 30px;
        }
        .garis-qa{
            width: 130px;height: 8px; margin-bottom: 40px
        }
        .video .video-play {
            top: 60%
        }
        .video .video-play a{
            width: 70px; height: 70px; 
        }
        .gmb-galeri{
            height: 215px;
        }
        .konten-galeri{
            height: 995px
        }
        .container-artikel{
            padding: 20px 30px;
        }
        .gmb-artikel{
            height: 238px
        }
        .date{
            color: #434343
        }
        .isi-artikel{
            font-size: 16px;
            color: #434343
        }
        .card-kecil{
            margin-top: 20px;
            margin-bottom: 20px
        }
        .content3{
            height: 1315px
        }
        .merk-terang{
            width: 100%;
            height: 260px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }
        .merk-bumn{
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }
        .merk-waste{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 160px;
            padding: 20px;
        }
        .merk-iluni{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 300px;
            padding: 0px;
            padding: 20px;
        }
        .merk-carbon{
            margin-bottom: 20px;
            margin-top: 20px;
            width: 100%;
            height: 310px;
            padding: 20px;
        }
        .accordion{
            margin-bottom: 20px
        }
        .judul{
            font-size: 22px
        }
        .garis7{
            width: 220px
        }
        .jelantah-mitra{
            font-size: 17px;
        }
    }
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.section-action__btn {
    background: #ffb502;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    font-size: 18px;
    border-radius: 10px;
}
    .rekening-bank{
    border-radius: 10px !important;
    }

    .zis{
        height: 45px;
        font-size: 20px;
        padding: 10px;
    }

    .slider-caption{
	position: absolute;
	width: 40%;
	left: 10%;
	top: 10%;
	text-align: center;
	h2{
		color: #fff;
		text-transform: uppercase;
		font-size: 60px;
	}
	.top-caption{
		text-align: center;
		h2{
			margin-bottom: -30px;
			font-family: 'Lora', serif;
		}
	}
	.bottom-caption{
		text-align: center;
		h2{
			margin-top: -30px;
			font-family: 'Lora', serif;
		}
	}
	.middle-caption{
		background-color: rgba(255,255,255,.2);
		box-shadow: 0px 0px 4px #333;
		display:inline-block;
		padding: 30px 50px;
		text-align: center;
		position: relative;
		z-index: 99;
		width: 80%;
		h2{
			font-family: 'Tangerine', cursive;
			font-weight: 400;
			font-size: 90px;
			line-height: 90px;
			color: red;
			text-transform: capitalize;
		}
		&:before{
			content: "";
			position: absolute;
			left: 50%;
			top:-60px;
			width:1px; 
			height:20px;
			background-color: red;
		}
		&:after{
			content: "";
			position: absolute;
			left: 50%;
			bottom:-60px;
			width:1px; 
			height:20px;
			background-color: red;
		}
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

    .misi{
        text-align: left;
    }
    .manajemen{
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
    .section-legalitas{
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
    .legalitas{
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

    .list-group-item {
    position: relative;
    display: block;
    padding: 0.5rem 1rem;
    color: #212529;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}
    .yayasan{
        font-size: 18px;

    }
</style>
<div class="full-konten">
<!-- ======= Hero Section ======= -->
<!-- TESTIMONIALS -->
<section class="testimonials">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/img/program/banner.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/img/program/ambulance.jpeg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/img/program/banner.jpg')}}" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>
<!-- END OF TESTIMONIALS -->


{{-- tentang Kami --}} 

    <section class="section section-page section-about">
        <div class="container">
            <div class="section-page__content">
                <div class="row">
                    <div class="text-center">
                        <img src="{{asset('assets/img/program/yakesma.jpg')}}" alt="" style="max-width: 40%" class="img-fluid">
                    </div>
                </div>
                <p class="yayasan">
                    Yayasan Kesejahteraan Madani (YAKESMA) didirikan pada 4 Juli 2011, lahir dari sebuah kepedulian akan kehidupan para guru dan Da'i di 
                    kota maupun di pelosok pedesaan yang tetap bersemangat dalam memperbaiki masyarakatnya. Dalam proses perbaikan masyarakat tersebut para 
                    dai beserta elemen masyarakat yang lain seperti para guru dan penggiat kebajikan lainnya yang penuh dedikasi terkadang mengeluarkan pengorbanan 
                    yang lebih dari batas-batas materi yang mereka miliki. Terlebih lagi di saat mereka kekurangan dan mendapatkan musibah ketika menjalankan tugas. 
                    Seperti masalah kesehatan Da'i dan keluarganya, perawatan rumah sakit dan kasus kesehatan lainnya. Selain itu ketika anak mereka akan masuk 
                    sekolah atau juga ketika mereka tidak memiliki rumah sebagai kebutuhan primer sebuah keluarga.
                </p>
                <p class="yayasan">
                    Pada saat yang sama kemampuan ekonomi para Da'i pun belum di tunjang oleh profesi yang di sandangnya saat ini dan juga oleh usaha mereka. 
                    Sampai saat ini masih sedikit lembaga yang memperhatikan kehidupan mereka sehingga yang terjadi adalah proses perbaikan di dalam masyarakat terganggu. 
                    Untuk itulah lembaga YAKESMA berdiri untuk membantu mereka dalam rangka meringankan beban guru dan Da'i di bidang kesehatan, pendidikan dan perumahan 
                    sehingga mereka dapat lebih fokus dalam proses perbaikan di masyarakat.
                </p>
                <p class="yayasan">
                    YAKESMA adalah lembaga Amil Zakat Nasional yang telah memiliki legitimasi dari Kementrian Agama RI dengan SK No 951 tahun 2017. 
                    YAKESMA kembali mengajak donatur, mitra, pemerintah, media, dan masyarakat secara umum untuk semakin banyak berbagi. Berbagi menjadi salah satu aksi nyata, 
                    agar bisa membantu sesama yang membutuhkan lebih banyak dan menjangkau wilayah yang semakin luas.
                </p>
                <center>
                <div class="section-visi-misi my-5">
                    <h1>
                        <span> <i class="fas fa-angle-right" style="color: #F76E11"></i> VISI <i class="fas fa-angle-left" style="color: #F76E11"></i></span>
                    </h1>
                    <div class="lead mb-5 text-center" style="text-align: left">
                        Menjadi Lembaga Filantropi yang <strong>Terpercaya, Profesional,</strong> dan <strong>Berkontribusi</strong> dalam Meningkatkan Kesejahteraan Masyarakat.
                    </div>
                    <h1>
                        <span>MISI</span>
                    </h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="list-group-number">1</span>
                            <p class="misi">
                                Mendorong tumbuhnya kesadaran masyarakat untuk berpartisipasi dalam upaya meningkatkan kesejahteraan masyarakat
                            </p>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-number">2</span>
                            <p class="misi">
                                Membangun kemitraan lembaga filantropi dari dalam negeri dan luar negeri
                            </p>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-number">3</span>
                            <p class="misi">
                                Menciptakan program layanan dan pemberdayaan yang profesional dan terpercaya
                            </p>
                        </li>
                    </ul>
                </div>
            </center>
    
            </div>
            
            
        </div>
    </section>
{{-- End Tentang Kami --}}
{{-- Profil Kami --}}
<section class="hero d-flex align-items-center mb-lg-4">
    <div class="container" data-aos="fade-up">
        <div class="row" style="margin-top: 50px">
            <span class="profil"> Program</span>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
                <div>
                    <img src="{{asset('assets/img/program/gopay.jpg')}}" alt="">
                </div>
                    <a class="btn-more d-block text-center zis" href="#"> ZIS</a>
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="{{asset('assets/img/program/gopay.jpg')}}" alt="">
                </div>
                    <a class="btn-more d-block text-center zis" href="#"> WAKAF</a>
            </div>
            <div class="col-lg-4">
                <div>
                    <img src="{{asset('assets/img/program/gopay.jpg')}}" alt="">
                </div>
                <a class="btn-more d-block text-center zis" href="#"> RAMADHAN</a>
            </div>
        </div>
    </div>
</section>
{{-- End Profil Kami --}}

<section class="section section--gray section--normal-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 my-2">
                <a href="https://yakesma.org/rekening/" class="btn section-action__btn d-block rekening-bank">Rekening Bank</a>
            </div>
            <div class="col-lg-3 my-2">
                <a href="https://temanberbagi.yakesma.org/konfirmasi-pembayaran/" class="btn section-action__btn d-block rekening-bank">Konfirmasi Donasi</a>
            </div>
            <div class="col-lg-3 my-2">
                <a href="https://yakesma.org/konsultasi-ziswaf/" class="btn section-action__btn d-block rekening-bank">Konsultasi ZISWAF</a>
            </div>
            <div class="col-lg-3 my-2">
                <a href="https://yakesma.org/kontak/" class="btn section-action__btn d-block rekening-bank">Kantor Layanan</a>
            </div>
        </div>
    </div>
</section>

{{-- Tentang --}}
<section id="counts" class="counts mt-lg-4" data-aos="fade-up">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-yakesma">
                        <img class="gambar-yakesma"  src="{{asset('assets/img/program/logo.png')}}" alt="">
                </div>
            </div>

            <div class="col-lg-6">
                <h1>Tentang Yakesma</h1>
                <p>Yayasan Kesejahteraan Madani (YAKESMA) didirikan pada 4 juli 2011, lahir dari sebuah kepedulian akan kehidupan para guru dan Da'i di kota maupun di pelosok pedesaan yang tetap bersemangat dalam memperbaiki masyarakatnya. Dalam proses perbaikan masyarakat tersebut para dai beserta elemen masyarakat yang lain seperti para guru dan penggiat kebajikan lainnya yang penuh dedikasi.</p>
                <a class="ketahui btn btn" href=""><span style=" text-center"> KETAHUI LEBIH LANJUT </span></a>
            </div>
        </div>
    </div>
</section><!-- End Counts Section -->
{{-- End tentang yakesma --}}

{{-- Artikel --}}
<!-- ======= Recent Blog Posts Section ======= -->

<section class="section section--full-pad">
    <div class="container">
        <div class="row">

        <div class="col-md mb-5 mb-md-0">
            <h1>
                <span> <i class="fas fa-angle-right"></i> ARTIKEL</span>
            </h1>
            <div class="post-grid">    
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">March 22, 2022</div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/ancaman-bagi-yang-tidak-mengeluarkan-zakat/">Ancaman Bagi Yang Tidak Mengeluarkan Zakat</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/ancaman-bagi-yang-tidak-mengeluarkan-zakat/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
        
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">
                        March 21, 2022                    </div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/syarat-syarat-harta-yang-wajib-dizakati/">Syarat-Syarat Harta Yang Wajib Dizakati</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/syarat-syarat-harta-yang-wajib-dizakati/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
        
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">
                        March 15, 2022                    </div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/ini-dua-syarat-yang-harus-ada-pada-muzakki-orang-yang-wajib-berzakat/">Ini Dua Syarat yang Harus Ada Pada Muzakki (Orang yang Wajib Berzakat)</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/ini-dua-syarat-yang-harus-ada-pada-muzakki-orang-yang-wajib-berzakat/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
              
            </div>
            <a class="ketahui btn btn" href=""><span style=" text-center"> LIHAT LAINNYA </span></a>

        </div> <!-- col-md -->
    
        <div class="col-md mb-5 mb-md-0">
            <h1 class="section__title section__title--half-block text-md-left">
                <span> <i class="fas fa-angle-right"></i> BERITA & KEGIATAN</span>
            </h1>
            <div class="post-grid">
    
    
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">
                        March 16, 2022                    </div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/laznas-yakesma-salurkan-zakat-mal-kepada-kepada-warga-dhuafa-di-bali/">Laznas Yakesma Salurkan Zakat Mal Kepada Kepada Warga Dhuafa di Bali</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/laznas-yakesma-salurkan-zakat-mal-kepada-kepada-warga-dhuafa-di-bali/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
        
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">
                        March 15, 2022                    </div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/laznas-yakesma-distribusikan-paket-sembako-untuk-mualaf-di-desa-terpencil/">LAZNAS YAKESMA Distribusikan Paket Sembako Untuk Mualaf di Desa Terpencil</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/laznas-yakesma-distribusikan-paket-sembako-untuk-mualaf-di-desa-terpencil/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
        
            <div class="row post-grid__item mb-5">
                <div class="col-6 post-grid__thumbnail">
                    <div class="post-grid__box-bl-rounded box--bl-rounded">
                        <img class="section__img" src="{{asset('assets/img/program/zakat.jpg')}}">
                    </div>
                </div>
                <div class="col-6 post-grid__content">
                    <div class="post-grid__time">
                        March 15, 2022                    </div>
                    <div class="post-grid__title post-grid--ellipsis-4">
                        <a class="post-grid__title-link" href="https://yakesma.org/ibu-atunah-dapat-bantuan-pengobatan-dari-yakesma/">Ibu Atunah Dapat Bantuan Pengobatan dari Yakesma</a>
                    </div>
                    <a class="post-grid__link text-uppercase font-italic text-underline" href="https://yakesma.org/ibu-atunah-dapat-bantuan-pengobatan-dari-yakesma/">Baca Selengkapnya</a>
                </div>
            </div> <!-- post-grid__item -->
        
              
            </div>
            <a class="ketahui btn btn" href=""><span style=" text-center"> LIHAT LAINNYA </span></a>

        </div> <!-- col-md -->    
        </div>
    </div>
</section>
{{-- End Artikel --}}

{{-- Galeri --}}
<section class="section mt-4 mb-4">
<div class="container" data-aos="fade-up">
        <div class="row">
            <span class="profil">Program</span>
        </div>
    <div class="post-gallery row mt-4">
        <div class="post-gallery__item col-md mb-3">
            <div class="post-gallery__video">
                <div class="post-gallery__video-item">
                    <img src="{{asset('assets/img/program/zakat.jpg')}}" style="width:600px;">

                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="row">
                <div class="col-6 mb-3">
                    <img src="{{asset('assets/img/program/zakat.jpg')}}">
                </div>
                <div class="col-6 mb-3">
                    <img src="{{asset('assets/img/program/zakat.jpg')}}">
                </div>
                <div class="col-6 mb-3">
                    <img src="{{asset('assets/img/program/zakat.jpg')}}">
                </div>
                <div class="col-6 mb-3">
                    <img src="{{asset('assets/img/program/zakat.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a class="ketahui btn btn" href=""><span style=" text-center"> LIHAT LAINNYA </span></a></div>
</div>
</section>
    
{{-- End Galeri --}}

{{-- Partner Kami --}}
    <div class="container partner-kami ">
        <div class="row mb-4" data-aos="fade-up">
        <span class="partner text-center">Partner Kami</span>
        </div>


<div class="container">
   <section class="customer-logos slider">
      <div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
      <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
   </section>
</div>
    </div>
{{-- End Partner Kami --}}

</div>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

</script>

<script>
 $('.carousel').carousel({
  interval: 2000
})
</script>
@endsection