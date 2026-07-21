<?php require_once('header.php'); ?>
      <section id="home" class="hero-content container">
        <div class="hero-text">
          <p class="eyebrow"><?php echo $eyebrow_hello; ?></p>
          <h1><?php echo $name; ?></h1>
          <p class="lead"><?php echo $lead; ?></p>
          <div class="hero-actions">
            <a href="#projects" class="btn btn-primary">View Projects</a>
            <a href="#contact" class="btn btn-secondary">Contact Me</a>
            <a href="<?php echo $resume_url; ?>" class="btn btn-ghost" download>Download Resume</a>
          </div>
        </div>
        <div class="hero-card" aria-label="Profile preview">
          <div class="avatar">AR</div>
          <h3><?php echo $hero_card_heading; ?></h3>
          <p><?php echo $hero_card_text; ?></p>
        </div>
      </section>
    </header>

    <main>
      <section id="about" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow">About Me</p>
          <h2><?php echo $about_heading; ?></h2>
        </div>
        <div class="about-grid">
          <p><?php echo $about_p1; ?></p>
          <p><?php echo $about_p2; ?></p>
        </div>
      </section>

      <section id="skills" class="section alt-bg reveal">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow">Skills</p>
            <h2><?php echo $skills_heading; ?></h2>
          </div>
          <div class="skills-grid">
            <?php foreach ($skills as $skill) : ?>
              <div class="skill-card"><?php echo $skill; ?></div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="experience" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow">Experience</p>
          <h2><?php echo $experience_heading; ?></h2>
        </div>
        <div class="timeline">
          <?php foreach ($work_experience as $job) : ?>
            <article class="timeline-item">
              <div class="timeline-dot"></div>
              <div class="experience-card">
                <div class="experience-header">
                  <h3><?php echo $job['job_title']; ?></h3>
                  <span><?php echo $job['duration']; ?></span>
                </div>
                <h4><?php echo $job['company']; ?></h4>
                <p><?php echo $job['description']; ?></p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="education" class="section alt-bg reveal">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow">Education</p>
            <h2><?php echo $education_heading; ?></h2>
          </div>
          <div class="timeline">
            <?php foreach ($education as $edu) : ?>
              <article class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="experience-card">
                  <div class="experience-header">
                    <h3><?php echo $edu['degree']; ?></h3>
                    <span><?php echo $edu['duration']; ?></span>
                  </div>
                  <h4><?php echo $edu['institution']; ?></h4>
                  <?php if (!empty($edu['description'])) : ?>
                    <p><?php echo $edu['description']; ?></p>
                  <?php endif; ?>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="projects" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow">Projects</p>
          <h2><?php echo $projects_heading; ?></h2>
        </div>
        <div class="projects-grid">
          <?php foreach ($projects as $project) : ?>
            <article class="project-card">
              <h3><?php echo $project['name']; ?></h3>
              <p><?php echo $project['description']; ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    </main>

<?php require_once('footer.php'); ?>
