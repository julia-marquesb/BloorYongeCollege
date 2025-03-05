document.addEventListener('DOMContentLoaded', function() {
  // Select all links with the class 'apply-promo'
  const applyPromoButtons = document.querySelectorAll('.apply-promo');

  // Add a 'click' event listener to each of the links
  applyPromoButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      // Prevent the default behavior of the link
      event.preventDefault();

      // Show the message 'Coupon Copied!'
      alert('Coupon Copied!');
    });
  });
});
