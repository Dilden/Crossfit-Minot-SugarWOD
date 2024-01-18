<?php
  if ( ! defined( 'ABSPATH' ) ) {
    exit;
  }
  settings_fields( 'cfmsugarwod_options');
  $options = get_option('cfmsugarwod_api');
?>
<tr valign="top">
  <th scope="row">
    <h3>SugarWOD</h3>
  </th>
</tr>
<tr valign="top">
  <th scope="row">
    <label for="key">API Key
    </label>
  </th>
  <td>
    <input id="key" type="text" name="cfmsugarwod_api[key]" value="<?php echo $options['key']; ?>" size="55" />
    <br>
    <small>SugarWOD API Key. <b>Keep it secret!</b>
    </small>
  </td>
</tr>
<tr valign="top">
  <th scope="row">
    <label for="aff_id">Affiliate ID
    </label>
  </th>
  <td>
    <input id="aff_id" type="text" name="cfmsugarwod_api[aff_id]" value="<?php echo $options['aff_id']; ?>" size="55" />
  </td>
</tr>
