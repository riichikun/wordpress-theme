<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Literata:opsz,wght@7..72,200;7..72,300;7..72,400;7..72,500;7..72,600;7..72,700;7..72,800;7..72,900&family=Orbitron&display=swap" rel="stylesheet">
    <?php 
        wp_head(  );
    ?>
    <title>Alwaysmind</title>
</head>


<header class='px-[4.45%] lg:px-[2.8%] xl:px-[12%]'>
    <div class="header-top py-[12px]">
        <div class="logo">
            <a href='/wppsychologyblog/' class='up-t orb-f text-gray text-[20px]'>Alwaysmind</a>
            <div class="logo-description">
                <p class='text-[10px] lg:text-[12px]'>Psychological blog</p>
                <p class='text-[10px] lg:text-[12px]'>alwaysmind.com</p>
            </div>
        </div>
        <!-- icons -->
        <div class="icons hidden md:flex ">
            <a href='' class="fa fa-telegram" aria-hidden="true"></a>
            <a href='' class="fa fa-youtube-play" aria-hidden="true"></a>
            <a href='' class="fa fa-instagram" aria-hidden="true"></a>
        </div>
    </div>
    <div class="fixed lg:relative flex lg:flex-row-reverse items-center justify-between px-[4.45%] lg:px-0 py-[12px] bottom-0 left-0 nav-bar w-[100%] bg-mbcg h-[56px]">
        <i class="fa fa-search text-[32px] lg:text-[24px]" aria-hidden="true"></i>
        <div id="Burger" class="menu-burger lg:hidden">
            <span></span>
        </div>

    <!--------------------------------------------------------- nav ---------------------------------------------------->

        <nav id='HeaderNav' class='z-[100] hidden lg:h-fit lg:w-[100%]  lg:items-center lg:flex lg:py-[0px] bg-mbcg'>
            <?php wp_nav_menu( $args = array() ) ?>
        </nav>



    </div>
    <div>
   
    </div>
</header>

