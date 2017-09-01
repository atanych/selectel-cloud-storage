<?php
/**
 * @link https://github.com/creocoder/yii2-flysystem
 * @copyright Copyright (c) 2015 Alexander Kochetov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace ArgentCrusade\Selectel\CloudStorage;
use ArgentCrusade\Selectel\CloudStorage\Api\ApiClient;
use ArgentCrusade\Selectel\CloudStorage\CloudStorage;
use creocoder\flysystem\Filesystem;


/**
 * AwsS3Filesystem
 *
 * @author Alexander Kochetov <creocoder@gmail.com>
 */
class SelectelFlySystem extends Filesystem
{
    /**
     * @var string
     */
    public $user;
    /**
     * @var string
     */
    public $password;
    /**
     * @var string
     */
    public $bucket;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->user === null) {
            throw new \Exception('The "user" property must be set.');
        }

        if ($this->password === null) {
            throw new \Exception('The "password" property must be set.');
        }

        if ($this->bucket === null) {
            throw new \Exception('The "bucket" property must be set.');
        }

        parent::init();
    }

    /**
     * @return AwsS3Adapter
     */
    protected function prepareAdapter()
    {

        $apiClient = new ApiClient($this->user, $this->password);
        $storage = new CloudStorage($apiClient);
        $container = $storage->getContainer($this->bucket);

        return new SelectelAdapter($container);
    }
}
