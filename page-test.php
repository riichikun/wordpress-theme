<?php
    get_header( $name );
?>


<body>
    <h2> <?php the_title(); ?> </h2>
    <p> <?php echo get_post_meta(get_the_ID(), 'description', true) ?> </p>
    <div>

    <?php


$my_posts = get_posts( [
	'numberposts' => 5,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // suppression of filters of SQL query change
] );

foreach( $my_posts as $post ){

    setup_postdata($post);
    /*echo "<h1>" . $post->post_title . "</h1><br>";
    echo "<p>" . $post->post_content . "</p><br>";*/
}



    ?>

   <div>

   <?php the_title(); ?>
   </div>


    <?php 
    wp_reset_postdata(); // reset $post
    ?>
    </div>
</body>
</html>


<?php
    get_footer( $name );
?>