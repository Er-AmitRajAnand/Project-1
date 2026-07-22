<?php require_once('header.php'); ?>
      <section id="home" class="hero-content container">
        <div class="hero-text">
          <p class="eyebrow"><span class="eyebrow-dot"></span><?php echo $eyebrow_hello; ?></p>
          <h1 class="display-name"><?php echo $name; ?></h1>
          <p class="lead"><?php echo $lead; ?></p>
          <div class="hero-actions">
            <a href="#projects" class="btn btn-primary">View Projects</a>
            <a href="#contact" class="btn btn-secondary">Contact Me</a>
            <a href="<?php echo $resume_url; ?>" class="btn btn-ghost" download>Download Resume</a>
          </div>
          <div class="stat-row">
            <?php foreach ($stats as $stat) : ?>
              <div class="stat-chip">
                <span class="stat-value"><?php echo $stat['value']; ?></span>
                <span class="stat-label"><?php echo $stat['label']; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="hero-card glass" aria-label="Profile preview">
          <span class="hero-card-glow" aria-hidden="true"></span>
          <div class="avatar">AR</div>
          <h3><?php echo $hero_card_heading; ?></h3>
          <p><?php echo $hero_card_text; ?></p>
          <span class="hero-card-badge">● Available</span>
        </div>
      </section>
    </header>

    <main>
      <section id="about" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow"><span class="eyebrow-dot"></span>About Me</p>
          <h2><?php echo $about_heading; ?></h2>
        </div>
        <div class="about-grid">
          <div class="glass about-card">
            <p><?php echo $about_p1; ?></p>
          </div>
          <div class="glass about-card">
            <p><?php echo $about_p2; ?></p>
          </div>
        </div>
      </section>

      <section id="skills" class="section reveal">
        <div class="container">
          <div class="section-heading">
            <p class="eyebrow"><span class="eyebrow-dot"></span>Skills</p>
            <h2><?php echo $skills_heading; ?></h2>
          </div>
          <div class="skills-grid">
            <?php foreach ($skills as $i => $skill) : ?>
              <div class="skill-card glass tone-<?php echo ($i % 4) + 1; ?>"><?php echo $skill; ?></div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="experience" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow"><span class="eyebrow-dot"></span>Experience</p>
          <h2><?php echo $experience_heading; ?></h2>
        </div>
        <div class="stack-list">
          <?php foreach ($work_experience as $job) : ?>
            <article class="experience-card glass">
              <div class="experience-header">
                <h3><?php echo $job['job_title']; ?></h3>
                <span><?php echo $job['duration']; ?></span>
              </div>
              <h4><?php echo $job['company']; ?></h4>
              <p><?php echo $job['description']; ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="education" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow"><span class="eyebrow-dot"></span>Education</p>
          <h2><?php echo $education_heading; ?></h2>
        </div>
        <div class="stack-list">
          <?php foreach ($education as $edu) : ?>
            <article class="experience-card glass">
              <div class="experience-header">
                <h3><?php echo $edu['degree']; ?></h3>
                <span><?php echo $edu['duration']; ?></span>
              </div>
              <h4><?php echo $edu['institution']; ?></h4>
              <?php if (!empty($edu['description'])) : ?>
                <p><?php echo $edu['description']; ?></p>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="projects" class="section container reveal">
        <div class="section-heading">
          <p class="eyebrow"><span class="eyebrow-dot"></span>Projects</p>
          <h2><?php echo $projects_heading; ?></h2>
        </div>
        <div class="projects-grid">
          <?php foreach ($projects as $i => $project) : ?>
            <article class="project-card glass tone-<?php echo ($i % 4) + 1; ?>">
              <span class="project-icon" aria-hidden="true"></span>
              <h3><?php echo $project['name']; ?></h3>
              <p><?php echo $project['description']; ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    </main>

<?php require_once('footer.php'); ?>
