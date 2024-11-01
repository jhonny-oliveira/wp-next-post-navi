<style type="text/css">
a.company{
	text-decoration: none;
	font: 600 16px sens-sarif, arial, verdana;
	color: #ff2f2f;
}
select{
	padding: 3px;
	min-width: 70px;
}

}
input,
textarea{
	outline: none;
}
.wp-social-box{
	float: left;
	width: 750px;
	padding:10px;
	background-color: whiteSmoke;
	background-image: -ms-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -moz-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -o-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#F9F9F9),to(whiteSmoke));
	background-image: -webkit-linear-gradient(top,#F9F9F9,whiteSmoke);
	background-image: linear-gradient(top,#F9F9F9,whiteSmoke);
	border-color: #DFDFDF;
	-moz-box-shadow: inset 0 1px 0 #fff;
	-webkit-box-shadow: 0 5px 16px 0 black;
	box-shadow: 0 5px 16px 0 black;
	-webkit-border-radius: 10px;
	webkit-border-radius: 10px;
	border-radius: 10px;
	border-width: 1px;
	border-style: solid;
	position: relative;
	margin-bottom: 20px;
	padding: 5px;
	border-width: 1px;
	border-style: solid;
	line-height: 1;
	margin-left: 10px;
}
.wp-social-box h3 {
	font-size: 25px;
	font-weight: 600;
	padding: 7px 10px;
	margin: 0;
	line-height: 1;
	cursor: move;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	color: #0400ff;
	border-bottom-color: #DFDFDF;
	text-shadow: white 0 1px 0;
	-moz-box-shadow: 0 1px 0 #fff;
	-webkit-box-shadow: 0 5px 16px 0 black;
	box-shadow: 0 5px 16px 0 black;
	background-color: #F1F1F1;
	background-image: -ms-linear-gradient(top,#37ffe369,#37ffe369);
	background-image: -moz-linear-gradient(top,#37ffe369,#37ffe369);
	background-image: -o-linear-gradient(top,#37ffe369,#37ffe369);
	background-image: -webkit-gradient(linear,left top,left bottom,from(#37ffe369),to(#37ffe369));
	background-image: -webkit-linear-gradient(top,#37ffe369,#37ffe369);
	background-image: linear-gradient(top,#37ffe369,#37ffe369);
	margin-top: 1px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	cursor: move;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}
input[type="submit"]{
	cursor: pointer;
}
</style>
<script>
 jQuery(function($){
	
 });
</script>
<div class="wrap" style="margin-top: 30px;margin-left: 10px;max-width:1400px !important;">
<div style="width: 770px;float:left;">
<form action="<?php echo $action_url ?>" method="post">
		<input type="hidden" name="submitted" value="1" />
		<?php wp_nonce_field('wp-next-post-navi-by-kharim'); ?>
	
<div class="wp-social-box">
	<h3>WP Next Post Navi Settings</h3>
		<table class="form-table">
			<tbody>
			<tr valign="top">
					<th scope="row" style="width: 155px;">Enable Plugin</th>
					<td>
						<fieldset>
							<legend class="hidden">Active</legend>
							<label for="is_active"><input type="checkbox" name="is_active" value="1" <?php echo $settings['is_active']=="1"? 'checked="checked"': '' ; ?>  /> (check box to activate) </label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Location</th>
					<td>
						<fieldset>
							<legend class="hidden">Position</legend>
							<label for="position">
								<select name="position" id="position">
									<option value="bottom" <?php echo $settings['position']=="bottom"? 'selected="selected"': '' ; ?>>Below Post</option>
									<option value="top" <?php echo $settings['position']=="top"? 'selected="selected"': '' ; ?>>Above Post</option>
									<option value="both" <?php echo $settings['position']=="both"? 'selected="selected"': '' ; ?>>Above &amp; Below</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Navigate Within Category</th>
					<td>
						<fieldset>
							<legend class="hidden">Navigate Within Category</legend>
							<label for="nav_within_cat"><input type="checkbox" name="nav_within_cat" value="1" <?php echo $settings['nav_within_cat']=="1"? 'checked="checked"': '' ; ?>  /> (show the next post within the category) </label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Reverse Navigation</th>
					<td>
						<fieldset>
							<legend class="hidden">Reverse Navigation</legend>
							<label for="is_reversed"><input type="checkbox" name="is_reversed" value="1" <?php echo $settings['is_reversed']=="1"? 'checked="checked"': '' ; ?>  /> (Reverse Next/Previous Position) </label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">CSS Code for Links</th>
					<td>
						<fieldset>
							<legend class="hidden">CSS Code</legend>
							<label for="style_css"><textarea id="style_css" name="style_css" placeholder="text-decoration: none;" style="width: 560px;height: 140px;"><?php echo $settings['style']!=""? stripslashes($settings['style']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Use Fancy Buttons<br/><br/>Button Corners</th>
					<td>
						<fieldset>
							<legend class="hidden">Button</legend>
							<label for="is_button"><input type="checkbox" name="is_button" value="1" <?php echo $settings['is_button']=="1"? 'checked="checked"': '' ; ?>  />(uncheck to show text links)</label>
						</fieldset>
						
						
						
												<fieldset>
							<legend class="hidden">Corners</legend>
							<label for="corner">
								<select name="corner" id="corner">
									<option value="0" <?php echo $settings['corner']=="0"? 'selected="selected"': '' ; ?>>Square</option>
									<option value="10" <?php echo $settings['corner']=="10"? 'selected="selected"': '' ; ?>>Slightly Rounded</option>
									<option value="20" <?php echo $settings['corner']=="20"? 'selected="selected"': '' ; ?>>More Rounded</option>
									<option value="50" <?php echo $settings['corner']=="50"? 'selected="selected"': '' ; ?>>Fully Rounded</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>






				
				
				
				<tr valign="top">
					<th scope="row" style="width: 100px;">Use Custom Text</th>
					<td>
						<fieldset>
							<legend class="hidden">Custom Text</legend>
							<label for="is_custom">
								<select name="is_custom" id="is_custom">
									<option value="yes" <?php echo $settings['is_custom']=="yes"? 'selected="selected"': '' ; ?>>Yes</option>
									<option value="no" <?php echo $settings['is_custom']=="no"? 'selected="selected"': '' ; ?>>No</option>
								</select>
							(select 'No' to show post title)</label>
						</fieldset>
					</td>
				</tr>


				<tr valign="top">
					<th scope="row" style="width: 100px;">Previous Post Text<br/><br/>Previous Post Text Color</th>
					<td>
						<fieldset>
							<label for="custom_pre"><input type="text" name="custom_pre" size="30" placeholder="Previous Post" value="<?php echo $settings['custom_pre']!=""? stripslashes($settings['custom_pre']): ''; ?>"  /><br/><input type="text" name="custom_pre_text_color" size="30" placeholder="black" value="<?php echo $settings['custom_pre_text_color']!=""? stripslashes($settings['custom_pre_text_color']): ''; ?>"  /><br/><i>Leave color blank for default black text <br/>and white when hovered</i></label>
							<label for="custom_pre_color" style="float:right"><strong>Previous Button Color:</strong> <input type="text" name="custom_pre_color" size="8"  placeholder="#4CAF50" value="<?php echo $settings['custom_pre_color']!=""? stripslashes($settings['custom_pre_color']): ''; ?>"  /><br/><strong>Default Color:</strong> #4CAF50<br/><i>Leave color blank for default button color</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Next Post Text<br/><br/>Next Post Text Color</th>
					<td>
						<fieldset>
							<label for="custom_next"><input type="text" name="custom_next" size="30" placeholder="Next Post" value="<?php echo $settings['custom_next']!=""? stripslashes($settings['custom_next']): ''; ?>"  /><br/><input type="text" name="custom_next_text_color" size="30" placeholder="black" value="<?php echo $settings['custom_next_text_color']!=""? stripslashes($settings['custom_next_text_color']): ''; ?>"  /><br/><i>Leave color blank for default black text <br/>and white when hovered</i></label>
						
							<label for="custom_next_color" style="float:right"><strong>Next Button Color:</strong> <input type="text" name="custom_next_color" size="8" placeholder="#008CBA"  value="<?php echo $settings['custom_next_color']!=""? stripslashes($settings['custom_next_color']): ''; ?>"  /><br/><strong>Default Color:</strong> #008CBA<br/><i>Leave color blank for default button color</i></label>
						</fieldset>
					</td>
				</tr>
				
				
				
				
				<tr valign="top">
					<th scope="row" style="width: 100px;">Enable Button Shadow?</th>
					<td>
						<fieldset>
							<legend class="hidden">Shadow</legend>
							<label for="shadow">
								<select name="shadow" id="is_custom">
									<option value="yes" <?php echo $settings['shadow']=="yes"? 'selected="selected"': '' ; ?>>Yes</option>
									<option value="no" <?php echo $settings['shadow']=="no"? 'selected="selected"': '' ; ?>>No</option>
								</select>
							(select 'Yes' to enable shadow when mouse is hovered)</label>
						</fieldset>
					</td>
				</tr>				
				
				
					<tr valign="top">
					<th scope="row" style="width: 100px;">Show Next Post Coming Soon?</th>
					<td>
						<fieldset>
							<legend class="hidden">Coming Soon</legend>
							<label for="comingsoon">
								<select name="comingsoon" id="comingsoon">
									<option value="yes" <?php echo $settings['comingsoon']=="yes"? 'selected="selected"': '' ; ?>>Yes</option>
									<option value="no" <?php echo $settings['comingsoon']=="no"? 'selected="selected"': '' ; ?>>No</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
				
				
								<tr valign="top">
					<th scope="row" style="width: 100px;">Coming Soon Text<br/><br/>Coming Soon Text Color</th>
					<td>
						<fieldset>
							<label for="custom_next_sub"><input type="text" name="custom_next_sub" size="30" placeholder="Next Post Coming Soon..." value="<?php echo $settings['custom_next_sub']!=""? stripslashes($settings['custom_next_sub']): ''; ?>"  /><br/><input type="text" name="custom_next_sub_text_color" size="30" placeholder="black" value="<?php echo $settings['custom_next_sub_text_color']!=""? stripslashes($settings['custom_next_sub_text_color']): ''; ?>"  /><br/><i>Leave color blank for default black text <br/>and white when hovered</i></label>
						
							<label for="custom_next_sub_color" style="float:right"><strong>Coming Soon Button Color:</strong> <input type="text" name="custom_next_sub_color" size="8" placeholder="#008CBA"  value="<?php echo $settings['custom_next_sub_color']!=""? stripslashes($settings['custom_next_sub_color']): ''; ?>"  /><br/><strong>Default Color:</strong> #008CBA<br/><i>Leave color blank for default button color</i></label>
						</fieldset>
					</td>
				</tr>
				
								<?php/*
				<tr valign="top">
					<th scope="row" style="width: 100px;">Show Related Posts</th>
					<td>
						<fieldset>
							<legend class="hidden">Related</legend>
							<label for="related">
								<select name="related" id="related">
									<option value="yes" <?php echo $settings['related']=="yes"? 'selected="selected"': '' ; ?>>Yes</option>
									<option value="no" <?php echo $settings['related']=="no"? 'selected="selected"': '' ; ?>>No</option>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>



				<tr valign="top">
					<th scope="row" style="width: 100px;">Advertisement Spot</th>
					<td>
						<fieldset>
							<legend class="hidden">HTML AD Code</legend>
							<label for="ad_code"><textarea id="ad_code" name="ad_code" placeholder="Your ad code goes here... (leave blank to disable)" style="width: 560px;height: 240px;"><?php echo $settings['adcode']!=""? stripslashes($settings['adcode']): ''; ?></textarea></label>
						</fieldset>
					</td>
				</tr>*/?>



				<tr valign="top">
					<th scope="row" style="width: 100px;">Use Images</th>
					<td>
						<fieldset>
							<legend class="hidden">Use Images</legend>
							<label for="navi_img"><input type="checkbox" name="navi_img" value="1" <?php echo $settings['navi_img']=="1"? 'checked="checked"': '' ; ?>  />(uncheck to disable images)</label>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Previous Post Image</th>
					<td>
						<fieldset>
							<legend class="hidden">Previous Post Image</legend>
							<label for="pre_img_link"><input type="text" name="pre_img_link" placeholder="<?php bloginfo('url'); ?>/wp-content/plugins/wp-next-post-navi/img/prev.png" size="85" value="<?php echo $settings['pre_img_link']!=""? stripslashes($settings['pre_img_link']): ''; ?>"  /></label>
							<br /><span style="color: #999;">i.e. <?php bloginfo('url'); ?>/wp-content/plugins/wp-next-post-navi/img/prev.png</span>
						</fieldset>
					</td>
				</tr>
				<tr valign="top">
					<th scope="row" style="width: 100px;">Next Post Image</th>
					<td>
						<fieldset>
							<legend class="hidden">Next Post Image</legend>
							<label for="next_img_link"><input type="text" name="next_img_link" placeholder="<?php bloginfo('url'); ?>/wp-content/plugins/wp-next-post-navi/img/next.png" size="85" value="<?php echo $settings['next_img_link']!=""? stripslashes($settings['next_img_link']): ''; ?>"  /></label>
							<br /><span style="color: #999;">i.e. <?php bloginfo('url'); ?>/wp-content/plugins/wp-next-post-navi/img/next.png</span>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>
	</div><!-- End Block -->

	
	
	<div class="submit" style="float: left; display: block; width: 100%;"><input type="submit" name="Submit" value=" Save Settings " style="min-width: 100px;min-height: 30px;font-size: 14px;" /></div>
		</form>
	<div class="submit" style="float: left; display: block; width: 100%;">
		
		
	</div>
</div>
<div style="float:right;">
<!-- Start Plugin Information -->
	<div class="wp-social-box" style="width: 565px;">
	<h3>Plugin Information</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
						This Plugin is Developed By <a href="https://www.webmaster-success.com" target="_blank" class="company">WebMaster-Success.com</a>.<br /><br />
						<strong>Review:</strong> <a href="https://wordpress.org/support/plugin/wp-next-post-navi/reviews/#new-post" target="_blank">Please leave a review of the plugin here</a>.<br /><br />
						<strong>Need Help?:</strong> <a href="https://wordpress.org/support/plugin/wp-next-post-navi/" target="_blank">Use the support forum here</a>.<br /><br />
						<strong>Plugin Version: </strong>1.8.3<br /><br />
						<strong>Author: </strong> <a href="https://www.webmaster-success.com/author/kharim/" target="_blank">Kharim Tomlinson</a>
						<br />
						
						
						<hr style="max-width: 555px;" />
						<strong>Twitter: </strong><a href="http://twitter.com/iamkharim_" target="_blank">@iamkharim_</a>
						
						<hr style="max-width: 555px;" />
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
	<br/>
	
		<div class="wp-social-box" style="width: 565px;">
	<h3>Donate To This Plugin</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_donations" />
<input type="hidden" name="business" value="VQHJQFUSBKVJ4" />
<input type="hidden" name="item_name" value="WP Next Post Navigation Plugin" />
<input type="hidden" name="currency_code" value="USD" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form>

					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
	<br/>
	
	<div class="wp-social-box" style="width: 565px;">
	<h3>Awesome Blog Posts</h3>
		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
		<script src="http://feeds.feedburner.com/WebMasterSuccess?format=sigpro" type="text/javascript" ></script><noscript><p>Subscribe to RSS headline updates from: <a href="http://feeds.feedburner.com/WebMasterSuccess"></a><br/>Powered by FeedBurner</p> </noscript>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
	<br/>
	
		<div class="wp-social-box" style="width: 565px;">
	<h3>A Forum For Bloggers</h3>
		<a href="https://blogchat.net/" target="_blank"><table class="form-table">
			<tbody>
				<tr valign="top">
					<td>
						<img src="https://blogchat.net/images/blogchat-logo.png">
						</br>
						<strong><font size="4">Join BlogChat.net - A Forum Made Specially For Bloggers</font></strong>
					</td>
				</tr>
				
			</tbody>
		</table></a>
		
		<strong>Question:</strong> Why join?<br /><br />
		<strong>Answer:</strong> You can chat with other bloggers about blogging stuff and how to make money blogging.
		
	</div>
	

	

	<!-- End Information -->
</div>
</div>

