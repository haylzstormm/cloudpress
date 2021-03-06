<?php  
// create custom plugin settings menu  
add_action('admin_menu', 'omr_create_menu');  
  
function omr_create_menu() {  
  
    //create new top-level menu  
    add_menu_page('Coming 5oon Settings', 'Coming5oon.', 'administrator', __FILE__, 'omr_settings_page', '');  
  
    //call register settings function  
    add_action( 'admin_init', 'register_mysettings' );  
}  

function register_mysettings() {  
    //register our settings  
    register_setting( 'omr-settings-group', 'omr_tracking_code' );  
} 

function omr_settings_page() {  
?>  
<div class="wrap">  
<h2>COMING5OON.</h2>  
  
<form method="post" action="options.php">  
  
    <?php settings_fields('omr-settings-group'); ?>  
    <table class="form-table">  
  
        <tr valign="top">  
        <th scope="row">Tracking Code</th>  
        <td><textarea name="omr_tracking_code" style="width:800px;height:275px;"><?php echo get_option('omr_tracking_code'); ?></textarea></td>  
        </tr>  
  
    </table>  
  
    <p class="submit">  
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
    </p>  
  
</form>  
</div>  
<?php } ?>