var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 14500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
$('.threetypes span').on('click', function() {
    $('.threetypes span').removeClass('active');
    $(this).addClass('active');

    $('.typediv').hide();

    var index = $(this).index();
    $('.typediv').eq(index).show();
});


  $('form').submit(function(event) {
      event.preventDefault(); // This prevents the default form submission behavior

      // Get form data
      var formData = $(this).serialize();
      console.log(formData); // You can log it to the console to see the form data
      
      // Your custom logic or actions here
      
      // For example, you can send the form data via AJAX
      $.ajax({
          url: 'submit_form.php',
          type: 'POST',
          data: formData,
          success: function(response) {
              // Handle successful response
              console.log('Form data submitted successfully:', response);
          },
          error: function(xhr, status, error) {
              // Handle errors
              console.error('Error submitting form data:', error);
          }
      });
  });
