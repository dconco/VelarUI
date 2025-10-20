<?php

namespace VelarUI;

class Assets
{
   private const STYLES_DIR = __DIR__ . '/styles/';
   private const STYLES_PATH = self::STYLES_DIR . '_*.php';
   private const STYLES_NEXTED_PATH = self::STYLES_DIR . '**/_*.php';
   
   /**
    * Generates and returns the CSS assets for the VelarUI library.
    *
    * This method compiles all necessary CSS styles and returns them as a string,
    * which can be embedded directly into HTML or saved to a file.
    *
    * @return string The compiled CSS content as a string
    */
   public static function css(): string
   {
      $styles = glob(self::STYLES_PATH);
      $nextedStyles = glob(self::STYLES_NEXTED_PATH, GLOB_BRACE);
      $css = '';
      
      foreach ($styles as $style) {
         $name = strtoupper(trim(basename($style), '.php|_'));
         $content = "\n\n\n============================= {$name} =================================\n\n\n";
         $content .= require realpath($style);
         $css .= $content;
      }

      foreach ($nextedStyles as $style) {
         $name = strtoupper(trim(basename($style), '.php|_'));
         $content = "\n\n\n============================= {$name} =================================\n\n\n";
         $content .= require realpath($style);
         $css .= $content;
      }

      return $css;
   }
}