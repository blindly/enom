<?php
/*
* Enom class for Laravel 4
* Depends on Curl Wrapper : http://getsparks.org/packages/curl/show
*/

class Enom
{

  public static function execute($params)
  {
    $curl = new Curl;
    $url = 'http://reseller.enom.com/interface.asp';

    $options = array();
    foreach ($params as $key => $param)
    {
      $option = "$key=$param";
      array_push($options, $option);
    }
    $myOptions = implode('&', $options);

    $req = $url . '?' . $myOptions;
    $output = $curl->simple_get($req);

    $xml = simplexml_load_string($output);
    $json = json_encode($xml);
    $array = json_decode($json,TRUE);

    return $array;
  }

}
