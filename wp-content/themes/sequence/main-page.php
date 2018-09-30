<?php
/**
 * Template name: Главная страница 
 **/
get_header(); ?>
<body>

    <div class="loader">
      <img  class="preloader-img" src="<?php echo get_template_directory_uri() ?>/assets/img/preloader-img.png" alt="">
      <div class="sk-three-bounce loader_inner">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
<!-- ===============
section HeaderBody 
====================-->
	

<section class="headerBody" >
   <?php
    /**
     * header-body hook.
     *
     * @hooked seq_secHeaderBody_start - 10
     * @hooked seq_headerBody_product_start - 20
     * @hooked headerBody_product__name - 30
     * @hooked headerBody_product__3dimg - 40
     * @hooked headerBody_product__descr - 50
     * @hooked seq_headerBody_product_end - 55
     * @hooked headerBody_descr_start - 60
     * @hooked headerBody_aside_start - 70
     * @hooked aside_content - 80
     * @hooked mobile_product - 90
     * @hooked headerBody_aside_end - 100
     * @hooked item_show_directions - 110
     * @hooked headerBody_btn_cta - 120
     * @hooked headerBody_descr_end - 130
     * @hooked seq_secHeaderBody_end - 140
     *
     */
    do_action('seq_headerBody_parts');
    ?>
</section>

<!-- ================   
 section WEOFFER 
 ==================-->
	<section class="weoffer">

   <?php
    /**
     * we-offer hook.
     *
     * @hooked seq_offer_content - 20
     *
     */
    do_action('seq_weOffer_parts');
    ?>
	</section>
<!-- ================   
section MainSlider 
==================-->
  <section class="mainSlider" >
    	
    <?php
     /**
      * main-slider hook.
      *
      * @hooked seq_slider_start - 10
      * @hooked seq_slider_title - 20
      * @hooked seq_slider_body -  30
      * @hooked seq_slider_end - 40
      *
      */
     do_action('seq_slider_parts');
     ?>
  </section>

  <!-- ==============
    section sequence36Frame / slider  
  ================ -->
  <section class="sequence36Frame" >
    <?php
     /**
      * sequence-36Frame hook.
      *
      * @hooked seq_36Frame_start - 10
      * @hooked seq_36Frame_content - 30
      * @hooked seq_36Frame_end -  40
      *
      */
     do_action('seq_36Frame_parts');
     ?>
	</section> 	

<!-- ========================
	secion navigationConsole  
===========================-->
    <section class="navigationConsole" >
      <object   
        class="svg-bg-seq"
        type="image/svg+xml"
        data="<?php bloginfo('template_url'); ?>/assets/img/svg-bg/svg-sequence-bg.svg"
        img src="<?php bloginfo('template_url'); ?>/assets/img/svg-bg/svg-sequence-bg.png">
      </object>
    		
      <?php
       /**
        * nav-console hook.
        *
        * @hooked seq_navPlayer_title - 10
        * @hooked seq_navPlayer_start - 20
        * @hooked seq_navPlayer_left -  30
        * @hooked seq_navPlayer_right - 40
        * @hooked seq_navPlayer_end - 50
        *
        */
       do_action('seq_navPlayer_parts');
       ?>
    </section>

  
<!-- =================
section YOUR OPTION 
 ===================-->
	<section class="yourOption" >

		
          <?php
           /**
            * your-option hook.
            *
            * @hooked seq_yourOption_start - 10
            * @hooked seq_yourOption_title - 20
            * @hooked seq_yourOption_bod -  30
            * @hooked seq_yourOption_end - 40
            *
            */
           do_action('seq_yourOption_parts');
           ?>

	</section >

<!--  ======================
section  catalog
==========================-->
	<section class="explGoods" id="catalog" >
    <div class="explGoods_wrap">
        <?php
         /**
          * catalog hook.
          *
          * @hooked seq_catalog_title - 10
          * @hooked seq_catalog_tab - 20
          * @hooked seq_catalog_photo - 30
          * @hooked seq_catalog_gif - 40
          * @hooked seq_catalog_video - 50
          *
          */
         do_action('seq_catalog_parts');
         ?>
		</div>
	</section>

<!--  ================
section youtube 
====================-->
<section class="aboutWork" >
   <?php
    /**
     * youtube-video hook.
     *
     * @hooked seq_youtube_content - 20
     *
     */
    do_action('seq_youtube_parts');
    ?>
</section>
<!-- ==================
section price calculator
 ===================  -->
<section class="price" id="price" >
	  <?php
     /**
      * price hook.
      *
      * @hooked seq_price_content - 10
      *
      */
     do_action('seq_price_parts');
     ?>
</section>
<!-- ================
section custumer
================== -->
<section class="customers" >
      <?php
       /**
        * custumer hook.
        *
        * @hooked seq_custumer_content - 10
        *
        */
       do_action('seq_custumer_parts');
       ?>
</section>
<!-- ===================
section ctaBlock
==================== -->
<section class="ctaBlock" >
  <div class="ctaBlock-arrow-top" data-paroller-factor="-0.35" data-paroller-type="foreground" data-paroller-direction="vertical"></div>

      <?php
       /**
        * ctaBlock hook.
        *
        * @hooked seq_ctaBlock_content - 10
        *
        */
       do_action('seq_ctaBlock_parts');
       ?>
</section>


<!--  Modal Window -->

        <?php
         /**
          * modal-popup hook.
          *
          * @hooked seq_modal_content - 10
          *
          */
         do_action('seq_modal_parts');
         ?>
           



	<div class="hidden"></div>




  
<?php
get_footer();




