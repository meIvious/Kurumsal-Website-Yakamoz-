<?php
$vt=new mysqli("localhost","root","","yakamoz") or die ("Bağlanamadı");
$vt->set_charset("utf8");
?>

<?php
class yonetici {

    protected  $toplamsayi,$toplamSayfamiz,$limitimiz,$gosAdet;

    function sayfalama ($deger1,$deger2) {
	
		$this->toplamsayi=$deger1; //**
		$this->gosAdet=$deger2; //**
			
		$this->toplamSayfamiz=ceil($deger1 / $this->gosAdet) + 1;			
		
			  						
		$sayfa=isset($_GET["hareket"]) ? (int) $_GET["hareket"] : 1;		
		if ($sayfa<1) $sayfa=1;				
		if ($sayfa > $this->toplamSayfamiz) $sayfa = $this->toplamSayfamiz;		
		$this->limitimiz=($sayfa - 1 ) * $this->gosAdet;	 //**	
	
	
	
}

  private function sorgum3 ($dv,$sorgu){
		$sorgum=$dv->prepare($sorgu);
		$sorgum->execute();
		return $sorguson=$sorgum->get_result();
	}


  private function uyari($tip,$metin,$sayfa){
		echo '<div class="alert alert-'.$tip.'">'.$metin.'</div>';
		header('refresh:2,url='.$sayfa.'');
	}




public function kulyonet ($vt) {
    $this->sayfalama($this->sorgum3($vt,"select * from yonetici")->num_rows,3);
    $so=$this->sorgum3($vt, "select * from yonetici LIMIT ".$this->limitimiz.",".$this->gosAdet."");

      echo '<table class="table text-center table-striped table-bordered mx-auto col-md-12 mt-4">
      <thead>
      <p class="card-text text-center text-danger border-bottom">
      * Sadece yönetici eklemek ve silmek için kullanınız. <br/>
      </p>
      <th scope="col"><a href = "ayarlar.php?islem=kullanıcınekle" class="btn btn-success text-white">+</a>&nbsp KULLANICI ADI</th>
      <th scope="col">SİL</th>
      </thead>
      <tbody>';

      while ($sonuc=$so->fetch_assoc()):
          echo    '<tr>
          <td>'.$sonuc["kulad"].'</td>
        <td><a href = "ayarlar.php?islem=kulsil1&id='.$sonuc["id"].'" class="btn btn-danger text-white"</a>Sil</td>
                  </tr>';

      endwhile;

      echo '</tbody>

      <tr>		
      <td colspan="5">
      <nav aria-label="Page navigation example">
      
              <ul class="pagination mx-auto">';
                          
              $link="ayarlar.php?islem=kulyonet";
              
          
                  for ($s=1; $s<$this->toplamSayfamiz; $s++) :
                      
                      echo '<li class="page-item">
                      
                      <a class="page-link" href="'.$link.'&hareket='.$s.'">'.$s.'</a>					
                      
                      </li>';
                      
                      endfor;
  
              
              echo '</ul></nav>
      
      
      </td>
  
      </tr>
  
          </table>';

  }


  public function kullanıcınekle($vt) {
    @$buton=$_POST["buton"];
    echo '<div class="col-md-3 text-center mx-auto mt-5 table-bordered">';
    if($buton):
            @$kulad=htmlspecialchars($_POST["kulad"]);
            @$kulsifre=htmlspecialchars($_POST["kulsifre"]);
            $kulsifre1=md5(sha1(md5($kulsifre)));

            if($kulad=="" || $kulsifre1=="") :
                $this->uyari("danger","bilgiler boş olamaz","ayarlar.php?islem=kulyonet");
            else:
                $this->sorgum3($vt,"insert into yonetici (kulad,sifre) VALUES ('$kulad','$kulsifre1')");
                $this->uyari("success","Kullanıcı Eklendi","ayarlar.php?islem=kulyonet");
            endif;

    else:
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    echo'
<div class="col-md-12 table-light border-bottom"><h4>Kullanıcı Ekle</h4></div>
<div class="col-md-12 table-light">Kullanıcı Adı<input type="text" name="kulad" class="form-control mt-3" require /></div>
<div class="col-md-12 table-light">Şifresi<input type="text" name="kulsifre" class="form-control mt-3" require /></div>
<div class="col-md-12 table-light"><input name="buton" type="submit" class="btn btn-success mt-3 mb-3" /></div>
</form>
';
endif;
echo'</div>';
}




