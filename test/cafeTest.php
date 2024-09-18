<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class CafeTest {
    public function testCafePage() {
        $host = 'http://localhost:4444';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ElisSitePHP/cafe.php');

        $location = $driver->findElement(\Facebook\WebDriver\WebDriverBy::cssSelector('p.info'))->getText();
        if (strpos($location, 'Av. Padre Salim') !== false) {
            echo "Localização da 'Padaria Frutos do Trigo' encontrada!";
        } else {
            echo "Localização da 'Padaria Frutos do Trigo' não encontrada.";
        }

        $driver->quit();
    }
}

$test = new CafeTest();
$test->testCafePage();
