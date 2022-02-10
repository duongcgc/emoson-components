<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly 
?>

<?php if ($custom_text) { ?>
   <div class="header__module">
      <h3 class="title">
         <?php if ($url_text) { ?>
            <a href="<?php echo $url_text; ?>" title="">
         <?php } else { ?>
            <span>
         <?php } ?>
            <?php echo $custom_text; ?>
         <?php if ($url_text) { ?>
            </a>
         <?php } else { ?>
            </span>
         <?php } ?>
      </h3>
      <?php if ($infor_text) { ?>
         <p class="infor"><?php echo $infor_text; ?></p>
      <?php } ?>
   </div>
<?php } ?>

<div class="content__module">
   <div class="slick-slider slidershow-slider posts__module slidershow__module">
      <div class="item">
         <div class="post">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/slider-01.jpg'; ?>" alt="Life style" />
               </a>
            </div>
            <div class="content">
               <div class="content-text">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">Vietnam’s Magic Mid-Autumn Festival 2021</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-button">
                     <a href="#" title="" class="btn wp-block-button__link" tabindex="0">View post <i class="fal fa-arrow-right icon"></i></a>
                  </div>
               </div>
               <div class="content-image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/slider-02.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
            </div>
         </div>
      </div> <!-- end item -->
      <div class="item">
         <div class="post">
            <div class="image">
               <a href="#" title="">
                  <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/slider-01.jpg'; ?>" alt="Life style" />
               </a>
            </div>
            <div class="content">
               <div class="content-text">
                  <div class="post-cat">
                     <a href="#" title="">Lifeslite</a>
                  </div>
                  <h4 class="post-name">
                     <a href="#" title="">Vietnam’s Magic Mid-Autumn Festival 2021</a>
                  </h4>
                  <ul class="post-meta">
                     <li>
                        <a href="#" title="">Devon Lane</a>
                     </li>
                     <li>
                        <span>October 25, 2019</span>
                     </li>
                     <li>
                        <span>1,3k view</span>
                     </li>
                     <li><span>1900 share</span></li>
                  </ul>
                  <div class="post-button">
                     <a href="#" title="" class="btn wp-block-button__link" tabindex="0">View post <i class="fal fa-arrow-right icon"></i></a>
                  </div>
               </div>
               <div class="content-image">
                  <a href="#" title="">
                     <image src="<?php echo GCOD_AUTUMN_ELEMENTS_URL . 'assets/images/slider-02.jpg'; ?>" alt="Life style" />
                  </a>
               </div>
            </div>
         </div>
      </div> <!-- end item -->
   </div>
</div>