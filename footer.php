<footer class='h-fit bg-mbcg z-[90] relative p-[4.45%]'>
    <div class="footer-conctact__block flex gap-[40px] md:gap-[0px] flex-col md:flex-row md:w-[100%] md:mb-[40px]">
        <!-- nav pages -->
        <div class="footer-navigation flex flex-col md:flex-row gap-[10px] md:w-[50%]">
            <div class="sitemap__block md:w-[50%]">
                <h3 id="FooterNavPagesToggler" class='footer-nav-toggler text-[#fff] text-[16px] orb-f'>Sitemap</h3>
                <nav class=' footer-nav hidden h-[0px] mt-[24px] md:flex md:flex-col md:h-fit' id="FooterNavPages">
                    <a class='text-[#fff] hidden md:inline' href="">About us</a>
                    <a class='text-[#fff] hidden md:inline' href="">Copyright Policy</a>
                    <a class='text-[#fff] hidden md:inline' href="">Partnership</a>
                    <a class='text-[#fff] hidden md:inline' href="">Vacancies</a>
                </nav>
            </div>
            <!-- nav categories -->
            <div class="categories__block md:w-[50%]">
                <h3 id='FooterNavCategoriesToggler' class="orb-f text-[#fff] ">Categories</h3>
                <nav id='FooterNavCategories' class='hidden mt-[24px] md:flex md:flex-col md:h-fit'>
                    <?php wp_nav_menu( $args = array() ) ?>
                </nav>
            </div>
        </div>
        <div class="icons-block flex flex-col gap-[25px] mb-[40px] lg:flex-row gap-[10px] lg:w-[50%]">
            <div class="watch__block lg:w-[50%]">
                <h3 class='text-[#fff] orb-f'>Watch us</h3>
                <div class="icons flex mt-[16px]">
                    <a href='' class="fa fa-telegram text-[#fff]" aria-hidden="true"></a>
                    <a href='' class="fa fa-youtube-play text-[#fff]" aria-hidden="true"></a>
                    <a href='' class="fa fa-instagram text-[#fff]" aria-hidden="true"></a>
                </div>
            </div>
            <div class="contact__block lg:w-[50%]">
                <h3 class='text-[#fff] orb-f'>Contact us</h3>
                <div class="icons flex mt-[16px] md:w-[100%]">
                    <a href='' class="fa fa-telegram text-[#fff]" aria-hidden="true"></a>
                    <a href='' class="fa fa-whatsapp text-[#fff]" aria-hidden="true"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[12px]">
        <div class="logo">
            <a href='/wppsychologyblog/' class='up-t orb-f text-[#fff] text-[20px]'>Alwaysmind</a>
            <div class="logo-description">
                <p class='text-[10px] lg:text-[12px] text-[#fff]'>Psychological blog</p>
                <p class='text-[10px] lg:text-[12px] text-[#fff]'>alwaysmind.com</p>
            </div>
        </div>
    </div>    
    <p class='text-[#fff]' >Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, quasi veniam itaque earum unde dolores.</p>
</footer>