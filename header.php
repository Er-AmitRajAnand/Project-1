<?php require_once('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <meta
      name="description"
      content="<?php echo $description; ?>"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <a href="#home" class="skip-link">Skip to content</a>
    <div class="nav-bar" id="nav">
      <nav class="nav container">
        <a href="#home" class="logo"><?php echo $name; ?></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navLinks">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="nav-links" id="navLinks">
          <a href="#about"><span class="nav-index">01</span>About</a>
          <a href="#skills"><span class="nav-index">02</span>Skills</a>
          <a href="#experience"><span class="nav-index">03</span>Experience</a>
          <a href="#education"><span class="nav-index">04</span>Education</a>
          <a href="#projects"><span class="nav-index">05</span>Projects</a>
          <a href="#contact"><span class="nav-index">06</span>Contact</a>
        </div>
      </nav>
    </div>
    <header class="hero">
