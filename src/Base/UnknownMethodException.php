<?php

declare(strict_types=1);

namespace LizhiDev\Yii\Base;

class UnknownMethodException extends \BadMethodCallException
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Unknown Method';
    }
}
