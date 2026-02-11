# PHP Authentication System

> A modern, secure authentication system with user registration, login functionality, and protected dashboard access.

![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![Status](https://img.shields.io/badge/status-active-success)

A fully responsive PHP-based authentication system featuring glassmorphism UI design, secure password handling, and session management.

## Features

- User Registration with validation
- User Login with session management
- Protected Dashboard access
- Glassmorphism UI design
- Password hashing with bcrypt
- Form validation (client and server-side)
- Responsive design for all devices
- XSS prevention

## Project Structure

```
php-auth-system/
├── index.html          # Landing page
├── signup.php          # User registration
├── login.php           # User login
├── dashboard.php       # Protected dashboard
└── README.md           # Documentation
```

## Installation

### Prerequisites

- PHP 7.4 or higher
- Web browser
- Text editor (VS Code recommended)

### Setup

1. Clone the repository:

```bash
git clone https://github.com/Rahaf-Tariq/php-auth-system.git
cd php-auth-system
```

2. Verify PHP installation:

```bash
php -v
```

3. Start the development server:

```bash
php -S localhost:8000
```

4. Open browser and navigate to:

```
http://localhost:8000
```

## Usage

### User Registration

1. Click "Sign Up" on homepage
2. Fill in username, email, and password (minimum 6 characters)
3. Submit form to create account
4. Automatic redirect to dashboard

### User Login

1. Click "Login" on homepage
2. Enter email and password
3. Submit to access dashboard

### Dashboard

- View user statistics and activity
- Access account information
- Logout securely

## Development

### Running in VS Code

1. Open project folder in VS Code
2. Open terminal (Ctrl + `)
3. Run: `php -S localhost:8000`
4. Access at: `http://localhost:8000`

### Recommended Extensions

- PHP Intelephense
- PHP Debug

## Security Features

- Password hashing using bcrypt
- XSS prevention with htmlspecialchars()
- Server-side input validation
- Session-based authentication
- Email format validation

## Current Limitations

- No database integration (session-based storage only)
- Demo authentication (not production-ready)
- No password reset functionality
- No email verification
- Data persists only during active session

## Production Requirements

To make production-ready:

- Add MySQL/PostgreSQL database
- Implement CSRF protection
- Add rate limiting
- Email verification system
- Password reset functionality
- Two-factor authentication
- HTTPS enforcement

## Troubleshooting

**"php is not recognized"**

- Install PHP and add to system PATH
- Restart terminal

**"Address already in use"**

- Use different port: `php -S localhost:8080`

**"Session not working"**

- Must use http://localhost (not file://)
- PHP server required for sessions

## Contributing

1. Fork the repository
2. Create feature branch: `git checkout -b feature/name`
3. Commit changes: `git commit -m 'Add feature'`
4. Push to branch: `git push origin feature/name`
5. Submit pull request

## License

This project is licensed under the MIT License.

```
MIT License


## Author

**[Rahaf-Tariq]**
- GitHub: [@Rahaf-Tariq](https://github.com/Rahaf-Tariq)
- Email: rahafkhan510@gmail.com

## Support

If you found this project helpful, please star the repository and share it with others.

For issues or questions, open an issue on GitHub.

---

**Built with attention to security and user experience**
```
