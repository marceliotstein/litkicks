<?php

/**
 * @file
 * template.php
 */

function litstrap_preprocess_node(&$variables, $hook) {
  hide($variables['content']['field_story_image']);
  hide($variables['content']['field_dek']);
  hide($variables['content']['taxonomy_vocabulary_3']);
  hide($variables['content']['taxonomy_vocabulary_4']);
  hide($variables['content']['taxonomy_vocabulary_5']);
  hide($variables['content']['taxonomy_vocabulary_6']);
}
