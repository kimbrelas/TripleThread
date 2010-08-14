<?php

class ttActions extends sfActions
{
  public function getPage()
  {
    $slug = $this->getRequest()->getParameter('internal_slug');
    $this->forward404Unless($page = Doctrine_Core::getTable('ttBasicPage')->findOneByInternalSlug($slug));
    
    return $page;
  }
}