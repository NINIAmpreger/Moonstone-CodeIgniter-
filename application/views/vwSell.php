<style>
.s-t-r-title, .s-t-r-con{color:#ffffff;}
</style>
<div id="fullpage">
   <div class="section rv" id="section0">
      <div class="intro">
         <div class="section-banner">
            <div class="section-banner-right">
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/car-icon-new.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">We Buy Direct</div>
                     <div class="s-b-r-box-r-sub-title">We buy dateless registration for our stock</div>
                  </div>
               </div>
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/quick-icon.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">Quick and Simple</div>
                     <div class="s-b-r-box-r-sub-title">We have an easy process in place, which allows you to have no hassle when it comes to selling your private registration with us.</div>
                  </div>
               </div>
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/valuse-icon.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">Great Value</div>
                     <div class="s-b-r-box-r-sub-title">Our extensive knowledge means you’ll always get a fair price.</div>
                  </div>
               </div>
            </div>
            <div class="section-banner-text">Examples of the type of plates we buy</div>
         </div>
		 
		 <div class="section-banner-right-mobile">
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/car-icon-new.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">We Buy Direct</div>
                     <div class="s-b-r-box-r-sub-title">We buy dateless registration for our stock</div>
                  </div>
               </div>
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/quick-icon.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">Quick and Simple</div>
                     <div class="s-b-r-box-r-sub-title">We have an easy process in place, which allows you to have no hassle when it comes to selling your private registration with us.</div>
                  </div>
               </div>
               <div class="section-banner-right-box">
                  <div class="s-b-r-box-left"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/valuse-icon.png" alt="Car Icon"/></div>
                  <div class="s-b-r-box-right">
                     <div class="s-b-r-box-r-title">Great Value</div>
                     <div class="s-b-r-box-r-sub-title">Our extensive knowledge means you’ll always get a fair price.</div>
                  </div>
               </div>
            </div>
		 
         <div class="section-banner-bottom">
            <div class="section-banner-bottom-inn">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="s-t-left">
                           <div class="s-t-icon"><img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/check-icon.png" alt="Check Icon"/></div>
                           <div class="s-t-title">Request a valuation</div>
                           <a href="<?php echo base_url(); ?>sell#secondPage"><button type="button" class="br-brd-btn" id="req_btn" style="background: #ffffff;color:#000000!important;">Request now</button></a>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="s-t-r-title">When Moonstone values your private Number plate we look at a number of key elements to determine a fair price.</div>
                        <div class="s-t-r-con">
                           <ul>
                              <li>Age and rarity</li>
                              <li>Popularity of the name or initials represented.</li>
                              <li>Desirability of numbers (for example, low numbers are the most sought after)</li>
                              <li>Comparable current and historical prices.</li>
                           </ul>
                        <p>Please note, you do not have to accept our valuation if you do not agree with it. Although setting the price high may delay the likelihood of a potential buyer, setting the price lower can result in a much quicker transaction but this is not necessarily promised.</p>
                        <p>Once a buyer has been found Moonstone will contact you directly to arrange for the necessary documentation to be completed so that the transfer can be finalised along with a smooth sale.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section blackbg" id="section2">
      <div class="intro">
         <div class="reg-section-new">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="your-reg-tag"><span>YOUR REG</span></div>
                     <div class="your-reg-tag-title">Please Enter your Contact Details:</div>
                     <div class="your-reg-tag-form">
                        <div class="sell-process">&nbsp;</div>
                        <div id="sell-msgquot">Your details have been sent successfully</div>
                        <form id="GetSell" action="javascript:void(0);" method="POST" onsubmit="return chkSellRegister()" autocomplete="off">
                           <div class="halffield">
                              <div class="halffield-inn">
                                 <input name="FirstName" id="FirstName" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your first name','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="First Name" value="<?php echo $first_name; ?>" /> 
                              </div>
                           </div>
                           <div class="halffield">
                              <div class="halffield-inn">
                                 <input name="LastName" id="LastName" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your last name','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Last Name" value="<?php echo $last_name; ?>"/>
                              </div>
                           </div>
                           <div class="halffield">
                              <div class="halffield-inn">
                                 <input name="EnquiryPhoneNumber" maxlength="20" id="EnquiryPhoneNumber" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your contact number','form-control focus'); clearText(this.id,'','Please enter your valid contact number','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Telephone number" /> 
                              </div>
                           </div>
                           <div class="halffield">
                              <?php
                                $email_read_only="";
                                if($email!=""){
                                $email_read_only="readonly";
                                }
                                ?>
                              <div class="halffield-inn">
                                 <input name="EnquiryEmail" id="EnquiryEmail" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your email','form-control focus'); clearText(this.id,'','Please enter your valid email','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Email" value="<?php echo $email; ?>" <?php echo $email_read_only; ?> />
                              </div>
                           </div>
                           <div class="halffield">
                              <div class="halffield-inn">
                                 <input name="Numberplate" id="Numberplate" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your registration here','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Enter your registration here"/>
                              </div>
                           </div>
                           <div class="halffield">
                              <div class="halffield-inn">
                                 <input name="Addnote" id="Addnote" maxlength="50" type="text" class="form-control" placeholder="Add a note"/>
                              </div>
                           </div>
						   <div class="halffield">
                              <div class="halffield-inn">
                                 <select class="form-control" name="EnquiryHereUs" id="EnquiryHereUs">
                                    <option value="">Where did you here about us?</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram </option>
                                    <option value="Google">Google</option>
                                    <option value="YouTube">YouTube</option>
                                    <option value="Linkedin">Linkedin </option>
                                    <option value="Billboards (Preston)">Billboards (Preston)</option>
                                    <option value="Referral">Referral </option>
                                    <option value="Other">Other</option>
								       </select>
                              </div>
                           </div>
                           <div class="form-btn-sec">
                              <button type="submit" class="brd-btn">submit</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="promote">
            <div class="promote-bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        <h1>Promote your plate</h1>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="promote-box">
                           <div class="promote-box-title">The types of plates we do buy.</div>
                           <div class="promote-box-inn">
                              <span class="promo-tag"><a href="<?php base_url() ?>buy">1 EAW</a></span>
                              <span class="promo-tag"><a href="<?php base_url() ?>buy">EAW 1</a></span>
                              <span class="promo-tag"><a href="<?php base_url() ?>buy">1 EW</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="promote-box">
                           <div class="promote-box-title">The types of plates we don’t buy.</div>
                           <div class="promote-box-inn">
                              <span class="promo-tag"><a href="javascript:void(0);">G12 WWW</a></span>
                              <span class="promo-tag"><a href="javascript:void(0);">KA61 MMM</a></span>
                              <span class="promo-tag"><a href="javascript:void(0);">AD61 AAA</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section plans whitekbg" id="section3">
      <div class="slide" id="slide1">
         <div class="intro">
            <h1>Pricing a registration plate for sale</h1>
            <h2 class="mb-2">Price is important to you the seller, and to the customer. Our experienced professionals will
               provide you with the best valuation for FREE 
            </h2>
            <h2>Boost the sale of your plate via 'Moonstone' social media platforms by choosing one of the packages below.</h2>
            <div class="plans-box">
               <div class="container">
                  <div class="row">
                     <?php 
                     $sr_count=0;
                     if(is_array($packages) && count($packages) > 0) {
                     foreach ($packages as $vals) { $sr_count++;

                      ?>
                     <div class="col-md-4">
                        <div class="planbg-box" data-id="<?php echo $vals->id;?>">
                           <div class="header">
                              <div class="promote-box-title"><?php echo $vals->name;?></div>
                              <div class="promote-box-price">£<?php echo $vals->price;?></div>
                           </div>
                           <div class="plan-content">
                              <div class="title"><?php echo $vals->sort_desc;?></div>
                              <div class="sub-title"><?php echo $vals->desc;?></div>
                           </div>
                        </div>
                     </div>
                     <?php 
                     } 
                     }
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>js/fullpage.js"></script>
<script src="<?=HTTP_ASSETS_PATH_CLIENT?>js/sell-page.js?ver=11111" type="text/javascript"></script>
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['#ffffff', '#000000', '#ffffff'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['First page', 'Second page', 'Third and last page'],
        responsiveWidth: 900,
        afterResponsive: function(isResponsive){

        }

    });
</script>