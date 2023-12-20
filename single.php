<?php

/** 
* Template Name: Шаблон записи 
* Template Post Type: post
*/

get_header( $name );
?>


<body>

<div class="article__container relative z-[-1] max-w-none">
    <div class="post-top p-[4.45%] flex flex-col gap-[30px]">
        <div class="article-header flex flex-col gap-[15px] items-center">
            <img class=' w-[100%] max-w-[328px] h-[328px] object-cover' src="<?php the_field('pic') ?>" alt="">
            <h2 class='orb-f font-[600] text-[30px] text-center'>
                <?php echo get_the_title() ?>
            </h2>
            <p class='font-[300] text-center'><?php  echo the_field('short-descr') ?></p>
        </div>
        <div class='flex flex-col gap-[20px] items-center'>
        <?php echo get_the_content() ?>
        </div>
    </div>

</div>


    </body>
    </html>


<?php
    get_footer( $name );
?>