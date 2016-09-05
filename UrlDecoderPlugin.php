<?php
namespace Craft;

class UrlDecoderPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Url Decoder');
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Matthew Attanasio';
    }

    public function getDeveloperUrl()
    {
        return 'http://skyfoundry.agency';
    }

    public function hasCpSection()
    {
        return false;
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.urldecoder.twigextensions.UrlDecoderTwigExtension');

        return new UrlDecoderTwigExtension();
    }
}
