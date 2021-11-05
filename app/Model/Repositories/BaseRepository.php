<?php
declare(strict_types=1);


namespace App\Model\Repositories;

use Nette\Database\Explorer;
use Nette\SmartObject;

abstract class BaseRepository
{
    use SmartObject;


    public function __construct(
        protected Explorer $explorer,
    ) { }


}
