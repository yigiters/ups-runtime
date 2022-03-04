<?php 

    if (isset($_POST['submit'])) {
      $yük      = $_POST['yük'];
      $verim    = $_POST['verim'];
      $kapasite = $_POST['kapasite'];
      $sayi     = $_POST['sayi'];
      $voltaj   = $_POST['voltaj'];

      $hesapla = ($kapasite * (($sayi * $voltaj) / $yük) * $verim / "100");

      $conv = number_format($hesapla, 2, '.', '');
      $exp = explode( "." , $conv);
      $saat = $exp['0'];
      $dakika = $exp['1'];
      echo "Çalışma Süresi : " . "<br>";
      echo "$saat Saat $dakika Dakika";
    }

    ?>