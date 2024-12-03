//Scroll Up
document.getElementById("button-up").addEventListener("click", scrollUp);
function scrollUp(){
    var currentScroll= document.documentElement.scrollTop;
    if(currentScroll > 0){
        window.requestAnimationFrame(scrollUp);
        window.scrollTo (0, currentScroll - (currentScroll / 10));
        buttonUp.style.trasnform = "scale(1)";
    }
}

buttonUp= document.getElementById("button-up");

window.onscroll=function(){
    var scroll=document.documentElement.scrollTop;
    if(scroll > 500){
        buttonUp.style.trasnform = "scale(1)";
    }else if(scroll < 500){
        buttonUp.style.trasnform = "scale(0)";
    }
}