  public function kulsil1 ($vt) {
     $kulid= $_GET["id"];

     if ($kulid != "" && is_numeric($kulid)):
         $this->sorgum3($vt, "delete from yonetici where id=$kulid");
         $this->uyari("success", "Kullanıcı Silindi", "ayarlar.php?islem=kulyonet");
     else:
         $this->uyari("danger", "Hata Oluştu", "ayarlar.php?islem=kulyonet");

     endif;
 }

  //////////////////////// Oda yönetimi ve listeleme fonksiyonu///////////////////
  public function adminyonetimi ($vt) {
    $this->sayfalama($this->sorgum3($vt,"select * from yonetici")->num_rows,3);
    $so=$this->sorgum3($vt, "select * from yonetici LIMIT ".$this->limitimiz.",".$this->gosAdet."");

      echo '<table class="table text-center table-striped table-bordered mx-auto col-md-12 mt-4">
      <thead>
      <p class="card-text text-center text-danger border-bottom">
      * Sadece yönetici eklemek ve silmek için kullanınız. <br/>
      </p>
      <th scope="col"><a href = "ayarlar.php?islem=adminekle" class="btn btn-success text-white">+</a>&nbsp KULLANICI ADI</th>
      <th scope="col">SİL</th>
      </thead>
      <tbody>';

      while ($sonuc=$so->fetch_assoc()):
          echo    '<tr>
          <td>'.$sonuc["kulad"].'</td>
        <td><a href = "ayarlar.php?islem=adminsil&id='.$sonuc["id"].'" class="btn btn-danger text-white"</a>Sil</td>
                  </tr>';

      endwhile;

      echo '</tbody>

      <tr>		
      <td colspan="5">
      <nav aria-label="Page navigation example">
      
              <ul class="pagination mx-auto">';
                          
              $link="ayarlar.php?islem=adminyonetimi";
              
          
                  for ($s=1; $s<$this->toplamSayfamiz; $s++) :
                      
                      echo '<li class="page-item">
                      
                      <a class="page-link" href="'.$link.'&hareket='.$s.'">'.$s.'</a>					
                      
                      </li>';
                      
                      endfor;
  
              
              echo '</ul></nav>
      
      
      </td>
  
      </tr>
  
          </table>';

  }

  public function adminekle($vt) {
    @$buton=$_POST["buton"];
    echo '<div class="col-md-3 text-center mx-auto mt-5 table-bordered">';
    if($buton):
            @$kulad=htmlspecialchars($_POST["kulad"]);
            @$kulsifre=htmlspecialchars($_POST["kulsifre"]);
            $kulsifre1=md5(sha1(md5($kulsifre)));

            if($kulad=="" || $kulsifre1=="") :
                $this->uyari("danger","bilgiler boş olamaz","ayarlar.php?islem=adminyonetimi");
            else:
                $this->sorgum3($vt,"insert into yonetici (kulad,sifre) VALUES ('$kulad','$kulsifre1')");
                $this->uyari("success","Kullanıcı Eklendi","ayarlar.php?islem=adminyonetimi");
            endif;

    else:
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    echo'
<div class="col-md-12 table-light border-bottom"><h4>Kullanıcı Ekle</h4></div>
<div class="col-md-12 table-light">Kullanıcı Adı<input type="text" name="kulad" class="form-control mt-3" require /></div>
<div class="col-md-12 table-light">Şifresi<input type="text" name="kulsifre" class="form-control mt-3" require /></div>
<div class="col-md-12 table-light"><input name="buton" type="submit" class="btn btn-success mt-3 mb-3" /></div>
</form>
';
endif;
echo'</div>';
}




