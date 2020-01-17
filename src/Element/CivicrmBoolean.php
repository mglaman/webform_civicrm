<?php

namespace Drupal\webform_civicrm\Element;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Radios;

/**
 * @FormElement("civicrm_boolean")
 */
class CivicrmBoolean extends Radios {

  public static function processRadios(&$element, FormStateInterface $form_state, &$complete_form) {
    $element = parent::processRadios($element, $form_state, $complete_form);
    return $element;
  }

  public static function valueCallback(&$element, $input, FormStateInterface $form_state) {
    $value = parent::valueCallback($element, $input, $form_state);
    return $value;
  }
}
