<?php

namespace spec\App\Application\AnswerManagement\Events;

use App\Application\AnswerManagement\Events\AnswerWasCreated;
use PhpSpec\ObjectBehavior;

class AnswerWasCreatedSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AnswerWasCreated::class);
    }
}
