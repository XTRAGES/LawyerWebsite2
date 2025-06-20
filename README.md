Specter & Associates - Professional Law Firm Website
This repository contains the codebase for "Specter & Associates," a professional and responsive law firm website designed to showcase their winning philosophy, practice areas, key achievements, and team members. The site also features a functional contact form that captures user inquiries and stores them securely in a database, accessible via a basic admin dashboard.

This project demonstrates a strong understanding of fundamental web development principles, including front-end design, back-end logic with PHP, and database interaction.

✨ Features
Responsive Design: Optimized for seamless viewing and interaction across various devices (desktop, tablet, mobile).

Dynamic Home Page (index.php):

Hero section with a strong call to action.

"Our Winning Philosophy" section detailing the firm's aggressive and meticulous approach.

"A Legacy of Victory" section highlighting key case results and achievements.

About Us Page (about.php): Provides deeper insights into the firm's history and philosophy.

Contact Us Page (contact.php):

Displays firm contact information (address, email, phone).

Includes a functional contact form for user inquiries.

PHP-Powered Contact Form:

contact_handler.php processes form submissions, validates input (name, email, message), and stores data securely in a MySQL database.

Redirects users with success or error messages.

Admin Dashboard (admin/ folder):

Secure Admin Login (admin/index.php): Simple login page with hardcoded credentials for demonstration (username: admin, password: password123).

Login Handler (admin/login_handler.php): Authenticates users against hardcoded credentials and manages session.

Message Management (admin/dashboard.php): Displays all submitted contact messages from the database in a clear, tabular format (Name, Email, Message, Received At).

Message Deletion (admin/delete_message.php): Allows authenticated users to delete individual messages from the database.

Logout Functionality (admin/logout.php): Clears the session and redirects to the login page.

Modular PHP Structure: Utilizes header.php and footer.php for consistent navigation and footer across pages.

Modern Styling: Implemented with custom CSS (style.css) to create a professional and engaging user interface, including dedicated styles for the admin section.

Font Awesome Icons: Integrated for enhanced visual elements.

🛠️ Technologies Used
Frontend:

HTML5

CSS3 (Custom Styling)

JavaScript (for basic client-side interactions, e.g., animations)

Font Awesome (for icons)

Backend:

PHP (for server-side logic, form handling, authentication, and database interaction)

Database:

MySQL (for storing contact messages)

Server Environment:

XAMPP / WAMP / MAMP (or any Apache/PHP/MySQL stack)

🚀 Getting Started
Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

Prerequisites
A web server environment with PHP and MySQL installed (e.g., XAMPP, WAMP, MAMP, or Docker with a PHP/MySQL setup).

A web browser.

A code editor (e.g., VS Code).

Installation
Clone the repository:

git clone https://github.com/XTRAGES/LawyerWebsite2.git
cd LawyerWebsite2

Set up your web server:

Place the LawyerWebsite2 folder into your web server's document root (e.g., htdocs for XAMPP).

Ensure the admin subfolder is also correctly placed within LawyerWebsite2.

Database Configuration:

Open config.php (located in the root of the project).

Ensure your database credentials match your local MySQL setup:

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); // Your MySQL password
define('DB_NAME', 'lawyer_website'); // Your chosen database name

Create the Database and Table:

Access your MySQL administration tool (e.g., phpMyAdmin via http://localhost/phpmyadmin).

Create a new database named lawyer_website (or whatever you defined in DB_NAME).

Execute the following SQL query to create the messages table:

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

Start your Apache and MySQL servers (if using XAMPP/WAMP/MAMP).

Usage
Navigate to http://localhost/LawyerWebsite2/index.php in your web browser to access the main website.

To access the Admin Dashboard:

Open http://localhost/LawyerWebsite2/admin/index.php.

Use the following hardcoded credentials for demonstration:

Username: admin

Password: password123

Once logged in, you can view and delete submitted messages.

Click "Logout" to end the session.

Important Security Note: For a production environment, hardcoded credentials are highly insecure. A robust user authentication system with hashed passwords and proper security practices would be required. The current setup is for demonstration purposes only.

🤝 Contributing
While this is a personal project, feel free to fork the repository and explore. For major changes, please open an issue first to discuss what you would like to change.

📄 License
Specter & Associates - Professional Law Firm Website – Proprietary License

Copyright (c) 2025 XTRAGES

This project is licensed for personal use, educational purposes, and portfolio demonstration only.
Commercial use, distribution, reproduction, modification, or resale of any part of this project
without explicit written permission from the author is strictly prohibited.

The software is provided "AS IS", without warranty of any kind.

For permission requests, contact: aldinzendeli33@gmail.com

✉️ Contact
Aldin Zendeli

Email: aldinzendeli33@gmail.com

GitHub: XTRAGES
