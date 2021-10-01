<?php get_header(); ?>

<?php $hero = get_field('hero'); ?>

<div class="banner top-banner" id="startchange">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-xl-12">
        <div class="banner-bg">
          <div class="banner-caption">
            <h1><?php echo $hero['title']; ?></h1>

            <div class="banner-btn">
              <a href="<?php echo $hero['link']; ?>" class="custom-btn enquire-btn">
                <?php echo $hero['link_text']; ?><i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $chooseUs = get_field('choose_us'); ?>

<section class="sections choose-us">
  <div class="container-fluid">
    <div class="section-title text-center">
      <h2><?php echo $chooseUs['section_heading']; ?></h2>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="choose-box">
          <img src="<?php echo $chooseUs['left_side_icon_top']; ?>" />

          <div class="inner">
            <h5><?php echo $chooseUs['left_side_title_top']; ?></h5>

            <p><?php echo $chooseUs['left_side_paragraph_top']; ?></p>
          </div>
        </div>

        <div class="choose-box">
          <img src="<?php echo $chooseUs['left_side_icon_bottom']; ?>" />

          <div class="inner">
            <h5><?php echo $chooseUs['left_side_title_bottom']; ?></h5>

            <p><?php echo $chooseUs['left_side_paragraph_bottom']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="choose-center-img text-center">
          <img src="<?php echo $chooseUs['center_image']; ?>" />
        </div>
      </div>

      <div class="col-lg-4">
        <div class="choose-box">
          <img src="<?php echo $chooseUs['right_side_icon_top']; ?>" />

          <div class="inner">
            <h5><?php echo $chooseUs['right_side_title_top']; ?></h5>

            <p><?php echo $chooseUs['right_side_paragraph_top']; ?></p>
          </div>
        </div>

        <div class="choose-box">
          <img src="<?php echo $chooseUs['right_side_icon_bottom']; ?>" />

          <div class="inner">
            <h5><?php echo $chooseUs['right_side_title_bottom']; ?></h5>

            <p><?php echo $chooseUs['right_side_paragraph_bottom']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $args = array(  
        'post_type' => 'virtual_events',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    ); 

$virtual = new WP_Query( $args ); ?>

<section class="sections virtual">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo get_field('virtual_event'); ?></h2>
    </div>

    <div class="row justify-content-center">

        <?php  if ( have_posts() ) : 
            while ( $virtual->have_posts() ) : $virtual->the_post(); ?>
              
              <div class="col-lg-4 col-md-6">
                <div class="virtual-box">
                  <div class="view">
                    <img src="<?php echo get_field('image'); ?>" />

                    <div class="mask">
                      <p>
                      <?php echo get_field('image_paragraph'); ?>
                      </p>
                    </div>
                  </div>

                  <h5><?php echo the_title(); ?></h5>
                </div>
              </div>

            <?php endwhile;
          else : ?>
              <h1>No Virtual Event Found</h1>;
       <?php endif; ?>

       <?php wp_reset_postdata(); ?>

    </div>
  </div>
</section>

<?php $logo = array(  
        'post_type' => 'client_logo',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    ); 

$client_logo = new WP_Query( $logo ); ?>

<section class="sections client">
  <div class="container">
    <div class="section-title text-center">
      <h2>Our Clienteles</h2>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-theme" id="client">
          
          <?php  if ( have_posts() ) : 
              while ( $client_logo->have_posts() ) : $client_logo->the_post(); ?>

                <div class="item">
                  <div class="client-box">
                    <img src="<?php echo get_field('client_logo'); ?>" />
                  </div>
                </div>

              <?php endwhile;
            else : ?>
                <h1>No Logo Found</h1>;
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $contact = get_field('contact'); ?>

<div class="enquire" id="enquire">
  <div class="container-fluid">
    <div class="row parent-row align-items-center">
      <div class="col-lg-5 no-padding">
        <div class="enquire-box">
          <h2><?php echo $contact['contact_title']; ?></h2>

          <p><?php echo $contact['contact_paragraph']; ?></p>
        </div>
      </div>
      <div class="col-lg-7 no-padding">
        <div class="form-container">
          <div class="section-title">
            <h2>Get in touch <br />with us</h2>

            <div class="enquire-cta">
              <i class="fas fa-phone-alt"></i>

              <a href="tel:+65 6208 7038 ">+<?php echo $contact['phone_number']; ?></a>
            </div>

            <div class="enquire-cta">
              <i class="fas fa-envelope"></i>

              <a href="mailto:infosg@sg.eventionapp.com ">
                <?php echo $contact['email_address']; ?>
              </a>
            </div>
          </div>

          <?php $contact='[contact-form-7 id="133" title="Contact form 1"]'?>
          <?php echo do_shortcode($contact);?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
 