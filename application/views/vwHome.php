<?php
    $base_url=base_url();
?>
<div class="container-fluid">
   <div class="row ipadsearch">
      <div class="col-md-8 col-12 align-self-center">
      </div>
      <div class="col-md-4 col-12 align-self-center wow fadeIn">
         <div class="h-top-title">
            <h3> <strong>Enter your dream reg</strong></h3>
            <form class="app-search min-height-sixty" action="<?php echo $base_url?>reg" method="get" class="search" role="search">
               <span class="search-icon">SEARCH</span>
               <input type="text" name="search" id="search" maxlength="8" style="text-transform: uppercase;" class="form-control" placeholder="Search">
               <button style="display: none;" type="submit" class="srh-btn"><i class="ti-search"></i></button>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="content-text">
   <div class="content-text-inn wow fadeInUp">
      <div class="content-text-inn-sec">
         <div class="content-text-inn-sec-inner">
            <div class="content-text-inn-sec-inner-title"><a href="<?php echo $base_url; ?>buy">Specials</a></div>
            <div class="content-text-inn-sec-inner-content"><?php echo $content_page->special_content; ?></div>
         </div>
      </div>
      <div class="content-text-inn-sec">
         <div class="content-text-inn-sec-inner">
            <div class="content-text-inn-sec-inner-title">discounts</div>
            <div class="content-text-inn-sec-inner-content"><?php echo $content_page->discount_content; ?></div>
         </div>
      </div>
      <div class="content-text-inn-sec">
         <div class="content-text-inn-sec-inner b-none">
            <div class="content-text-inn-sec-inner-title">
               <span class="r-star"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/white-star.png"/></span>
               <span class="r-star"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/white-star.png"/></span>
               <span class="r-star"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/white-star.png"/></span>
               <span class="r-star"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/white-star.png"/></span>
               <span class="r-star"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/white-star.png"/></span>
            </div>
            <div class="content-text-inn-sec-inner-content"><?php echo $content_page->star_content; ?></div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<span class="video-sec">
<!-- <span class="n-h-platesec">
   <img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/number-plate.png"/>
   
   </span> -->
<div class="video-b-section">
   <div class="homcar-shadow">   
      <img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/black-shadow.png" alt="homepage"/>
   </div>
   <video class="homcar-video" id="bgvid" playsinline autoplay muted loop>
      <source src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>video/MOONSTONE-Commercial-High.mp4" type="video/mp4">
   </video>
</div>
<div class="bottom-section">
   <div class="container">
      <div class="row wow fadeInUp" data-wow-duration="1s">
         <div class="col-md-12">
            <h2><span>About</span> Private plates</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-12 r-line wow fadeInUp" data-wow-duration="2s">
            <div class="bottom-inn-sec-icon">
               <img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/car-icon.png"/>
            </div>
            <div class="bottom-inn-sec">
               <?php echo $content_page->left_box_content; ?>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 r-line wow fadeInUp" data-wow-duration="2s">
            <div class="bottom-inn-sec-icon"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/car-icon.png"/></div>
            <div class="bottom-inn-sec">
               <?php echo $content_page->center_box_content; ?>
            </div>
         </div>
         <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-duration="2s">
            <div class="bottom-inn-sec-icon"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/car-icon.png"/></div>
            <div class="bottom-inn-sec">
               <?php echo $content_page->right_box_content; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bottom-feed-section">

<?php 
if(isset($instagramposts) && $instagramposts){
?>
<div class="container-fluid">
   <div class="row wow fadeInDown" data-wow-duration="1s">
      <div class="col-md-12">
         <h2 class="insta-post-main-title">
         Instagram posts
      </div>
   </div>
   <div class="row i-tile">
      <?php
         function time_elapsed_string($datetime, $full = false) {
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);
        
            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;
        
            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }
        
            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
        
         foreach($instagramposts as $post){
            $username = isset($post["username"]) ? $post["username"] : "";
            $caption = isset($post["caption"]) ? $post["caption"] : "";
            $media_url = isset($post["media_url"]) ? $post["media_url"] : "";
            $permalink = isset($post["permalink"]) ? $post["permalink"] : "";
            $media_type = isset($post["media_type"]) ? $post["media_type"] : "";
            $timestamp = isset($post["timestamp"]) ? $post["timestamp"] : "";
            $ago =  time_elapsed_string($timestamp);
            ?>
            <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.1s">
               <div class="insta-post-sec">
                  <div class="insta-post-thumb">
                     <?php 
                        if($media_type=="VIDEO")
                        { 
                           echo "<video controls style='width:100%; display: block !important;'>
                           <source src='{$media_url}' type='video/mp4'>
                           Your browser does not support the video tag.
                           </video>";
                        }
                        else
                        {
                           echo "<img src='{$media_url}'/>";
                        }
                     ?>
                  </div>
                  <div class="insta-post-thumb-bottom">
                     <div class="insta-post-thumb-bottom-left">
                        <div class="insta-id">
                           <div class="insta-id-inn">MT</div>
                        </div>
                        <div class="insta-title">
                           <div class="insta-title-text"><?php echo $username?></div>
                           <div class="insta-title-smalltext">@ <?php echo $username ?> | <span><?php echo $ago?></span></div>
                        </div>
                     </div>
                     <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
                  </div>
               </div>
            </div>
            <?php
         }
      ?>
   </div>
</div>
<?php } ?>
<!--   
<div class="container-fluid">
   <div class="row wow fadeInDown" data-wow-duration="1s">
      <div class="col-md-12">
         <h2 class="insta-post-main-title">
         Instagram posts
      </div>
   </div>
   <div class="row i-tile">
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.1s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/t1.jpg"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/t2.jpg"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.3s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/t3.jpg"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.4s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/t4.jpg"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
   </div>
   <div class="row i-tile">
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.5s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/fp5.png"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.6s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/fp6.png"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.7s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/fp7.png"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 wow fadeInRight" data-wow-delay="0.8s">
         <div class="insta-post-sec">
            <div class="insta-post-thumb"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/fp8.png"/></div>
            <div class="insta-post-thumb-bottom">
               <div class="insta-post-thumb-bottom-left">
                  <div class="insta-id">
                     <div class="insta-id-inn">MT</div>
                  </div>
                  <div class="insta-title">
                     <div class="insta-title-text">Jordan Roddy</div>
                     <div class="insta-title-smalltext">@ jordanroddy | <span>2 mins ago</span></div>
                  </div>
               </div>
               <div class="insta-post-thumb-bottom-right"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/insta-icon.png"/></div>
            </div>
         </div>
      </div>
   </div>
</div>
-->
</div>