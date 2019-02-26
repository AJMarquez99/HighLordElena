var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  if ( document.getElementsByClassName("mySlides").length > 0) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
}

//Form Validation
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function formValidation() {
  let inputBlock = $(this);
  let inputName = inputBlock.attr("id");
  debugger;
  switch (inputName) {
    case "name":
      if ( !inputBlock.val() ) {
        inputBlock[0].style.border = "2px solid red";
        inputBlock[0].style.boxShadow = "0px 0px 5px red";
      } else {
        inputBlock[0].style.textTransform = "Capitalize";
        inputBlock[0].style.border = "2px solid #008000";
        inputBlock[0].style.boxShadow = "0px 0px 5px #009900";
      }
      break;
    case "phone_number":
      if ( !inputBlock.val() || inputBlock.val().length != 9 ) {
        inputBlock[0].style.border = "2px solid red";
        inputBlock[0].style.boxShadow = "0px 0px 5px red";
      } else {
        inputBlock[0].style.border = "2px solid #008000";
        inputBlock[0].style.boxShadow = "0px 0px 5px #009900";
      }
      break;
    case "email":
      if ( !inputBlock.val() || !validateEmail( inputBlock.val() )  ) {
        inputBlock[0].style.border = "2px solid red";
        inputBlock[0].style.boxShadow = "0px 0px 5px red";
      } else {
        inputBlock[0].style.border = "2px solid #008000";
        inputBlock[0].style.boxShadow = "0px 0px 5px #009900";
      }
      break;
  }
}

$("input").blur(formValidation);
