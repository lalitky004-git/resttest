<?php
namespace Drupal\resttest\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "getapi",
 *   label = @Translation("Getapi"),
 *   uri_paths = {
 *     "canonical" = "/restget/{data}"
 *   }
 * )
 */
class getapi extends ResourceBase{
  /**
   * Responds to GET requests.
   *
   *
   * @return \Drupal\rest\ResourceResponse
   *   Throws exception expected.
   */
  public function get($data){
      return new ResourceResponse($data);
  }
}
