<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Site CSS -->
    <link rel="stylesheet" href="Scripts/teaser5.css">
    <title>GiniBee - Spirit In A Bottle</title>
  </head>
  <body>
    <div class="container-fluid d-flex h-100 flex-column">
      <div class="row text-center h-100">
        <div id="logoCol" class="col-12 h-25 mb-3 mb-xl-0">
          <div class="row h-100">
            <div id="giniLogo" class="col-12 col-xl-6 offset-xl-1">
              <img class="img-fluid" src="Assets/logo-transparent-ginibee.png" alt="GiniBee Logo">
            </div>
          </div>
        </div>
        <div id="animCol" class="col-12 h-50">
          <div class="row align-items-center h-100">
            <div id="beeLogo" class="col-0 col-xl-5 offset-xl-1">
              <img id="bzzz" class="img-fluid mr-xl-5" src="Assets/čbela.png" alt="Bee Logo">
            </div>
            <div id="anim" class="col-12 col-xl-5 h-100">
              <img id="brinBot" src="Assets/brin-spodaj.png" alt="Brin Picture">
              <img id="brinTop" src="Assets/brin-zgoraj.png" alt="Brin Picture">
              <img id="ginStd" src="Assets/gini-blue-V2.png" alt="Standard Gin Picture">
              <img id="ginPrm" src="Assets/gini-silver-V2.png" alt="Premium Gin Picture">
              <img id="tonic" src="Assets/tonik-V2.png" alt="Tonik Picture">
              <img id="bee1" src="Assets/bee1.png" alt="Bee picture">
              <img id="bee2" src="Assets/bee2.png" alt="Bee Picture">
            </div>
          </div>
        </div>
        <div id="smokeCol" class="col-12 h-25">
          <div class="row align-items-start h-100">
            <div class="col-12 col-xl-6 offset-xl-1">
              <div id="smokeHolder" class="embed-responsive embed-responsive-16by9">
                <video id="smoke" class="embed-responsive-item" preload="auto"muted>
                  <source src="Assets/smoke-webm.webm">
                  <source src="Assets/smoke-m4v.m4v">
                </video>
                <!-- <img id="smoke" src="Assets/smokeGif.gif" alt="smoke gif"> -->
              </div>
              <h1>
                <span>S</span>
                <span>P</span>
                <span>I</span>
                <span>R</span>
                <span>I</span>
                <span>T</span>
                <span class="space"> </span> <!--7-->
                <span>I</span>
                <span>N</span>
                <span class="space"> </span> <!--10-->
                <span>A</span>
                <span class="space"> </span> <!--12-->
                <span>B</span>
                <span>O</span>
                <span>T</span>
                <span>T</span>
                <span>L</span>
                <span>E</span> <!-- 18 -->
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button id="buttonDown" onclick="smoothScroll(document.getElementById('info'))"><img id="buttonImage" src="Assets/down-arrow.png" alt="down arrow"></i></button>
    <div id="info" class="container-fluid d-flex flex-column align-items-center">
      <div class="row justify-content-center text-center">
          <div class="col-8 col-xl-3 mt-5">
            <img id="info1" class="hidden"  src="Assets/med-brin-lipaNew.png" alt="med,brin in lipa">
            <p class="infoText hidden">
              Po vsem svetu je znano, da je naša čebela Kranjska sivka (latinsko Apis mellifera carnica) 
              najmarljivejša med vsemi čebelami, poleg tega pa je tudi najprijaznejša do človeka. 
              GiniBee gin <span id="bold">Premium</span> in <span id="bold">Unique</span> se ponašata s svojim posebnim okusom, saj je vsaka šesta brinjeva jagoda namocena v med slovenskih čebel. 
              Poleg medu s svojo prisotnostjo dajejo GiniBee ginu poetsko noto tudi lipov list, vrtnica, ingver, pomaranca, kumara, limona in koriander. 
            </p>
            <button id="buttonDown2" onclick="smoothScroll(document.getElementById('info2'))"><img id="buttonImage2" src="Assets/down-arrow.png" alt="down arrow"></i></button>
          </div>
          <div class="col-8 col-xl-3 mt-5">
            <img id="info2" class="hidden" src="Assets/gini-silver-V2.png" alt="premium gin">
            <p class="infoText hidden">
              GiniBee gin <span id="bold">Premium</span> se dodatno ponaša s svojo edinstvenostjo, saj ga bogati brandy, 
              ki je bil 3 leta staran v hrastovih sodih. GiniBee Premium je ustvarjen za zahtevne pivce gina, 
              ki si želijo le najboljše. Prav tako je po mnenju svetovnih poznavalcev in ocenjevalcev eden izmed 
              redkih ginov, ki za uživanje ne potrebujejo tonika. 
            </p>
            <button id="buttonDown3" onclick="smoothScroll(document.getElementById('info3'))"><img id="buttonImage3" src="Assets/down-arrow.png" alt="down arrow"></i></button>
          </div>
          <div class="col-8 col-xl-3 mt-5">
            <img id="info3" class="hidden" src="Assets/gin-tonic2.png" alt="gin tonic v kozarcu">
            <p class="infoText hidden">
                GiniBee Tonic <span id="bold">SUGAR FREE</span> je prvi in edini slovenski tonik brez sladkorja. Zato ga samega ali 
                zmešanega z ginom GiniBee lahko pijemo brez slabe vesti. Prav tako je skrb na jutranji glavobol stvar preteklosti. 
                Produkte GiniBee smo skrbno razvijali več let z mislijo na vse ljubitelje gina - ocena je na vaši strani, 
                ponosno pa lahko poudarimo, da so nas okusi več kot zadovoljili. 

                Naj vam pridih Slovenije prinese neskončnost, užitek in svežino. 
            </p>
          </div>
      </div>
    </div>
    <div id="comingSoon" class="container text-center hidden">
      <p id="csText">NOVOSTI KMALU...</p>
    </div>
    <div id="question" class="container text-center hidden">
        <p id="formText">Si želite GibiBee Gin tudi v vašem lokalu ali kar doma?</p>
      </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-5 order-3 order-md-1 hidden">
          <?php include("form.php") ?>
          <form id="obrazec" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
              <div class="form-group">
                <label for="formName">Ime*</label>
                <input type="text" name="name" value="<?= $name ?>" class="form-control" id="formNameIn" placeholder="Janez Novak">
                <span class="error"><?= $name_error ?></span>
              </div>
              <div class="form-group">
                <label for="fromMail">Email*</label>
                <input type="text" name="email" value="<?= $email ?>"  class="form-control" id="formEmailIn" placeholder="primer@email.com">
                <span class="error"><?= $email_error ?></span>
              </div>
              <div class="form-group">
                <label for="formPhone">Telefon*</label>
                <input type="text" name="phone" value="<?= $phone ?>" class="form-control" id="formPhoneIn" placeholder="041 567 891">
                <span class="error"><?= $phone_error ?></span>
              </div>
              <div class="form-group">
                <label for="formCompany">Podjete</label>
                <input type="text" name="company" value="<?= $company ?>" class="form-control" id="formCompanyIn" placeholder="Ime podjetja">
              </div>
              <div class="form-group">
                <label for="formMessage">Sporočilo</label>
                <textarea type="text" name="message" value="<?= $message ?>" class="form-control" id="formMessageIn" placeholder="Tukaj napišeste sporočilo..."></textarea>
              </div>
              <p><label for="formInfo">Okenca z * so obvezna</label></p>
              <button id="formSubmit" name="submit" type="submit" id="contact-submit" data-submit="...Pošiljam" class="btn btn-danger">Pošlji</button>
              <span class="success"><?= $success ?></span>
          </form>
        </div>
        <div class="col-12 col-md-5 text-center order-1 order-md-2 hidden">
            <img id="formGin" src="Assets/gini-blue-V2.png" alt="Standard Gin Picture">
        </div>
        <div id="formSmokeDiv" class="col-12 col-md-6 text-center order-2 order-md-3">
          <div id="formSmokeHolder" class="embed-responsive embed-responsive-16by9">
            <video id="formSmoke" class="embed-responsive-item hidden" preload="auto" autoplay muted>
              <source src="Assets/smoke-webm.webm">
              <source src="Assets/smoke-m4v.m4v">
              </video>
              <img id="formLogo" src="Assets/ginibee-red-V2.png" class="hidden2" alt="Gin Logo Red">
              <!-- <img id="formLogo" src="Assets/ginibee-red-V2.png" class="mask" alt="Gin Logo Red"> -->
          </div>
        </div>
      </div>
    </div>
    <div id="footer" class="container-fluid d-flex flex-column">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12">
              <img id="GLogo" src="Assets/ginibee-red-V2.png" alt="Gin Logo Red">
            </div>
            <div class="col-12 col-md-3 order-2 order-md-1">
                <p class="m-0">RADO MULEJ</p>
                <p class="m-0">CEO</p>
                <p class="m-0 text-center">rado.mulej@ginibeegin.com</p>
            </div>
            <div class="col-12 col-md-3 order-1 order-md-2 text-center">
              <img id="MLogo" src="Assets/mulej-krila.png" alt="MLogo image">
            </div>
            <div class="col-12 col-md-3 order-3 order-md-3">
                <p class="m-0">MR SPIRITS d.o.o.</p>
                <p class="m-0">Zagorica 55</p>
                <p class="m-0">8213 Veliki Gaber</p>
                <p class="m-0">SLOVENIA (EU)</p>
            </div>
          </div>
        <div class="row align-items-center">
            <div class="col text-center">www.ginibeegin.com</div>
        <div class="row">
          <div class="extra">
          </div>
        </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <script src="Scripts/teaser.js"></script>
    <script>
      document.body.classList.add('js-loading');
      var vid = document.getElementById("smoke");
      vid.playbackRate = 1.5;
  
      window.addEventListener("load", showPage);

      function showPage() {
      document.body.classList.remove('js-loading');
      setTimeout(function(){
          vid.play();
        }, 5000);
      }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script>
      function check() {
        var name = document.getElementById("#formNameIn").value;
        var email = document.getElementById("#formEmailIn").value;
        var phone = document.getElementById("#formPhoneIn").value;
        var company = document.getElementById("#formCompanyIn").value;
        var message = document.getElementById("#formMessageIn").value;
        var dataString = 'name='+name+'&email='+email+'&phone='+'&company='+'&message='+message;
    
        $.ajax({
          url:'form.php',
          type:'post',
          data:dataString,
          cache:false,
          success:function(response){
              // location.reload(); 
          }
        });
        return false;
      }
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>