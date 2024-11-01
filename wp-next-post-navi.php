<?php
/**
 * Plugin Name: WP Next Post Navigation
 * Description: This plugin adds a stylish next post button and previous post button on each post. Change the look of the buttons in the settings to your liking. <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=VQHJQFUSBKVJ4&item_name=WP+Next+Post+Navi+WordPress+Plugin&currency_code=USD&source=url" target="_blank">Make a donation here</a>.
 * Version: 1.8.3
 * Author: Kharim Tomlinson
 * Author URI: https://www.webmaster-success.com/author/kharim/
 * Plugin URI: https://www.webmaster-success.com/
 * License: GPL
 * License URI: https://www.gnu.org/licenses/gpl.html
 * Text Domain: WP-Next-Post-Navi
 */

/*Check Version*/
global $wp_version;
$exit_msg="WP Requires Latest version, Your version is old";
if(version_compare($wp_version, "3.0", "<"))
{
	exit($exit_msg);
}


if(!class_exists('WPNextPostNavi')):
	class WPNextPostNavi{
		private $config = array('hasImage'=>'','prePost'=>'','nextPost'=>'','is_reversed'=>false,'is_active'=>false);
		function load_settings()
		{
			$options = $this->get_wp_next_post_navi_options();
			$navi = $options['nav_within_cat'] == "1"? true: false;
			$next_post = get_next_post($navi);
			$pre_post = get_previous_post($navi);
			if($options['navi_img'] != "1")
			{


if($options['shadow'] != "no"){			    
			    
				if($options['is_custom'] != "yes"){
				    
				    				if($options['is_button'] != "1"){
					$pre_navigation = $pre_post->ID!=""?'&#9664<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'">'.$pre_post->post_title.'</a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'">'.$next_post->post_title.'</a>&#9654;':'';
                }else{
if($options['comingsoon'] != "no"){
					$next_navigation = $next_post->sub=""?'':''.$options['custom_next_sub'].'&#9654;';
}
                }
				    				}else{
					$pre_navigation = $pre_post->ID!=""?'<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'"><button style="background-color: '.$options['custom_pre_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_pre_color'].';" class="button button1"><font color="'.$options['custom_pre_text_color'].'">'.$pre_post->post_title.'</font></button></a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'"><button style="background-color: '.$options['custom_next_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_color'].';" class="button button2"><font color="'.$options['custom_next_text_color'].'">'.$next_post->post_title.'</font></button></a>':'';
				}else{
if($options['comingsoon'] != "no"){
				    $next_navigation = '<button style="background-color: '.$options['custom_next_sub_color'].'; font-size: 20px; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_sub_color'].';" class="button button2"><font color="'.$options['custom_next_sub_text_color'].'">'.$options['custom_next_sub'].'</font></button>';
                                    }
				    }
				    				}
				}else{
				    				if($options['is_button'] != "1"){
					$pre_navigation = $pre_post->ID!=""?'&#9664<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'">'.$options['custom_pre'].'</a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'">'.$options['custom_next'].'</a>&#9654;':'';
				}else{
if($options['comingsoon'] != "no"){
					$next_navigation = $next_post->sub=""?'':''.$options['custom_next_sub'].'&#9654;';
                                    }
                }
				}else{
					$pre_navigation = $pre_post->ID!=""?'<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'"><button style="background-color: '.$options['custom_pre_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_pre_color'].';" class="button button1"><font color="'.$options['custom_pre_text_color'].'">'.$options['custom_pre'].'</font></button></a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'"><button style="background-color: '.$options['custom_next_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_color'].';" class="button button2"><font color="'.$options['custom_next_text_color'].'">'.$options['custom_next'].'</font></button></a>':'';
				}else{
if($options['comingsoon'] != "no"){
				    $next_navigation = '<button style="background-color: '.$options['custom_next_sub_color'].'; font-size: 20px; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_sub_color'].';" class="button button2"><font color="'.$options['custom_next_sub_text_color'].'">'.$options['custom_next_sub'].'</font></button>';
                                    }
                    }
				}
				}
				
}else{
    


				if($options['is_custom'] != "yes"){
				    
				    				if($options['is_button'] != "1"){
					$pre_navigation = $pre_post->ID!=""?'&#9664<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'">'.$pre_post->post_title.'</a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'">'.$next_post->post_title.'</a>&#9654;':'';
                }else{
if($options['comingsoon'] != "no"){
					$next_navigation = $next_post->sub=""?'':''.$options['custom_next_sub'].'&#9654;';
}
                }
				    				}else{
					$pre_navigation = $pre_post->ID!=""?'<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'"><button style="background-color: '.$options['custom_pre_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_pre_color'].';" class="button button1x"><font color="'.$options['custom_pre_text_color'].'">'.$pre_post->post_title.'</font></button></a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'"><button style="background-color: '.$options['custom_next_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_color'].';" class="button button2x"><font color="'.$options['custom_next_text_color'].'">'.$next_post->post_title.'</font></button></a>':'';
				}else{
if($options['comingsoon'] != "no"){
				    $next_navigation = '<button style="background-color: '.$options['custom_next_sub_color'].'; font-size: 20px; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_sub_color'].';" class="button button2x"><font color="'.$options['custom_next_sub_text_color'].'">'.$options['custom_next_sub'].'</font></button>';
                                    }
				    }
				    				}
				}else{
				    				if($options['is_button'] != "1"){
					$pre_navigation = $pre_post->ID!=""?'&#9664<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'">'.$options['custom_pre'].'</a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'">'.$options['custom_next'].'</a>&#9654;':'';
				}else{
if($options['comingsoon'] != "no"){
					$next_navigation = $next_post->sub=""?'':''.$options['custom_next_sub'].'&#9654;';
                                    }
                }
				}else{
					$pre_navigation = $pre_post->ID!=""?'<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'"><button style="background-color: '.$options['custom_pre_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_pre_color'].';" class="button button1x"><font color="'.$options['custom_pre_text_color'].'">'.$options['custom_pre'].'</font></button></a>':'';
if (strlen(get_next_post()->post_title) > 0) {
					$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'"><button style="background-color: '.$options['custom_next_color'].'; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_color'].';" class="button button2x"><font color="'.$options['custom_next_text_color'].'">'.$options['custom_next'].'</font></button></a>':'';
				}else{
if($options['comingsoon'] != "no"){
				    $next_navigation = '<button style="background-color: '.$options['custom_next_sub_color'].'; font-size: 20px; border-radius:'.$options['corner'].'px; border: 2px solid '.$options['custom_next_sub_color'].';" class="button button2x"><font color="'.$options['custom_next_sub_text_color'].'">'.$options['custom_next_sub'].'</font></button>';
                                    }
                    }
				}
				}



    
}				
					
			}else{
				$pre_navigation = $pre_post->ID!=""?'<a href="'. get_permalink($pre_post->ID).'" title="'.$pre_post->post_title.'"><img src="'.$options['pre_img_link'].'" /></a>':'';
if (strlen(get_next_post()->post_title) > 0) {
				$next_navigation = $next_post->ID!=""?'<a href="'. get_permalink($next_post->ID).'" title="'.$next_post->post_title.'"><img src="'.$options['next_img_link'].'" /></a>':'';
            }else{
if($options['comingsoon'] != "no"){
				$next_navigation = $next_post->ID!=""?'':'<img src="../wp-content/plugins/wp-next-post-navi/img/soon.png" />';
                                    }
            }
			}
			$img = $options['navi_img'] == "1"? "-1": '';
			$this->config["is_reversed"] = $options['is_reversed'];
			$this->config["hasImage"] = $img;
			$nex = ($this->config["is_reversed"] == "1")?$pre_navigation:$next_navigation;
			$pre = ($this->config["is_reversed"] == "1")?$next_navigation:$pre_navigation;
			$this->config["prePost"] = $pre;
			$this->config["nextPost"] = $nex;
			$this->config["is_active"] = $options['is_active'];
			$this->config["position"] = $options['position'];
			$this->config["comingsoon"] = $options['comingsoon'];
			$this->config["related"] = $options['related'];
		}
		function WP_Pre_Next_Navigation($content)
		{
			global $post;
			$this->load_settings();
			if($this->config["is_active"] == "1"){
				if(is_single()){
					switch($this->config["position"]){
							case "both":
								return '<div class="wp-next-post-navi">
									   <div class="wp-next-post-navi-pre'.$this->config["hasImage"].'">
									   '.$this->config["prePost"].'
									   </div>
									   <div class="wp-next-post-navi-next'.$this->config["hasImage"].'">
									   '.$this->config["nextPost"].'
									   </div>
									</div>'.$content.'<div class="wp-next-post-navi">
									   <div class="wp-next-post-navi-pre'.$this->config["hasImage"].'">
									   '.$this->config["prePost"].'
									   </div>
									   <div class="wp-next-post-navi-next'.$this->config["hasImage"].'">
									   '.$this->config["nextPost"].'
									   </div>
									</div>';
								break;
							case "top":
									return '<div class="wp-next-post-navi">
									   <div class="wp-next-post-navi-pre'.$this->config["hasImage"].'">
									   '.$this->config["prePost"].'
									   </div>
									   <div class="wp-next-post-navi-next'.$this->config["hasImage"].'">
									   '.$this->config["nextPost"].'
									   </div>
									</div>'.$content;
								break;
							case "bottom":
								return $content.'<div class="wp-next-post-navi">
									   <div class="wp-next-post-navi-pre'.$this->config["hasImage"].'">
									   '.$this->config["prePost"].'
									   </div>
									   <div class="wp-next-post-navi-next'.$this->config["hasImage"].'">
									   '.$this->config["nextPost"].'
									   </div>
									</div>';
								break;
							default:
								return $content;
								break;
					}
				}
			}
			return $content;
		}
		
		
		function WP_Pre_Next_Navigation_Related($content)
		{
			global $post;
			$this->load_settings();
			if($this->config["is_active"] == "1"){
				if(is_single()){
					switch($this->config["related"]){
							case "no":
									return ''.$content;
								break;
							case "yes":
								return $content.'
								
								
								
								    ';
								break;
							default:
								return $content;
								break;
					}
				}
			}
			return $content;
		}

		
		
		
		function WP_Custom_Next_Post_Navi()
		{
			if(is_single())
			{
				return '<div class="wp-next-post-navi">
						   <div class="wp-next-post-navi-pre'.$this->config["hasImage"].'" >
						   '.$this->config["prePost"].'
						   </div>
						   <div class="wp-next-post-navi-next'.$this->config["hasImage"].'">
						   '.$this->config["nextPost"].'
						   </div>
						</div>';
			}
		}
		function handle_wp_next_post_navi_options()
		{
			$settings = $this->get_wp_next_post_navi_options();
			if (isset($_POST['submitted']))
			{
				//check security
				check_admin_referer('wp-next-post-navi-by-kharim');
				$settings['nav_within_cat'] = isset($_POST['nav_within_cat'])? "1" : "0" ;
				$settings['is_active'] = isset($_POST['is_active'])? "1" : "0" ;
				$settings['is_reversed'] = isset($_POST['is_reversed'])? "1" : "0" ;
				$settings['position'] = isset($_POST['position'])? $_POST['position'] : "bottom" ;
				$settings['comingsoon'] = isset($_POST['comingsoon'])? $_POST['comingsoon'] : "yes" ;
				$settings['is_custom'] = isset($_POST['is_custom'])? $_POST['is_custom'] : "yes" ;
				$settings['corner'] = isset($_POST['corner'])? $_POST['corner'] : "0" ;
				$settings['shadow'] = isset($_POST['shadow'])? $_POST['shadow'] : "yes" ;
				$settings['related'] = isset($_POST['related'])? $_POST['related'] : "yes" ;
				$settings['style'] = isset($_POST['style_css'])? $_POST['style_css'] : "" ;
				$settings['is_button'] = isset($_POST['is_button'])? "1" : "0" ;
				$settings['custom_pre'] = isset($_POST['custom_pre'])? $_POST['custom_pre'] : "" ;
				$settings['custom_next'] = isset($_POST['custom_next'])? $_POST['custom_next'] : "" ;
				$settings['custom_next_sub'] = isset($_POST['custom_next_sub'])? $_POST['custom_next_sub'] : "" ;
				$settings['custom_pre_color'] = isset($_POST['custom_pre_color'])? $_POST['custom_pre_color'] : "" ;
				$settings['custom_next_color'] = isset($_POST['custom_next_color'])? $_POST['custom_next_color'] : "" ;
				$settings['custom_next_sub_color'] = isset($_POST['custom_next_sub_color'])? $_POST['custom_next_sub_color'] : "" ;
				$settings['custom_pre_text_color'] = isset($_POST['custom_pre_text_color'])? $_POST['custom_pre_text_color'] : "" ;
				$settings['custom_next_text_color'] = isset($_POST['custom_next_text_color'])? $_POST['custom_next_text_color'] : "" ;
				$settings['custom_next_sub_text_color'] = isset($_POST['custom_next_sub_text_color'])? $_POST['custom_next_sub_text_color'] : "" ;
				$settings['navi_img'] = isset($_POST['navi_img'])? "1" : "0" ;
				$settings['pre_img_link'] = isset($_POST['pre_img_link'])? $_POST['pre_img_link'] : "" ;
				$settings['next_img_link'] = isset($_POST['next_img_link'])? $_POST['next_img_link'] : "" ;
				
				update_option("wp_next_post_navi_options", serialize($settings));
				echo '<div class="updated fade"><p>Setting Updated!</p></div>';
			}
			$action_url = $_SERVER['REQUEST_URI'];
			include 'wp-next-post-navi-admin-options.php';
		}

		function get_wp_next_post_navi_options()
		{
			$options = unserialize(get_option("wp_next_post_navi_options"));
			return $options;
		}
		


