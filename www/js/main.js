function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
//         Slider  
var slider = document.getElementById("mySlide");
var output = document.getElementById("value");
output.innerHTML = slider.value;
slider.oninput = function() {
  output.innerHTML = this.value;
}
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


var cl=document.getElementsByTagName("body");   
window.onclick=function(event){
     if (event.target == cl){
         document.getElementById("mySign").style.display="none";
      }                       
}
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
    
    //  ----------- overlay javascript ---------------
    
function openSign() {
    document.getElementById("mySign").style.display = "block";
}

function closeSign() {
    document.getElementById("mySign").style.display = "none";
}
    
    
function openPage(pageName,elmnt,color) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
}
function openNav() {
    document.getElementById("mySidenav").style.width = "160px";
    document.getElementById("main").style.marginLeft = "160px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
            function openfilter(){
                document.getElementById("mySidefilter").style.width="20em";
                document.getElementById("hfilter").style.marginLeft="0";
            }
             function closefilter(){
                document.getElementById("mySidefilter").style.width="0";
                document.getElementById("hfilter").style.marginLeft="0";
            }
            


