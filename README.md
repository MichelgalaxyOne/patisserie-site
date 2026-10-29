# 🧁 Le Goût du Délice – Pastry Shop Website

A responsive pastry shop website built with HTML, CSS, JavaScript, PHP and MySQL. It presents the shop, its pastry categories and signature products, and lets visitors send a message through a contact form stored in a database.

> ⚠️ **This project is intentionally vulnerable and is also designed as a penetration testing practice target. See the security notice below.**

## ⚠️ Intentionally Vulnerable Application

Besides being a showcase website, this project is **meant to be used as a practice target for penetration testing**. Some security flaws are left in the code on purpose.

**Known weaknesses (for practice):**
- SQL injection in `contact.php` (user input is concatenated directly into the SQL query)
- No input validation or sanitization on the contact form
- Database access with the `root` account and an empty password
- No CSRF protection on forms

**Rules of use:**
- Run it **only locally** (XAMPP on `localhost`) or in an isolated lab (virtual machine, private network).
- **Never deploy it on a public server** and never store real personal data in the database.
- Do not reuse this code in production projects.
- Test only on your own installation.

This project is for educational purposes only.

## Features

- Animated typing effect in the hero banner
- Responsive fixed navbar (Bootstrap 5)
- Home page: presentation, iconic pastries, pastry chefs, categories (Cakes, Tarts, Leavened pastries, Choux pastries)
- About page: shop identity, iconic delights, pastry chefs carousel, customer testimonials
- Pastries catalogue with four categories, reachable through anchor links
- Image carousels showcasing the pastries
- Contact form saving messages into a MySQL database
- Newsletter subscription form and social media links in the footer

## Tech Stack

- **Front-end:** HTML5, CSS3, JavaScript, Bootstrap 5.3, Font Awesome 5
- **Back-end:** PHP (PDO)
- **Database:** MySQL
- **Local server:** XAMPP (Apache + MySQL)

## Project Structure

```
patisserie-site/
├── css/                  # Stylesheets
├── js/                   # Scripts
├── image/, img/          # Images
├── index.html            # Home page
├── about.html            # About page
├── patisseries.html      # Pastries catalogue
├── contact.html          # Contact page
├── contact.php           # Contact form processing (database insert)
└── README.md
```

## Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL)
- Git

### Installation

1. Start **Apache** and **MySQL** from the XAMPP control panel.
2. Clone the repository into the `htdocs` folder:
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/MichelgalaxyOne/patisserie-site.git
   ```
3. Open phpMyAdmin (`http://localhost/phpmyadmin`), create a database named `bd_patisserie` and run:
   ```sql
   CREATE TABLE client (
     id INT AUTO_INCREMENT PRIMARY KEY,
     nom VARCHAR(100),
     prenom VARCHAR(100),
     email VARCHAR(150),
     numero VARCHAR(30),
     adresse VARCHAR(255),
     messages TEXT
   );
   ```
4. Open `http://localhost/patisserie-site/index.html` in your browser.

## Penetration Testing Ideas

If you want to practice on this app, you can try to:
- Exploit the SQL injection in the contact form (manually or with `sqlmap`)
- Intercept and modify requests with Burp Suite
- Dump the `client` table and analyze what data is exposed
- Write a report and propose fixes (prepared statements, input validation, a dedicated database user)

## Status

Work in progress: some product descriptions and images are placeholders.

## Author

**Marie-Michel HOUNKPE**
GitHub: [@MichelgalaxyOne](https://github.com/MichelgalaxyOne)

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
