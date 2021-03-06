function createGalleryArrows(arrowDirection) {
  let arrow = document.createElement("button");
  let direction = document.createTextNode(arrowDirection);
  arrow.append(direction);
  return arrow;
}

function createGallery() {
  let galleryContainer = $("#slideshow_container");
  let rightArrow = createGalleryArrows("›");
  let leftArrow = createGalleryArrows("‹");
  galleryContainer.append(rightArrow);
  galleryContainer.append(leftArrow);

  rightArrow.classList.add("next");
  leftArrow.classList.add("prev");

  $('.prev').click(function() {
    plusSlides(-1);
  });
  $('.next').click(function() {
    plusSlides(1);
  });

  for ( let galleryImage of $(".mySlides") ) {
    let imgBlock = document.createElement("img");
    let imgSrc = galleryImage.getAttribute("data-img-src");
    imgBlock.setAttribute("src", imgSrc);
    galleryImage.append(imgBlock);
  }
}

//Gallery Controls
let slideIndex = 1;


// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = $(".mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }
  slides[slideIndex-1].classList.add("active");
}

$(".mySlides").ready( function() {
  if ( $(".mySlides").length > 0 ) {

    showSlides(slideIndex);
    createGallery();
  }
});

//Form Validation
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function formValidation() {
  let formOk = true;
  let errorMessage = "";
  for ( let inputBlock of $("input") ) {
    let inputValueType = inputBlock.id;
    switch (inputValueType) {
      case "name":
        if ( !inputBlock.value ) {
          formOk = false;
          errorMessage += "Please Enter your Name\n";
        }
        break;
      case "phone_number":
        if ( !inputBlock.value || inputBlock.value.length != 14 ) {
          formOk = false;
          errorMessage += "Please Enter a valid Phone Number\n";
        }
        break;
      case "email":
        if ( !inputBlock.value || !validateEmail( inputBlock.value )  ) {
          formOk = false;
          errorMessage += "Please Enter a valid Email\n";
        }
        break;
    }
  }
  if ( !$("#content").val() ) {
    formOk = false;
    errorMessage += "Were you planning on typing a message?\n";
  }
  if ( formOk == false ) {
    event.preventDefault();
    alert(errorMessage);
  }
}

$("input[name='phone_number']").keyup(function() {
  var val_old = $(this).val();
  var val = val_old.replace(/\D/g, '');
  var len = val.length;
  if (len >= 1)
    val = '(' + val.substring(0);
  if (len >= 3)
    val = val.substring(0, 4) + ') ' + val.substring(4);
  if (len >= 6)
    val = val.substring(0, 9) + '-' + val.substring(9);
	if (len > 10)
		val = val.substring(0, 14);
  if (val != val_old)
    $(this).focus().val('').val(val);
});

$("input[name='phone_number']").on("keypress keyup blur",function (event) {
	$(this).val($(this).val().replace(/[^\d()-\s].+/, ""));
	if ((event.which < 48 || event.which > 57)) {
		 event.preventDefault();
	}
	if ($(this).val().length > 13) {
		 event.preventDefault();
	}
});

$("input[name='name']").on("keypress keyup blur",function (event) {
	$(this).val($(this).val().replace(/[^A-Za-z'-\s]+/, ""));
  let inputValue = event.which;
  if ( !(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0 && inputValue != 45 && inputValue != 39)) {
      event.preventDefault();
  }
  if ($(this).val().length > 30 ) {
    event.preventDefault();
  }
});

$("#contact-form").submit( formValidation );
