<?php

/**
 * ttPage form base class.
 *
 * @method ttPage getObject() Returns the current form's model object
 *
 * @package    TripleThread
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasettPageForm extends ioPageForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('tt_page[%s]');
  }

  public function getModelName()
  {
    return 'ttPage';
  }

}
