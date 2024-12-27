document.getElementById('contactForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    const errorElements = document.getElementsByClassName('error');  // Assuming error messages are shown with this class.

    // Reset previous errors
    for (let i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";  // Clear any error messages
    }

    if (name === "" || email === "" || phone === "" || message === "") {
        event.preventDefault();
        if (name === "") {
            document.getElementById('nameError').textContent = "Please enter your name.";
        }
        if (email === "") {
            document.getElementById('emailError').textContent = "Please enter your email.";
        }
        if (phone === "") {
            document.getElementById('phoneError').textContent = "Please enter your phone number.";
        }
        if (message === "") {
            document.getElementById('messageError').textContent = "Please enter your message.";
        }
    } else {
        alert("Thank you for your message!");

        // Reset form fields and clear error messages
        document.getElementById('contactForm').reset();
        for (let i = 0; i < errorElements.length; i++) {
            errorElements[i].textContent = "";  // Clear error messages after reset
        }
    }
});

// Optionally, clear error messages on input change or focus
const inputs = document.querySelectorAll('#contactForm input, #contactForm textarea');
inputs.forEach(input => {
    input.addEventListener('input', function() {
        const errorElement = document.getElementById(`${input.id}Error`);
        if (errorElement) {
            errorElement.textContent = "";  // Clear the error message if the user starts typing
        }
    });
});