  public function adminsil ($vt) {
     $kulid= $_GET["id"];

     if ($kulid != "" && is_numeric($kulid)):
         $this->sorgum3($vt, "delete from yonetici where id=$kulid");
         $this->uyari("success", "Kullanıcı Silindi", "ayarlar.php?islem=adminyonetimi");
     else:
         $this->uyari("danger", "Hata Oluştu", "ayarlar.php?islem=adminyonetimi");

     endif;
 }





  ///////////////////////////////////////////////////////////////////////////////
    public function kulbilgi ($vt) {
        $this->sayfalama($this->sorgum3($vt,"select * from yakamoz")->num_rows,3);
    $so=$this->sorgum3($vt, "select * from yonetici LIMIT ".$this->limitimiz.",".$this->gosAdet."");

        echo '<table class="table text-center table-striped table-bordered mx-auto col-md-10 mt-4">
        <thead>
            <tr>
                <th scope="col">AD-SOYAD</th>
                <th scope="col">E-POSTA</th>
                <th scope="col">TEL NO</th>
                <th scope="col">MESAJ</th>
                <th scope="col">SİL</th>
            </tr>
        </thead>
        <tbody>';

        while ($sonuc=$so->fetch_assoc()):
            echo    '<tr>
                        <td>'.$sonuc["adsoyad"].'</td>
                        <td>'.$sonuc["eposta"].'</td>
                        <td>'.$sonuc["telefon"].'</td>
                        <td>'.$sonuc["yorum"].'</td>
                        <td><a href = "ayarlar.php?islem=kulsil&kulid='.$sonuc["id"].'" class="btn btn-danger" </a>Sil</td>
                    </tr>';

        endwhile;

        echo '</tbody>
            </table>';

    }


  public function kulyonetimi ($vt) {
    $this->sayfalama($this->sorgum3($vt,"select * from yakamoz")->num_rows,4);
    $so=$this->sorgum3($vt, "select * from yakamoz LIMIT ".$this->limitimiz.",".$this->gosAdet."");

      echo '<table class="table text-center table-striped table-bordered mx-auto col-md-12 mt-4">
      <thead>
          <tr>
          <th scope="col">AD-SOYAD</th>
          <th scope="col">E-POSTA</th>
          <th scope="col">TEL NO</th>
          <th scope="col">MESAJ</th>
          <th scope="col">SİL</th>
          </tr>
      </thead>
      <tbody>';

      while ($sonuc=$so->fetch_assoc()):
          echo    '<tr>
                      <td>'.$sonuc["adsoyad"].'</td>
                      <td>'.$sonuc["eposta"].' </td>
                      <td>'.$sonuc["telefon"].'</td>
                      <td>'.$sonuc["yorum"].'</td>
                      <td><a href = "ayarlar.php?islem=kulsil&id='.$sonuc["id"].'" class="btn btn-danger text-white"</a>Sil</td>
                  </tr>';

      endwhile;

      echo '</tbody>

      <tr>		
      <td colspan="6">
      <nav aria-label="Page navigation example">
      
              <ul class="pagination mx-auto">';
                          
              $link="ayarlar.php?islem=kulyonetimi";
              
          
                  for ($s=1; $s<$this->toplamSayfamiz; $s++) :
                      
                      echo '<li class="page-item">
                      
                      <a class="page-link" href="'.$link.'&hareket='.$s.'">'.$s.'</a>					
                      
                      </li>';
                      
                      endfor;
  
              
              echo '</ul></nav>
      
      
      </td>
  
      </tr>
  
          </table>';

  }

  

  public function kulsil ($vt) {
     $kulid= $_GET["id"];

     if ($kulid != "" && is_numeric($kulid)):
         $this->sorgum3($vt, "delete from yakamoz where id=$kulid");
         $this->uyari("success", "Kullanıcı Silindi", "ayarlar.php?islem=kulyonetimi");
     else:
         $this->uyari("danger", "Hata Oluştu", "ayarlar.php?islem=kulyonetimi");

     endif;
 }



  function kulad($db){
    $sorgu="select * from yonetici";
    $gelensonuc=$this->sorgum3($db,$sorgu);
    $b=$gelensonuc->fetch_assoc();
    return $b["kulad"];
  }

