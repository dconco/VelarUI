<?php

namespace VelarUI\Components;

class Button
{
    public static function __render(string $label, string $type = 'primary'): string
    {
        $class = match ($type) {
            'primary' => 'velar-btn-primary',
            'secondary' => 'velar-btn-secondary',
            'danger' => 'velar-btn-danger',
            'outline-primary' => 'velar-btn-outline-primary',
            'outline-secondary' => 'velar-btn-outline-secondary',
            'outline-danger' => 'velar-btn-outline-danger',
            default => 'velar-btn-primary',
        };

        return <<<HTML
            <button class="velar-btn {$class}">
                {$label}
            </button>
        HTML;
    }
}