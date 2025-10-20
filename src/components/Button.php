<?php

namespace VelarUI;

use function Component\HTMLAttrInArrayToString;

class Button {
   private ?string $href = null;
   private ?string $to = null;
   private string $children = '';
   private string $type = 'button';
   private string $class = '';
   private string $props = '';

   public function __render($children, $variant = 'primary', $type = 'button', $class = '', $to = null, $href = null, ...$props) {
      $HtmlAttr = HTMLAttrInArrayToString($props);

      $this->children = $children;
      $this->type = $type;
      $this->to = $to;
      $this->href = $href;
      $this->props = $HtmlAttr;
      
      $variantClass = $this->VariantClass($variant);
      
      $classList = "velar-btn {$class} {$variantClass}";

      $this->class = $classList;

      // --- 2. Handle SPA navigation link ---
      if ($to !== null) return $this->HandleLink();

      // --- 3. Handle standard <a> link ---
      if ($href !== null) return $this->HandleAnchor();

      // --- 4. Handle standard <button> ---
      return $this->HandleButton();
   }

   private function VariantClass($variant) {
      return match ($variant) {
         'primary' => 'velar-btn-primary',
         'secondary' => 'velar-btn-secondary',
         'danger' => 'velar-btn-danger',
         'outline-primary' => 'velar-btn-outline-primary',
         'link' => 'velar-btn-link',
         default => 'velar-btn-primary',
      };
   }


   private function HandleLink() {
      return <<<HTML
         <Component.Link to="{$this->to}" class="{$this->class}" {$this->props}>{$this->children}</Component.Link>
      HTML;
   }


   private function HandleAnchor() {
      return <<<HTML
         <a href="{$this->href}" class="{$this->class}" {$this->props}>{$this->children}</a>
      HTML;
   }



   private function HandleButton() {
      return <<<HTML
         <button type="{$this->type}" class="{$this->class}" {$this->props}>
            {$this->children}
         </button>
      HTML;
   }
}