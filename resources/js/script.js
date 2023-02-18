
const bars = document.getElementById("bars");
const navbar = document.getElementById("nav-link-mobile");
var isOpen = false;
bars.addEventListener("click",()=>{
    if(isOpen == false)
    {
        navbar.style.display ="block";
        isOpen = true;
    }else
    {
        navbar.style.display ="none";
        isOpen = false;
    }
});