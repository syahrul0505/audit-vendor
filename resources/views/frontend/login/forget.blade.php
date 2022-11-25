@extends('layout')

@section('container')
<style>
html,body{
overflow-x: hidden;
max-width: 100%;
}

*{
margin : 0;
padding: 0;
}

.form-box{
z-index: 99;
width:524px;
height: 482px;
background: white;
margin: 51px auto;
padding: 50px 0;
border-radius: 20px;
border-top: 8px solid #029B4B;
color: black;
box-shadow: 0px 8px 0px 0px #029B4B inset;
box-shadow: 0px 8px 100px 0px #00000014;
}
.judul{
text-align: center;
margin-bottom: 40px;
position: static;

/* Heading 24/bold */

font-family: 'Poppins',sans-serif;
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 32px;
/* identical to box height, or 133% */


/* Neutral/13 */

color: #000000;
}
hr{
width: 80%;
margin: 20px auto 20px;
}
.input-box{
margin: 0px auto 20px auto;
width: 80%;
height: 60px;
border: 1px solid #029B4B;
padding-top: 20px;
}
.form-label{
font-style: normal;
font-weight: 500;
font-size: 20px;
margin-left: 50px;
}
.input-box input{
text-align: left;
width: 85%;
border: none;
outline: none;
background: transparent;
color: black;
}
.ficon{
margin-right: 10px;
color: #029B4B
}
.eye{
position: absolute;
}
#hide1{
display: none;
}

.login-btn {
position: relative;
overflow: hidden;
padding: 10px 25px;
border-radius: 8px;
width: 251px;
height: 56px;
display: inline-block;
color: white;
-webkit-transition: .5s ease-in-out;
transition: .5s ease-in-out;
background-color: #029B4B;
font-size: 16px;
box-shadow: 0px 12px 32px rgba(2, 155, 75, 0.5);
font-weight: 600;
}

.login-btn span {
    position: relative;
    z-index: 9
}

.login-btn i {
    position: relative;
    top: 2px;
    margin-left: 2px
}

.login-btn::before {
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

.login-btn:hover {
    color:white
}

.login-btn:hover::before {
    width: 300%;
    height: 300%
}

.bulat1{ 
    z-index: 0;
    width: 698px; 
    height: 698px; 
    position: relative;
    right: 627px;
    top: 178px;
    background: #029B4B; 
    border-radius: 50%;
}

.bulat2{ 
    z-index: 0;
    width: 292px; 
    height: 292px; 
    position: relative;
    bottom: 426px;
    left: 1085px;
    background: #029B4B; 
    border-radius: 50%;
}
    @media only screen and (min-width:1024px)and (max-width:1199px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:768px) and (max-width:1023px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:540px) and (max-width:767px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:411px) and (max-width:539px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:375px) and (max-width:410px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:360px) and (max-width:374px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:300px) and (max-width:359px){
      .form-box{
        width: 100%;
      }
    }
    @media only screen and (min-width:280px) and (max-width:299px){
      .form-box{
        width: 100%;
      }
    }
</style>
<section style="margin-top: 60px; padding-bottom:0px">
<div class="container" style="height: 900px">
<div class="bulat1"></div>
<div class="bulat2"></div>
<div class="col-12" style="z-index: 1; position: relative; bottom:1000px">
<form action="">
<div class="form-box">
    <p class="judul">Lupa Password</p>
    <hr>
    <label for="email" class="form-label">Email</label>
    <div class="input-box form-control" id="email">
    <i class="fas fa-user ficon"></i>
    <input class="isi" type="email" placeholder="Email">
    </div>
    <center><a  href="{{ route('change') }}"><button class="login-btn mb-lg-4" type="button"> <span> Get New Password</span></button></a></center>
    <p style="text-align: center; font-weight:400;font-style:normal;font-size:14px;">
    <hr>
    <a href="{{ route('home') }}">
    <center>
        <i class="fas fa-chevron-circle-left" style="color: #029B4B"></i>
        <span style="font-style: normal; font-size:14px; color: #434343;">Kembali ke Sebelumnya</span>
    </center>
    </a>
</div>
</form>
</div>
</div>
</section>

@endsection