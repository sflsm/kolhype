<?php

use App\Models\SectionContent;

if (!function_exists('content')) {
    function content($section, $key, $default = '')
    {
        return SectionContent::where('section', $section)
                             ->where('key', $key)
                             ->value('value') ?? $default;
    }
}