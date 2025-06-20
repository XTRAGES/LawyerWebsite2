# Specter & Associates - Law Firm Website

A professional law firm website inspired by the fictional firm from the TV series "Suits". This project features a modern, responsive design with an admin dashboard for managing client inquiries.

## 🏢 About

Specter & Associates is a high-end corporate law firm website featuring:
- Professional corporate design
- Client contact management system
- Admin dashboard for message management
- Responsive layout for all devices

## 🚀 Features

### Public Website
- **Homepage**: Hero section with firm philosophy and case results
- **About Page**: Firm background and values
- **Services**: Practice areas including Corporate Litigation, M&A, White-Collar Defense, etc.
- **Team**: Meet the legal team (Harvey Specter, Jessica Pearson, Louis Litt)
- **Contact**: Contact form and firm information

### Admin Dashboard
- **Secure Login**: Admin authentication system
- **Message Management**: View and delete client inquiries
- **Session Management**: Secure admin sessions

## 📁 Project Structure

```
LawyerWebsite/
├── admin/                  # Admin panel files
│   ├── dashboard.php      # Main admin dashboard
│   ├── index.php          # Admin login page
│   ├── login_handler.php  # Login authentication
│   ├── logout.php         # Logout functionality
│   ├── delete_message.php # Delete messages
│   └── style.css          # Admin panel styles
├── config.php             # Database configuration
├── database.sql           # Database schema
├── setup.php              # Database setup script
├── index.php              # Homepage
├── about.php              # About page
├── services.php           # Services/Practice areas
├── team.php               # Team members
├── contact.php            # Contact page
├── contact_handler.php    # Contact form processor
├── header.php             # Common header
├── footer.php             # Common footer
├── style.css              # Main stylesheet
├── script.js              # JavaScript functionality
└── *.jpg                  # Team member photos
```

## 🛠️ Installation

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

### Setup Instructions

1. **Clone/Download the project**
   ```bash
   git clone [repository-url]
   cd LawyerWebsite
   ```

2. **Database Setup**
   - Create a MySQL database named `lawyer_website`
   - Import the database schema:
   ```sql
   mysql -u root -p lawyer_website < database.sql
   ```
   - Or run the setup script: `php setup.php`

3. **Configuration**
   - Update database credentials in `config.php`:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USERNAME', 'your_username');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'lawyer_website');
   ```

4. **Web Server**
   - Place files in your web server's document root
   - Ensure PHP has write permissions for session handling

## 🔐 Admin Access

- **URL**: `/admin/`
- **Username**: `admin`
- **Password**: `password123`

⚠️ **Security Note**: Change the default admin credentials in `admin/login_handler.php` before production use.

## 📊 Database Schema

### Messages Table
```sql
CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🎨 Design Features

- **Responsive Design**: Mobile-first approach
- **Modern UI**: Clean, professional aesthetic
- **Smooth Animations**: CSS transitions and fade-in effects
- **Font Awesome Icons**: Professional iconography
- **Google Fonts**: Typography using Playfair Display and Source Sans Pro

## 🔧 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Icons**: Font Awesome
- **Fonts**: Google Fonts
- **Images**: Unsplash (external) + local team photos

## 📱 Pages Overview

1. **Homepage** (`index.php`): Hero section, philosophy, and case results
2. **About** (`about.php`): Firm background and values
3. **Services** (`services.php`): Practice areas and expertise
4. **Team** (`team.php`): Attorney profiles
5. **Contact** (`contact.php`): Contact form and information
6. **Admin Dashboard** (`admin/dashboard.php`): Message management

## 🚨 Security Considerations

- Admin authentication with session management
- SQL injection protection using prepared statements
- XSS protection with `htmlspecialchars()`
- CSRF protection recommended for production

## 🔄 Future Enhancements

- User registration and client portal
- Case management system
- Document upload functionality
- Email notifications
- Advanced admin features
- Password hashing for admin accounts
- SSL certificate implementation

## 📞 Support

For technical support or questions about this project, please contact XTRAGES.
aldinzendeli33@gmail.com

---

**Note**: This is a demonstration project inspired by the TV series "Suits". All characters and firm names are fictional.
