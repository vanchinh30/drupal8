<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\taxonomy\Entity\Vocabulary;

class TaxonomyController extends ControllerBase {
//  public function GetToken(){
//    $url = 'http://dev.d8/oauth/token';
//    $method = 'POST';
//    $options = [
//      'headers' => array('Content-Type' => 'application/x-www-form-urlencoded'),
//      'form_params' => [
//        'grant_type' => 'password',
//        'client_id' => '6e1e07dc-c8ec-4be3-9f7c-260653ceb70a',
//        'client_secret' => '6e1e07dc-c8ec-4be3-9f7c-260653ceb70a',
//        'username' => 'chinhammk',
//        'password' => '123456mk',
//      ]
//    ];
//
//    $client = \Drupal::httpClient();
//
//    $response = $client->request($method, $url, $options);
//    $code = $response->getStatusCode();
//    if ($code == 200) {
//      $body =json_decode($response->getBody()->getContents()) ;
//    }
//    $token = $body->access_token;
////    $data_token = oauth
//
//    print '<pre>';
//       print_r($token);
//       print '</pre>';
//       exit();
//    return [
//      '#type' => 'markup',
//      '#markup' => $this->t('Create succesfull!'),
//    ];
//  }

//  function storeLecture(Request $request) {
//      dd($request);
//
//  }

    function CreateTaxonomy(){
     $vid = 'mkd';
     $vocabularies = Vocabulary::loadMultiple();
       $vocabulary = Vocabulary::create([
         'vid' => $vid,
         'description' => 'edf',
         'name' => 'new name'
       ]);
//       print '<pre>';
//       print_r($vocabulary);
//       print '</pre>';
//       exit();
       $vocabulary->save();
     return [
       '#type' => 'markup',
       '#markup' => $this->t('Create succesfull!'),
     ];
   }

  public function UpdateTaxonomy($id){
      $vocabulary = Vocabulary::load($id);
      $vocabulary->set('name', 'name updated') ;
      $vocabulary->set('description', 'description updated');
      $vocabulary->save();

    return [
      '#type' => 'markup',
      '#markup' => $this->t('Update succesfull!'),
    ];
  }

  public function DeleteTaxonomy($id){
      $vocabulary = Vocabulary::load($id);
      $vocabulary->delete();

    return [
      '#type' => 'markup',
      '#markup' => $this->t('Delete succesfull!'),
    ];
  }

}



?>
