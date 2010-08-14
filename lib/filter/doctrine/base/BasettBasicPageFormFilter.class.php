<?php

/**
 * ttBasicPage filter form base class.
 *
 * @package    TripleThread
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasettBasicPageFormFilter extends ioPageFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('tt_basic_page_filters[%s]');
  }

  public function getModelName()
  {
    return 'ttBasicPage';
  }
}
