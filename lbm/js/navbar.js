var menubar = document.querySelector('.menubar');
 window.addEventListener('scroll',scrollFunction);
 function scrollFunction(){
 if(window.scrollY > 150){
 menubar.classList.add('active');
 }
 else{
 menubar.classList.remove('active');
 }
 }
const icon = document.querySelector(".navicon")
const navLink = document.querySelector(".navlink")
icon.addEventListener('click',()=>{
navLink.classList.toggle('mobilemenu')
})
