<?php

return <<<CSS
   /* --- Button Styles --- */

   .velar-btn {
      /* Reset */
      padding: 0;
      margin: 0;
      border: none;
      background: none;
      font-family: var(--velar-font-sans);
      
      /* Base Styles */
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      cursor: pointer;
      font-size: var(--velar-font-size-base);
      font-weight: 500;
      
      /* Sizing & Shape */
      padding: var(--velar-spacing-2) var(--velar-spacing-4);
      border-radius: var(--velar-border-radius-md);
      
      /* Transitions */
      transition: background-color 0.2s ease, border-color 0.2s ease, color 0.2s ease;
   }

   /* --- Solid Variants --- */
   .velar-btn-primary {
      background-color: var(--velar-primary);
      color: var(--velar-white);
   }
   .velar-btn-primary:hover {
      background-color: #2563EB; /* Darker primary */
   }

   .velar-btn-secondary {
      background-color: var(--velar-secondary);
      color: var(--velar-white);
   }
   .velar-btn-secondary:hover {
      background-color: #4B5563; /* Darker secondary */
   }

   .velar-btn-danger {
      background-color: var(--velar-danger);
      color: var(--velar-white);
   }
   .velar-btn-danger:hover {
      background-color: #DC2626; /* Darker danger */
   }

   /* --- Outline Variants --- */
   .velar-btn-outline-primary {
      background-color: transparent;
      color: var(--velar-primary);
      border: var(--velar-border-width) solid var(--velar-primary);
   }
   .velar-btn-outline-primary:hover {
      background-color: var(--velar-primary);
      color: var(--velar-white);
   }

   /* --- Link Variant --- */
   .velar-btn-link {
      text-decoration: none;
      background-color: transparent;
      color: var(--velar-primary);
      padding: 0;
   }
CSS;