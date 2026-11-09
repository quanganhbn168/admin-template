<?php

namespace App\Support;

use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

/**
 * Makes HTML from the rich text editor safe to store and to print with {!! !!}.
 *
 * Allowed: Symfony's "safe elements" (headings, lists, tables, links, images, formatting...),
 * http(s)/mailto/tel links, http(s) or same-site images, and a small list of layout classes.
 * Everything else (scripts, iframes, event handlers, javascript: URLs, style attributes, other classes) is removed.
 *
 *   $post->body = Html::clean($request->input('body'));
 *   {!! App\Support\Html::clean($post->body) !!}
 */
class Html
{
    /** Classes the editor may produce (alignment and table look); everything else is dropped. */
    public const ALLOWED_CLASS_PATTERN = '/^(text-(start|center|end)|table|table-(bordered|striped|sm))$/';

    private static ?HtmlSanitizer $sanitizer = null;

    public static function clean(?string $html): string
    {
        $html = trim((string) $html);

        return $html === '' ? '' : self::sanitizer()->sanitize($html);
    }

    private static function sanitizer(): HtmlSanitizer
    {
        return self::$sanitizer ??= new HtmlSanitizer(
            (new HtmlSanitizerConfig)
                ->allowSafeElements()
                ->allowLinkSchemes(['http', 'https', 'mailto', 'tel'])
                ->allowRelativeLinks()
                ->allowMediaSchemes(['http', 'https'])
                ->allowRelativeMedias()
                ->forceAttribute('a', 'rel', 'noopener noreferrer')
                ->allowAttribute('class', ['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'div', 'table', 'td', 'th', 'li', 'ul', 'ol'])
                ->withAttributeSanitizer(new ClassAllowlistSanitizer)
        );
    }
}
