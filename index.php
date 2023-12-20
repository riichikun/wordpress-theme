<?php
    get_header( $name );
?>


<body>
    <div class="main min-h-[1000px] lg:w-[100%]">
    <div class="posts-scroll flex flex-nowrap gap-[20px] p-[4.45%] mb-[30px] overflow-auto">     
    <?php





$my_posts = get_posts( [
	'numberposts' => 5,
    'offset' => 0,
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
	setup_postdata( $post );

	// output: the_title() ...

    ?>

    <div class='flex flex-col gap-[20px] w-[260px] min-w-[260px] lg:w-[20%] lg:min-w-0 '>
        <img class=" w-[260px] md:w-[280px] lg:w-[100%]  h-[260px] md:h-[280px] object-cover mx-auto" src="<?php the_field('pic') ?>" alt="">
        <div class='post-prewiev__block h-fit '>
            <div class="post-text__block  flex flex-col gap-[16px] px-[20px]">
                <a href="<?php echo get_the_guid() ?>" class='orb-f'><?php echo get_the_title() ?></a>
                <p><?php  echo the_field('short-descr') ?></p>
            </div>

            
        </div>
    </div>

    <?php
    };
    wp_reset_postdata(); // reset $post
    ?>




</div>



<div>
    <?php
        $my_posts = get_posts( [
            'numberposts' => 2,
            'offset' => 5,
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
	        setup_postdata( $post );

	// output: the_title() ...

        ?>
        <div class="flex gap-[4.45%] posts-row w-[100%] h-fit px-[4.45%] mb-[15px] md:mb-[0px]">
            <img class='w-[136px] h-[136px] min-w-[136px] object-cover' src="<?php the_field('pic') ?>" alt="">
            <div class="posts-row-text__block flex flex-col gap-[4.45%]">
                <a href="<?php echo get_the_guid() ?>" class="orb-f"><?php echo get_the_title() ?></a>
                <p><?php  echo the_field('short-descr') ?></p>
            </div>
        </div>
  

    <?php
    };
    wp_reset_postdata(); // reset $post
    ?>
</div>
    </div>
</body>
</html>


<?php
    get_footer( $name );
?>