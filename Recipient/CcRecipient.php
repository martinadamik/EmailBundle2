<?php

namespace Everlution\EmailBundle\Recipient;

class CcRecipient extends Recipient
{

    /**
     * @param string $email
     * @param string|null $name
     */
    public function __construct($email, $name = null)
    {
        parent::__construct($email, $name, 'cc');
    }

}
