@extends('app')

@section('container')
<style>
    html,body{
        overflow-x: hidden;
        max-width: 100%;
    }
    .default-button {
    position: relative;
    overflow: hidden;
    padding: 10px 25px;
    border-radius: 8px;
    display: inline-block;
    color: white;
    -webkit-transition: .5s ease-in-out;
    transition: .5s ease-in-out;
    background-color: #029B4B;
    font-size: 15px;
    box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
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
        color:white
    }

    .default-button:hover::before {
        width: 300%;
        height: 300%
    }

    .footer-newsletter{
        display: none
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
        bottom: 1314px;
        left: 638px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }
    .donut{ 
        z-index: 3;
        width: 108px; 
        height: 108px;
        left: 1099px; 
        bottom: 924px;
        position: relative;
        border: 1vw solid #FFFFFF;
        border-radius: 50%;
    }
    
    .bulat3{ 
        z-index: 0;
        width: 183px; 
        height: 183px; 
        bottom: 1350px;
        right: 248px;
        position: relative;
        background: #029B4B; 
        border-radius: 50%;
    }

    .bulat4{ 
        z-index: 0;
        width: 797px; 
        height: 797px; 
        position: relative;
        left: 798px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .content3{
        height:808px;
        margin-top: 200px;
        margin-bottom: 155px;
    }
    .bulat5{ 
        z-index: 0;
        width: 634px; 
        height: 634px; 
        position: relative;
        right: 639px;
        bottom: 568px;
        background: #3EB65F; 
        border-radius: 50%;
    }

    .judul{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 40px;
        line-height: 40px; 
    }

    /* Visi */
    .content2{
        height: auto;
        margin-bottom: 92px;
    }
    .visi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-visi{
        background:  #3eb65f;
        width: 78px;
        margin-top: 8px;
        height: 10px
    }
    .isi-visi{
        height:92px; font-family: 'Poppins', sans-serif; font-style: normal; font-weight: bold; font-size: 32px;
        text-align:center; color: #434343;margin-top: 32px;
    }
    
    /* Misi */
    .content3{
        height: auto;
        margin-bottom: 100px;
    }
    .misi{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-misi{
        background:  #3eb65f;
        width: 90px;
        margin-top: 8px;
        height: 10px
    }
    .judul-misi{
        font-family: 'Poppins', sans-serif;
        color: #029B4B;
        font-style: bold;
        font-weight: 700;
        font-size: 24px;
        line-height: 40px; 
        text-align: left;
    }
    .isi-misi{
        text-align: left; 
        margin:8px 205px 0px 0px; 
        width:430px;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 36px;
        letter-spacing: 0em;
        text-align: left;
        color:#434343
    }
    .gmb-misi{
        margin-left: 80px;margin-top:10px; width: 300px;
    }

    /* Nilai */
    .content4{
        width: 100%;
        height: 1060px;
        margin-bottom: 100px;
    }
    .nilai{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-nilai{
        background:  #3eb65f;
        width: 100px;
        margin-top: 8px;
        height: 10px
    }

    .konten-nilai{
        position: relative; bottom: 1430px; margin-top: 60px
    }
    .card-nilai{
        border-radius: 20px; height: 430px; width:450px; box-shadow: 0px 8px 100px 0px rgba(0, 0, 0, 0.08);
    }
    .card-body {
    padding: 0px;
    margin-top: 15px;
    width:404px;
    flex: 1 1 auto;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 24px;
    letter-spacing: 0em;
    text-align: left;
    color: #434343;
    }

    .card-title{
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 24px;
        line-height: 32px;
        line-height: 89%;
        margin-top: 40px
    }

    .content5{
        width: 100%;
        height: auto;
        margin-top: 50px;
        margin-bottom: 120px;
    }
    .garis4 {
        width: 190px;
        height: 8px;
        background-color: #3eb65f;
    }

    /* Team */

    .section-title {
    text-align: center;
    padding-bottom: 30px;
    }
    .section-title h2 {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 0;
    color: #124265;
    }

    #team{
        height: auto;
        margin-top: 60px;
        margin-bottom: 100px;
    }

    .team .member {
    margin-bottom: 20px;
    overflow: hidden;
    width: 300px; 
    text-align: center;
    border: 1px solid #BDBDBD;
    border-radius: 4px !important;
    background: #fff;
    box-shadow: 0px 2px 15px rgba(18, 66, 101, 0.08);
    }
    .team .member .member-img {
    position: relative;
    overflow: hidden;
    }
    .team .member .social {
    position: absolute;
    left: 0;
    bottom: 0;
    right: 0;
    height: 40px;
    opacity: 0;
    transition: ease-in-out 0.3s;
    text-align: center;
    background: rgba(255, 255, 255, 0.85);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    }
    .team .member .social a {
    transition: color 0.3s;
    color: #124265;
    margin: 0 10px;
    display: inline-block;
    }
    .team .member .social a:hover {
    color: #2487ce;
    }
    .team .member .social i {
    font-size: 18px;
    margin: 0 2px;
    line-height: 0;
    }
    .team .member .member-info {
    padding: 25px 15px;
    }
    .team .member .member-info h4 {
    font-size: 14px;
    font-weight: 400;
    line-height: 21px;
    letter-spacing: 0.04em;
    text-align: center;
    color:#434343;
    }
    .team .member .member-info span {
    display: block;
    font-size: 13px;
    font-weight: 400;
    color: #aaaaaa;
    }
    .team .member .member-info p {
    font-style: italic;
    font-size: 14px;
    line-height: 26px;
    color: #777777;
    }
    .team .member:hover .social {
    opacity: 1;
    }
    .member-info a:hover .fab{
        color: #124265;
    }

    /* End Team */

    .yayasan{
        font-size: 40px;
        color: #029B4B;
        text-transform: uppercase;
        font-weight: 700;
        text-align: center;
    }
    .garis-yayasan{
        background:  #3eb65f;
        width: 750px;
        margin-top: 8px;
        height: 10px
    }
    .list-latar{
        font-weight: 500;
        font-size: 20px;
        color: #434343; 
        margin-top: 20px
    }
    
    .latar-belakang{
        height: 640px;
    }
    .latar{
        font-size: 40px;
        font-weight: 700;
        color: #029B4B;
        margin-bottom: 20px
    }
    .isi-latar{
        font-size: 20px;
        margin-top: 10px;
    }
    .full-latar{
        position: relative; bottom: 633px;
    }
    .gmb-latar{
        width: 475px; height:530px; border-radius:50px 0px 50px 0px; float: right; position: relative;left: 50px; bottom: 100px;margin-top: 85px;
    }
    .gmb-profile{
        width: 400px; height:314px; float: right; margin-top: 130px;
    }
    .col-nilai-kiri{
        padding-left: 90px
    }
    .col-nilai-kanan{
        padding-left: 5px
    }
    .baris-nilai{
        margin-top: 40px
    }
    .isi-profile{
        width: 690px;
        height: 196px;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 28px;
        color: #434343;
        text-align: left;
        flex: none;
        order: 1;
        align-self: stretch;
        flex-grow: 0;
        margin: 32px 0px;
    }
    .judul-profile{
        margin: 0;
        font-size: 40px;
        font-weight: 700;
        line-height: 40px;
        color: #029B4B;
    }
    .gmb-team{
        width: 300px;
        height: 260px
    }
    .icon-linked{
        font-size: 20px;
    }
    .icon-instagram{
        font-size: 20px;
        margin-right: 20px;
    }
    @media only screen and (min-width:1024px) and (max-width: 1199px){
        .gmb-latar{
            position: relative;
            left: 16px;
            width: 394px;
            height: 488px;
        }
        .bulat2{
            left: 493px;
            bottom: 1273px;
        }
        .donut{
            left: 875px;
            bottom: 933px;
            border: 2vw solid #FFFFFF;
        }
        .col-nilai-kiri{
            padding-left: 12px;
        }
        .col-nilai-kanan{
            padding-left: 12px;
        }
        .isi-profile{
            height: auto;
            width: 530px
        }
    }
    @media only screen and (min-width:768px) and (max-width: 1023px)
    {
        .hero .btn-get-started{
            float: left;
        }
        .icon-instagram{
            font-size: 25px
        }
        .icon-linked{
            font-size: 25px
        }
        .team .member .member-info {
            padding-bottom: 15px
        }
        .team .member .member-info h4{
            font-size: 20px
        }
        .team .member{
            width: 440px;
        }
        .gmb-team{
            width: 100%;
            height: 420px
        }
        .latar{
            font-size: 35px
        }
        .latar-belakang{
            height: 1060px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            bottom: 1685px;
            left: 24px
        }
        .donut{
            width: 98px;
            height: 104px;
            border: 3vw solid #FFFFFF;
            left: 561px;
            bottom: 1334px;                         
        }
        .gmb-latar{
            float:none;
            left: 70px;
            border-radius: 50px 0px;
            width: 80%;
            height: 486px;
        }
        .list-latar{
            font-size: 20px
        }
        .isi-visi{
            font-size: 25px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 35px;
        }
        .garis-visi{
            width: 63px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 35px;
        }
        .garis-misi{
            width: 72px;height: 8px; 
        }
        .nilai{
            font-size: 35px;
        }
        .garis-nilai{
            width: 87px;height: 8px; 
        }
        .garis4{
            width: 162px;height: 8px;
        }
        .yayasan{
            font-size: 35px;
        }
        .garis-yayasan{
            width: 660px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
        }
        .judul-misi{
            font-size: 25px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 18px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-right: 100px;
            padding-left: 75px;
        }
        .col-nilai-kiri{
            padding-right: 100px;
            padding-left: 75px;
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 349px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 349px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            position: relative;
            left: 146px;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
        }
        .judul-profile{
            text-align: left;
            font-size: 35px;
        }
    }
    @media only screen and (min-width:540px) and (max-width:767px)
    {
        .hero .btn-get-started{
            float: left;
        }
        .latar{
            font-size: 30px
        }
        .latar-belakang{
            height: 1060px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            bottom: 1641px;
            left: 0px;
        }
        .donut{
            width: 98px;
            height: 104px;
            border: 4vw solid #FFFFFF;
            left: 443px;
            bottom: 1294px;                         
        }
        .gmb-latar{
            float:none;
            left: 0px;
            border-radius: 50px 0px;
            width: 100%;
            height: 486px;
        }
        .list-latar{
            font-size: 16px
        }
        .isi-visi{
            font-size: 25px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 35px;
        }
        .garis-visi{
            width: 63px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 35px;
        }
        .garis-misi{
            width: 72px;height: 8px; 
        }
        .nilai{
            font-size: 35px;
        }
        .garis-nilai{
            width: 87px;height: 8px; 
        }
        .garis4{
            width: 162px;height: 8px;
        }
        .yayasan{
            font-size: 35px;
        }
        .garis-yayasan{
            width: 330px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
        }
        .judul-misi{
            font-size: 20px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 16px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-left: 12px
        }
        .col-nilai-kiri{
            padding-left: 12px
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 349px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 349px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            position: relative;
            left: 73px;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
        }
        .judul-profile{
            text-align: left;
            font-size: 35px;
        }
    }
    @media only screen and (min-width:411px) and (max-width:539px)
    {
        .hero .btn-get-started{
            float: left
        }
        .latar{
            font-size: 30px
        }
        .latar-belakang{
            height: 1060px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            left: 0px;
            bottom: 1687px
        }
        .donut{
            width: 98px;
            height: 104px;
            border:5vw solid #FFFFFF;
            left: 316px;
            bottom: 1339px;                      
        }
        .gmb-latar{
            float:none;
            left: 0px;
            border-radius: 50px 0px;
            width: 100%;
            height: 486px;
        }
        .list-latar{
            font-size: 16px
        }
        .isi-visi{
            font-size: 25px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 35px;
        }
        .garis-visi{
            width: 63px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 35px;
        }
        .garis-misi{
            width: 72px;height: 8px; 
        }
        .nilai{
            font-size: 35px;
        }
        .garis-nilai{
            width: 87px;height: 8px; 
        }
        .garis4{
            width: 162px;height: 8px;
        }
        .yayasan{
            font-size: 35px;
        }
        .garis-yayasan{
            width: 330px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
        }
        .judul-misi{
            font-size: 20px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 16px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-left: 12px
        }
        .col-nilai-kiri{
            padding-left: 12px
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 349px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 349px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
        }
        .judul-profile{
            text-align: left;
            font-size: 35px;
        }
    }
    @media only screen and (min-width:360px) and (max-width:375px)
    {
        .hero .btn-get-started{
            float: left;
        }
        .latar{
            font-size: 30px
        }
        .latar-belakang{
            height: 980px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            bottom: 1646px;
            left: 24px
        }
        .donut{
            width: 98px;
            height: 104px;
            border:5vw solid #FFFFFF;
            left: 257px;
            bottom: 1361px;                            
        }
        .gmb-latar{
            float:none;
            left: 0px;
            border-radius: 50px 0px;
            width: 100%;
            height: 430px;
        }
        .list-latar{
            font-size: 16px
        }
        .isi-visi{
            font-size: 25px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 35px;
        }
        .garis-visi{
            width: 63px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 35px;
        }
        .garis-misi{
            width: 72px;height: 8px; 
        }
        .nilai{
            font-size: 35px;
        }
        .garis-nilai{
            width: 87px;height: 8px; 
        }
        .garis4{
            width: 162px;height: 8px;
        }
        .yayasan{
            font-size: 35px;
        }
        .garis-yayasan{
            width: 330px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
        }
        .judul-misi{
            font-size: 20px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 16px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-left: 12px
        }
        .col-nilai-kiri{
            padding-left: 12px
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 349px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 349px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            left: 0px;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
        }
        .judul-profile{
            text-align: left;
            font-size: 35px;
        }
    }
    @media only screen and (min-width:300px) and (max-width:320px)
    {
        .latar{
            font-size: 26px
        }
        .latar-belakang{
            height: 1065px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            bottom: 1724px;
            left: 24px
        }
        .donut{
            width: 98px;
            height: 104px;
            border:5vw solid #FFFFFF;
            left: 221px;
            bottom: 1425px;                           
        }
        .gmb-latar{
            float:none;
            left: 0px;
            border-radius: 50px 0px;
            width: 100%;
            height: 430px;
        }
        .list-latar{
            font-size: 16px
        }
        .isi-visi{
            font-size: 20px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 30px;
        }
        .garis-visi{
            width: 54px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 30px;
        }
        .garis-misi{
            width: 61px;height: 8px; 
        }
        .nilai{
            font-size: 30px;
        }
        .garis4{
            width: 135px;height: 8px;
        }
        .garis-nilai{
            width: 75px;height: 8px; 
        }
        .yayasan{
            font-size: 30px;
        }
        .garis-yayasan{
            width: 286px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
            width: 80%
        }
        .judul-misi{
            font-size: 20px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 16px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-left: 12px
        }
        .col-nilai-kiri{
            padding-left: 12px
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 288px;
            font-size: 14px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 290px;
            font-size: 14px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            left: 0px;
            height: 254px;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
            font-size: 14px
        }
        .judul-profile{
            text-align: left;
            font-size: 28px;
        }
    }
    @media only screen and (min-width:280px) and (max-width:299px)
    {
        .team .member{
            width: 100%
        }
        .latar{
            font-size: 26px
        }
        .latar-belakang{
            height: 1200px;
            margin-top: 20px;
        }
        .bulat2{
            width: 98px;
            height: 104px;
            bottom: 1830px;
            left: 0px;
        }
        .donut{
            width: 98px;
            height: 104px;
            border: 7vw solid #FFFFFF;
            left: 187px;
            bottom: 1537px;                           
        }
        .gmb-latar{
            float:none;
            left: 0px;
            border-radius: 50px 0px;
            width: 100%;
            height: 430px;
        }
        .list-latar{
            font-size: 16px
        }
        .isi-visi{
            font-size: 20px;
        }
        .isi-latar{
            text-align: left
        }
        .visi{
            font-size: 30px;
        }
        .garis-visi{
            width: 54px;height: 8px; 
        }
        .content3{
            margin-top: 100px
        }
        .misi{
            font-size: 30px;
        }
        .garis-misi{
            width: 61px;height: 8px; 
        }
        .nilai{
            font-size: 30px;
        }
        .garis4{
            width: 135px;height: 8px;
        }
        .garis-nilai{
            width: 75px;height: 8px; 
        }
        .yayasan{
            font-size: 26px;
        }
        .garis-yayasan{
            width: 243px;height: 8px; 
        }
        .gmb-misi{
            margin-left: 0px;
            margin-top: 32px;
            width: 80%
        }
        .judul-misi{
            font-size: 20px;
        }
        .isi-misi{
            width: 100%;
            margin-right: 0px;
            font-size: 16px
        }
        .content4{
            height: 1900px;
        }
        .card-nilai{
            width: 100%;
            margin-bottom: 20px
        }
        .col-nilai-kanan{
            padding-left: 12px
        }
        .col-nilai-kiri{
            padding-left: 12px
        }
        .baris-nilai{
            margin-top: 0px
        }
        .nilai-list{
            width: 260px;
            font-size: 14px
        }
        .isi-nilai{
            padding: 0px 5px;
            width: 260px;
            font-size: 14px
        }
        #team{
            margin-bottom: 0px
        }
        .gmb-profile{
            float:none;
            left: 0px;
            height: 190px;
            margin-top: 0px;
            margin-bottom: 50px
        }
        .isi-profile{
            width: 100%;
            height: auto;
            font-size: 14px
        }
        .judul-profile{
            text-align: left;
            font-size: 28px;
        }
    }
</style>
<div class="full-konten">
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center mt-xl-5 mt-lg-5 mb-lg-4">
    <div class="container latar-belakang">
        <div data-aos="fade-up" class="bulat1"></div>
    <div class="row full-latar">
    <div class="col-lg-12 col-md-12 col-sm-8">
        <img src="{{ asset('assets/images/home/home1.jfif') }}" data-aos="zoom-in" class="img-fluid gmb-latar" alt="">
        <div class="isi-latar">
        <span class="latar" data-aos="fade-up">LATAR BELAKANG J4C</span>
        <ul class="list-latar">
            <li data-aos="fade-up">Minyak goreng termasuk satu dari sembilan bahan pokok di indonesia.</li>
            <li data-aos="fade-up" data-aos-delay="100">Mayoritas masyarakat indonesia menyukai makanan yang digoreng.</li> 
            <li data-aos="fade-up" data-aos-delay="200">Penggunaan minyak goreng secara berulang-ulang memiliki dampak kesehatan dalam jangka pendek maupun jangka panjang.</li>
            <li data-aos="fade-up" data-aos-delay="300">Maraknya praktek daur ulang (penjernihan) jelantah yang tidak bertanggung jawab.</li>
            <li data-aos="fade-up" data-aos-delay="400">Pengolahan daur ulang jelantah secara benar dapat menghasilkan produk baru seperti biodiesel, sabun dan lilin.</li>
        </ul>
        </div>

    </div>
    </div>
    <div data-aos="fade-up" class="bulat2"></div>
    <div data-aos="fade-up" class="donut"></div>
    <div data-aos="fade-up" class="bulat3"></div>
</div>
</section>
<!-- End Hero -->

{{-- Visi Misi --}}
<div class="content2" data-aos="fade-up">
    <div class="title2">
    <span class="visi"><center>VISI</center></>
    <center><div class="garis-visi"></div></center>
    </div>
    <div class="col-xl-12">
        <div class="container">
            <h1 class="isi-visi">“Manusia yang Sehat dan Sejahtera di Bumi yang Hijau”</h1>
        </div>
    </div>
</div>

<div class="content3">
    <div class="title2" data-aos="fade-up">
    <h2 class="misi"><center>MISI</center></h2>
    <center><div class="garis-misi"></div></center>
    </div>
    <center>
        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5"> 
                    <img src="{{ asset('assets/images/icons/happy.png') }}" class="img-fluid gmb-misi" data-aos="zoom-in" alt="">
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-5" style="margin-top: 40px;">
                    <h3 class="judul-misi" data-aos="fade-up">Edukasi</h3>
                        <p class="isi-misi" data-aos="fade-up" data-aos-delay="200">
                            Memberikan Edukasi Kepada Masyarakat Mengenai Penggunaan Minyak Goreng Dan Risiko Terhadap Minyak Goreng Bekas (Jelantah).
                        </p>  
                </div>
            </div>
        </div>

        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12"> 
                    <img src="{{ asset('assets/images/icons/happy.png') }}" class="img-fluid gmb-misi" data-aos="zoom-in" alt="">
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12" style="margin-top: 40px;">
                    <h3 class="judul-misi" data-aos="fade-up">Pembedayaan Masyarakat</h3>
                        <p class="isi-misi" data-aos="fade-up" data-aos-delay="200">
                            Mendukung Pengembangan Komunitas Atau Perseorangan Melalui Kegiatan Aksi Sosial Dari Donasi Jelantah.
                        </p> 
                </div>
            </div>
        </div>
        <div class="container mt-xl-5">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12"> 
                    <img src="{{ asset('assets/images/icons/happy.png') }}" class="img-fluid gmb-misi" data-aos="zoom-in" alt="">
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12" style="margin-top: 40px;">
                    <h3 class="judul-misi" data-aos="fade-up">Pengelolaan Lingkungan</h3>
                        <div class="isi-misi" data-aos="fade-up" data-aos-delay="200">
                        <ul>
                            <li>
                            Berkontribusi Mengurangi Limbah Jelantah Di Lingkungan.
                            </li>
                            <li>
                            Mendukung Pemanfataan Jelantah Yang Bertanggung Jawab.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>
{{-- end Visi MIsi --}}

{{-- Nilai --}}
<div class="content4">
    <div class="row" style="width: 100%">
            <div class="title2" data-aos="fade-up">
            <h2 class="nilai"><center>NILAI</center></h2>
            <center><div class="garis-nilai"></div></center>
        </div>
    </div>
        
    <div class="container">
        <div class="bulat4" data-aos="fade-up"></div>
        <div class="bulat5" data-aos="fade-up"></div>
        
        <div class="konten-nilai">
            <div class="row">
                {{-- PEDULI --}}
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-nilai-kiri">
                    <div class="card card-nilai" data-aos="zoom-out">
                        <div class="card-title">
                            <span style="color: #029B4B"><center>PEDULI</center></span>
                            <center><hr width="90%"></center>
                        </div>
                        <center><img src="{{ asset('assets/images/icons/happy.png') }}" class="card-img-top" style="width: 200px; height: 210px; alt="></center>
                        <center>
                        <div class="card-body nilai-list">
                            <ul>
                                <li>
                                Peduli pada sesama
                                </li>
                                <li>
                                Peduli pada lingkungan
                                </li>
                            </ul>
                        </div>  
                        </center>              
                    </div>
                </div>
                {{-- End PEDULI --}}

                {{-- SUKARELA --}}
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-8 col-nilai-kanan">
                    <div class="card card-nilai" data-aos="zoom-out">
                        <div class="card-title">
                            <span style="color: #029B4B"><center>SUKARELA</center></span>
                            <center><hr width="90%"></center>
                        </div>
                        <center><img src="{{ asset('assets/images/icons/happy.png') }}" class="card-img-top" style="width: 200px; height: 210px; alt="></center>
                        <center>
                        <div class="card-body nilai-list">
                            <ul>
                                <li>
                                Sukarela terlibat menjadi Relawan
                                </li>
                                <li>
                                Sukarela dalam memberikan jelantah
                                </li>
                            </ul>
                        </div>
                        </center>
                    </div>                
                </div>
                {{-- End SUKARELA --}}
            </div>

            <div class="row baris-nilai">
                {{-- KOMUNAL --}}
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-nilai-kiri">
                    <div class="card card-nilai" data-aos="zoom-out">
                        <div class="card-title">
                            <span style="color: #029B4B"><center>KOMUNAL</center></span>
                            <center><hr width="90%"></center>
                        </div>
                        <center><img src="{{ asset('assets/images/icons/happy.png') }}" class="card-img-top" style="width: 200px; height: 210px; alt="></center>
                        <center>
                        <div class="card-body isi-nilai" style="text-align: center; ">
                            <p>
                                Semua kegiatan dilakukan melalui basis komunal sehingga tidak memberi manfaat hanya untuk individu
                            </p>
                        </div>
                        </center>
                    </div>                
                </div>
                {{-- End KOMUNAL --}}

                {{-- KOLEKTIF --}}
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-nilai-kanan">
                    <div class="card card-nilai" data-aos="zoom-out">
                        <div class="card-title">
                            <span style="color: #029B4B"><center>KOLEKTIF</center></span>
                            <center><hr width="90%"></center>
                        </div>
                        <center><img src="{{ asset('assets/images/icons/happy.png') }}" class="card-img-top" style="width: 200px; height: 210px; alt="></center>
                        <center>
                        <div class="card-body isi-nilai" style="text-align: center; ">
                            <p>
                                Bergerak bersama-sama untuk memberikan dampak positif yang lebih besar
                            </p>
                        </div>
                        </center>
                    </div>                
                </div>
                {{-- End KOLEKTIF --}}
            </div>
        </div>
    </div>
</div>
{{-- end Nilai --}}

<!-- ======= Team Section ======= -->
<div class="content5">
    <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

    <div class="title3">
        <center><h2 class="nilai">TIM KAMI</h2></center>    
        <center><div class="garis4"></div></center>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
        <center>
        <div class="row">
            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <div class="member-img">
                    <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Balikpapan - Johanes Anton W. (Founder _ Ketua J4C).jpg') }}" class="img-fluid gmb-team" alt="">
                    <div class="social">
                    <p class="m-0"><b>Johannes Anton Winoto </b></p>
                    </div>
                </div>
                <div class="member-info">
                    <h4 class="jabatan"><i>Founder Jelantah4Change</i></h4>
                    <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Balikpapan - Magdalena Maristia.jpg') }}" class="img-fluid gmb-team" alt="">
                            <div class="social">
                                <p class="m-0"><b>Magdalena Maristia</b></p>
                            </div>
                    </div>
                    <div class="member-info">
                        <h4><i>Co-Founder Jelantah4Change</i></h4>
                        <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Fitri Febriyanti - Balikpapan.jpeg') }}" class="img-fluid gmb-team" alt="">
                            <div class="social">
                                <p class="m-0"><b>Fitri Febriyanti</b></p>
                            </div>
                    </div>
                    <div class="member-info">
                        <h4><i>Co-Founder Jelantah4Change</i></h4>
                        <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mr-3 mt-4">
            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                <div class="member-img">
                    <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Banjarmasin - Desy Alfu.jpg') }}" class="img-fluid gmb-team" alt="">
                    <div class="social">
                    <p class="m-0"><b> Dessy Alfu Layla </b></p>
                    </div>
                </div>
                <div class="member-info">
                    <h4><i>Tim Media</i></h4>
                    <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Penajam - Juliya Ascha.png') }}" class="img-fluid gmb-team" alt="">
                            <div class="social">
                                <p class="m-0"><b>Juliya Ascha Riandis</b></p>
                            </div>
                    </div>
                    <div class="member-info">
                        <h4><i>Tim Media</i></h4>
                        <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-12 align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('assets/images/Tentang Kami/ANGGOTA TIM/Maria Natalia-Banjarmasin.jpeg') }}" class="img-fluid gmb-team" alt="">
                            <div class="social">
                                <p class="m-0"><b>Maria Natalia</b></p>
                            </div>
                    </div>
                    <div class="member-info">
                        <h4><i>Tim Media</i></h4>
                        <a href=""><i class="fab fa-instagram icon-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin icon-linked"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </center>
    </div>
        
    </div>
    </section>
    </div>
<!-- End Team Section -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row"  data-aos="fade-up">
        <h2 class="yayasan"><center>YAYASAN TERANG NUSANTARA HIJAU</center></h2>
        <center><div class="garis-yayasan"></div></center>
    </div>
    <div class="row"  style="margin-top: 60px">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <img src="{{ asset('assets/images/logoytnh.png') }}" class="img-fluid  gmb-profile" data-aos="zoom-in" alt="">
            <h4 class="judul-profile" data-aos="fade-up">PROFILE</h4>
            <h4 class="isi-profile" data-aos="fade-up">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </h4>
            <h3 class="isi-profile" data-aos="fade-up">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </h3>

            <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Visit Now</span>
                <i class="bi bi-play-circle-fill"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
</div>
</section>
<!-- End Hero -->
</div>

@endsection