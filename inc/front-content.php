<div class="blue-bar"></div>

<div class="gray xtra-padding">
  <div class="container">
    <div id="resume" class="row">
        <div class="col-md-12">
          <h1><a href="#">R&#233sum&#233</a></h1>
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
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90"
                  aria-valuemin="0" aria-valuemax="100" style="width:90%">
                    <span>HTML/CSS</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85"
                  aria-valuemin="0" aria-valuemax="100" style="width:85%">
                    <span>Java/Java Enterprise</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100" style="width:72%">
                    <span>C/C++</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span>SQL</span>
                  </div>
                </div>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="65"
                  aria-valuemin="0" aria-valuemax="100" style="width:65%">
                    <span>PHP/JS</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="container">
  <div id="work" class="row">
    <div class="col-md-12">
      <h1><a href="#">Work</a></h1>
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
</div>
<div class="gray">
  <div class="container">
    <div id="blog" class="row">
      <div class="col-md-12">
        <h1><a href="<?php echo bloginfo('url') . '/blog/'; ?>">Blog</a></h1>
          <div class="row">
            <?php
              query_posts('showposts=3');
              if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                <div class="col-md-4 excerpt">  
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php include 'post-details.php'; ?>
                  <?php the_excerpt(__('(more…)')); ?>
                  <a class="button" href="<?php the_permalink(); ?>">Read More</a>
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
</div>
<div class="container">
  <div id="contact" class="row">
    <div class="col-md-8">
      <h1><a href="#">Contact</a></h1>
      <form id="contact-form">
          <input type="text" name="name" placeholder="Name">
          <input type="email" name="email" id="emailInput" placeholder="Email">
          <textarea placeholder="Message..."></textarea>
          <input type="submit" name="send" id="sendBtn" value="Send" />
        </form>
      </div>
    <div class="col-md-4">
      <h1>Links</h1>

    </div>
  </div>
</div>