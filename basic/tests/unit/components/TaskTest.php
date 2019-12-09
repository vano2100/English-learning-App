<?php
namespace components;


class TaskTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testTaskContent()
    {
        $task = \Yii::$app->tasks->getTask(81);
        $task = \json_decode($task, true);
        expect_that(array_key_exists("taskID", $task));
        expect_that(array_key_exists("givenWordId", $task));
        expect_that(array_key_exists("taskType", $task));
        expect_that(array_key_exists("taskDescription", $task));
        expect_that(array_key_exists("imgUrl", $task));
        expect_that(array_key_exists("transcription", $task));
        expect_that(array_key_exists("givenWordEng", $task));
        expect_that(array_key_exists("givenWordRus", $task));
    }
}
