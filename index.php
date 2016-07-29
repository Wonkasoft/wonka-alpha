<?php  get_header(); ?>
 <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
       <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664; &#xFE0E;</button>
       <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654; &#xFE0E;</button>
       <li class="is-active orbit-slide">
          <img class="orbit-image" src="<?php $wa_slider1_url = get_theme_mod('wa_slider1' ); echo wp_get_attachment_url( $wa_slider1_url ); ?>" alt="Space">
          <figcaption class="orbit-caption">Space, the final frontier.</figcaption>
      </li>
      <li class="orbit-slide">
          <img class="orbit-image" src="<?php $wa_slider2_url = get_theme_mod('wa_slider2' ); echo wp_get_attachment_url( $wa_slider2_url ); ?>" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
      </li>
      <li class="orbit-slide">
          <img class="orbit-image" src="<?php $wa_slider3_url = get_theme_mod('wa_slider3' ); echo wp_get_attachment_url( $wa_slider3_url ); ?>" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
      </li>
      <li class="orbit-slide">
          <img class="orbit-image" src="<?php $wa_slider4_url = get_theme_mod('wa_slider4' ); echo wp_get_attachment_url( $wa_slider4_url ); ?>" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
      </li>
  </ul>
  <nav class="orbit-bullets">
   <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
   <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
   <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
   <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
</nav>
</div>
<content class="content-wrap text-center"> <!-- For Main Content Area -->
    <div class="small-12 small-centered columns"> <!-- For Content Hide and Show For Active Page -->
       <div class="row"> <!-- Main row for all content area -->
        <div class="small-12 small-centered columns"> <!-- For Content Items Wrap -->

         <div class="row"> <!-- First Line of content-->
           <div class="small-12 small-centered columns wa-content-text"><h1><strong>INLAND <span class="toner">Toner</span></strong> is a family owned business that specializes in providing customers with
            high quality remanufactured toner cartridges. We use OEM cartridges from
            manufacturers such as Dell, HP, Canon, Brother, and Lexmark.</h1></div>
        </div>
        <div class="row"> <!-- Second Line of content-->
          <div class="small-6 medium-4 columns"><img src="<?php  echo get_template_directory_uri(). '/images/Dell_Logo.png';  ?>"  alt="Dell Logo" /></div>
          <div class="small-6 medium-4 columns"><img src="<?php  echo get_template_directory_uri(). '/images/hp-logo2.png';  ?>" alt="HP Logo" /></div>
          <div class="small-12 medium-4 columns"><img src="<?php  echo get_template_directory_uri(). '/images/Canon_Logo.png'; ?>" alt="Canon Logo" /></div>
      </div>
      <div class="row"> <!-- Third Line of content-->
          <div class="small-6 columns"><img src="<?php  echo get_template_directory_uri(). '/images/Lexmark-logo.png'; ?>" alt="Lexmark Logo" /></div>
          <div class="small-6 columns"><img src="<?php  echo get_template_directory_uri(). '/images/brother_Logo.png'; ?>" alt="Brother Logo" /></div>
      </div>
      <div class="row"> <!-- Fourth Line of content-->
          <div class="small-12 small-centered columns wa-content-text"><h3>We offer a cost effective alternative to buying retail and our products are
            manufactured in the USA in facilities with ISO 9000 and STMC certifications
            which means that we have standardized processes in place to manufacture, test and
            facilitate continuous improvement of our toner cartridges.</h3></div>
        </div>
        <div class="row"> <!-- Fifth Line of content-->
          <div class="small-12 small-centered columns"><input id='wa-center-quote' src='' type="button" name="Quote Button" value="Get A Quote" /></div>
      </div>
  </div>
</div>
</div>


</content>


<?php get_footer(); ?>