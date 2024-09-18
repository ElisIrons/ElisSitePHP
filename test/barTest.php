<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class barTest {
    public function testBarPage() {
        $host = 'http://localhost:4444';
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ElisSitePHP/bar.php');

        $location = $driver->findElement(\Facebook\WebDriver\WebDriverBy::cssSelector('p.info'))->getText();
        if (strpos($location, 'Av. São José da Barra') !== false) {
            echo "Localização do 'Rota 99' encontrada!";
        } else {
            echo "Localização do 'Rota 99' não encontrada.";
        }

        $driver->quit();
    }
}

$test = new BarTest();
$test->testBarPage();
