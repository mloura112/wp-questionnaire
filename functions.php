<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * Load framework
 */
require_once ( trailingslashit( get_template_directory() ) . '/inc/init.php' );


/**
 * Setup Yellow Pencil Pro
 */
define('YP_THEME_MODE', "true");

add_action('init',  'add_our_pricing_posts');
function add_our_pricing_posts(){
 $labels = array(
         'name' => 'Our Pricing',
         'singular_name' => 'Our Pricing',
         'add_new' => 'Add New',
         'add_category' => 'Add category',
         'add_new_item' => 'Add New Pricing',
         'edit_item' => 'Edit Pricing ',
         'new_item' => 'New Pricing posts',
         'all_items' => 'All Pricing',
         'view_item' => 'View Pricing posts',
         'search_items' => 'Search Pricing posts',
         'not_found' => 'No team found',
         'not_found_in_trash' => 'No Pricing found in Trash',
         'parent_item_colon' => '',
         'menu_name' => 'OUR Pricing',
         'rewrite' => array('slug' => 'our_pricing_post'),
         );
        $args = array(
         'labels' => $labels,
         'public' => true,
         'publicly_queryable' => true,
         'show_ui' => true,
         'show_in_menu' => true,
         'query_var' => true,
         'rewrite' => true,
         'capability_type' => 'post',
         'has_archive' => true,
         'hierarchical' => true,
         'menu_position' => 6
         ,
         'supports' => array( 'title','author' ,'custom-fields' ,'editor', 'thumbnail', 'excerpt' )
                                   );
           if ( !post_type_exists( 'our_pricing_post' ) ) {
           register_post_type( 'our_pricing_post', $args );
            }
                                 
 
 }

