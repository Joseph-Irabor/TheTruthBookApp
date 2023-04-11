$(document).ready(function () {
 $('#intro-page').hide();

 $('#btn-splash').click(function (e) { 
  e.preventDefault();
  $('#splash-screen').fadeOut(800);
  $('#intro-page').fadeIn(1000);


  
 });
  
  
  
  
  
  
  
  // window.location.href = "../intro-page.html";
});