<?php

class defaultComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {
    $this->userMenu = new ioMenu();
  
    $this->userMenu->addChild('login', '@login');
    $this->userMenu->addChild('sign up', '@signup');
  
    $this->menu = new ioMenu();
    
    $this->menu->addChild('home', '@home');
    $this->menu->addChild('about', '@about');
    $this->menu->addChild('blog', '@blog');
    $this->menu->addChild('products', '@products');
    $this->menu->addChild('pricing', '@pricing');
    $this->menu->addChild('design', '@design');
    $this->menu->addChild('start order', '@start_order');
  }
}