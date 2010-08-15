<?php

class defaultComponents extends sfComponents
{
  public function executeMenu(sfWebRequest $request)
  {
    $user = $this->getUser();

    $this->userMenu = new ioMenu();

    if(!$user->isAuthenticated())
    {
      $this->userMenu->addChild('log in', '@login');
      $this->userMenu->addChild('sign up', '@sign_up');
    }
    else
    {
      $this->userMenu->addChild('Logged in as '.$user->getGuardUser()->username);
      $this->userMenu->addChild('log out', '@logout');
    }

    $this->menu = new ioMenu();

    $this->menu->addChild('home', '@homepage');
    $this->menu->addChild('about', '@about');
    $this->menu->addChild('blog', '@blog');
    $this->menu->addChild('products', '@products');
    $this->menu->addChild('pricing', '@pricing');
    $this->menu->addChild('design', '@design');
    $this->menu->addChild('start order', '@start_order');
  }
}