<?php

class App {

  // Hämtar data och skickar vidare till funktion för att visa.
  public static function getProducts() {
    $data = self::getData();
    self::showData($data);
  }

  // Returnerar hela arrayen från apiData.
  private static function getData() {
    require_once './apiData.php';
    return $topConsoleGames;
  }

  // lite medskickad information i header och en json encoder.
  private static function showData($data) {
    header('Content-Type: application/json; charset=UTF-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    header('Referrer-Policy: no-referrer');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }
}