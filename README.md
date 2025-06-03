
# Contact Form 

## Overview
This project provides a simple admin login system to access and manage submitted contact form messages. It includes:

- A **Contact Form** where users can submit their details and messages.
- An **Admin Login** page with username/password authentication.
- An **Admin Dashboard** displaying all submitted messages.
- Session-based authentication to protect admin pages.

---

## Features

- Responsive, clean UI with modern styling and gradients.
- Secure admin login using PHP sessions.
- MySQL database integration to store and retrieve contact form data.
- Input validation on the front end (JavaScript) and server side (PHP).
- Thank You page with fade-in message after form submission.
- Easy-to-customize CSS styles.

---

## Requirements

- PHP 7.0 or higher
- MySQL 5.7 or higher
- A web server (e.g., Apache via XAMPP, WAMP, or similar)
- Modern web browser (Chrome, Firefox, Edge, etc.)

---

## Installation & Setup

1. **Clone or download** the repository files into your web server's document root (e.g., `htdocs` in XAMPP).

2. **Database Setup:**

   - Create a new MySQL database, e.g., `contact_form`.
   - Import or create the necessary table for storing messages:

   ```sql
   CREATE TABLE messages (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100),
       email VARCHAR(100),
       message TEXT,
       submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Update Database Credentials:**

   - In your PHP files that connect to MySQL (e.g., `dashboard.php`, `submit_form.php`), update the database host, username, password, and database name accordingly.

4. **Admin Credentials:**

   - Default username: `admin`
   - Default password: `admin123`
   - These are hardcoded in `admin_login.php` for simplicity. Change them in the PHP file if needed.

5. **Launch:**

   - Start your local web server.
   - Access the contact form: `http://localhost/contact-form/index.html`
   - Access admin login: `http://localhost/contact-form/admin_login.php`

---

## File Structure

```
contact-form/
│
├── index.html          # Contact form page
├── style.css           # CSS styles for all pages
├── submit_form.php     # Handles form submission and DB insert
├── thankyou.html       # Thank you page after submission
├── admin_login.php     # Admin login page
├── dashboard.php       # Admin dashboard displaying messages
└── README.md           # This documentation file
```

---

## How It Works

- Users fill and submit the contact form.
- The data is validated via JavaScript before sending to `submit_form.php`.
- Upon successful submission, users are redirected to a thank you page with a fade-in message.
- Admin logs in at `admin_login.php`. Upon success, they're redirected to the dashboard.
- Dashboard displays all messages in a table with options to view or delete (optional).
- Sessions ensure that unauthorized users cannot access the dashboard.

---

## Customization

- Change colors and styles by editing `style.css`.
- Modify the admin username and password in `admin_login.php`.
- Enhance security by moving credentials to a database or environment variables.
- Add pagination or search functionality in `dashboard.php` for scalability.

---

## Troubleshooting

- **Database connection errors:** Verify credentials and database server status.
- **Session issues:** Ensure PHP sessions are enabled and your browser accepts cookies.
- **Form submission errors:** Check console for JS errors and PHP error logs.

---

## License

This project is open for personal and educational use. Modify and enhance as you like!
