<?php

class Enom
{

  public static function execute($params)
  {
    $curl = new Curl;

    $url = Config::get('variables.enom.url');
    $username = Config::get('variables.enom.username');
    $password = Config::get('variables.enom.password');

    $options = array();
    foreach ($params as $key => $param)
    {
      $option = "$key=$param";
      array_push($options, $option);
    }
    $myOptions = implode('&', $options);

    $req = $url . '?uid=' . $username . '&pw=' . $password . '&' . $myOptions . '&ResponseType=xml';
    $output = $curl->simple_get($req);

    $xml = simplexml_load_string($output);
    $json = json_encode($xml);
    $array = json_decode($json,TRUE);

    return $array;
  }

}
