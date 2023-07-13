<!-- Realizat de Mihaescu Tudor -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Realizat de Mihaescu Tudor -->
<head>
  <link rel="stylesheet" href="Css\style_contact.css">
  <meta charset="utf-8">
  <title></title>
    <script type="text/javascript" src="Scripts\audio.js"></script>
</head>
<!-- Realizat de Mihaescu Tudor -->
<body>

  <section class="Contact">
    <img class="Titlu1" src="Svg\Contact.svg" alt="">
    <img class="Titlu2" src="Svg\Contact.svg" alt="">
    <div class="Social">
      <ul>

        <li>
          <a href="https://www.instagram.com/tudor_mihaescu/">
            <img src="Svg\Icon - Instagram.svg" alt="">
          </a>
        </li>

        <li>
          <a href="https://www.facebook.com/tudor.tudorescu.9/">
            <img src="Svg\Icon - Facebook-f.svg" alt="">
          </a>
        </li>

        <li>
          <a href = "mailto:t.mihaescu.2003@gmail.com?subject=Feedback despre site">
            <img src="Svg\Icon - Share.svg" alt="">
          </a>
        </li>
      </ul>
    </div>
<!-- Realizat de Mihaescu Tudor -->
    <div class="Formular_Contact">
      <form  method="POST" >
        <div class="Sub">
          <label><span>N</span>UME</label>
          <input name = "nume" required minlength="3" maxlength="30" />
        </div>
        <div class="Sub">
          <label><span>P</span>RENUME</label>
          <input name = "prenume" required minlength="3" maxlength="30" />
        </div>
        <div class="Sub">
          <label><span>E</span>MAIL</label>
          <input name = "email" required minlength="3" maxlength="50" />
        </div>
        <div class="Sub">
          <label><span>R</span>ASA</label>
          <input style="width: 45%; margin-right: 45%;" name = "rasa" required minlength="3" maxlength="30" />
        </div>
          <div class="Check_Button">
          <label><span>M</span>ASCUL</label> <br>
          <input required type="radio" name="gen" value="M">
        </div>
        <div class="Check_Button">
          <label><span>F</span>EMELA</label><br>
          <input required type="radio" name="gen" value="F">
          <div class="rad-design"></div>

        </div>
        <div class="Sub">
          <label><span>F</span>EEDBACK</label>
          <textarea name = "feedback" required rows="3" maxlength="240"></textarea>
        </div>
        <button class="Buton_Nume animate__animated animate__jackInTheBox animate__delay-5s" type="submit" name="Submit">Trimite</button>
    </div>
<!-- Realizat de Mihaescu Tudor -->
    </form>
    </div>
  </section>


</body>
<!-- Realizat de Mihaescu Tudor -->
</html>
<?php
($con = mysqli_connect("localhost", "root", "")) or die("cannot connect");
mysqli_select_db($con, "site_caini");

if (isset($_POST["Submit"])) {
    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $email = $_POST["email"];
    $rasa = $_POST["rasa"];
    $gen = $_POST["gen"];
    $feedback = $_POST["feedback"];

    if (empty($nume)) {
        echo '<script type="text/javascript">';
        echo ' alert("Numele este invalid")';
        echo "</script>";

    }
    if (empty($prenume)) {
        echo '<script type="text/javascript">';
        echo ' alert("Prenumele este invalid")';
        echo "</script>";
    }
    if (empty($email) || strpos($email, "@") == 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Email-ul este invalid")';
        echo "</script>";
    }
    if (empty($gen)) {
        echo '<script type="text/javascript">';
        echo ' alert("Nu ai adaugat genul rasei")';
        echo "</script>";
    }
    if (empty($rasa)) {
        echo '<script type="text/javascript">';
        echo ' alert("Rasa este invalida")';
        echo "</script>";
    }

    else {
        $result = mysqli_query(
            $con,
          "INSERT INTO contact (NUME, PRENUME, EMAIL, RASA, GEN, FEEDBACK) VALUES ('$nume', '$prenume', '$email', '$rasa', '$gen', '$feedback')"
        );

        echo '<script type="text/javascript">';
        echo ' alert("DATELE AU FOST INTRODUSE")';
        echo "</script>";
    }
}
?>
