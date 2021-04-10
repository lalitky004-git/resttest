<?php
namespace Drupal\resttest\Plugin\rest\resource;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "newapi",
 *   label = @Translation("newapi"),
 *   uri_paths = {
 *     "canonical" = "/restget"
 *   }
 * )
 */
class newapi extends ResourceBase{
  /**
   * Responds to GET requests.
   *
   *
   * @return \Drupal\rest\ResourceResponse
   *   Throws exception expected.
   */
  public function get(){
      $data = [];
      $query= \Drupal::entityTypeManager()->getStorage('node')->getquery();
      $nids = \Drupal::entityQuery('node')->condition('status',1)->condition('type','article')->execute();
      foreach($nids as $nid){
          $node = \Drupal\node\Entity\Node::load($nid);
          $data[]= $node->title->value;
      }
      return new ResourceResponse($data);
  }
}
