<?php

/**
 * ioPage form base class.
 *
 * @method ioPage getObject() Returns the current form's model object
 *
 * @package    TripleThread
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseioPageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'title'            => new sfWidgetFormInputText(),
      'body'             => new sfWidgetFormTextarea(),
      'is_published'     => new sfWidgetFormInputCheckbox(),
      'published_at'     => new sfWidgetFormInputText(),
      'meta_keywords'    => new sfWidgetFormTextarea(),
      'meta_description' => new sfWidgetFormTextarea(),
      'type'             => new sfWidgetFormInputText(),
      'internal_slug'    => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'slug'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'body'             => new sfValidatorString(array('required' => false)),
      'is_published'     => new sfValidatorBoolean(array('required' => false)),
      'published_at'     => new sfValidatorPass(array('required' => false)),
      'meta_keywords'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'meta_description' => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'type'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'internal_slug'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('io_page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ioPage';
  }

}
