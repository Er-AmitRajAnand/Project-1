<?php require_once('header.php'); ?>
      <div class="hero-glow" aria-hidden="true"></div>
      <section id="home" class="hero-content container">
        <div class="hero-text">
          <p class="eyebrow"><?php echo $eyebrow_hello; ?></p>
          <h1 class="display-name"><?php echo $name; ?></h1>
          <p class="lead"><?php echo $lead; ?></p>
          <div class="hero-actions">
            <a href="#projects" class="btn btn-primary">View Projects</a>
            <a href="#contact" class="btn btn-secondary">Contact Me</a>
            <a href="<?php echo $resume_url; ?>" class="btn btn-ghost" download>Download Resume</a>
          </div>
          <div class="stat-row">
            <?php foreach ($stats as $stat) : ?>
              <div class="stat-block">
                <span class="stat-value"><?php echo $stat['value']; ?></span>
                <span class="stat-label"><?php echo $stat['label']; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="hero-card" aria-label="Profile preview">
          <span class="hero-card-tag">STATUS</span>
          <div class="avatar">AR</div>
          <h3><?php echo $hero_card_heading; ?></h3>
          <p><?php echo $hero_card_text; ?></p>
          <span class="hero-card-stamp">Available</span>
        </div>
      </section>
    </header>

    <main>
      <section id="about" class="section container reveal">
        <div class="section-heading">
          <span class="section-number">01</span>
          <div>
            <p class="eyebrow">About Me</p>
            <h2><?php echo $about_heading; ?></h2>
          </div>
        </div>
        <div class="about-grid">
          <p><?php echo $about_p1; ?></p>
          <p><?php echo $about_p2; ?></p>
        </div>
      </section>

      <section id="skills" class="section alt-bg reveal">
        <div class="container">
          <div class="section-heading">
            <span class="section-number">02</span>
            <div>
              <p class="eyebrow">Skills</p>
              <h2><?php echo $skills_heading; ?></h2>
            </div>
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
          <span class="section-number">03</span>
          <div>
            <p class="eyebrow">Experience</p>
            <h2><?php echo $experience_heading; ?></h2>
          </div>
        </div>
        <div class="stack-list">
          <?php foreach ($work_experience as $i => $job) : ?>
            <article class="stack-item">
              <div class="stack-index"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
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
            <span class="section-number">04</span>
            <div>
              <p class="eyebrow">Education</p>
              <h2><?php echo $education_heading; ?></h2>
            </div>
          </div>
          <div class="stack-list">
            <?php foreach ($education as $i => $edu) : ?>
              <article class="stack-item">
                <div class="stack-index"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
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
          <span class="section-number">05</span>
          <div>
            <p class="eyebrow">Projects</p>
            <h2><?php echo $projects_heading; ?></h2>
          </div>
        </div>
        <div class="projects-grid">
          <?php foreach ($projects as $i => $project) : ?>
            <article class="project-card">
              <span class="project-index"><?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></span>
              <h3><?php echo $project['name']; ?></h3>
              <p><?php echo $project['description']; ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    </main>

<?php require_once('footer.php'); ?>
