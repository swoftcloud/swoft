<?php declare(strict_types=1);


namespace App\Validator;

use Swoft\Validator\Annotation\Mapping\IsInt;
use Swoft\Validator\Annotation\Mapping\Max;
use Swoft\Validator\Annotation\Mapping\Validator;

/**
 * Class TypeValidator
 *
 * @since 2.0
 *
 * @Validator()
 */
class TypeValidator
{
    /**
     * @IsInt()
     * @Max(12)
     *
     * @var int
     */
    public $intParam;
}