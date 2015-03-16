<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace User\Notification\Message;

use QuickApps\Core\Plugin;
use User\Model\Entity\User;
use User\Notification\Message\BaseMessage;

/**
 * Notifies user when account is blocked.
 *
 */
class BlockedMessage extends BaseMessage
{

    /**
     * {@inheritDoc}
     */
    public function send()
    {
        $this
            ->subject(Plugin::get('User')->settings['message_blocked_subject'])
            ->body(Plugin::get('User')->settings['message_blocked_body']);

        if (Plugin::get('User')->settings['message_blocked']) {
            return parent::send();
        }
        return true;
    }
}
