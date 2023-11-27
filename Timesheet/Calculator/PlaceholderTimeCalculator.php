<?php

/*
 * This file is part of the "PlaceholderTimeBundle" for Kimai.
 * All rights reserved by Kevin Papst (www.keleo.de).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\PlaceholderTimeBundle\Timesheet\Calculator;

use App\Entity\Timesheet;
use App\Timesheet\CalculatorInterface;
use KimaiPlugin\PlaceholderTimeBundle\PlaceholderTimeBundle;

final class PlaceholderTimeCalculator implements CalculatorInterface
{
    public function calculate(Timesheet $record, array $changeset): void
    {
        if ($record->getActivity() === null) {
            return;
        }

        $meta = $record->getActivity()->getMetaField(PlaceholderTimeBundle::META_FIELD_PLACEHOLDER)?->getValue();

        if ($meta === true || $meta === '1') {
            $duration = $record->getDuration(false);
            if ($duration > 0) {
                $record->setDuration(0);
            }
        }

        return;
    }

    public function getPriority(): int
    {
        return 9999;
    }
}
