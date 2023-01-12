<?php

namespace Drupal\infobanrep\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "infobanrep_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("infobanrep")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $json_uri = \Drupal::service('file_system')->realpath('public://indicadores/indicadores.json');
    $json_str = file_get_contents($json_uri);
    $json_feed = json_decode($json_str);
    $array = array();

    foreach($json_feed as $itemkey =>  $item){
      $array[$itemkey] = $item;
    }

    // console.log('Este es el arreglo del json',$array);
    
    return [
      '#theme' => 'infobanrep_block',
      '#data' => $array,
    ];
  }

}
