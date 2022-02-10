<?php

namespace Drupal\elkeno_react_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a custom block with React rendered content.
 *
 * @Block(
 *   id = "elkeno_react_block_example",
 *   admin_label = @Translation("Elkeno's React Block"),
 *   category = @Translation("React Blocks")
 * )
 */
class ElkenoReactBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['react_basic_block'] = [
      '#markup' => '<div id="basic-app"></div>',
      '#attached' => [
        'library' => 'elkeno_react_block/elkeno_react_block',
      ],
    ];
    return $build;
  }

}