function nc_settings_link( $links ) {
	// Build and escape the URL.
	$url = esc_url( add_query_arg(
		'page',
		'nelio-content-settings',
		get_admin_url() . 'admin.php'
	) );
	// Create the link.
	$settings_link = "<a href='$url'>" . __( 'Settings' ) . '</a>';
	// Adds the link to the end of the array.
	array_push(
		$links,
		$settings_link
	);
	return $links;
}//end nc_settings_link()


		function WP_Next_Post_Navi_install()
		{
			$options = $this->get_wp_next_post_navi_options();
			$options = array(
				'is_active' => (isset($options) && is_array($options) && isset($options["is_active"]))?$options["is_active"]:'1',
				'is_reversed' => (isset($options) && is_array($options) && isset($options["is_reversed"]))?$options["is_reversed"]:'0',
				'position' => (isset($options) && is_array($options) && isset($options["position"]))?$options["position"]:'bottom',
				'comingsoon' => (isset($options) && is_array($options) && isset($options["comingsoon"]))?$options["comingsoon"]:'yes',
				'is_custom' => (isset($options) && is_array($options) && isset($options["is_custom"]))?$options["is_custom"]:'yes',
				'corner' => (isset($options) && is_array($options) && isset($options["corner"]))?$options["is_custom"]:'corner',
				'shadow' => (isset($options) && is_array($options) && isset($options["shadow"]))?$options["shadow"]:'yes',
				'related' => (isset($options) && is_array($options) && isset($options["related"]))?$options["related"]:'yes',
				'nav_within_cat' => (isset($options) && is_array($options) && isset($options["nav_within_cat"]))?$options["nav_within_cat"]:'0',
				'style' => (isset($options) && is_array($options) && isset($options["style"]))?$options["style"]:'text-decoration: none;
font:bold 16px sans-serif, arial;
color: #666;',
				'is_button' => (isset($options) && is_array($options) && isset($options["is_button"]))?$options["is_button"]:'1',
				'custom_pre' => (isset($options) && is_array($options) && isset($options["custom_pre"]))?$options["custom_pre"]:'Previous Post',
				'custom_next' => (isset($options) && is_array($options) && isset($options["custom_next"]))?$options["custom_next"]:'Next Post',
				'custom_next_sub' => (isset($options) && is_array($options) && isset($options["custom_next_sub"]))?$options["custom_next_sub"]:'Next Post Coming Soon...',
				'custom_pre_color' => (isset($options) && is_array($options) && isset($options["custom_pre_color"]))?$options["custom_pre_color"]:'#4CAF50',
				'custom_next_color' => (isset($options) && is_array($options) && isset($options["custom_next_color"]))?$options["custom_next_color"]:'#008CBA',
				'custom_next_sub_color' => (isset($options) && is_array($options) && isset($options["custom_next_sub_color"]))?$options["custom_next_sub_color"]:'#008CBA',
				'custom_pre_text_color' => (isset($options) && is_array($options) && isset($options["custom_pre_text_color"]))?$options["custom_pre_text_color"]:'',
				'custom_next_text_color' => (isset($options) && is_array($options) && isset($options["custom_next_text_color"]))?$options["custom_next_text_color"]:'',
				'custom_next_sub_text_color' => (isset($options) && is_array($options) && isset($options["custom_next_sub_text_color"]))?$options["custom_next_sub_text_color"]:'',
				'navi_img' => (isset($options) && is_array($options) && isset($options["navi_img"]))?$options["navi_img"]:'0',
				'pre_img_link' => (isset($options) && is_array($options) && isset($options["pre_img_link"]))?$options["pre_img_link"]:'',
				'next_img_link' => (isset($options) && is_array($options) && isset($options["next_img_link"]))?$options["next_img_link"]:'',
				
			);
			add_option("wp_next_post_navi_options", serialize($options));
		}
		function wp_admin_menu()
		{
			add_options_page('WP Next Post Navigation', 'WP Next Post Navigation', 10, basename(__FILE__), array(&$this, 'handle_wp_next_post_navi_options'));
		}

		function wp_next_post_navi_stylesheet() {
			wp_register_style( 'wp-next-post-navi-style', plugins_url('style.css', __FILE__) );
			wp_enqueue_style( 'wp-next-post-navi-style' );
		}
		function wp_next_post_navi_HeadAction()
		{
			$settings = $this->get_wp_next_post_navi_options();
			echo '<style type="text/css">
					.wp-next-post-navi a{
					'.$settings['style'].'
					}
				 </style>';
		}
	}
else:
	exit('WPNextPostNavi Already Exists');
endif;

$WPNextPostNavi = new WPNextPostNavi();
if(isset($WPNextPostNavi)){
	register_activation_hook(__FILE__, array(&$WPNextPostNavi, 'WP_Next_Post_Navi_install'));
	add_filter('wp_head', array(&$WPNextPostNavi, 'wp_next_post_navi_HeadAction'));
	add_filter('the_content', array(&$WPNextPostNavi, 'WP_Pre_Next_Navigation'));
	add_filter('the_content', array(&$WPNextPostNavi, 'WP_Pre_Next_Navigation_Related'));
	add_action('admin_menu', array(&$WPNextPostNavi, 'wp_admin_menu'));
	add_action('wp_enqueue_scripts', array(&$WPNextPostNavi, 'wp_next_post_navi_stylesheet'));
	add_shortcode('WPNextPrevious', array(&$WPNextPostNavi, 'WP_Custom_Next_Post_Navi'));
}


?>