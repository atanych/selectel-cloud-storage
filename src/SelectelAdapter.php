<?php

namespace ArgentCrusade\Selectel\CloudStorage;

use ArgentCrusade\Selectel\CloudStorage\Contracts\ContainerContract;
use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Adapter\Polyfill\StreamedCopyTrait;
use League\Flysystem\Adapter\Polyfill\StreamedTrait;
use League\Flysystem\Config;

class SelectelAdapter extends AbstractAdapter
{
    use StreamedTrait;
    use StreamedCopyTrait;

    public $container;

    public function __construct(ContainerContract $container)
    {
        $this->container = $container;
    }
    /**
     * Check whether a file is present.
     *
     * @param string $path
     *
     * @return bool
     */
    public function has($path)
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function write($path, $contents, Config $config)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function update($path, $contents, Config $config)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function upload($path, $contents, Config $config)
    {
        return $this->container->uploadFromString($path, $contents);
    }

    /**
     * @inheritdoc
     */
    public function read($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function rename($path, $newpath)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function delete($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function listContents($directory = '', $recursive = false)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function getMetadata($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function getSize($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function getMimetype($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function getTimestamp($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function getVisibility($path)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function setVisibility($path, $visibility)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function createDir($dirname, Config $config)
    {
        throw new \Exception('should be implemented');
    }

    /**
     * @inheritdoc
     */
    public function deleteDir($dirname)
    {
        throw new \Exception('should be implemented');
    }
}
