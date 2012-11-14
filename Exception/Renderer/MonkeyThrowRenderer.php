<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Exception\Renderer;

use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Model\BlockInterface;

/**
 * Monkey throw renderer re-throws the exception and lets the framework handle the exception
 */
class MonkeyThrowRenderer implements RendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Exception $banana, BlockInterface $block, Response $response = null)
    {
        throw $banana;
    }
}