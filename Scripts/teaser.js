

// var anim = document.getElementById("anim");
var button1 = document.getElementById("buttonDown2");
var button2 = document.getElementById("buttonDown3");

buttonFunc();
// myFunction();
// animateBee();
document.getElementsByTagName("BODY")[0].onresize = function(){buttonFunc()};

// function animateBee(){
  // if(screen.width < 992){
    // var element = document.getElementById("bzzz");
    // element.setAttribute("src","#");
    // element.style.opacity = 0;
    // var bee = new Image();
    // var beeDiv = document.createElement("div");
    // bee.src = "Assets/BeeLogo.png";
    // bee.alt = "Bee logo";
    // bee.setAttribute("class", "img-fluid");
    // beeDiv.setAttribute("class", "col-12 col-lg-6 offset-lg-1");
    // beeDiv.id = "beeLogo";
    // bee.style.animation = "logoAnim 1.5s linear 2.5s forwards";
  // }
// }

// function myFunction(){
//   if(screen.width < 576){
//     anim.style.transform = "scale(" + (screen.width/800) + ")";
//   }
// }

function stopScroll() {
  document.body.classList.add("noScroll");
}

function buttonFunc(){
  if(screen.width > 767){
    button1.disabled = true;
    button2.disabled = true;
    button1.style.opacity = "0";
    button2.style.opacity = "0";
  }else{
    button1.disabled = false;
    button2.disabled = false;
    button1.style.opacity = "1";
    button2.style.opacity = "1";
  }
}
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".smoothBut").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
var animateHTML = function() {
  var elems;
  var windowHeight;
  function init() {
    elems = document.querySelectorAll('.hidden');
    // smoke = document.getElementById("formSmoke");
    logo = document.getElementById("formLogo");
    windowHeight = window.innerHeight;
    addEventHandlers();
    checkPosition();
  }
  function addEventHandlers() {
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);
  }
  function checkPosition() {
    for (var i = 0; i < elems.length; i++) {
      var positionFromTop = elems[i].getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        elems[i].className = elems[i].className.replace(
          'hidden',
          'fade-in'
        );
      }
    }
    // var positionFromTop = smoke.getBoundingClientRect().top;
    //   if (positionFromTop - windowHeight <= 0) {
    //     smoke.className = smoke.className.replace(
    //       'hidden',
    //       'fade-in'
    //     );
    //     smoke.autoplay = true;
    //     smoke.playbackRate = 1.5;
    //   }
      var positionFromTop = logo.getBoundingClientRect().top;
      if (positionFromTop - windowHeight <= 0) {
        logo.className = logo.className.replace(
          'hidden2',
          'fade-in2'
        );
      }
  }
  return {
    init: init
  };
};
animateHTML().init();

document.body.classList.add('js-loading');
var vid = document.getElementById("smoke");
vid.playbackRate = 1.5;

window.addEventListener("load", showPage);

function showPage() {
document.body.classList.remove('js-loading');
setTimeout(function(){
    vid.play();
  }, 5000);
}


// --------------------------------------------------------form function-------------------------------------------------
$(function() {
  // Get the form.
  var form = $('#obrazec');
  // Get the messages div.
  var formMessages = $('#successMessage');
  // Set up an event listener for the contact form.
  $(form).submit(function(event) {
    // Stop the browser from submitting the form.
    event.preventDefault();
    // Serialize the form data.
    var formData = $(form).serialize();
    // Submit the form using AJAX.
    $.ajax({
      type: 'POST',
      url: $(form).attr('action'),
      data: formData
    }).done(function(response) {
        // Make sure that the formMessages div has the 'success' class.
        $(successMessage).removeClass('error');
        $(successMessage).addClass('success');
        // Set the message text.
        $(successMessage).text(response);
        // Clear the form.
        $('#formFName').val('');
        $('#formLName').val('');
        $('#formEmail').val('');
        $('#formPhone').val('');
        $('#formCompany').val('');
        $('#formMessage').val('');
        $(formFnameError).text('');
        $(formLnameError).text('');
        $(formEmailError).text('');
        $(formMessageError).text('');
      }).fail(function(data) {
        var jsonRet = data.responseText;
        var jsonObject= eval('('+jsonRet+')');
        // Make sure that the successMessage div has the 'error' class.
        $(successMessage).removeClass('success');
        $(successMessage).addClass('error');
        // Set the error messages.
        $(successMessage).text(jsonObject.success);
        $(formFnameError).text(jsonObject.Fname);
        $(formLnameError).text(jsonObject.Lname);
        $(formEmailError).text(jsonObject.email);
        $(formMessageError).text(jsonObject.message);
        // $(successMessage).text('Oops! Prišlo je do napake in sporočilo ni bilo poslano.');
    });
  });
});

// window.onload = setTimeout(function(){
//     vid.play();
//   }, 5000);

// function changeGif(){
//   // Check if Mobile client
//   var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|IEMobile)/);
//   var gif = new Image();
//   if(isMobile){
//     gif.src = "Assets/smokeGif.gif";
//     gif.id = "smoke";
//     document.getElementById("smokeHolder").remove();
//     document.getElementById("smokeHolder").appendChild(gif);
//   }
// }
// changeGif().init();
