<?php


namespace Domain\AnswerManagement;


use App\Domain\AnswerManagement\Answer;

interface AnswerSpcification
{
    /**
     * Returns TRUE whenever the given question is satisfied by this specification
     *
     * @param Answer $answer
     * @return bool
     */
    public function isSatisfiedBy(Answer $answer): bool;
}