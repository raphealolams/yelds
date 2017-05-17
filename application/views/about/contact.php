<!-- section: team -->
<section id="maincontent" class="inner">
<div class="container">
	<div class="row">
		<div class="span6">
		<h4>Find US</h4>
     
			<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAbgmICLN4YSqUPNrRwBxaK6Z6fzELTm-w&q=Space+Needle,Seattle+WA" allowfullscreen></iframe></div>
			<p>&nbsp;</p>	
        </div>					
	
		
		<div class="span6">
			<h4>Talk To Us</h4>
					<!-- section: contact -->
				<div class="cform" id="contact-form">
                    <?php if(count($message)):?>
				<div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong><?php echo $message?></strong>
				</div>
                    <?php endif?>
                <?php echo form_open()?>	
				<div class="field your-name form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
				</div>
                <div class="field your-email form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" />   
                </div>
				<div class="field subject form-group">
				    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />
                </div>
				<div class="field message form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                </div>
				<input type="submit" value="send" name="send" class="btn btn-success pull-left">
                    <?php echo form_close()?>
			</div>
        </div>
		<!-- ./span12 -->
	</div>
</div>
</section>
	