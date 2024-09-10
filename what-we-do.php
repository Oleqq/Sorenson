<?php
/*
Template Name: What We Do Page
*/
get_header('secondary'); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main branch-main" role="main">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            
            <section class="branch-hero">

                <img src="./img/branch-bg.jpg" alt="">

                <div class="container">

                    

                    <div class="branch-hero__wrapper">

                        <div class="branch-hero__header">
                            <h5>
                                mission statement
                            </h5>
                        </div>

                        <div class="branch-hero__title">    
                            <h4>A HEADLINE ABOUT THE DIFFERENT BRANCHES GOES HERE</h4>
                        </div>

                    </div>
                    

                </div>

            </section>

            <section class="what-we-do">

                <div class="container">

                    <div class="swiper-custom-controls">

                        <!-- Pagination -->
                        <div class="custom-pagination">
                            <span class="we-do__slider-pagination-current">01</span>
                            <span class="we-do__slider-pagination-separator"> / </span>
                            <span class="we-do__slider-pagination-total">03</span>
                        </div>

                        <!-- Navigation buttons -->
                        <div class="custom-navigation">
                            <div class="custom-swiper-button-prev we-do__slider-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-1cd699c10ec624164" aria-disabled="true">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.4004" cy="21.6489" r="20" transform="rotate(-180 21.4004 21.6489)" stroke="#212322" stroke-width="2"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.048 33.2022C21.2433 33.3974 21.5599 33.3974 21.7551 33.2022C21.9504 33.0069 21.9504 32.6903 21.7551 32.4951L11.7192 22.4592L34.002 22.4592C34.2781 22.4592 34.502 22.2353 34.502 21.9592C34.502 21.683 34.2781 21.4592 34.002 21.4592L11.7193 21.4592L21.7551 11.4233C21.9504 11.228 21.9504 10.9115 21.7551 10.7162C21.5599 10.5209 21.2433 10.5209 21.048 10.7162L10.1586 21.6056C9.96332 21.8009 9.96332 22.1175 10.1586 22.3127L21.048 33.2022Z" fill="#212322"></path>
                                    <path d="M21.7551 33.2022L22.1087 33.5557L21.7551 33.2022ZM21.048 33.2022L21.4016 32.8486L21.4016 32.8486L21.048 33.2022ZM21.7551 32.4951L22.1087 32.1415L22.1087 32.1415L21.7551 32.4951ZM11.7192 22.4592L11.7192 21.9592C11.517 21.9592 11.3347 22.081 11.2573 22.2678C11.1799 22.4546 11.2226 22.6697 11.3656 22.8127L11.7192 22.4592ZM34.002 22.4592L34.002 22.9592L34.002 22.4592ZM34.002 21.4592L34.002 21.9592L34.002 21.4592ZM11.7193 21.4592L11.3657 21.1056C11.2227 21.2486 11.1799 21.4637 11.2573 21.6505C11.3347 21.8373 11.517 21.9592 11.7193 21.9592L11.7193 21.4592ZM21.7551 11.4233L22.1087 11.7769L22.1087 11.7769L21.7551 11.4233ZM21.7551 10.7162L22.1087 10.3626L22.1087 10.3626L21.7551 10.7162ZM21.048 10.7162L20.6945 10.3626L20.6945 10.3626L21.048 10.7162ZM10.1586 21.6056L9.80502 21.2521L9.80502 21.2521L10.1586 21.6056ZM10.1586 22.3127L9.80502 22.6663L9.80502 22.6663L10.1586 22.3127ZM21.4016 32.8486L21.4016 32.8486L20.6945 33.5557C21.085 33.9463 21.7182 33.9463 22.1087 33.5557L21.4016 32.8486ZM21.4016 32.8486L21.4016 32.8486L22.1087 33.5557C22.4992 33.1652 22.4992 32.532 22.1087 32.1415L21.4016 32.8486ZM11.3656 22.8127L21.4016 32.8486L22.1087 32.1415L12.0728 22.1056L11.3656 22.8127ZM34.002 21.9592L11.7192 21.9592L11.7192 22.9592L34.002 22.9592L34.002 21.9592ZM34.002 21.9592L34.002 22.9592C34.5542 22.9592 35.002 22.5114 35.002 21.9592L34.002 21.9592ZM34.002 21.9592L35.002 21.9592C35.002 21.4069 34.5542 20.9592 34.002 20.9592L34.002 21.9592ZM11.7193 21.9592L34.002 21.9592L34.002 20.9592L11.7193 20.9592L11.7193 21.9592ZM21.4016 11.0697L11.3657 21.1056L12.0728 21.8127L22.1087 11.7769L21.4016 11.0697ZM21.4016 11.0697L21.4016 11.0697L22.1087 11.7769C22.4992 11.3863 22.4992 10.7532 22.1087 10.3626L21.4016 11.0697ZM21.4016 11.0697L21.4016 11.0697L22.1087 10.3626C21.7182 9.97212 21.085 9.97212 20.6945 10.3626L21.4016 11.0697ZM10.5121 21.9592L21.4016 11.0697L20.6945 10.3626L9.80502 21.2521L10.5121 21.9592ZM10.5121 21.9592L10.5121 21.9592L9.80502 21.2521C9.4145 21.6426 9.4145 22.2758 9.80502 22.6663L10.5121 21.9592ZM21.4016 32.8486L10.5121 21.9592L9.80502 22.6663L20.6945 33.5557L21.4016 32.8486Z" fill="#212322"></path>
                                </svg>
                                    
                            </div>
                            <div class="custom-swiper-button-next we-do__slider-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-1cd699c10ec624164" aria-disabled="false">
                                <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="21.5996" cy="21.6489" r="20" stroke="#212322" stroke-width="2"></circle>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.952 10.0957C21.7567 9.9004 21.4401 9.9004 21.2449 10.0957C21.0496 10.2909 21.0496 10.6075 21.2449 10.8028L31.2808 20.8387H8.99805C8.7219 20.8387 8.49805 21.0626 8.49805 21.3387C8.49805 21.6148 8.7219 21.8387 8.99805 21.8387H31.2807L21.2449 31.8745C21.0496 32.0698 21.0496 32.3864 21.2449 32.5817C21.4401 32.7769 21.7567 32.7769 21.952 32.5817L32.8414 21.6922C33.0367 21.497 33.0367 21.1804 32.8414 20.9851L21.952 10.0957Z" fill="#212322"></path>
                                    <path d="M21.2449 10.0957L20.8913 9.74211L21.2449 10.0957ZM21.952 10.0957L21.5984 10.4492V10.4492L21.952 10.0957ZM21.2449 10.8028L20.8913 11.1563V11.1563L21.2449 10.8028ZM31.2808 20.8387V21.3387C31.483 21.3387 31.6653 21.2169 31.7427 21.03C31.8201 20.8432 31.7773 20.6281 31.6344 20.4851L31.2808 20.8387ZM31.2807 21.8387L31.6343 22.1923C31.7773 22.0493 31.8201 21.8342 31.7427 21.6474C31.6653 21.4605 31.483 21.3387 31.2807 21.3387V21.8387ZM21.2449 31.8745L20.8913 31.521H20.8913L21.2449 31.8745ZM21.2449 32.5817L20.8913 32.9352L20.8913 32.9352L21.2449 32.5817ZM21.952 32.5817L22.3055 32.9352L22.3055 32.9352L21.952 32.5817ZM32.8414 21.6922L32.4879 21.3387L32.4879 21.3387L32.8414 21.6922ZM32.8414 20.9851L32.4879 21.3387L32.4879 21.3387L32.8414 20.9851ZM21.5984 10.4492L21.5984 10.4492L22.3055 9.74211C21.915 9.35159 21.2818 9.35159 20.8913 9.74211L21.5984 10.4492ZM21.5984 10.4492V10.4492L20.8913 9.74211C20.5008 10.1326 20.5008 10.7658 20.8913 11.1563L21.5984 10.4492ZM31.6344 20.4851L21.5984 10.4492L20.8913 11.1563L30.9272 21.1923L31.6344 20.4851ZM8.99805 21.3387H31.2808V20.3387H8.99805V21.3387ZM8.99805 21.3387V20.3387C8.44576 20.3387 7.99805 20.7864 7.99805 21.3387H8.99805ZM8.99805 21.3387H7.99805C7.99805 21.891 8.44576 22.3387 8.99805 22.3387V21.3387ZM31.2807 21.3387H8.99805V22.3387H31.2807V21.3387ZM21.5984 32.2281L31.6343 22.1923L30.9272 21.4851L20.8913 31.521L21.5984 32.2281ZM21.5984 32.2281V32.2281L20.8913 31.521C20.5008 31.9115 20.5008 32.5447 20.8913 32.9352L21.5984 32.2281ZM21.5984 32.2281H21.5984L20.8913 32.9352C21.2818 33.3257 21.915 33.3257 22.3055 32.9352L21.5984 32.2281ZM32.4879 21.3387L21.5984 32.2281L22.3055 32.9352L33.195 22.0458L32.4879 21.3387ZM32.4879 21.3387V21.3387L33.195 22.0458C33.5855 21.6552 33.5855 21.0221 33.195 20.6316L32.4879 21.3387ZM21.5984 10.4492L32.4879 21.3387L33.195 20.6316L22.3055 9.74211L21.5984 10.4492Z" fill="#212322"></path>
                                    </svg>
                                    
                            </div>
                        </div>                    

                    </div>


                    <div class="we-do__slider">

                        <div class="swiper-wrapper">

                            <div class="we-do swiper-slide">

                            
                                    
                                    <div class="we-do__wrapper">
                    
                                        <div class="we-do__img small">
                    

                                            <div class="half-circle-mask we-do-img left-round">
                                                <img src="./img/we-do-1.png" alt="">
                                            </div>


                                            <div class="half-circle-mask we-do-img left-round">
                                                <img src="./img/we-do-2.png" alt="">
                                            </div>

                                        </div>
                    
                                        <div class="we-do__block">
                    
                                            <div class="we-do__count">
                    
                                                01 / 04
                    
                                            </div>
                    
                                            <div class="we-do__title">
                                                <h5>
                                                    IMPACT FOUNDATION
                                                </h5>
                                            </div>
                    
                                            <div class="we-do__text">
                    
                                                <p>
                                                    The Sorenson Impact Foundation was created to advance the flow of capital into innovative, scalable solutions to the world’s most pressing needs. Foundations historically use only 5-10% of their assets each year to advance their missions.
                                                </p>
                    
                                            </div>
                    
                                            <div class="we-do__tags">
                        
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                            </div>
                    
                                            <a href="" class="section__link">
                                                Go To Website
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                            <a href="" class="section__link">
                                                Learn More
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                        </div>
                    
                                    </div>
                    
                                
                    
                            </div>
                    
                            <div class="we-do swiper-slide">
                    
                            
                                    
                                    <div class="we-do__wrapper reverted">
                    
                                        <div class="we-do__img big">
                    
                                            <div class="half-circle-mask we-do-img right-round">
                                                <img src="./img/we-do-3.png" alt="">
                                            </div>
                                            
                                            <div class="half-circle-mask we-do-img right-round">
                                                <img src="./img/we-do-4.png" alt="">
                                            </div>
                                            
                                            
                    
                                        </div>
                    
                                        <div class="we-do__block">
                    
                                            <div class="we-do__count">
                    
                                                02 / 04
                    
                                            </div>
                    
                                            <div class="we-do__title">
                                                <h5>
                                                    IMPACT FOUNDATION
                                                </h5>
                                            </div>
                    
                                            <div class="we-do__text">
                    
                                                <p>
                                                    The Sorenson Impact Foundation was created to advance the flow of capital into innovative, scalable solutions to the world’s most pressing needs. Foundations historically use only 5-10% of their assets each year to advance their missions.
                                                </p>
                    
                                            </div>
                    
                                            <div class="we-do__tags">
                        
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                            </div>
                    
                                            <a href="" class="section__link">
                                                Go To Website
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                            <a href="" class="section__link">
                                                Learn More
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                        </div>
                    
                                    </div>
                    
                                
                    
                            </div>
                    
                            <div class="we-do swiper-slide">
                    
                                
                                    
                                    <div class="we-do__wrapper">
                    
                                        <div class="we-do__img small">
                    

                                            <div class="half-circle-mask we-do-img left-round">
                                                <img src="./img/we-do-1.png" alt="">
                                            </div>


                                            <div class="half-circle-mask we-do-img left-round">
                                                <img src="./img/we-do-2.png" alt="">
                                            </div>

                                        </div>
                    
                    
                                        <div class="we-do__block">
                    
                                            <div class="we-do__count">
                    
                                                03 / 04
                    
                                            </div>
                    
                                            <div class="we-do__title">
                                                <h5>
                                                    IMPACT FOUNDATION
                                                </h5>
                                            </div>
                    
                                            <div class="we-do__text">
                    
                                                <p>
                                                    The Sorenson Impact Foundation was created to advance the flow of capital into innovative, scalable solutions to the world’s most pressing needs. Foundations historically use only 5-10% of their assets each year to advance their missions.
                                                </p>
                    
                                            </div>
                    
                                            <div class="we-do__tags">
                        
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                            </div>
                    
                                            <a href="" class="section__link">
                                                Go To Website
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                            <a href="" class="section__link">
                                                Learn More
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                        </div>
                    
                                    </div>
                    
                                
                    
                            </div>
                    
                            <div class="we-do swiper-slide">
                    
                                
                                    
                                    <div class="we-do__wrapper reverted">
                    
                                        <div class="we-do__img big">
                    
                                            <div class="half-circle-mask we-do-img right-round">
                                                <img src="./img/we-do-3.png" alt="">
                                            </div>
                                            
                                            <div class="half-circle-mask we-do-img right-round">
                                                <img src="./img/we-do-4.png" alt="">
                                            </div>
                                            
                                            
                    
                                        </div>
                    
                                        <div class="we-do__block">
                    
                                            <div class="we-do__count">
                    
                                                04 / 04
                    
                                            </div>
                    
                                            <div class="we-do__title">
                                                <h5>
                                                    IMPACT FOUNDATION
                                                </h5>
                                            </div>
                    
                                            <div class="we-do__text">
                    
                                                <p>
                                                    The Sorenson Impact Foundation was created to advance the flow of capital into innovative, scalable solutions to the world’s most pressing needs. Foundations historically use only 5-10% of their assets each year to advance their missions.
                                                </p>
                    
                                            </div>
                    
                                            <div class="we-do__tags">
                        
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 01
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 02
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    LONG TAG 03  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 04  
                    
                                                </div>
                    
                                                <div class="we-do__tag">
                    
                                                    TAG 05  
                    
                                                </div>
                    
                                            </div>
                    
                                            <a href="" class="section__link">
                                                Go To Website
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                            <a href="" class="section__link">
                                                Learn More
                                                <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M-6.22887e-07 1.25L14.25 1.25L14.25 15.5" stroke="#596B63" stroke-width="1.5"></path>
                                                    <path d="M14.0972 1.40332L0.613281 15.5001" stroke="#596B63" stroke-width="1.5"></path>
                                                </svg>
                                            </a>
                    
                                        </div>
                    
                                    </div>
                    
                                
                    
                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <section class="newsletter">

                <div class="container">

                    <div class="newsletter__wrapper">
                        
                        <div class="newsletter__subtitle">
                            
                            <h6>
                                SUBSCRIBE TO NEWSLETTER
                            </h6>

                        </div>

                        <div class="newsletter__title">
                            
                            <h4>
                                Stay up to date with the latest news from Sorenson Impact Group
                            </h4>

                        </div>

                        
                        <div class="container">


                            <div class="newsletter__wrapper">
                                
                                <input class="ui-input" type="text" placeholder="Name*" />
                                <input class="ui-input email-input" type="email" placeholder="Email*" />
                                <button class="newsletter__submit" type="submit">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.749999 1.45606L15 1.45605L15 15.7061" stroke="#596B63" stroke-width="1.5" />
                                        <path d="M14.8472 1.60938L1.36328 15.7061" stroke="#596B63" stroke-width="1.5" />
                                    </svg>
                                </button>

                            </div>



                        </div>
                        
                        
                        

                    </div>

                </div>

            </section>    


            <?php
        endwhile;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>

