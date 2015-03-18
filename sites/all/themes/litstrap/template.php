<?php

/**
 * @file
 * template.php
 */

function litstrap_preprocess_node(&$variables, $hook) {
  hide($variables['content']['field_story_image']);
  hide($variables['content']['field_dek']);
  hide($variables['content']['taxonomy_vocabulary_1']);
  hide($variables['content']['taxonomy_vocabulary_3']);
  hide($variables['content']['taxonomy_vocabulary_4']);
  hide($variables['content']['taxonomy_vocabulary_5']);
  hide($variables['content']['taxonomy_vocabulary_6']);
  $variables['submitted'] = str_replace("Submitted ","",$variables['submitted']);

  // place topics into comma-delimited array
  $topiclist = "";
  if (!empty($variables['content']['taxonomy_vocabulary_1']['#items'])) {
    $numterms = 0;
    foreach ($variables['content']['taxonomy_vocabulary_1']['#items'] as $taxitem) {
      $thisterm = $taxitem['taxonomy_term']->name;
      if ($numterms==0) {
        $topiclist = $thisterm;
      } else {
        $topiclist .= ", " . $thisterm;
      }
      $numterms++;
    }
  }
  $variables['topiclist'] = $topiclist;
}
