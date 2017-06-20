<?php declare(strict_types=1);

namespace Ellipse\Contracts\Templating;

interface EngineInterface
{
    /**
     * Register the given callable as a function in the template engine.
     *
     * @param string    $name
     * @param callable  $cb
     * @return void
     */
    public function registerFunction(string $name, callable $cb): void;

    /**
     * Return a html string from a template file and a list of values.
     *
     * @param string    $file
     * @param array     $data
     * @return string
     */
    public function render(string $file, array $data = []): string;
}
