
// $("#siteform").html('<object data="index12.html"/>');

$(document).keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){
      enterSite();
  }
});

function enterSite(){
  var input = $("#myAge").val();
  if(input === ""){
    $(".error").html("Prosim vnesite starost");
  }else if(input >= 18){
    $("#siteform").html('<object data="index12.html"/>');
  }else{
    $(".error").html("Niste dovolj stari");
  }
}