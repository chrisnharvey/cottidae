<?php

namespace Cottidae\Command;

use Cottidae\Cottidae;
use Travis\Client as Travis;
use GitWrapper\GitWrapper as Git;
use Symfony\Component\Console\Command\Command;

abstract class BaseCommand extends Command
{
    protected $cottidae;

    public function __construct(Cottidae $cottidae = null)
    {
        parent::__construct();

        if ( ! $cottidae) {
            $cottidae = new Cottidae(new Travis, new Git);
        }

        $this->cottidae = $cottidae;
    }
}