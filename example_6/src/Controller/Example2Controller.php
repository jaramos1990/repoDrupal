<?php

namespace Drupal\example_6\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * An example controller.
 */
class Example2Controller extends ControllerBase {

/**
 * {@inheritdoc}
 */
  public function build() {
    $build =  [
      '#theme' => 'example_6',
      '#test_var' => 'var',
    ];

  return $build;

  }

}
