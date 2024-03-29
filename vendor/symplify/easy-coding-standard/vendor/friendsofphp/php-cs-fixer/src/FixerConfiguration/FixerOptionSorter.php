<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\FixerConfiguration;

/**
 * @internal
 */
final class FixerOptionSorter
{
    /**
     * @param iterable<FixerOptionInterface> $options
     *
     * @return list<FixerOptionInterface>
     */
    public function sort(iterable $options) : array
    {
        if (!\is_array($options)) {
            $options = \iterator_to_array($options, \false);
        }
        \usort($options, static function (\PhpCsFixer\FixerConfiguration\FixerOptionInterface $a, \PhpCsFixer\FixerConfiguration\FixerOptionInterface $b) : int {
            return $a->getName() <=> $b->getName();
        });
        return $options;
    }
}
