<div class="page-bar"></div>

<div class="page-spacer"></div>

<div class="container first">
  <div id="about" class="row">
      <div class="col-md-12">
        <h1><a href="<?php echo bloginfo('url') . '/about/'; ?>">About</a></h1>
        <div class="row">
            <div class="col-md-4 card-wrapper">
              <div class="card">
                <h3>George Mason University</h3>
                <h4><i>B.S. Computer Science (Exp, Fall 2015)</i></h4>
                <p>
                  During my education at GMU, I studied subjects such as data structuring, algorithm analysis, security, concurrency, and low level architectures.
                </p>
              </div>
            </div>
            <div class="col-md-4 card-wrapper">
              <div class="card">
                <h3>SimonComputing Inc.</h3>
                <h4><i>Jr. Developer, Nov 2012 - Jun 2013 </i></h4>
                <p>
                  I designed and developed Java Enterprise applications for medium to large scale projects using agile development techniques. All projects employed test driven development, normal form standarization of SQL models, and rapid prototyping tools for efficent and effective coding.
                </p>
              </div>             
            </div>
            <div class="col-md-4 card-wrapper">
              <div class="card">
                <h3>Skills</h3>
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

<div class="page-spacer"></div>

<div class="container">
  <div id="work" class="row">
    <div class="col-md-12">
      <h1><a href="<?php echo bloginfo('url') . '/work/'; ?>">Work</a></h1>
        <div class="row">
          <?php
            // Define array query parameters
            $the_query = new WP_Query( array(
                'cat' => 15,
                'showposts' => 3,
              ) );
            // The loop
            query_posts('cat=15');
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-4 excerpt card-wrapper">  
              <div class="card">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php include 'post-details.php'; ?>
                <?php the_excerpt(__('(more…)')); ?>
                <!--
                <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                -->
              </div>
            </div>
          <?php
            endwhile;
            wp_reset_postdata();         
            else:
              echo ('<div class="col-md-12"><h3>No content found</h3></div>');
            endif;
          ?>
      </div>
    </div>
  </div>
</div>

<div class="page-spacer"></div>

<div class="container">
  <div id="blog" class="row">
    <div class="col-md-12">
      <h1><a href="<?php echo bloginfo('url') . '/blog/'; ?>">Blog</a></h1>
        <div class="row">
          <?php
            // Define array query parameters
            $the_query = new WP_Query( array(
                'cat' => -15,
                'showposts' => 3,
              ) );
            // The loop
            query_posts('cat=15');
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-md-4 excerpt card-wrapper">  
              <div class="card">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php include 'post-details.php'; ?>
                <?php the_excerpt(__('(more…)')); ?>
                <!--
                <a class="button" href="<?php the_permalink(); ?>">Read More</a>
                -->
              </div>
            </div>
          <?php
            endwhile;
            wp_reset_postdata();         
            else:
              echo ('<div class="col-md-12"><h3>No content found</h3></div>');
            endif;
          ?>
      </div>
    </div>
  </div>
</div>
<div class="container" id="contact">
  <div id="contact-form" class="row">
    <div class="col-md-12">
      <h1><a href="<?php echo bloginfo('url') . '/contact/'; ?>">Contact</a></h1>
      <div class="row">
        <div class="col-md-12">
          <?php echo do_shortcode( '[contact-form-7 id="36" title="Home contact form"]' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>