$(document).ready(function () {
 $('#intro-page').hide();

 $('#btn-splash').click(function (e) { 
  e.preventDefault();
  $('#splash-screen').fadeOut(800);
  window.location.replace("../test.html");


  
 });
  
  
  
  
  
  
  
  // window.location.href = "../intro-page.html";
});