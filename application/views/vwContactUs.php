<script src="<?=HTTP_ASSETS_PATH_CLIENT?>js/contact-us.js" type="text/javascript"></script>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 col-12">
         <div class="sell-form">
            <h3>Please Enter your<br>
               <strong>Contact Details:</strong>
            </h3>
            <div class="contact-us-process">&nbsp;</div>
            <div id="contact-us-msgquot">Your contact details have been sent successfully</div>
            <form id="GetContact" class="app-search mb-10 contact-form" name="GetContact" action="#" method="POST" onsubmit="return chkContactUs()" autocomplete="off">
               <input name="FirstName" id="FirstName" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your name','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="First Name"/> 
               <!-- <input type="text" placeholder="Last Name" class="form-control"> -->
               <input name="LastName" id="LastName" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your name','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Last Name"/>
               <input name="EnquiryPhoneNumber" maxlength="20" id="EnquiryPhoneNumber" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your contact number','form-control focus'); clearText(this.id,'','Please enter your valid contact number','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Contact number"/> 
               <input name="EnquiryEmail" id="EnquiryEmail" maxlength="50" type="text" class="form-control" onfocus="clearText(this.id,'','Please enter your email','form-control focus'); clearText(this.id,'','Please enter your valid email','form-control focus');" onblur="FillText(this.id,'','form-control');" placeholder="Email" />
               <textarea name="EnquiryMessage" id="EnquiryMessage" rows="4" placeholder="Message" class="form-control" onfocus="clearText(this.id,'','Please enter your message','form-control focus');" onblur="FillText(this.id,'','form-control');"></textarea> 
               <button class="request-btn">SEND</button>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<div class="homcar-shadow con">  
   <img src="<?php echo HTTP_ASSETS_PATH_CLIENT; ?>images/sell-bg.jpg" alt="homepage"/>
</div>
</div>