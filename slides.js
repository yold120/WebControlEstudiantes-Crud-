let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);



function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform 2.8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },5000)
    }
}

//funciones para las pestañas
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



document.getElementById("navbar").style.padding = "15% 0%";
document.getElementById("imagen1").style.position = "fixed" ;


//document.getElementById("imagen1").style.top = "100px" ;
document.getElementById("imagen1").style.transition = "0.4s" ;

//funciones para la animacion de la ventana


//funcion para el sroll del mouse (*animacion de navbar y logo*)
window.onscroll = function() {scrollFunction()};
function scrollFunction() {

  //rueda del mouse atras
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    document.getElementById("navbar").style.padding = "0% 0%";
    document.getElementById("imagen1").style.paddingTop = "5px";
    document.getElementById("imagen1").style.paddingLeft = "5px";
    document.getElementById("imagen1").style.transition = "0.4s";

    document.getElementById("imagen1").style.marginTop = "0px" ;
    document.getElementById("imagen1").style.marginLeft = "70px";
    document.getElementById("imagen1").style.width = "100px";
    document.getElementById("imagen1").style.height = "40px";


    //document.getElementById("imagen1").style.width = "9%";
    //document.getElementById("imagen1").style.height = "6%" ;
    document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 0, 0.2)";
    document.getElementById("navbar-right").style.visibility = "visible";


    //rueda del mouse adelante
  } 


  else {

    document.getElementById("navbar").style.padding = "10% 0px";
    document.getElementById("imagen1").style.position ="fixed" ;

    document.getElementById("imagen1").style.marginTop = "100px" ;
    document.getElementById("imagen1").style.transition = "0.4s" ;
    document.getElementById("imagen1").style.width = "50%" ;
    document.getElementById("imagen1").style.height = "35%" ;



    document.getElementById("navbar").style.backgroundColor = "rgba(0, 0, 0, 0.0)";

    document.getElementById("navbar-right").style.visibility = "hidden";




  }
}



//propiedades del perico




