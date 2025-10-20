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

      <VelarUI.Button children="Primary Button" variant="primary" />
      <VelarUI.Button children="Secondary" variant="secondary" />
      <VelarUI.Button children="Danger" variant="danger" type="submit" />

      <br><br>

      <VelarUI.Button children="Outline" variant="outline-primary" />
      <VelarUI.Button children="Link Button" variant="link" />

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