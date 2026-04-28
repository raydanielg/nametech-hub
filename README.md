# 🚀 NamTech Hub - Advanced Innovation & Academy Management System

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
</p>

NamTech Hub is a comprehensive digital ecosystem designed to streamline the management of technology hubs, innovation centers, and educational academies. It provides a robust platform for tracking startups, managing mentorship programs, delivering online courses, and handling complex project workflows.

---

## 🌟 Key Features

### 🏢 Startup Ecosystem Management
*   **Startup Tracking:** Full lifecycle management of startups from incubation to acceleration.
*   **Milestone Monitoring:** Real-time tracking of project progress and key performance indicators (KPIs).
*   **Founder Portal:** Dedicated space for founders to update progress, manage teams, and request support.
*   **Funding Status:** Track investment rounds, funding history, and financial milestones.

### 🎓 Academy & Learning Management
*   **Course Management:** Create, manage, and deliver technology and business courses.
*   **Student Enrollment:** Seamless registration and tracking of student progress.
*   **Cohort Management:** Organize students and startups into specific training cycles.
*   **Digital Studio:** A workspace for collaborative digital projects and hands-on learning.

### 🤝 Mentorship & Networking
*   **Mentor Matching:** Connect startups with industry experts based on industry and needs.
*   **Session Scheduling:** Integrated system for booking and tracking mentor-mentee meetings.
*   **Audit Logs:** Detailed tracking of all interactions within the mentorship program.

### 💳 Financial & Operations
*   **Automated Billing:** Integrated invoice generation for courses and memberships.
*   **Payment Integration:** Secure handling of payments and financial transactions.
*   **Notification System:** Real-time alerts via email and SMS (OTP included).
*   **Role-Based Access (RBAC):** Granular permissions using `Spatie/Permission`.

---

## 🛠 Technical Architecture

| Component | Technology |
| :--- | :--- |
| **Backend** | Laravel 10.x (PHP 8.2+) |
| **Frontend** | Blade, Tailwind CSS, JavaScript (ES6+) |
| **Database** | MySQL / PostgreSQL |
| **Auth** | Laravel Sanctum & Spatie Permissions |
| **Real-time** | Laravel Broadcasting & Notifications |
| **Assets** | Webpack / Laravel Mix |

---

## ⚙️ Installation Guide

### 1️⃣ Prerequisites
Make sure you have the following installed:
*   PHP >= 8.1
*   Composer
*   Node.js & NPM
*   MySQL or PostgreSQL

### 2️⃣ Clone & Setup
```bash
# Clone the repository
git clone https://github.com/zerixa/namtechhub.git
cd namtechhub

# Install PHP dependencies
composer install

# Install JS dependencies
npm install && npm run dev
```

### 3️⃣ Configuration
```bash
# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env
# DB_DATABASE=namtechhub
# DB_USERNAME=root
# DB_PASSWORD=
```

### 4️⃣ Database Initialization
```bash
# Run migrations and seed data
php artisan migrate --seed
```

### 5️⃣ Launch
```bash
# Start the development server
php artisan serve
```

---

## 📝 License & Copyright

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for more details.

Developed with ❤️ by **[Zerixa](https://zerixa.com)**.

---
© 2024 **NamTech Hub**. All rights reserved.
