<?php
namespace Drupal\resttest\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "postapi",
 *   label = @Translation("postapi"),
 *   uri_paths = {
 *     "create" = "/restpost"
 *   }
 * )
 */
class postapi extends ResourceBase{
  /**
   * Responds to POST requests.
   *
   *
   * @return \Drupal\rest\ResourceResponse
   *   Throws exception expected.
   */
  public function post($data){
      return new ResourceResponse($data['name']);
  }
}
