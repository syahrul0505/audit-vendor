@extends('layout')

@section('container')

<style>
.card{
    width:524px;
    height: 433px;
    background: white;
    margin: 50px auto;
    padding: 30px 0;
    border-radius: 20px;
    color: black;
    box-shadow: 0px 8px 0px 0px #029B4B inset;
    box-shadow: 0px 8px 100px 0px #00000014;
}

.m-card{
    width: 100%;
    height: auto;
    background: white;
    margin: 50px auto;
    padding: 50px 0;
    border-radius: 20px;
    color: black;
    box-shadow: 0px 8px 0px 0px #029B4B inset;
    box-shadow: 0px 8px 100px 0px #00000014;
}
.judul{
    text-align: center;
    margin-bottom: 5px;
    position: static;

    /* Heading 24/bold */

    font-family: 'Poppins',sans-serif;
    font-style: normal;
    font-weight: 500;
    font-size: 24px;
    line-height: 32px;
    /* identical to box height, or 133% */


    /* Neutral/13 */

    color: #029B4B;
}
hr{
    width: 80%;
    margin: 5px 0px 20px 0px;
}

.bulat1{ 
        z-index: 0;
        width: 698px; 
        height: 698px; 
        position: relative;
        right: 627px;
        top: 128px;
        background: #029B4B; 
        border-radius: 50%;
    }

    .bulat2{ 
        z-index: 0;
        width: 292px; 
        height: 292px; 
        position: relative;
        bottom: 389px;
        left: 1085px;
        background: #029B4B; 
        border-radius: 50%;
    }

    @media only screen and (min-width:1024px)and (max-width:1199px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:768px) and (max-width:1023px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:540px) and (max-width:767px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:411px) and (max-width:539px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:375px) and (max-width:410px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:360px) and (max-width:374px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:300px) and (max-width:359px){
      .card{
        width: 100%;
      }
    }
    @media only screen and (min-width:280px) and (max-width:299px){
      .card{
        width: 100%;
      }
    }
</style>
    <section style="margin-top: 60px">
        <div class="container" style="height: 782px">
            <div class="bulat1"></div>
            <div class="bulat2"></div>
            <div class="col-12">
        <div class="card"  style="z-index: 1; position: relative; bottom: 1000px;">
            <p class="judul">Pendaftaran Berhasil</p>
            <center><hr></center>
            <center><img src="{{ asset('assets/images/icons/happy.png') }}" class="card-img-top" style="width: 200px; height: 210px; alt="></center>
            <div class="card-body" style="text-align: center; ">
                <center><p style="font-size: 16px; font-family: 'Poppins',sans-serif; margin:10px 20px 0px 20px">
                    Silahkan cek email anda untuk melakukan verifikasi pendaftaran</p></center>
            </div>
        </div> 
        </div>
        </div>
</section>
@endsection