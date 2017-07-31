<?php

/**
 * @file
 * Contains \Drupal\custom_api\Controller\InteractiveAPIController.
 */

namespace Drupal\custom_api\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller routines for custom_api routes.
 */
class CustomAPIController extends ControllerBase {
  /**
   * Callback for `api/kiosk.json` API method.
   */

  public function kiosk_api( Request $request ) {
    $data = array();

    //Querying Items
    $query = \Drupal::entityQuery('node')
    ->condition('status', 1)
    ->condition('type', 'item');

    $nids = $query->execute();
    $nodes = entity_load_multiple('node', $nids);

    foreach($nodes as $node){
      $data[] = array(
        'title'=>$node->getTitle(),
        'nid' => $node->id(),
      );
    }
    //return array();
    return new JsonResponse( $data );
  }
}
