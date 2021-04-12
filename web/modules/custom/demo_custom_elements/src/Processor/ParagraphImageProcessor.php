<?php


namespace Drupal\demo_custom_elements\Processor;

use Drupal\Core\Url;
use Drupal\custom_elements\CustomElement;
use Drupal\custom_elements\Processor\CustomElementProcessorInterface;
use Drupal\paragraphs\ParagraphInterface;

/**
 * Default processor for thunder image paragraph.
 */
class ParagraphImageProcessor implements CustomElementProcessorInterface {

  /**
   * {@inheritdoc}
   */
  public function supports($data, $viewMode) {
    if ($data instanceof ParagraphInterface) {
      return $data->getEntityTypeId() == 'paragraph' &&
        $data->bundle() == 'image';
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

    /** @var \Drupal\media_entity\Entity\Media $media_entity */
    $media_entity = $paragraph->field_image->entity;
    if (!$media_entity) {
      return;
    }
    $uri = $media_entity->field_media_image->entity->uri->value;
    $element->setAttribute('src', file_create_url($uri));
    $element->setAttribute('alt', $media_entity->field_media_image->alt);
    $element->setAttribute('name', $media_entity->label());
  }

}
