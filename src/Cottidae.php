<?php

namespace Cottidae;

use Travis\Client as Travis;
use GitWrapper\GitWrapper as Git;

class Cottidae
{
    public function __construct(Travis $travis, Git $git)
    {
        $this->travis = $travis;
        $this->git = $git;
    }

    protected function encrypt($key, $data)
    {
        openssl_public_encrypt($data, $encrypted, $key);

        return $encrypted;
    }
}