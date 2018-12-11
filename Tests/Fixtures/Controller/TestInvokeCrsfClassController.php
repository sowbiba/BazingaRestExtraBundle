<?php

namespace Bazinga\Bundle\RestExtraBundle\Tests\Fixtures\Controller;

use Bazinga\Bundle\RestExtraBundle\Annotation\CsrfDoubleSubmit;
use Symfony\Component\HttpFoundation\Response;

/**
 * @CsrfDoubleSubmit
 */
class TestInvokeCrsfClassController
{
    public function __invoke()
    {
        return new Response(__METHOD__);
    }
}