  function cikis ($deger) {
    $deger=md5(sha1(md5($deger)));
    setcookie("kul",$deger, time() - 10);
    $this->uyari("success","Çıkış yapılıyor","index.php");
  }


  public   function giriskontrolu($r,$k,$s){
      $sonhal=md5(sha1(md5($s)));
      $sorgu="select * from yonetici where kulad='$k' and sifre='$sonhal'";
      $sor=$r->prepare($sorgu);
      $sor->execute();
      $sonbilgi=$sor->get_result();

      if($sonbilgi->num_rows==0):

        $this->uyari("danger","Bilgiler Hatalı","index.php");
        else:
        $this->uyari("success","Giriş Yapılıyor","ayarlar.php");

      $kulson=$k;
      setcookie("kul",$kulson, time() + 60*60*24);

      endif;
    }

    public  function cookcon($d,$durum=false) {
  		if(isset($_COOKIE["kul"])) :

  		 $deger=$_COOKIE["kul"];

       $sorgu="select * from yonetici";
  		 $sor=$d->prepare($sorgu);
  		 $sor->execute();
  		 $sonbilgi=$sor->get_result();
       $veri=$sonbilgi->fetch_assoc();
       $sonhal=$veri["kulad"];
  		 if ($sonhal!=$_COOKIE["kul"]):
  		setcookie("kul",$deger, time() - 10);
  		  header("Location:index.php");
      else:
       if ($durum==true) : header("Location:ayarlar.php"); endif;
     endif;

   else:
   if($durum==false) : header("Location:index.php");
  	endif;
  	endif;
  }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function sifredegistir ($vt) {

            @$buton = $_POST["buton"];

            if ($buton) :
                    // db işlemleri
                    @$eskisifre = htmlspecialchars($_POST["eskisifre"]);
                    @$yeni1 = htmlspecialchars($_POST["yeni1"]);
                    @$yeni2 = htmlspecialchars($_POST["yeni2"]);

                    if ($eskisifre == "" || $yeni1 == "" || $yeni2 == "") :
                        $this->uyari("danger", "Bilgiler boş olamaz", "ayarlar.php?islem=sifredegistir");

                    else:
                        $eskisifreson=md5(sha1(md5($eskisifre)));

                        if($this->sorgum3($vt, "select * from yonetici where sifre = '$eskisifreson' ")->num_rows == 0) :
                            //Kayıt yoksa eski şifre hatalı
                            $this->uyari("danger", "Eski şifre hatalı", "ayarlar.php?islem=sifredegistir");

                        elseif($yeni1 != $yeni2):
                            $this->uyari("danger", "Yeni şifreler aynı değil", "ayarlar.php?islem=sifredegistir");

                        else:
                            $yenisifre=md5(sha1(md5($yeni1)));

                            $this->sorgum3($vt, "update yonetici set sifre = '$yenisifre'");
                            $this->uyari("success", "Şifre Değiştirildi", "ayarlar.php");

                        endif;

                    endif;

            else:
                ?>

                <div class="col-md-3 text-center mx-auto mt-5 table-bordered">
                        <form action = "<?php $_SERVER['PHP_SELF'] ?>" method = "post">
                <?php
                        echo '<div class="col-md-12 table-light border-bottom"><h4>ŞİFRE DEĞİŞTİR</h4></div>
                            <div class="col-md-12 table-light"><input type = "text" name = "eskisifre" class = "form-control mt-3" require placeholder="Eski Şifreniz"/></div>
                            <div class="col-md-12 table-light"><input type = "text" name = "yeni1" class = "form-control mt-3" require placeholder="Yeni Şifreniz"/></div>
                            <div class="col-md-12 table-light"><input type = "text" name = "yeni2" class = "form-control mt-3" require placeholder="Yeni Şifreniz Tekrar"/></div>
                            <div class="col-md-12 table-light"><input name = "buton" value = "Değiştir" type = "submit" class = "btn btn-success mt-3 mb-3"/></div>

                        </form>
                    </div>';

            endif;
        }
}


?>
