<?php declare(strict_types=1);

namespace Ellipse\Contracts\Templating;

interface EngineAdapterFactoryInterface
{
    /**
     * Return a new template engine adapter.
     *
     * @param string    $path
     * @param array     $options
     * @return \Ellipse\Contracts\Templating\EngineAdapterInterface
     */
    public function getEngine(string $path, array $options = []): EngineAdapterInterface;
}
