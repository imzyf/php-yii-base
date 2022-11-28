<?php

declare(strict_types=1);

namespace LizhiDev\Yii\Base;

class InvalidCallException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Invalid Call';
    }
}
