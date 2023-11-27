<?php

/*
 * This file is part of the "PlaceholderTimeBundle" for Kimai.
 * All rights reserved by Kevin Papst (www.keleo.de).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\PlaceholderTimeBundle\EventSubscriber;

use App\Entity\ActivityMeta;
use App\Event\ActivityMetaDefinitionEvent;
use KimaiPlugin\PlaceholderTimeBundle\PlaceholderTimeBundle;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

final class ActivityMetaDefinitionSubscriber implements EventSubscriberInterface
{
    /**
     * @return array<string, array<int, string|int>>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            ActivityMetaDefinitionEvent::class => ['onEvent', 100],
        ];
    }

    public function onEvent(ActivityMetaDefinitionEvent $event): void
    {
        $definition = new ActivityMeta();
        $definition->setLabel('placeholder.label');
        $definition->setOptions(['help' => 'placeholder.help']);
        $definition->setName(PlaceholderTimeBundle::META_FIELD_PLACEHOLDER);
        $definition->setType(CheckboxType::class);
        $definition->setIsVisible(true);

        $event->getEntity()->setMetaField($definition);
    }
}
