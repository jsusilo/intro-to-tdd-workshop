<?php

namespace spec\App\Domain\Model;

use App\Domain\Model\Todo;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TodoSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Todo::class);
    }

    function let()
    {
        $this->beConstructedThrough('create', ['Daily']);

        $this->getName()->shouldEqual('Daily');
    }

    function it_can_mark_todo_as_done()
    {
        $this->markAsDone();

        $this->isDone()->shouldEqual(true);
    }

    function it_can_mark_todo_as_undone()
    {
        $this->markAsUndone();

        $this->isDone()->shouldEqual(false);
    }
}
