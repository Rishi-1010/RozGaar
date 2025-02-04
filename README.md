# RozGaar (रोज़गार)

RozGaar is a bilingual (Hindi/English) job board platform designed to connect local job seekers with part-time and casual work opportunities. The platform focuses on making job searching and posting accessible to everyone, regardless of their language preference or technical expertise.

## Introduction

RozGaar aims to bridge the gap between local job seekers and providers by offering a simple, bilingual interface for:
- Home tutoring services
- Data entry work
- Cooking & tiffin services
- Beauty & wellness services
- Delivery partner opportunities
- Office assistance
- Content writing
- Retail sales positions

## Features

### For Job Seekers
- Bilingual interface (Hindi/English)
- Easy job search with location filtering
- Simple application process
- Category-based job browsing
- Real-time job notifications
- Mobile-responsive design

### For Job Providers
- Easy job posting interface
- Applicant management dashboard
- Application tracking system
- Candidate shortlisting
- Direct communication channel

## Project Structure
```
rozgaar/
├── assets/
│   ├── css/
│   │   ├── admin.css
│   │   ├── bootstrap.min.css
│   │   ├── style.css
│   │   └── responsive.css
│   ├── js/
│   │   ├── admin.js
│   │   ├── main.js
│   │   ├── jquery.min.js
│   │   └── bootstrap.bundle.min.js
│   ├── img/
│   │   ├── logo.png
│   │   ├── banner/
│   │   └── icons/
│   └── vendors/
│       ├── font-awesome/
│       ├── themify-icons/
│       └── owl-carousel/
├── auth/
│   ├── login.php
│   ├── register.php
│   └── reset-password.php
├── config/
│   ├── database.php
│   ├── config.php
│   └── db_connection.php
├── dashboard/
│   ├── employer/
│   │   ├── index.php
│   │   ├── post-job.php
│   │   └── manage-jobs.php
│   └── jobseeker/
│       ├── index.php
│       ├── applications.php
│       └── profile.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── functions.php
├── jobs/
│   ├── index.php
│   ├── search.php
│   ├── category/
│   │   ├── delivery.php
│   │   ├── data-entry.php
│   │   └── tutoring.php
│   └── apply.php
├── database/
│   └── schema.sql
├── docs/
│   ├── css/
│   │   └── main.css
│   ├── syntax-highlighter/
│   │   └── scripts/
│   │       └── shBrushDiff.js
│   └── index.html
├── node_modules/
├── vendor/
├── uploads/
├── .gitignore
├── index.php
└── README.md
```

## Installation

1. Clone the repository:
```bash
git clone https://github.com/Rishi-1010/RozGaar.git
```

2. Set up the database:
   - Create a MySQL database named 'rozgaar'
   - Import the database schema from `database/schema.sql`

3. Configure database connection:
   - Update database credentials in `config/database.php`

4. Start your local server:
   - Using XAMPP/WAMP/MAMP or any PHP server
   - Navigate to the project directory

## Technologies Used

- Frontend:
  - HTML5
  - CSS3
  - JavaScript
  - Bootstrap 5
  - jQuery

- Backend:
  - PHP
  - MySQL

- Additional Libraries:
  - Font Awesome
  - Themify Icons
  - Owl Carousel

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Contact

Rishi - [@Rishi-1010](https://github.com/Rishi-1010)

Project Link: [https://github.com/Rishi-1010/RozGaar](https://github.com/Rishi-1010/RozGaar)
