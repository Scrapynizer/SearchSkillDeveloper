<?php

namespace ReenExe\Scrapynizer\Content;

use Symfony\Component\DomCrawler\Crawler;

class Container extends AbstractContainer
{
    /**
     * Container constructor.
     * @param string $string
     * @param Crawler $crawler
     */
    public function __construct($string, Crawler $crawler)
    {
        $this->string = $string;
        $this->crawler = $crawler;
    }

    /**
     * @return Crawler
     */
    public function getCrawler()
    {
        return $this->crawler;
    }
}
