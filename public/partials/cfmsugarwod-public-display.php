<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://https://www.closingtags.com
 * @since      1.0.0
 *
 * @package    Cfmsugarwod
 * @subpackage Cfmsugarwod/public/partials
 */

  $options = get_option('cfmsugarwod_api');
  $today = date('Ymd');

  $response = wp_remote_get('https://app.sugarwod.com/public/api/v1/affiliates/' . $options['aff_id'] . '/workouts/' . $today);

  $body = wp_remote_retrieve_body($response);
  $data = json_decode($body);

  echo "<div class='cfmsugarwod_content'><h2>Workout of the Day</h2>";
  if($data->data) {
    echo "<div class='cfmsugarwod_workouts'>";
    foreach($data->data as $workout) {
      echo "<span><h3>" . $workout->title . "</h3>". $workout->descriptionHTML ."</span>";
    }
    echo "</div>";
  }
  else {
    echo "<p>No workout posted yet. Check back later!</p>";
  }
  echo "</div>";


