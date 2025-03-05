document.addEventListener('DOMContentLoaded', function () {
  // Select all star elements and the rating input field
  const stars = document.querySelectorAll('.stars-input .star');
  const ratingInput = document.getElementById('rating');

  // Add click event listeners to each star
  stars.forEach(star => {
    star.addEventListener('click', function () {
      const value = this.getAttribute('data-value'); // Get the value of the clicked star
      ratingInput.value = value; // Set the rating input field to this value
      updateStars(value); // Update the visual display of stars
    });
  });

  // Function to update the star display based on the current rating value
  function updateStars(value) {
    stars.forEach(star => {
      if (star.getAttribute('data-value') <= value) {
        star.classList.add('filled'); // Add 'filled' class to stars up to the current rating
      } else {
        star.classList.remove('filled'); // Remove 'filled' class from stars beyond the rating
      }
    });
  }

  // Form submission handler
  document.getElementById('review-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Get values from the form fields
    const username = document.getElementById('username').value;
    const review = document.getElementById('review').value;
    const rating = ratingInput.value;

    // Check if all required fields are filled
    if (username && review && rating) {
      // Create a new review element
      const reviewContainer = document.createElement('div');
      reviewContainer.classList.add('review'); // Add class for styling

      const reviewHeader = document.createElement('div');
      reviewHeader.classList.add('review-header'); // Add class for styling

      // Create and populate the username element
      const reviewUsername = document.createElement('span');
      reviewUsername.classList.add('username');
      reviewUsername.textContent = username;

      // Create and populate the stars for the review
      const reviewStars = document.createElement('div');
      reviewStars.classList.add('stars');
      for (let i = 1; i <= 5; i++) {
        const star = document.createElement('span');
        star.classList.add('star');
        if (i <= rating) {
          star.classList.add('filled'); // Add 'filled' class for the stars up to the rating
        }
        star.textContent = '★'; // Star character
        reviewStars.appendChild(star); // Append star to the review stars container
      }

      reviewHeader.appendChild(reviewUsername);
      reviewHeader.appendChild(reviewStars);

      // Create and populate the review text element
      const reviewText = document.createElement('p');
      reviewText.textContent = review;

      reviewContainer.appendChild(reviewHeader);
      reviewContainer.appendChild(reviewText);

      // Add the new review to the reviews list
      document.getElementById('reviews-list').appendChild(reviewContainer);

      // Clear the form and reset the stars display
      document.getElementById('review-form').reset();
      updateStars(0); // Reset star rating display to 0
    }
  });
});
