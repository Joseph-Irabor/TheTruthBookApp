$(document).ready(function () {
 $('#intro-page, #slide-2, #slide-3').hide();

 $('#btn-splash').click(function (e) { 
  e.preventDefault();
  $('#splash-screen').fadeOut(800);
  window.location.replace("../login.html");



 });
  
  
  
  // window.location.href = "../intro-page.html";
});