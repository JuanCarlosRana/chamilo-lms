<?php

/*
 * This file is part of Zippy.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Alchemy\Zippy\Adapter;

use Alchemy\Zippy\Archive\Archive;
use Alchemy\Zippy\Resource\ResourceManager;

abstract class AbstractAdapter implements AdapterInterface
{
    /** @var ResourceManager */
    protected $manager;

    public function __construct(ResourceManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @inheritdoc
     */
    public function open($path)
    {
        return new Archive($this->createResource($path), $this, $this->manager);
    }

    /**
     * Change current working directory to another
     *
     * @param string $target the target directory
     *
     * @return AdapterInterface
     *
     * @throws RuntimeException In case of failure
     */
    protected function chdir($target)
    {
        if (false === @chdir($target)) {
            throw new RuntimeException(sprintf('Unable to chdir to `%s`', $target));
        }

        return $this;
    }

    abstract protected function createResource($path);
}
