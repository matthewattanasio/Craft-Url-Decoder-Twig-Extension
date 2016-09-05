<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class UrlDecoderTwigExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'UrlDecoder';
    }

    public function getFilters()
    {
        return array(
            'url_decode' => new Twig_Filter_Method($this, 'UrlDecoderFilter'),
        );
    }

    public function UrlDecoderFilter( $url ) {
        return urldecode( $url );
    }
}
