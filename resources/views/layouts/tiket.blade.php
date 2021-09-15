<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/tiket.css">
    <style>
    footer {
    border-top: 5px solid #C89350;
    margin-top: 100px;
    background-color: #14213D;
    color: #ffffff;
    width: 100%;
}
.copyright {
    background-color: #C89350;
}

.tombol-whatsapp{
    padding: 3px 8px;
    cursor:pointer;
    color:#fff!important;
    font-weight:bold;
    border: 0;border-radius:10px;
    background:#14213D;
    box-shadow:0 5px 1px #14213D;
    }
    .tombol-whatsapp:hover{
    background: #27ae60;
    box-shadow: 0 5px 1px #145b32;
    }
    .tombol-whatsapp:active{
    border-top: 5px solid white;
    box-shadow: none;
    }

    .tombol-instagram{
        padding: 3px 8px;
        cursor:pointer;
        color:#fff!important;
        font-weight:bold;
        border: 0;border-radius:10px;
        background:#14213D;
        box-shadow:0 5px 1px #14213D;
        }
        .tombol-instagram:hover{
        background: #f32965;
        box-shadow: 0 5px 1px #c50b52;
        }
        .tombol-instagram:active{
        border-top: 5px solid white;
        box-shadow: none;
        }

        .tombol-youtube{            
            padding: 3px 8px;
            cursor:pointer;
            color:#fff!important;
            font-weight:bold;
            border: 0;border-radius:10px;
            background:#14213D;
            box-shadow:0 5px 1px #14213D;
            }
            .tombol-youtube:hover{
            background: #f33737;
            box-shadow: 0 5px 1px #c90101;
            }
            .tombol-youtube:active{
            border-top: 5px solid white;
            box-shadow: none;
            
            }

            
.socmed {
    font-size: 28px;
    float: right;
}

.socmed a {
    color: #ffffff;
    font-size: 36px;
    margin-left: 10px;
}

.socmed a:hover {
    color: #ffd43b;
}
.navku{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.6s;
    padding: 15px 100px;
    z-index: 100000;
    background: #14213D;
}

.navku ul{
  font-size: 20px;
}

.logo {
    position: relative;
    font-weight: 600;
    color: #fff;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 00.6s;
    
}
</style>
    <title>Museum Blambangan | {{ $title }}</title>
</head>

<body>
<nav class="navku navbar navbar-expand-lg navbar-dark mb-5">

<div class="container">
  <div data-aos="zoom-out-down">
  <a class="logo navbar-brand" href="/">Museum Blambangan</a> 
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
 
</div>
</div>
</div>
</nav>
  
<div id="lambang" class="row">
        <div class="col text-center mt-5 mb-5">
         <img src="https://i.ibb.co/Pw1pYYJ/logo.png" height="180px"  alt="">
        </div>
      </div>
@yield ('tiket')
<footer>
  <div class="container">
    <div class="row">
      <div class="col-6 mt-3">
        <h5>Museum Blambangan</h5>
        <p><i class="fas fa-phone"></i> 0333 414172 | <i class="fas fa-envelope"></i>
          jingga.banyuwangi@gmail.com
        </p>
      </div>
      <div class="col-6 mt-3">
        <div class="socmed">
          <a class="tombol-whatsapp" type="button" href="https://wa.me/6281331992911" title="Hubungi Saya" rel="noopener" target="_blank">
         <i class="fab fa-whatsapp"></i></a> 
          <a class="tombol-instagram" type="button" href="https://www.instagram.com/museumblambangan/" title="Hubungi Saya" rel="noopener" target="_blank">
          <i class="fab fa-instagram"></i> </a>
          <a class="tombol-youtube" type="button" href="" title="Hubungi Saya" rel="noopener" target="_blank">
            <i class="fab fa-youtube"></i> </a>
      </div>
    </div>
    <div class="row text-center">
      <p>Copyright &copy;2021 -  museumblambangan| All rights reserved</p>
    </div>
  </div>
</footer>
</body>
</html>