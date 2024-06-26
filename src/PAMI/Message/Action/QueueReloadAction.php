<?php
/**
 * QueueReload action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://marcelog.github.com/PAMI/
 *
 * Copyright 2011 Marcelo Gornstein <marcelog@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PAMI\Message\Action;

/**
 * QueueReload action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://marcelog.github.com/PAMI/ Apache License 2.0
 * @link       http://marcelog.github.com/PAMI/
 */
class QueueReloadAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string|false $queue      Queue name.
     * @param bool         $members    Reload members.
     * @param bool         $rules      Reload rules.
     * @param bool         $parameters Reload parameters.
     *
     * @return void
     */
    public function __construct(
        $queue = false,
        $members = false,
        $rules = false,
        $parameters = false
    ) {
        parent::__construct('QueueReload');
        if ($queue !== false) {
            $this->setKey('Queue', $queue);
        }
        $this->setKey('Members', $members ? 'yes' : 'no');
        $this->setKey('Rules', $rules ? 'yes' : 'no');
        $this->setKey('Parameters', $parameters ? 'yes' : 'no');
    }
}
