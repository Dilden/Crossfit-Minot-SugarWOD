<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://www.closingtags.com
 * @since      1.0.0
 *
 * @package    Cfmsugarwod
 * @subpackage Cfmsugarwod/admin/partials
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="wrap">
  <h2>CrossFit Minot SugarWOD Settings</h2>
  <form method="post" action="options.php">
  <table class="form-table">
    <?php
      require('cfmsugarwod-form.php');
    ?>
  </table>
  <div class="clear"></div>
  <hr>
  <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes'); ?>" />
  </p>
  </form>
</div>
