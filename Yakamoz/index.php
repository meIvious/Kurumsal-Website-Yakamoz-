<?php 
include("vt.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <style>
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 16px 64px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.footerbeko {

  color:#1e90ff;
}
</style>
  <meta charset="utf-8">
  <title>KARABİGA YAKAMOZ HOTEL</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons --> 
  <link rel="icon" type="image/png" href="img/yoka.png"/>
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>

 <!-- Preloader -->
<script type="text/javascript">
  //<![CDATA[
      $(window).load(function() { // makes sure the whole site is loaded
          $('#status').fadeOut(); // will first fade out the loading animation
          $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
          $('body').delay(350).css({'overflow':'visible'});
      })
  //]]>
</script>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Yakamoz Hotel</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">ANASAYFA</a></li>
          <li><a href="#about">Hakkımızda</a></li>
          <li><a href="#services">Hizmetlerimiz</a></li>
          <li><a href="#photo">Fotoğraflar</a></li>
          <li class="menu-has-children"><a href="#intro">Karabiga</a>
            <ul>
              <li><a href="plaj.php">Plajlar</a></li>
              <li><a href="koylar.php">Koylar</a></li>
              <li><a href="yelken.php">Yelken Kulübü</a></li>
              <li><a href="dalis.php">Serbest Dalış</a></li>
              <li><a href="spor.php">Spor Kampları</a></li>
            </ul>
          </li>
          <li><a href="#contact">İletişim</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/bina.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Yakamoz Hotel Karabiga</h2>
                <p>Tarih Doğa ve Denizin Birleştiği Yer</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/odalar5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/kara.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/plaj.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/karabigakoy.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/yako.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Karabiga</h2>
                <p>Yakamoz Hotel.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Hemen Başla</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="icon ion-checkmark-round"></i>
            <h4 class="title"><a >Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a >Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a >Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Hakkımızda</h3>
          <p>Misyonumuz; güleryüzlü ve misafirperver çalışanlarımız ile siz değerli misafirlerimizin istek, ihtiyaç ve beklentilerinize uygun ürün ve hizmeti sunmaktır. Tüm müşterilerimize aynı mükemmellikte hizmet sunarak insan değerine inanır ve insana yatırım yaparız. Müşteri memnuniyetini esas alarak hizmetlerimizden %100 memnun olduğunuz bir kurum olmayı hedeflemekteyiz. Vizyonumuz; misafirlerimizi en iyi kalitede ve en uygun hizmetle otelimizde ağırlamak, aynı zamanda Karabiga’nın tanıtım ve gelişmesine destek olan bir işletme olmaktır.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-information-outline"></i></div> 
              </div>
              <h2 class="title"><a href="#">Misyonumuz</a></h2>
              <p>
                Güleryüzlü ve misafirperver çalışanlarımız ile siz değerli misafirlerimizin istek, ihtiyaç ve beklentilerinize uygun ürün ve hizmeti sunmaktır.
             
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Plan</a></h2>
              <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Vizyonumuz</a></h2>
              <p>
                Misafirlerimizi en iyi kalitede ve en uygun hizmetle otelimizde ağırlamak, aynı zamanda Karabiga’nın tanıtım ve gelişmesine destek olan bir işletme olmaktır.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Hizmetlerimiz</h3>
          <p>Otelimizde farklı yatak seçeneklerinin bulunduğu 18 adet standart odamız bulunmaktadır.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s"> 
            <div class="icon"><i class="icon ion-laptop"></i></div>
            <h4 class="title" style="color:black">Telefon, Duş ve Tuvalet, TV, Uydu TV</h4>
            
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="icon ion-thermometer"></i></div>
            <h4 class="title" style="color:black">Merkezi Isıtma</h4>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="icon ion-waterdrop"></i></div>
            <h4 class="title"style="color:black">24 Saat Sıcak Su</h4>
            
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="icon ion-ios-telephone"></i></div> 
            <h4 class="title"style="color:black">Oda Servisi</h4>
            
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="icon ion-android-car"></i></div>
            <h4 class="title"style="color:black">Ücretsiz park alanı</h4>
            
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="icon ion-wifi"></i></div>
            <h4 class="title"style="color:black">Kablosuz İnternet (Wireless)</h4>
            
          </div>

        </div>

      </div>
    </section><!-- #services -->

    

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="photo"  class="section-bg" >
    <section id="portfolio"  class="section-bg" >
    <header class="section-header wow fadeInUp">
          <h3>Fotoğraflar</h3>
          <p>Birtakım yazılar.</p>
        </header>
      <div class="container">


        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/bulo.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/bulo.jpg" data-lightbox="portfolio" data-title="Fotoğraflar" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
              <strong>s</strong>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/yoko.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/yoko.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
               
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/yoz.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/yoz.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/foto.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/foto.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/kedi.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/kedi.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/masa.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/masa.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
               
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/yazlik.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/yazlik.jpg" class="link-preview" data-lightbox="portfolio" data-title="Yazlık Restaurant Bahçemiz" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Yazlık Restaurant Bahçemiz</a></h4>
                <p>asdas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/kislik.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/kislik.jpg" class="link-preview" data-lightbox="portfolio" data-title="Kışlık Restaurant" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Kışlık Restaurant</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/fotofoto.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/fotofoto.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    
    </section><!-- #clients -->

   
    

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h3>Bizimle İletişime Geçin</h3>
          <p>Çanakkale şehir merkezine 120 km. ve Biga ilçe merkezine 20 km. mesafede, Marmara kıyısında bulunmaktayız.</p>
          <hr color="#1e90ff"/>
              <form action="index.php" method="post" class="bg-light p-4 p-md-5 contact-form">
                <div class="form-group">
                <fieldset>
                  <input type="text" class="form-control" name="adsoyad"  maxlength="50" placeholder="Ad ve Soyad" required autofocus>
                  </fieldset>
                </div>
                <div class="form-group">
                <fieldset>
                  <input type="email" class="form-control"  id="email" maxlength="50" name="eposta" placeholder="E-posta" required autofocus>
                  </fieldset>
                </div>
                <div class="form-group">
                <fieldset>
                  <input type="tel" maxlength="11"  id="phone" class="form-control" name="telefon" placeholder="Telefon Numarası  (Örn.:0500 XXX XXXX)" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required autofocus>
                  </fieldset>
          </div>
                <div class="form-group">
                  <textarea name="yorum"  cols="30" rows="7" maxlength="144" class="form-control" placeholder="Mesajınız"></textarea>
                </div>
                <div class="form-group">
                  <center><p style="color:#1e90ff">*Bütün verileri doldurduğunuzdan emin olun aksi takdirde mesajınız iletilemeyecektir.</p></center>
          <center><input type="submit"  value="🚀 Gönder" class="btn btn-primary py-3 px-5 " style="border-radius: 30px;"><br><br><br><br>
          <?php 

if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
  $adsoyad = $_POST['adsoyad']; 
  $eposta = $_POST['eposta'];
  $telefon = $_POST['telefon'];
  $yorum = $_POST['yorum'];

    if ($adsoyad<>"" && $eposta<>"" && $telefon<>"") { 
    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.
        
         // Veri ekleme sorgumuzu yazıyoruz.
        if ($baglanti->query("INSERT INTO yakamoz (adsoyad, eposta,telefon,yorum) VALUES ('$adsoyad','$eposta','$telefon','$yorum')")) 
        {
            echo '<button type="button" class="btn btn-success">Mesajınız Gönderilmiştir.</button>'; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
        }
 
        else
        {
            echo '<button type="button" class="btn btn-danger">Hata Oluştu.</button>';
        }

    }

}

