<?php declare(strict_types=1);

namespace Ellipse\Contracts\Templating;

interface EngineInterface
{
    /**
     * Return a html string from a template file and a list of values.
     *
     * @param string    $file
     * @param array     $values
     * @return string
     */
    public function render(string $file, array $values = []): string;
}
