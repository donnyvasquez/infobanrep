<?php

namespace Drupal\infobanrep\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for infobanrep routes.
 */
class InfobanrepController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
