<?php

namespace App\Domain\AnswerManagement;

use App\Domain\AnswerManagement\Answer\AnswerId;
use App\Domain\QuestionManagement\Question;
use App\Domain\UserManagement\User;

class Answer
{
    /**
     * @var AnswerId
     */
    private AnswerId $answerId;

    /**
     * @var User
     */
    private User $owner;
    private string $body;
    private \DateTimeImmutable $appliedOn;


    /**
     * Answer constructor.
     * @param User $owner
     *
     * @param string $body
     */
    public function __construct(User $owner, string $body)
    {

        $this->answerId = new AnswerId();
        $this->owner= $owner;
        $this->body = $body;
        $this->appliedOn = new \DateTimeImmutable();
    }


    public function answerId(): AnswerId
    {
        return $this->answerId;
    }

    public function owner(): User
    {
        return $this->owner;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function appliedOn(): \DateTimeImmutable
    {
        return $this->appliedOn;
    }
}