?>
</center>
          </div>
         
          </form>
        <hr color="#1e90ff"/>
        </div>
        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresimiz</h3>
              <address>Karabiga Beldesi, Biga, Çanakkale, 17290</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefon Numaramız</h3>
              <p><a href="tel:+(0286) 354 14 00">(0286) 354 14 00</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>E-posta Adresimiz</h3>
              <p><a href="mailto:bilgi@karabigahotelyakamoz.com">bilgi@karabigahotelyakamoz.com</a></p>
            </div>
          </div>

        </div>

       

      </div>
      <br>
      <hr color="#1e90ff" width="1121"/>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top"><div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h4>Konum Bilgisi</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9890.667858224426!2d27.304061!3d40.399697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6396e54da4935d6f!2sYakamoz%20Hotel%20Karabiga!5e1!3m2!1str!2str!4v1592009744365!5m2!1str!2str" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Site İçi Kısayollar</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Anasayfa</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Hakkımızda</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Hizmetler</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>İletişim Bilgilerimiz</h4>
            <p> 
              Rezervasyon: <a href="tel:+902863541400">0286 354 1400</a><br>
              Bilgi: <a href="tel:+90 0532 425 7233"> 0532 425 7233</a><br>
            </p>
            

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/karabigaotelyakamoz" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="instagram"><i class="fa fa-youtube"></i></a>
              <a href="https://www.google.com/search?q=yakamoz+otel+karabiga&oq=yaka&aqs=chrome.1.69i59l4j69i57j69i60l3.9364j0j7&sourceid=chrome&ie=UTF-8" class="google-plus"><i class="fa fa-google-plus"></i></a>
              
            </div>
          </div>
        </div> 
      </div>
    </div>
    
    <div style="background-color:#1e90ff">
      <center><script language="javascript" src="http://ir.sitekodlari.com/tarihvesaat1.js"></script></center>
    </div>
    <div class="container">
      <div class="copyright"style="font-family:comic sans ms" >
        &copy; Copyright <strong>2020</strong>. Tüm hakları Saklıdır.
      </div>
      <div class="credits">
       
        <p style="font-family:comic sans ms"> KARABİGA YAKAMOZ HOTEL RESRAURANT</p> 
        
      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#intro" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

