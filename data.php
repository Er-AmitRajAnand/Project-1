<?php
// /Applications/XAMPP/xamppfiles/htdocs/myLocal/Project-1/data.php

// --- PERSONAL INFORMATION ---
$name = "Amit Raj Anand";
$title = "Portfolio | " . $name;
$description = "A modern single-page portfolio website for Amit Raj Anand, showcasing professional experience, skills, and projects.";
$eyebrow_hello = "Hello, I’m";
$lead = "I’m a Senior Software Engineer with 8+ years of experience building full-stack, cloud-based web applications — from requirement gathering to deployment support — using PHP, JavaScript, and modern frameworks.";
$linkedin_url = "https://www.linkedin.com/in/amit-raj-anand-647504110/";
$email = "amit.raj.anand@gmail.com";
$phone = "+91 82103 20955";
$location = "Bangalore, India";
$resume_url = "Resume.pdf";

// --- HERO CARD ---
$hero_card_heading = "Open to opportunities";
$hero_card_text = "Senior Software Engineer open to new full-stack development opportunities.";

// --- ABOUT ME ---
$about_heading = "I build practical solutions with a strong focus on quality.";
$about_p1 = "I’m a Software Engineer with a demonstrated history of working in the information technology and services industry, specializing in full-stack development. I hold a Bachelor of Technology in Computer Science and Engineering from Kalinga Institute of Industrial Technology, Bhubaneswar, Odisha.";
$about_p2 = "Over the years I’ve worked across insurance, fintech, and product companies, building cloud-based applications end-to-end — from requirement gathering and architecture to development, testing, and deployment support.";

// --- SKILLS ---
$skills_heading = "Core strengths and technical focus.";
$skills = [
    "PHP",
    "CakePHP",
    "CodeIgniter",
    "Symfony",
    "JavaScript",
    "jQuery",
    "Node.js",
    "HTML5 & CSS3",
    "Bootstrap",
    "MySQL",
    "REST APIs",
    "AWS",
    "Linux (Ubuntu)",
    "Git & SVN",
    "Clean Coding"
];

// --- PROJECTS ---
$projects_heading = "Selected work.";
$projects = [
    [
        "name" => "Professional Portfolio",
        "description" => "A clean, modern one-page site that presents background, skills, and contact information."
    ],
    [
        "name" => "Web Experience Projects",
        "description" => "Interfaces and web solutions focused on usability, responsiveness, and polished presentation."
    ],
    [
        "name" => "Digital Product Work",
        "description" => "Projects designed to combine technical execution with clear user-focused design thinking."
    ]
];

// --- WORK EXPERIENCE ---
$experience_heading = "Work Experience";
$work_experience = [
    [
        "job_title" => "Senior Software Engineer",
        "company" => "Exalogic Consulting, Bengaluru",
        "duration" => "December 2025 - Present",
        "description" => "Contributing to full-stack web application development and delivery as part of the engineering team."
    ],
    [
        "job_title" => "Consultant - SE",
        "company" => "Datamatics Global Services Ltd., Bangalore",
        "duration" => "August 2022 - November 2025",
        "description" => "Led end-to-end delivery (requirement gathering to deployment support) for the Liabilities Product vertical in the IDFC SO App across urban and rural regions, using Symfony, MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap."
    ],
    [
        "job_title" => "Senior Software Engineer",
        "company" => "Amana Insurance Brokers (AmanaCompare), Bengaluru",
        "duration" => "April 2020 - December 2021",
        "description" => "Spearheaded development of a web and mobile application automating the aggregation of multiple insurance providers for automobiles, focused mainly on the Qatar market. Built with CakePHP, MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap."
    ],
    [
        "job_title" => "Software Engineer",
        "company" => "ApnaComplex (Eukleia Technologies), Bengaluru",
        "duration" => "April 2019 - October 2019",
        "description" => "Optimized existing modules and enhanced the product with new modules designed and developed from scratch, using CodeIgniter (PHP), MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap."
    ],
    [
        "job_title" => "Software Engineer",
        "company" => "Athira Technologies, Bengaluru & Hyderabad",
        "duration" => "June 2018 - March 2019",
        "description" => "Developed and maintained web applications using PHP, MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap."
    ],
    [
        "job_title" => "Software Engineer",
        "company" => "ProductLabs Solutions Pvt. Ltd., Karnataka",
        "duration" => "April 2017 - May 2018",
        "description" => "Developed and maintained web applications using PHP, MySQL, HTML, CSS, JavaScript, jQuery, and Bootstrap."
    ],
];

// --- EDUCATION ---
$education_heading = "Education";
$education = [
    [
        "degree" => "Bachelor of Technology (B.Tech.), Computer Science and Engineering",
        "institution" => "Kalinga Institute of Industrial Technology, Bhubaneswar, Odisha",
        "duration" => "2012 - 2016",
        "description" => ""
    ],
    [
        "degree" => "10+2, Science",
        "institution" => "DAV Public School, Itki Road, Hehal, Ranchi",
        "duration" => "2009 - 2011",
        "description" => ""
    ]
];

// --- STATS (hero) ---
$stats = [
    ["value" => "8+", "label" => "Years Experience"],
    ["value" => (string) count($work_experience), "label" => "Companies"],
    ["value" => (string) count($skills), "label" => "Core Skills"]
];