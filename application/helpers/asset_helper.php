<?php defined('BASEPATH') or exit('No direct script access allowed');



/**
 * Assets URL helper function.
 *
 * This function will create an asset file URL that includes a cache busting parameter in order
 * to invalidate the browser cache in case of an update.
 *
 * @param string $uri Relative URI (just like the one used in the base_url helper).
 * @param string|null $protocol Valid URI protocol.
 *
 * @return string Returns the final asset URL.
 */
function asset_url($uri = '', $protocol = NULL)
{
    $debug = config('debug');

    $cache_busting_token = ! $debug ? '?' . config('cache_busting_token') : '';

    if (strpos(basename($uri), '.js') !== FALSE && strpos(basename($uri), '.min.js') === FALSE && ! $debug)
    {
        $uri = str_replace('.js', '.min.js', $uri);
    }

    if (strpos(basename($uri), '.css') !== FALSE && strpos(basename($uri), '.min.css') === FALSE && ! $debug)
    {
        $uri = str_replace('.css', '.min.css', $uri);
    }

    return base_url($uri . $cache_busting_token, $protocol);
}