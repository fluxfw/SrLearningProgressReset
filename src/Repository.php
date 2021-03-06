<?php

namespace srag\Plugins\SrLearningProgressReset;

use ilSrLearningProgressResetPlugin;
use srag\DIC\SrLearningProgressReset\DICTrait;
use srag\Plugins\SrLearningProgressReset\Job\Repository as JobsRepository;
use srag\Plugins\SrLearningProgressReset\LearningProgressReset\Repository as LearningProgressResetRepository;
use srag\Plugins\SrLearningProgressReset\Utils\SrLearningProgressResetTrait;

/**
 * Class Repository
 *
 * @package srag\Plugins\SrLearningProgressReset
 */
final class Repository
{

    use DICTrait;
    use SrLearningProgressResetTrait;

    const PLUGIN_CLASS_NAME = ilSrLearningProgressResetPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Repository constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     *
     */
    public function dropTables() : void
    {
        $this->jobs()->dropTables();
        $this->learningProgressReset()->dropTables();
    }


    /**
     *
     */
    public function installTables() : void
    {
        $this->jobs()->installTables();
        $this->learningProgressReset()->installTables();
    }


    /**
     * @return JobsRepository
     */
    public function jobs() : JobsRepository
    {
        return JobsRepository::getInstance();
    }


    /**
     * @return LearningProgressResetRepository
     */
    public function learningProgressReset() : LearningProgressResetRepository
    {
        return LearningProgressResetRepository::getInstance();
    }
}
