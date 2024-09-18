<?php
require 'vendor/autoload.php'; 

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

$host = 'http://localhost:4444/wd/hub'; 
$capabilities = DesiredCapabilities::chrome();
$driver = RemoteWebDriver::create($host, $capabilities);

$driver->get('http://localhost/ElisSitePHP/cadastro.php');

$driver->findElement(\Facebook\WebDriver\WebDriverBy::id('nome'))->sendKeys('Teste Junior');
$driver->findElement(\Facebook\WebDriver\WebDriverBy::id('data'))->sendKeys('15-06-1992');

$driver->findElement(\Facebook\WebDriver\WebDriverBy::xpath("//input[@name='sexo' and @value='M']"))->click();

$driver->findElement(\Facebook\WebDriver\WebDriverBy::id('email'))->sendKeys('testando@example.com');

$driver->findElement(\Facebook\WebDriver\WebDriverBy::cssSelector('button[type="submit"]'))->click();

$successMessage = $driver->findElement(\Facebook\WebDriver\WebDriverBy::tagName('h3'))->getText();
echo $successMessage; 

$driver->quit();
