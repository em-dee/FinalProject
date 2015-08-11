<?php $pageTitle = "Contact Us";
    $pageDescription = "";
      include "top.inc" ?>

<div class="wrapper">
<div class="form">
                <form action="" method="post" id="contact-form">
                   <div>
                     <h2>Schedule a consultation today:</h2>
                   </div>
                   <div class="formblock">
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" value="" size="8" tabindex="1" spellcheck="false" required="required">
                    <br class="clear">
                   </div>

                  <div class="formblock">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" spellcheck="false" value="" maxlength="255" tabindex="2" required="required">
                    <br class="clear">
                  </div>
                
                  <div class="formblock">
                    <label for="comments">What can we help you with?</label>
                    <textarea id="comments" name="comments" spellcheck="true" rows="5" cols="30" tabindex="6"></textarea>
                    <br class="clear">
                  </div>
                    
                   <div class="buttonSpacer">&nbsp;</div>
	               <input id="submit" name="submit" type="submit" value="Submit" tabindex="7" >

                </form>
            </div>
</div>	
	<br class="clear">

<?php include "bottom.inc" ?>