<?php

namespace Guzzle\Tests\Validation;

use Guzzle\Validation\IsInstanceOf;

/**
 * @covers Guzzle\Validation\IsInstanceOf
 */
class IsInstanceOfTest extends Validation
{
    public function provider()
    {
        $c = 'Guzzle\Validation\IsInstanceOf';
        return array(
            array($c, new \DateTime(), array('class' => 'stdClass'), 'Value must be an instance of stdClass', null),
            array($c, new \stdClass(), array('class' => 'stdClass'), true, null),
            array($c, new IsInstanceOf(), array('class' => 'Guzzle.Validation.IsInstanceOf'), true, null),
            array($c, 'a', null, true, 'Guzzle\Common\Exception\InvalidArgumentException'),
            array($c, new \stdClass(), null, true, 'Guzzle\Common\Exception\InvalidArgumentException')
        );
    }
}
