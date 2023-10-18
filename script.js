document.getElementById('myForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent the form from submitting traditionally

    // Get form data
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    // Basic form validation
    if (name === '' || email === '' || message === '') {
        document.getElementById('response').innerText = 'Please fill out all fields.';
        return;
    }

    // If the form is valid, you can proceed with further actions, like sending data to your server.

    // For demonstration purposes, display a success message.
    document.getElementById('response').innerText = 'Form submitted successfully!';
});