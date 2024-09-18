<?php
require 'vendor/autoload.php';

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;

class indexTest {

    public function testHomePage() {
        $host = 'http://localhost:4444'; 
        $driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());

        $driver->get('http://localhost/ElisSitePHP/index.php');

        $title = $driver->getTitle();
        if ($title === 'Onde Comer') {
            echo "Página carregada corretamente: Título correto!";
        } else {
            echo "Erro no carregamento da página: Título incorreto.";
        }

        $driver->quit();
    }
}

$test = new IndexTest();
$test->testHomePage();
