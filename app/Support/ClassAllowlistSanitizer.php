<?php

namespace App\Support;

use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;
use Symfony\Component\HtmlSanitizer\Visitor\AttributeSanitizer\AttributeSanitizerInterface;

/** Keeps only the CSS classes listed in Html::ALLOWED_CLASS_PATTERN, so content cannot restyle or overlay the page. */
class ClassAllowlistSanitizer implements AttributeSanitizerInterface
{
    public function getSupportedElements(): ?array
    {
        return null; // every element
    }

    public function getSupportedAttributes(): ?array
    {
        return ['class'];
    }

    public function sanitizeAttribute(string $element, string $attribute, string $value, HtmlSanitizerConfig $config): ?string
    {
        $classes = array_filter(
            preg_split('/\s+/', trim($value)) ?: [],
            fn (string $class) => preg_match(Html::ALLOWED_CLASS_PATTERN, $class) === 1,
        );

        return $classes === [] ? null : implode(' ', $classes);
    }
}
