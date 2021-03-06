<?php

namespace Dazzle\Util\Factory;

use Dazzle\Throwable\Exception\Runtime\ExecutionException;

interface FactoryPluginInterface
{
    /**
     * Register plugin to Factory.
     *
     * @param FactoryInterface $factory
     * @return FactoryPluginInterface
     * @throws ExecutionException
     */
    public function registerPlugin(FactoryInterface $factory);

    /**
     * Unregister plugin from Factory.
     *
     * @param FactoryInterface $factory
     * @return FactoryPluginInterface
     */
    public function unregisterPlugin(FactoryInterface $factory);
}
