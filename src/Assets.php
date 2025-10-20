<?php

namespace VelarUI;

class Assets
{
   private const CSS = __DIR__ . '/styles/velar.css';
    
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
      return file_exists(self::CSS) ?
         file_get_contents(self::CSS)
         : "/* " . "VelarUI Error: 'velar.css' file not found. */";
   }
}