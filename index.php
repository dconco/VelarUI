<?php

use PhpSPA\App;
use PhpSPA\Component;

require 'vendor/autoload.php';

$Layout = fn() => <<<HTML
   <div id="app"></div>
HTML;


$Component = new Component(fn() => <<<HTML
   <div style="padding: 2rem;">
      <h1>Welcome to VelarUI!</h1>
      <p>This is a component from your new library:</p>
      
      <br>

      <VelarUI.Button variant="primary">Primary Button</VelarUI.Button>
      <VelarUI.Button variant="secondary">Secondary</VelarUI.Button>
      <VelarUI.Button variant="danger" type="submit">Danger</VelarUI.Button>

      <br><br>

      <VelarUI.Button variant="outline-primary">Outline</VelarUI.Button>
      <VelarUI.Button variant="link">Link Button</VelarUI.Button>

      <br><br>

      <VelarUI.Button variant="primary" to="/about">
         Go to About (SPA Nav)
      </VelarUI.Button>
   </div>
HTML);


(new App($Layout))
   ->attach($Component)
   ->styleSheet([VelarUI\Assets::class, 'css'])

   ->run();