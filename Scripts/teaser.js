
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
window.smoothScroll = function(target) {
  var scrollContainer = target;
  do { //find scroll container
      scrollContainer = scrollContainer.parentNode;
      if (!scrollContainer) return;
      scrollContainer.scrollTop += 1;
  } while (scrollContainer.scrollTop == 0);

  var targetY = 0;
  do { //find the top of target relatively to the container
      if (target == scrollContainer) break;
      targetY += target.offsetTop;
  } while (target = target.offsetParent);

  scroll = function(c, a, b, i) {
      i++; if (i > 30) return;
      c.scrollTop = a + (b - a) / 30 * i;
      setTimeout(function(){ scroll(c, a, b, i); }, 25);
  }
  // start scrolling
  scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}

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
        $('#formName').val('');
        $('#formEmail').val('');
        $('#formPhone').val('');
        $('#formCompany').val('');
        $('#formMessage').val('');
      }).fail(function(data) {
        // Make sure that the successMessage div has the 'error' class.
        $(successMessage).removeClass('success');
        $(successMessage).addClass('error');
        // Set the message text.
        if (data.responseText !== '') {
            $(successMessage).text(data.responseText);
        } else {
            $(successMessage).text('Oops! An error occured and your message could not be sent.');
        }
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