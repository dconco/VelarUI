<?php

use PhpSPA\App;
use PhpSPA\Component;

require 'vendor/autoload.php';

$Layout = fn() => <<<HTML
   <div id="app"></div>
HTML;


$Component = new Component(fn() => <<<HTML
   <h1>Hello, PhpSPA!</h1>
   <p>This is a simple single-page application.</p>
HTML);


(new App($Layout))
   ->attach($Component)
   ->styleSheet([VelarUI\Assets::class, 'css'])


   ->run();