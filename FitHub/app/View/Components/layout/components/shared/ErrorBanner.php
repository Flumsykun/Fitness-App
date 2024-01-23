<?php

namespace App\View\Components\layout\components\shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorBanner extends Component
{
    /**
     * Create a new component instance.
     */

    public $errors;
    public function __construct($errors)
    {
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.components.shared.error-banner');
    }
}
