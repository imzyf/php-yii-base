<?php

declare(strict_types=1);

namespace LizhiDev\Yii\Base;

class UnknownPropertyException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Property';
    }
}
