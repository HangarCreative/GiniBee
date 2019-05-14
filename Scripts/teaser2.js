
// $("#siteform").html('<object data="index12.html"/>');

// $(document).keypress(function(event){
//   var keycode = (event.keyCode ? event.keyCode : event.which);
//   if(keycode == '13'){
//       enterSite();
//   }
// });

function errorSite(){
    $(".error").html('Niste dovol stari za vstop');
}

function enterSite(){
  $("#siteform").html('<object data="index12.html"/>');
}