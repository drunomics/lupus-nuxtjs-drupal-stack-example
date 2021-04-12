<?php

namespace Drupal\demo_custom_elements\Processor;

use Drupal\custom_elements\CustomElement;
use Drupal\custom_elements\CustomElementGeneratorTrait;
use Drupal\custom_elements\Processor\CustomElementProcessorInterface;
use Drupal\paragraphs\ParagraphInterface;

/**
 * Processor for thunder text paragraphs.
 */
class ParagraphTextProcessor implements CustomElementProcessorInterface {

  use CustomElementGeneratorTrait;

  /**
   * {@inheritdoc}
   */
  public function supports($data, $viewMode) {
    if ($data instanceof ParagraphInterface) {
      return $data->getEntityTypeId() == 'paragraph' &&
        $data->bundle() == 'text';
    }
    else {
      return FALSE;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function addtoElement($paragraph, CustomElement $element, $viewMode) {
    assert($paragraph instanceof ParagraphInterface);

    $element->setAttribute('title', $paragraph->field_title->value);
    $element->setSlot('default', $paragraph->field_text->processed, 'div');
  }

}
