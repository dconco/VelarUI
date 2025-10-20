<?php

return <<<CSS
   /* 1. Root Variables */
   :root {
      /* 1. Color Palette (Semantic) */
      --velar-primary: #3B82F6;  /* Blue 500 */
      --velar-secondary: #6B7280; /* Gray 500 */
      --velar-success: #10B981;  /* Emerald 500 */
      --velar-danger: #EF4444;   /* Red 500 */
      --velar-warning: #F59E0B;  /* Amber 500 */
      --velar-info: #0EA5E9;     /* Sky 500 */

      /* 2. Neutral Shades (Text, Backgrounds, Borders) */
      --velar-white: #FFFFFF;
      --velar-black: #000000;

      --velar-text: #1F2937;          /* Gray 800 */
      --velar-text-secondary: #6B7280;   /* Gray 500 */
      --velar-text-muted: #9CA3AF;      /* Gray 400 */

      --velar-bg: #F9FAFB;            /* Gray 50 (Page background) */
      --velar-bg-surface: #FFFFFF;    /* White (Card/Modal background) */
      
      --velar-border: #D1D5DB;        /* Gray 300 */

      /* 3. Typography */
      --velar-font-sans: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      --velar-font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      
      --velar-font-size-base: 1rem;
      --velar-line-height-base: 1.5;

      /* 4. Spacing (Based on a 0.25rem = 4px unit) */
      --velar-spacing-1: 0.25rem;  /* 4px */
      --velar-spacing-2: 0.5rem;   /* 8px */
      --velar-spacing-3: 0.75rem;  /* 12px */
      --velar-spacing-4: 1rem;     /* 16px */
      --velar-spacing-6: 1.5rem;   /* 24px */
      --velar-spacing-8: 2rem;     /* 32px */
      
      /* 5. Borders & Radius */
      --velar-border-width: 1px;
      --velar-border-radius-sm: 0.125rem; /* 2px */
      --velar-border-radius-md: 0.25rem;  /* 4px */
      --velar-border-radius-lg: 0.5rem;   /* 8px */
      --velar-border-radius-full: 9999px;

      /* 6. Shadows */
      --velar-shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --velar-shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --velar-shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
   }
CSS;