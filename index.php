<!doctype html>
<html lang="tr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>UPS Hesaplama Aracı</title>
  </head>
  <body>
  
  <div class="head">
   <h1 style="padding-top: 20px;">UPS Çalışma Süresi Hesaplama</h1> 
  </div>
   
    <div class="container frame">
      <div class="col-md-12">
        <form id="my-form" method="post">
          <div class="row">
            <span class="lbl" style="margin-top: 5%;">Toplam Yük (W)</span>
            <input type="text" id="text-box" name="yük" required>
          </div>
          <div class="row">
            <span class="lbl">Verim (%)</span>
            <input type="text" id="text-box" name="verim" required>
          </div>
          <div class="row">
            <span class="lbl">Batarya Kapasitesi (Ah)</span>
            <input type="text" id="text-box" name="kapasite" required>
          </div>
          <div class="row">
            <span class="lbl">Batarya Sayısı</span>
            <input type="text" id="text-box" name="sayi" required>
          </div>
          <div class="row">
            <span class="lbl">Batarya Voltajı (V)</span>
            <input type="text" id="text-box" name="voltaj" required>
          </div>
          <div class="submit-button d-flex justify-content-center">
            <button class="btn btn-primary calculate" name="submit">Hesapla</button>
          </div>
          <div class="result d-flex justify-content-center">
            <?php include 'calculate.php'; ?>
          </div>
        </form>
      </div> 
    </div>

    <div class="footer">
      <div class="container d-flex justify-content-center">
        <a href="https://yigitersalman.com.tr"><img src="logo.png" style="width:100px; height: 100px;"></a>
      </div>
      <div class="container d-flex justify-content-center">
        <p><?php echo date("Y"); ?></p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>