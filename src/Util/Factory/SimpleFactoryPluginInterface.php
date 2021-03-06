<?php

namespace Dazzle\Util\Factory;

use Dazzle\Throwable\Exception\Runtime\ExecutionException;

interface SimpleFactoryPluginInterface
{
    /**
     * Register plugin to Factory.
     *
     * @param SimpleFactoryInterface $factory
     * @return SimpleFactoryPluginInterface
     * @throws ExecutionException
     */
    public function registerPlugin(SimpleFactoryInterface $factory);

    /**
     * Unregister plugin from Factory.
     *
     * @param SimpleFactoryInterface $factory
     * @return SimpleFactoryPluginInterface
     */
    public function unregisterPlugin(SimpleFactoryInterface $factory);
}
