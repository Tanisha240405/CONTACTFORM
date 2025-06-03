document.getElementById('contactForm').addEventListener('submit', function (event) {
  let valid = true;

  const name = document.getElementById('name');
  const email = document.getElementById('email');
  const message = document.getElementById('message');

  document.getElementById('nameError').textContent = '';
  document.getElementById('emailError').textContent = '';
  document.getElementById('messageError').textContent = '';

  if (name.value.trim() === '') {
    document.getElementById('nameError').textContent = 'Name is required.';
    valid = false;
  }

  const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
  if (!emailPattern.test(email.value.trim())) {
    document.getElementById('emailError').textContent = 'Valid email is required.';
    valid = false;
  }

  if (message.value.trim() === '') {
    document.getElementById('messageError').textContent = 'Message is required.';
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
});
