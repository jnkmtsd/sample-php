<?php

declare(strict_types=1);

namespace App\T0017\InterfaceTestSample;

class JsonFormatter implements Formatter
{
    public function format(array $data): string
    {
        return json_encode($data);
    }
}
