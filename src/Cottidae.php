<?php

namespace Cottidae;

use Travis\Client as Travis;

class Cottidae
{
    public function __construct(Travis $travis)
    {
        $this->travis = $travis;
    }

    protected function encrypt($key, $data)
    {
        openssl_public_encrypt($data, $encrypted, $key);

        return $encrypted;
    }
}