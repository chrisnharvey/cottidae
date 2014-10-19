<?php

namespace Cottidae;

class Cottidae
{
    protected function encrypt($key, $data)
    {
        openssl_public_encrypt($data, $encrypted, $key);

        return $encrypted;
    }
}