<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class almocoTest {
    public function testAlmocoPage() {
        $host = 'http://localhost:4444';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ElisSitePHP/almoco.php');

        $location = $driver->findElement(\Facebook\WebDriver\WebDriverBy::cssSelector('p.info'))->getText();
        if (strpos($location, 'Av. Padre Salim') !== false) {
            echo "Localização do 'Cantinho da Iria' encontrada!";
        } else {
            echo "Localização do 'Cantinho da Iria' não encontrada.";
        }

        $driver->quit();
    }
}

$test = new AlmocoTest();
$test->testAlmocoPage();
