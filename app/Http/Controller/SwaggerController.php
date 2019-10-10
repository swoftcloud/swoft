<?php declare(strict_types=1);


namespace App\Http\Controller;

use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Throwable;

/**
 * Class SwaggerController
 *
 * @since 2.0
 *
 * @Controller(prefix="swagger")
 */
class SwaggerController
{
    /**
     * @RequestMapping(route="index")
     *
     * @return Response
     * @throws Throwable
     */
    public function index(): Response
    {
        return view("swagger/index");
    }
}