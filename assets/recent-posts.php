<?php
/**
 * Custom functions
 */


/*recent posts list start*/
add_shortcode( 'list_recent_posts', 'list_recent_posts' );
function list_recent_posts( $atts ) {
    ob_start();
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'posts' => 4,
        'category' => '',
        'ptype' => '',
        'class' => '',
    ), $atts ) );

    $class = $atts['class'];

    // define query parameters based on attributes
    $options = array(
        'posts_per_page' => $posts,
        'post_type' => $ptype,
        'category_name' => $category
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>

<ul class="media recent-posts <?php echo $class; ?>">

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <li class="media-listitem">

<?php
  if(has_post_thumbnail()):
    ?><a class="pull-left" href="<?php the_permalink(); ?>">
    <div class="thumbnail">
      <?php
        if ( has_post_thumbnail() ) {
        the_post_thumbnail('post_thumbnail');
        }
      ?> 
    </div>
  </a>

<?php else: ?>

<?php endif; ?>


<?php
  if(has_post_thumbnail()): ?>
    <div class="media-content marginlft-90">
<?php else: ?>
    <div class="media-content">
<?php endif; ?>


                        <div class="caption">
                            <h4 class="media-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('%s', 'heels'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h4>
                            
                            <p><?php the_excerpt(); ?></p>

                        </div>
                </div>
    </li>
<?php endwhile;
            wp_reset_postdata(); ?>


</ul>
<?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

/*recent posts list end*/

/*recent posts carousel start*/
add_shortcode( 'carousel_recent_posts', 'carousel_recent_posts' );
function carousel_recent_posts( $atts ) {
    wp_enqueue_script( 'slick-js' );
    wp_enqueue_script( 'slick-init' );

    ob_start();
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'posts' => 4,
        'category' => '',
        'ptype' => '',
        'class' => '',
    ), $atts ) );

    $class = $atts['class'];

    // define query parameters based on attributes
    $options = array(
        'posts_per_page' => $posts,
        'post_type' => $ptype,
        'category_name' => $category
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>

        <?php echo ' <div class="'.$class.'"> '; ?>


            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div>
                <div class="thumbnail thumb-carousel">
                    <?php if(has_post_thumbnail()): ?>
                        <a class="thumbnail-link" href="<?php the_permalink(); ?>">
                            <div class="thumbnail-img">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail('post_thumbnail_lg'); } ?>
                            </div>
                        </a>

                    <?php else: ?>

                    <?php endif; ?>

                    <div class="caption caption-fixedh">
                        <h3 class="thumb-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('%s', 'heels'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>


        </div>
        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}

/*recent posts carousel end*/

/*recent course list start*/
add_shortcode( 'list_recent_courses', 'list_recent_courses' );
function list_recent_courses( $atts ) {
    ob_start();
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'posts' => 4,
        'category' => '',
        'ptype' => '',
        'class' => '',
        'course_category' => '',
    ), $atts ) );

    $class = $atts['class'];

    // define query parameters based on attributes
    $options = array(
        'posts_per_page' => $posts,
        'post_type' => $ptype,
        'category_name' => $category,
        'course_category' => $course_category,
        'orderby'=>'title',
		'order'=>'ASC',
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>

<div class="table-responsive">
  <table class="table table-1 table-striped">
    <thead>
      <tr>
        <th class="col-md-3">Course Name</th>
        <th class="col-md-3">Course Category</th>
        <th class="col-md-3">Instructor</th>
        <th class="col-md-3">Course Number</th>
      </tr>
    </thead>
    <tbody>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <tr>
        <td scope="row">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </td>
        <td>
          <?php list_hierarchical_terms(); ?>
        </td>
        <td>
          <?php the_field( 'course_instructor' ); ?>
        </td>
        <td>
          <?php the_field( 'course_number' ); ?>
        </td>
      </tr>


<?php endwhile;
            wp_reset_postdata(); ?>

    </tbody>
  </table>
</div>

<?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

/*recent course list end*/



/* Recent course list Data Tables */

add_shortcode( 'datatables_recent_courses', 'datatables_recent_courses' );
function datatables_recent_courses( $atts ) {

    wp_enqueue_script( 'dataTables-min' );
    wp_enqueue_script( 'dataTables-init' );

    ob_start();
    // define attributes and their defaults
    extract( shortcode_atts( array (
        'posts' => 4,
        'category' => '',
        'ptype' => '',
        'class' => '',
        'course_category' => '',
    ), $atts ) );

    $class = $atts['class'];

    // define query parameters based on attributes
    $options = array(
        'posts_per_page' => $posts,
        'post_type' => $ptype,
        'category_name' => $category,
        'course_category' => $course_category,
        'orderby'=>'title',
		'order'=>'ASC',
    );
    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>

<div class="table-responsive">
  <table id="coursesTable" class="table table-1 table-striped">
    <thead>
      <tr>
        <th class="col-md-3">Course Name</th>
        <th class="col-md-3">Course Category</th>
        <th class="col-md-3">Instructor</th>
        <th class="col-md-3">Course Number</th>
      </tr>
    </thead>
    <tbody>

<?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <tr>
        <td scope="row">
          <strong><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a></strong>
        </td>
        <td>
          <?php list_hierarchical_terms(); ?>
        </td>
        <td>
          <?php the_field( 'course_instructor' ); ?>
        </td>
        <td>
          <?php the_field( 'course_number' ); ?>
        </td>
      </tr>


<?php endwhile;
            wp_reset_postdata(); ?>

    </tbody>
  </table>
</div>

<?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

/* Recent course list Data Tables end */