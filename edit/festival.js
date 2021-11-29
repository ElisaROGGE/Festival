// window.onscroll = function(){
//     if(document.documentElement.scrollTop > 80){
//         document.querySelector(".nav").style.background = "black";
//     }else{
//         document.querySelector(".nav").style.background.opacity = 0;
//     }
// }

//Boutons navigation carousel.
var counter = 1;
setInterval(function(){
    document.querySelector("#radio" + counter).checked = true;
    counter++;
    if(counter > 4){
        counter =1;
    }
}, 5000);

//Décompte.
var countDownDate = new Date("Jul 27, 2022 16:0:0").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.querySelector("#countdown").innerHTML = days + "j " + hours + "h " + minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    document.querySelector("#countdown").innerHTML = "EXPIRED";
  }
}, 1000);

//Responsive timeline
function mediashow(){
  var show = document.getElementsByClassName("tl-item");
  for (const item of show) {
    item.addEventListener("click", ()=>{
      item.classList.toggle("show");
      var titre = item.querySelector(".tl-year");
      titre.classList.toggle("hide");
    })
  }
}
mediashow();
