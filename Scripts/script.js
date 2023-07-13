var Src_Png = "Png/";
var Src_Svg = "Subpagini/"
var Png = ".png";
var Html = ".html";
var Litere = "ABCDEFGHKLMNOPRSTVWY";
var Numere = [5, 31, 46, 6, 3, 3, 3, 2, 3, 3, 4, 1, 3, 8, 1, 11, 3, 1, 5, 1];
var k = 0;
var Aux = 1;
var String = "";
var Iframe = "";
var Counter = "";
var EffectsEnd = 'animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd';
/// Realizat de Mihaescu Tudor
$("rase.html").ready(function() {

  $("#Img_animation").addClass("animate__animated animate__fadeInUp faster").one(EffectsEnd, function() {
    $("#Img_animation").removeClass("animate__animated animate__fadeInUp faster");
  });
  // BUTON - Inainte
  $("#Inainte").click(function() {
    Img = "";
    Counter = "";
    Iframe = "";
    if (Aux == Numere[k]) {
      Aux = 1;
    } else {
      Aux += 1;
    }
    if (Aux < 10) {
      Counter = Counter.concat("0", Aux.toString(), "/")
    } else {
      Counter = Counter.concat(Aux.toString(), "/")
    }
    if (Numere[k] < 10) {
      Counter = Counter.concat("0", Numere[k].toString())
    } else {
      Counter = Counter.concat(Numere[k].toString())
    }
    document.getElementById("Counter").innerHTML = Counter;
    Iframe = Iframe.concat(Src_Svg, Litere[k], Aux.toString(), Html);
    Img = Img.concat(Src_Png, Litere[k], Aux.toString(), Png);
    $("#Img_animation").addClass("animate__animated animate__fadeOutDown faster").one(EffectsEnd, function() {
      $("#Img_animation").removeClass("animate__animated animate__fadeOutDown faster");
      $("#Img_1").attr("src", Img);
      $("#Img_animation").addClass("animate__animated animate__fadeInUp faster").one(EffectsEnd, function() {
        $("#Img_animation").removeClass("animate__animated animate__fadeInUp faster");
      });
    });
    $("#Iframe").attr("src", Iframe);
  });
/// Realizat de Mihaescu Tudor
  // BUTON - Inapoi
  $("#Inapoi").click(function() {
    Img = "";
    Iframe = "";
    Counter = "";
    if (Aux == 1) {
      Aux = Numere[k];
    } else {
      Aux -= 1;
    }
    if (Aux < 10) {
      Counter = Counter.concat("0", Aux.toString(), "/")
    } else {
      Counter = Counter.concat(Aux.toString(), "/")
    }
    if (Numere[k] < 10) {
      Counter = Counter.concat("0", Numere[k].toString())
    } else {
      Counter = Counter.concat(Numere[k].toString())
    }
    document.getElementById("Counter").innerHTML = Counter;
    Iframe = Iframe.concat(Src_Svg, Litere[k], Aux.toString(), Html);
    Img = Img.concat(Src_Png, Litere[k], Aux.toString(), Png);
    $("#Img_animation").addClass("animate__animated animate__fadeOutDown faster").one(EffectsEnd, function() {
      $("#Img_animation").removeClass("animate__animated animate__fadeOutDown faster");
      $("#Img_1").attr("src", Img);
      $("#Img_animation").addClass("animate__animated animate__fadeInUp faster").one(EffectsEnd, function() {
        $("#Img_animation").removeClass("animate__animated animate__fadeInUp faster");
      });
    });
    $("#Iframe").attr("src", Iframe);
  });

/// Realizat de Mihaescu Tudor
  //BUTON - Jos
  $("#Jos").click(function() {
    Aux = 1;
    Img = "";
    Iframe = "";
    Counter = "";
    if (k == 19) {
      k = 0;
    } else {
      k += 1;
    }
    if (Aux < 10) {
      Counter = Counter.concat("0", Aux.toString(), "/")
    } else {
      Counter = Counter.concat(Aux.toString(), "/")
    }
    if (Numere[k] < 10) {
      Counter = Counter.concat("0", Numere[k].toString())
    } else {
      Counter = Counter.concat(Numere[k].toString())
    }
    document.getElementById("Counter").innerHTML = Counter;
    document.getElementById("ContentAlfabet").innerHTML = Litere[k];
    Iframe = Iframe.concat(Src_Svg, Litere[k], Aux.toString(), Html);
    Img = Img.concat(Src_Png, Litere[k], Aux.toString(), Png);
    $("#Img_animation").addClass("animate__animated animate__fadeOutDown faster").one(EffectsEnd, function() {
      $("#Img_animation").removeClass("animate__animated animate__fadeOutDown faster");
      $("#Img_1").attr("src", Img);
      $("#Img_animation").addClass("animate__animated animate__fadeInUp faster").one(EffectsEnd, function() {
        $("#Img_animation").removeClass("animate__animated animate__fadeInUp faster");
      });
    });
    $("#Iframe").attr("src", Iframe);
  });


/// Realizat de Mihaescu Tudor
    //BUTON - Sus
    $("#Sus").click(function() {
      Aux = 1;
      Img = "";
      Iframe = "";
      Counter = "";
      if (k == 0) {
        k = 19;
      } else {
        k -= 1;
      }
      if (Aux < 10) {
        Counter = Counter.concat("0", Aux.toString(), "/")
      } else {
        Counter = Counter.concat(Aux.toString(), "/")
      }
      if (Numere[k] < 10) {
        Counter = Counter.concat("0", Numere[k].toString())
      } else {
        Counter = Counter.concat(Numere[k].toString())
      }
      document.getElementById("Counter").innerHTML = Counter;
      document.getElementById("ContentAlfabet").innerHTML = Litere[k];
      Iframe = Iframe.concat(Src_Svg, Litere[k], Aux.toString(), Html);
      Img = Img.concat(Src_Png, Litere[k], Aux.toString(), Png);
      $("#Img_animation").addClass("animate__animated animate__fadeOutDown faster").one(EffectsEnd, function() {
        $("#Img_animation").removeClass("animate__animated animate__fadeOutDown faster");
        $("#Img_1").attr("src", Img);
        $("#Img_animation").addClass("animate__animated animate__fadeInUp faster").one(EffectsEnd, function() {
          $("#Img_animation").removeClass("animate__animated animate__fadeInUp faster");
        });
      });
      $("#Iframe").attr("src", Iframe);
    });

});
