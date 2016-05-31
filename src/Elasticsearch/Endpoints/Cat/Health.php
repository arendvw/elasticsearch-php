<?php

namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Health.
 *
 * @category Elasticsearch
 *
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 *
 * @link     http://elastic.co
 */
class Health extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $uri = '/_cat/health';

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'format',
            'local',
            'master_timeout',
            'h',
            'help',
            'ts',
            'v',
        );
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}
