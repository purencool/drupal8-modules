<?php

namespace Drupal\pnc_form_block_test\Controller;

use Drupal\Core\Controller\ControllerBase;
/**
 * Controller routines for block example routes.
 */
class PncFormBlockTestController extends ControllerBase {

  /**
   * A simple controller method to explain what the block example is about.
   */
  public function description() {
    $output['info'] = array(
      '#markup' => $this->t('This demonstrates forms in Drupal 8. The following examples are available:'),
    );

    $output['urls'] = array(
      '#theme' => 'item_list',
      '#items' => array(
        $this->t('A basic form: @link.', array('@link' => \Drupal::l('/demo/form/basic', New Url('pnc_form_block_test.basic_form')))),
      ),
    );

    return $output;
  }

}
