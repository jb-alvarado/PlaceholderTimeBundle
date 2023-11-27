<?php

/*
 * This file is part of the "PlaceholderTimeBundle" for Kimai.
 * All rights reserved by Kevin Papst (www.keleo.de).
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KimaiPlugin\PlaceholderTimeBundle;

use App\Plugin\PluginInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlaceholderTimeBundle extends Bundle implements PluginInterface
{
    public const META_FIELD_PLACEHOLDER = 'is_placeholder';
}
