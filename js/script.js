// Add a 'submit' event listener to the form with the ID 'subscription-form'
document.getElementById('subscription-form').addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
  
    // Show a thank you message when the form is submitted
    alert('Thank you for subscribing!');
  });
  