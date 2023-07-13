<?php
($con = mysqli_connect("localhost", "root", "")) or die("cannot connect");
mysqli_select_db($con, "site_caini");

if (isset($_POST["type"])) {
    $rating = $_POST["type"];
} else {
    $rating = rand(1, 5);
}

if (isset($_POST["lit"])) {
    $litera = $_POST["lit"];
      if (!ctype_alpha($litera)){
          $litera = chr(rand(65, 90));
      }
    $litera = strtoupper($litera);

} else {
    $litera = chr(rand(65, 90));
}

$sql = "SELECT * FROM nume WHERE RATING = $rating AND NUME LIKE '$litera%' ORDER BY RAND() LIMIT 2;";
$result = mysqli_query($con, $sql);
$test = mysqli_fetch_assoc($result);
if (!isset($test["NUME"])){
  $test["NUME"] = 'EROARE';
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="Css\style_nume.css">
  <link rel="stylesheet" href="Css\style_loader2.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/9.3.2/math.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="Scripts\script_loader2.js"></script>
  <script src="Scripts\node_modules\jquery\dist\jquery.min.js"></script>
  <script scr="Scripts\node_modules\wow.js\dist\wow.min.js"></script>
  <script type="text/javascript" src="Scripts\audio.js"></script>
</head>
<body>
<!-- Realizat de Mihaescu Tudor -->
  <section class="Loader">
    <span class="Loader1"><span class="Loader2"></span></span>
  </section>
<!-- Realizat de Mihaescu Tudor -->
  <section class="Part_3">
    <div class="Background_Text">
      <p>
        <span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span>
      </p>
      <p>
        <span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span>
      </p>
      <p>
        <span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span>
      </p>
      <p>
        <span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span><span>N</span><span>U</span><span>M</span><span>E</span>

      </p>
    </div>
    <img style = "width:100%"src="Svg\Nume.svg" alt="">

    <div class="Formular">
      <form method="POST" >
        <h1 class="animate__animated animate__bounceIn animate__fast">
          <?php echo htmlspecialchars($test["NUME"]); ?>
        </h1>
        <div class="Rating">

          <input id="radio1" type="radio" name="rating" value="5">

          <label for="radio1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="12.5" viewBox="0 0 25 12.5">
              <path id="Icon_awesome-bone" data-name="Icon awesome-bone"
                d="M23.394,12.553A2.906,2.906,0,0,0,25,9.954v-.3a2.906,2.906,0,0,0-5.663-.919c-.3.9-.453,1.763-1.489,1.763H7.151c-1.07,0-1.234-1-1.489-1.763A2.906,2.906,0,0,0,0,9.656v.3a2.906,2.906,0,0,0,1.606,2.6.5.5,0,0,1,0,.894A2.906,2.906,0,0,0,0,16.046v.3a2.906,2.906,0,0,0,5.662.919c.3-.9.453-1.763,1.489-1.763h10.7c1.07,0,1.234,1,1.489,1.763A2.906,2.906,0,0,0,25,16.344v-.3a2.905,2.905,0,0,0-1.606-2.6A.5.5,0,0,1,23.394,12.553Z"
                transform="translate(0 -6.75)" fill="#fffcf2" />
            </svg>
          </label>

          <input id="radio2" type="radio" name="rating" value="4">

          <label for="radio2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="12.5" viewBox="0 0 25 12.5">
              <path id="Icon_awesome-bone" data-name="Icon awesome-bone"
                d="M23.394,12.553A2.906,2.906,0,0,0,25,9.954v-.3a2.906,2.906,0,0,0-5.663-.919c-.3.9-.453,1.763-1.489,1.763H7.151c-1.07,0-1.234-1-1.489-1.763A2.906,2.906,0,0,0,0,9.656v.3a2.906,2.906,0,0,0,1.606,2.6.5.5,0,0,1,0,.894A2.906,2.906,0,0,0,0,16.046v.3a2.906,2.906,0,0,0,5.662.919c.3-.9.453-1.763,1.489-1.763h10.7c1.07,0,1.234,1,1.489,1.763A2.906,2.906,0,0,0,25,16.344v-.3a2.905,2.905,0,0,0-1.606-2.6A.5.5,0,0,1,23.394,12.553Z"
                transform="translate(0 -6.75)" fill="#fffcf2" />
            </svg>
          </label>

          <input id="radio3" type="radio" name="rating" value="3">

          <label for="radio3"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="12.5" viewBox="0 0 25 12.5">
              <path id="Icon_awesome-bone" data-name="Icon awesome-bone"
                d="M23.394,12.553A2.906,2.906,0,0,0,25,9.954v-.3a2.906,2.906,0,0,0-5.663-.919c-.3.9-.453,1.763-1.489,1.763H7.151c-1.07,0-1.234-1-1.489-1.763A2.906,2.906,0,0,0,0,9.656v.3a2.906,2.906,0,0,0,1.606,2.6.5.5,0,0,1,0,.894A2.906,2.906,0,0,0,0,16.046v.3a2.906,2.906,0,0,0,5.662.919c.3-.9.453-1.763,1.489-1.763h10.7c1.07,0,1.234,1,1.489,1.763A2.906,2.906,0,0,0,25,16.344v-.3a2.905,2.905,0,0,0-1.606-2.6A.5.5,0,0,1,23.394,12.553Z"
                transform="translate(0 -6.75)" fill="#fffcf2" />
            </svg>
          </label>

          <input id="radio4" type="radio" name="rating" value="2">

          <label for="radio4"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="12.5" viewBox="0 0 25 12.5">
              <path id="Icon_awesome-bone" data-name="Icon awesome-bone"
                d="M23.394,12.553A2.906,2.906,0,0,0,25,9.954v-.3a2.906,2.906,0,0,0-5.663-.919c-.3.9-.453,1.763-1.489,1.763H7.151c-1.07,0-1.234-1-1.489-1.763A2.906,2.906,0,0,0,0,9.656v.3a2.906,2.906,0,0,0,1.606,2.6.5.5,0,0,1,0,.894A2.906,2.906,0,0,0,0,16.046v.3a2.906,2.906,0,0,0,5.662.919c.3-.9.453-1.763,1.489-1.763h10.7c1.07,0,1.234,1,1.489,1.763A2.906,2.906,0,0,0,25,16.344v-.3a2.905,2.905,0,0,0-1.606-2.6A.5.5,0,0,1,23.394,12.553Z"
                transform="translate(0 -6.75)" fill="#fffcf2" />
            </svg>
          </label>

          <input id="radio5" type="radio" name="rating" value="1">

          <label for="radio5"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="12.5" viewBox="0 0 25 12.5">
              <path id="Icon_awesome-bone" data-name="Icon awesome-bone"
                d="M23.394,12.553A2.906,2.906,0,0,0,25,9.954v-.3a2.906,2.906,0,0,0-5.663-.919c-.3.9-.453,1.763-1.489,1.763H7.151c-1.07,0-1.234-1-1.489-1.763A2.906,2.906,0,0,0,0,9.656v.3a2.906,2.906,0,0,0,1.606,2.6.5.5,0,0,1,0,.894A2.906,2.906,0,0,0,0,16.046v.3a2.906,2.906,0,0,0,5.662.919c.3-.9.453-1.763,1.489-1.763h10.7c1.07,0,1.234,1,1.489,1.763A2.906,2.906,0,0,0,25,16.344v-.3a2.905,2.905,0,0,0-1.606-2.6A.5.5,0,0,1,23.394,12.553Z"
                transform="translate(0 -6.75)" fill="#fffcf2" />
            </svg>
          </label>
        </div>
        <div class="Litera">
          <input type="text" name="lit" placeholder="Introdu una sau mai multe litere">
        </div>
        <button class="Buton_Nume animate__animated animate__jackInTheBox animate__delay-5s" type="submit" name="button">GENEREAZA</button>
      </form>
    </div>
  </section>
</body>
<!-- Realizat de Mihaescu Tudor -->
</html>
