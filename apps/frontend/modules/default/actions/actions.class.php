<?php

class defaultActions extends ttActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->page = $this->getPage();
    //$this->getContentLoader($this->page)->load(); disable security temporarily
  }
}