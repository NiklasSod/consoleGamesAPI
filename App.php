<?php

class App {

  public static function getProducts() {
    $data = self::getData();
    self::showData($data);
  }

  private static function getData() {
    require_once './apiData.php';
    return $topConsoleGames;
  }

  private static function showData($data) {
    header('Content-Type: application/json; charset=UTF-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    header('Referrer-Policy: no-referrer');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
}