<div class="blue-bar"></div>

<div class="container">
  <div id="resume" class="row">
      <div class="col-md-12">
        <h1>R&#233sum&#233</h1>
        <div class="row">
            <div class="col-md-4">
              <h2>George Mason University</h2>
              <h4><i>B.S. Computer Science (Exp, Fall 2015)</i></h4>
              <p>
                During my education at GMU, I studied subjects such as data structuring, algorithm analysis, security, concurrency, and low level architectures.
              </p>
            </div>
            <div class="col-md-4">
              <h2>SimonComputing Inc.</h2>
              <h4><i>Jr. Developer, Nov 2012 - Jun 2013 </i></h4>
              <p>
                I designed and developed Java Enterprise applications for medium to large scale projects using agile development techniques. All projects employed test driven development, normal form standarization of SQL models, and rapid prototyping tools for efficent and effective coding.
              </p>                  
            </div>
            <div class="col-md-4">
              <h2>Skills</h2>
              <h4><i>By Experience</i></h4>
              <ul>
                <li>HTML/CSS</li>
                <li>Java Enterprise</li>                
                <li>C/C++</li>
                <li>SQL</li>
                <li>PHP/JS</li>
                <li>Virtualization</li>
              </ul>
            </div>
          </div>
      </div>
  </div>
  <div id="work" class="row">
    <div class="col-md-12">
      <h1>Work</h1>
        <div class="row">
          <div class="col-md-4">
            <h2>Reddit Scraper</h2>
            <p>
              As part of a class project, I co-developed a proof of concept reddit user scraper. Using concurrent programming techniques and JSoup,
            </p>
          </div>
          <div class="col-md-4">

          </div>
          <div class="col-md-4">

          </div>
        </div>
    </div>
  </div>
  <div id="blog" class="row">
    <div class="col-md-12">
      <h1><a href="<?php echo bloginfo('url') . '/blog/'; ?>">Blog</a></h1>
        <div class="row">
          <?php
            query_posts('showposts=3');
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>

              <div class="col-md-4">  
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php include 'post-details.php'; ?>
                <p><?php the_excerpt(__('(more…)')); ?></p>
                <a class="continued" href="<?php the_permalink(); ?>">Keep reading</a>
              </div>

          <?php
            endwhile;

            else:
              echo ('<h3>No content found</h3>');
            endif;
          ?>
      </div>
    </div>
  </div>
</div>