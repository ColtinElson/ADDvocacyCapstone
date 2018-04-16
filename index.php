<?php wp_header(); ?>
<!-- Page Content -->
<div class="container">
    <!-- Introduction Row -->
    <br />
    <br />
    <br />
    <h1 class="my-4">Welcome</h1>

    <!-- Carousel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() . '/images/coaching.jpg'?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() . '/images/educators.jpg'?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() . '/images/employers.jpg'?>" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() . '/images/help.jpg'?>" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <h2 class="mt-4">Testimonials</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
            <p>
                <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
            </p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Place holder for Testimonials Slider -->
    <div class="row">
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 my-4">
            <div class="card">
                <img class="card-img-top" src="http://placehold.it/300x200" alt="">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- Coaches -->
    <div class="col-lg-12">
        <h2 class="my-4">Our Team</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
            <h3>John Smith
                <small>Job Title</small>
            </h3>
            <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
    </div>
    <div class="row">
        <a href="#" class="btn btn-primary">Meet the Whole Team!</a>
    </div>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-header">
                    <div class="date"><?php the_time( 'M j y' ); ?></div>
                    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="author"><?php the_author(); ?></div>
                </div><!--end post header-->
                <div class="entry clear">
                    <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                    <?php wp_link_pages(); ?> </div>
                <!--end entry-->
                <div class="post-footer">
                    <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                </div><!--end post footer-->
            </div><!--end post-->
        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        <div class="navigation index">
            <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
            <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
        </div><!--end navigation-->
    <?php else : ?>
    <?php endif; ?>

    <br />
    <br />
    <br />
</div>

<?php wp_footer(); ?>
</body>
