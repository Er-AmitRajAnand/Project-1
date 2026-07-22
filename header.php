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
      href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <a href="#home" class="skip-link">Skip to content</a>
    <div class="aurora-bg" aria-hidden="true">
      <span class="aurora-blob blob-violet"></span>
      <span class="aurora-blob blob-cyan"></span>
      <span class="aurora-blob blob-pink"></span>
      <span class="aurora-blob blob-amber"></span>
      <span class="aurora-grain"></span>
    </div>
    <div class="nav-bar" id="nav">
      <nav class="nav container">
        <a href="#home" class="logo"><?php echo $name; ?></a>
        <button class="nav-toggle" id="navToggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="navLinks">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="nav-links" id="navLinks">
          <a href="#about">About</a>
          <a href="#skills">Skills</a>
          <a href="#experience">Experience</a>
          <a href="#education">Education</a>
          <a href="#projects">Projects</a>
          <a href="#contact">Contact</a>
        </div>
      </nav>
    </div>
    <header class="hero">
