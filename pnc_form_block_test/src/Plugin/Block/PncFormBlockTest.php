<?php

/**
 * @file
 * Contains \Drupal\pnc_form_block_test\Plugin\Block\PncFormBlockTest.
 */

namespace Drupal\pnc_form_block_test\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a 'Example: configurable text string' block.
 *
 * @Block(
 *   id = "pnc_form_block_test",
 *   subject = @Translation("Pnc form block test"),
 *   admin_label = @Translation("Pnc form block test")
 * )
 */
class PncFormBlockTest extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'label' => t('Demo'),
      'content' => t('Default demo content'),
      //'cache' => array(
      //  'max_age' => 3600,
      //  'contexts' => array(
     //     'cache_context.user.roles',
     //   ),
    //  ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['content'] = array(
      '#type' => 'textfield',
      '#title' => t('Block contents'),
      '#size' => 60,
      '#description' => t('This text will appear in the demo block.'),
      '#default_value' => $this->configuration['content'],
    );
    return $form;
  }

  
  
  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['content'] = $form_state->getValue('content');
  }
  

  /**
   * {@inheritdoc}
   */
  public function build() {
   return array(
      '#type' => 'markup',
      '#markup' => $this->configuration['content'],
    );
  }

}






