<?php declare(strict_types=1);

namespace Ellipse\Contracts\Templating;

interface EngineAdapterInterface
{
    /**
     * Register a namespace containing template files.
     *
     * @param string $namespace
     * @param string $path
     * @return void
     */
    public function registerNamespace(string $namespace, string $path): void;

    /**
     * Register the given callable as a function in the template engine.
     *
     * @param string    $name
     * @param callable  $cb
     * @return void
     */
    public function registerFunction(string $name, callable $cb): void;

    /**
     * Register an extension for the template engine.
     *
     * @param mixed     $extension
     * @param callable  $cb
     * @return void
     */
    public function registerExtension($extension): void;

    /**
     * Return a html string from a template file and a list of values.
     *
     * @param string    $file
     * @param array     $data
     * @return string
     */
    public function render(string $file, array $data = []): string;
}