/************** custom admin pages  *************************/
add_action('admin_menu', 'holmsted_pricing');
function holmsted_pricing() {
    $page_title = 'Pricing Table';
    $menu_title = 'Pricing Tables';
    $capability = 'edit_posts';
    $menu_slug = 'pricing_page';
    $function = 'aad_new_pricing_table';
    $icon_url = '';
    $position = 24;
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}
function aad_save_metadata($aad_post_ID,$aad_key,$aad_value,$bool) {
    update_post_meta($aad_post_ID, $aad_key, $aad_value);
}
add_action( 'save_post', 'aad_save_metadata' , 100 );
function aad_new_pricing_table() {
	
global $wpdb;
$post_id='1209';
	if($_REQUEST['aad_action']=="update") {
aad_save_metadata($post_id,'aad_main_title',$_POST['aad_main_title'],true);
aad_save_metadata($post_id,'pricing_1_title',$_POST['pricing_1_title'],true);
aad_save_metadata($post_id,'pricing_2_title',$_POST['pricing_2_title'],true);
aad_save_metadata($post_id,'pricing_3_title',$_POST['pricing_3_title'],true);
aad_save_metadata($post_id,'pricing_1_price',$_POST['pricing_1_price'],true);
aad_save_metadata($post_id,'pricing_2_price',$_POST['pricing_2_price'],true);
aad_save_metadata($post_id,'pricing_3_price',$_POST['pricing_3_price'],true);
aad_save_metadata($post_id,'pricing_1_text',$_POST['pricing_1_text'],true);
aad_save_metadata($post_id,'pricing_2_text',$_POST['pricing_2_text'],true);
aad_save_metadata($post_id,'pricing_3_text',$_POST['pricing_3_text'],true);
aad_save_metadata($post_id,'pricing_1_button',$_POST['pricing_1_button'],true);
aad_save_metadata($post_id,'pricing_2_button',$_POST['pricing_2_button'],true);
aad_save_metadata($post_id,'pricing_3_button',$_POST['pricing_3_button'],true);
aad_save_metadata($post_id,'pricing_1_button_url',$_POST['pricing_1_button_url'],true);
aad_save_metadata($post_id,'pricing_2_button_url',$_POST['pricing_2_button_url'],true);
aad_save_metadata($post_id,'pricing_3_button_url',$_POST['pricing_3_button_url'],true);
aad_save_metadata($post_id,'pricing_featured_1_text',$_POST['pricing_featured_1_text'],true);
aad_save_metadata($post_id,'pricing_featured_2_text',$_POST['pricing_featured_2_text'],true);
aad_save_metadata($post_id,'pricing_featured_3_text',$_POST['pricing_featured_3_text'],true);
aad_save_metadata($post_id,'pricing_featured_1_title',$_POST['pricing_featured_1_title'],true);
aad_save_metadata($post_id,'pricing_featured_2_title',$_POST['pricing_featured_2_title'],true);
aad_save_metadata($post_id,'pricing_featured_3_title',$_POST['pricing_featured_3_title'],true);
aad_save_metadata($post_id,'pricing_background_color',"#".$_POST['pricing_background_color'],true);
aad_save_metadata($post_id,'featured_top_color',"#".$_POST['featured_top_color'],true);
aad_save_metadata($post_id,'featured_price_color',"#".$_POST['featured_price_color'],true);
aad_save_metadata($post_id,'featured_discount_color',"#".$_POST['featured_discount_color'],true);
aad_save_metadata($post_id,'button_border',$_POST['button_border'],true);
aad_save_metadata($post_id,'button_background',"#".$_POST['button_background'],true);
aad_save_metadata($post_id,'button_text_color',"#".$_POST['button_text_color'],true);
aad_save_metadata($post_id,'button_featured_color',"#".$_POST['button_featured_color'],true);
aad_save_metadata($post_id,'button_featured_hover_background',"#".$_POST['button_featured_hover_background'],true);
aad_save_metadata($post_id,'button_featured_hover_text',"#".$_POST['button_featured_hover_text'],true);
aad_save_metadata($post_id,'button_hover_background',"#".$_POST['button_hover_background'],true);
aad_save_metadata($post_id,'button_hover_text_color',"#".$_POST['button_hover_text_color'],true);
aad_save_metadata($post_id,'button_featured_background',"#".$_POST['button_featured_background'],true);
aad_save_metadata($post_id,'featured_top_text_color',"#".$_POST['featured_top_text_color'],true);
aad_save_metadata($post_id,'table_border_radius',$_POST['table_border_radius'],true);
aad_save_metadata($post_id,'table_background_color',"#".$_POST['table_background_color'],true);
aad_save_metadata($post_id,'featured_table_background_color',"#".$_POST['featured_table_background_color'],true);
aad_save_metadata($post_id,'header_font_size_mobile',$_POST['header_font_size_mobile'],true);
aad_save_metadata($post_id,'header_font_size_desktop',$_POST['header_font_size_desktop'],true);
aad_save_metadata($post_id,'header_text_color',"#".$_POST['header_text_color'],true);
aad_save_metadata($post_id,'featured_table',$_POST['featured_table'],true);
		?>
		<script>
		alert('Pricing updated successfully');
		window.location.href="<?php echo site_url(); ?>/wp-admin/admin.php?page=pricing_page";
		</script>
		<?php
	}else{
	?>
		<script src="<?php echo get_template_directory_uri(); ?>/jscolor.js"></script>
<style>
#aad_pricing_table
{
	width:100%;
	float:left;
	background:#fff;
}
#aad_pricing_div
{
	width:90%;
	margin:0 auto;
}
.aad_main_title
{
	width:100%;
	float:left;
}
.aad_main_title input
{
	width:100%;
	float:left;
}
.aad_pricing_tab
{
	width:100%;
	float:left;
}
.aad_pricing_tab input[type="text"],textarea
{
	width:300px;
}
#aad_styling_table input[type="text"]
{
	width:150px;
}
.aad_td_center
{
	text-align:center;
}
.aad_wd100
{
	width:150px;
}
</style>
<h1>Pricing Tables</h1>	
<div id="aad_pricing_table" >
<form action="?page=pricing_page&aad_action=update" method="post">
<div id="aad_pricing_div">
<div class="aad_main_title">
<h2>Main Title</h2>
<input value="<?php echo get_post_meta($post_id,'aad_main_title',true); ?>" type="text" name="aad_main_title"  required>
</div>
<div class="aad_pricing_tab">
<table>
<tr>
<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><h2>Pricing Table 1</h2></td><td><h2>Pricing Table 2</h2></td><td><h2>Pricing Table 3</h2></td>
</tr>
<tr>
<td><h2>Title</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input value="<?php echo get_post_meta($post_id,'pricing_1_title',true); ?>"  type="text" name="pricing_1_title" placeholder="Enter Title"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_2_title',true); ?>"  type="text" name="pricing_2_title" placeholder="Enter Title"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_3_title',true); ?>"  type="text" name="pricing_3_title" placeholder="Enter Title"  required/></td>
</tr>
<tr>
<td><h2>Price</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input  value="<?php echo get_post_meta($post_id,'pricing_1_price',true); ?>" type="text" name="pricing_1_price" placeholder="Enter Price"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_1_price',true); ?>"  type="text" name="pricing_2_price" placeholder="Enter Price"  required/></td><td><input  value="<?php echo get_post_meta($post_id,'pricing_1_price',true); ?>" type="text" name="pricing_3_price" placeholder="Enter Price"  required/></td>
</tr>
<tr>
<td><h2>Text</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><textarea rows="10" name="pricing_1_text" placeholder="Enter Text"  required/><?php echo get_post_meta($post_id,'pricing_1_text',true); ?> </textarea></td><td><textarea  rows="10" name="pricing_2_text" placeholder="Enter Text"  required/><?php echo get_post_meta($post_id,'pricing_2_text',true); ?></textarea></td><td><textarea rows="10"  name="pricing_3_text" placeholder="Enter Text"  required/><?php echo get_post_meta($post_id,'pricing_3_text',true); ?> </textarea></td>
</tr>
<tr>
<td><h2>Button Text</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input  value="<?php echo get_post_meta($post_id,'pricing_1_button',true); ?>" type="text" name="pricing_1_button" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_2_button',true); ?>"  type="text" name="pricing_2_button" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_3_button',true); ?>"  type="text" name="pricing_3_button" placeholder="Enter Text"  required/></td>
</tr>
<tr>
<td><h2>Button URL</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input  value="<?php echo get_post_meta($post_id,'pricing_1_button_url',true); ?>" type="text" name="pricing_1_button_url" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_2_button_url',true); ?>"  type="text" name="pricing_2_button_url" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_3_button_url',true); ?>"  type="text" name="pricing_3_button_url" placeholder="Enter Text"  required/></td>
</tr>
<tr>
<td><h2>Featured </h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input onclick="set_featured('1');"  value="1" <?php if(get_post_meta($post_id,'featured_table',true)=='1') { echo "checked";  } ?> type="radio" name="featured_selected"   required /></td><td><input  onclick="set_featured('2');"   value="2" <?php if(get_post_meta($post_id,'featured_table',true)=='2') { echo "checked";  } ?> type="radio" name="featured_selected"   required /></td><td><input   onclick="set_featured('3');"  value="3" <?php if(get_post_meta($post_id,'featured_table',true)=='3') { echo "checked";  } ?> type="radio" name="featured_selected"   required /></td>
<input id="featured_table" type="hidden" value="<?php echo get_post_meta($post_id,'featured_table',true); ?>" name="featured_table" />
</tr>
<tr>
<td colspan="4"><hr>
</br>
<h1>Featured</h1>
<br>
<hr>
</td>
</tr>
<tr>
<td><h2>Featured Title</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input  value="<?php echo get_post_meta($post_id,'pricing_featured_1_title',true); ?>" type="text" name="pricing_featured_1_title" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_featured_2_title',true); ?>"  type="text" name="pricing_featured_2_title" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_featured_3_title',true); ?>"  type="text" name="pricing_featured_3_title" placeholder="Enter Text"  required/></td>
</tr>
<tr>
<td><h2>Featured Price</h2></td><td>&nbsp;</td><td>&nbsp;</td><td><input  value="<?php echo get_post_meta($post_id,'pricing_featured_1_text',true); ?>" type="text" name="pricing_featured_1_text" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_featured_2_text',true); ?>"  type="text" name="pricing_featured_2_text" placeholder="Enter Text"  required/></td><td><input value="<?php echo get_post_meta($post_id,'pricing_featured_3_text',true); ?>"  type="text" name="pricing_featured_3_text" placeholder="Enter Text"  required/></td>
</tr>
</table>
</br>
<hr>
</br>
<h1>Styling</h1>
<br>
<hr>
<br>
<br>
<table id="aad_styling_table">
<tr><td><h2>Main-Background-color</h2></td><td>&nbsp;</td><td><input type="text" class="jscolor"   value="<?php echo get_post_meta($post_id,'pricing_background_color',true); ?>"   name="pricing_background_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Featured-top-bg-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"    value="<?php echo get_post_meta($post_id,'featured_top_color',true); ?>"   name="featured_top_color" /></td></tr>
<tr><td><h2>Featured-price-color</h2></td><td>&nbsp;</td><td><input type="text"   class="jscolor"    value="<?php echo get_post_meta($post_id,'featured_price_color',true); ?>" name="featured_price_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Featured-discount-color</h2></td><td>&nbsp;</td><td><input type="text"   class="jscolor"    value="<?php echo get_post_meta($post_id,'featured_discount_color',true); ?>" name="featured_discount_color" /></td></tr>
<tr><td><h2>Featured-Table-background-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"    value="<?php echo get_post_meta($post_id,'featured_table_background_color',true); ?>"  name="featured_table_background_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Featured-top-text-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'featured_top_text_color',true); ?>" name="featured_top_text_color" /></td></tr>
<tr><td><h2>Featured-button-background</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'button_featured_background',true); ?>" name="button_featured_background" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Featured-button-text-color</h2></td><td>&nbsp;</td><td><input type="text"   class="jscolor"    value="<?php echo get_post_meta($post_id,'button_featured_color',true); ?>" name="button_featured_color" /></td></tr>
<tr><td><h2>Featured-button-hover-background</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'button_featured_hover_background',true); ?>" name="button_featured_hover_background" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Featured-button-hover-text-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'button_featured_hover_text',true); ?>" name="button_featured_hover_text" /></td></tr>
<tr><td><h2>Button-border</h2></td><td>&nbsp;</td><td><input type="text"      value="<?php echo get_post_meta($post_id,'button_border',true); ?>"  name="button_border" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Button-background</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"    value="<?php echo get_post_meta($post_id,'button_background',true); ?>"  name="button_background" /></td></tr>
<tr><td><h2>Button-text-color</h2></td><td>&nbsp;</td><td><input type="text" class="jscolor"     value="<?php echo get_post_meta($post_id,'button_text_color',true); ?>"  name="button_text_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Button-hover-background</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'button_hover_background',true); ?>" name="button_hover_background" /></td></tr>
<tr><td><h2>Button-hover-text-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"     value="<?php echo get_post_meta($post_id,'button_hover_text_color',true); ?>" name="button_hover_text_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Table-border-radius</h2></td><td>&nbsp;</td><td><input type="text"    value="<?php echo get_post_meta($post_id,'table_border_radius',true); ?>"  name="table_border_radius" /></td></tr>
<tr><td><h2>Table-background-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"  value="<?php echo get_post_meta($post_id,'table_background_color',true); ?>"  name="table_background_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Header-font-size-mobile</h2></td><td>&nbsp;</td><td><input type="text"    value="<?php echo get_post_meta($post_id,'header_font_size_mobile',true); ?>"  name="header_font_size_mobile" /></td></tr>
<tr><td><h2>Header-text-color</h2></td><td>&nbsp;</td><td><input type="text"  class="jscolor"  value="<?php echo get_post_meta($post_id,'header_text_color',true); ?>"  name="header_text_color" /></td><td class="aad_wd100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><h2>Header-font-size-desktop</h2></td><td>&nbsp;</td><td><input type="text"    value="<?php echo get_post_meta($post_id,'header_font_size_desktop',true); ?>"  name="header_font_size_desktop" /></td></tr>
</table>
</div>
</div>
<br>
<hr>
<br>
<div style="float:left;width:100%;text-align:center;padding:50px 0;">
<input type="submit" value="Submit" name="update" />
</div>
<br>
<br>
</form>
</div>
<script>
function set_featured(par)
{
	jQuery("#featured_table").val(par);
}
</script>
	<?php }
}