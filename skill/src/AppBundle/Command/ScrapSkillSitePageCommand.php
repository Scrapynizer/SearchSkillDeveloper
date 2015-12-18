<?php

namespace AppBundle\Command;

use AppBundle\Command\Core\QueueComand;

class ScrapSkillSitePageCommand extends QueueComand
{
    protected function configure()
    {
        $this->setName('scrap:skill:site:page');
    }

    protected function getService()
    {
        return $this->getContainer()->get('scrap_page_service');
    }
}