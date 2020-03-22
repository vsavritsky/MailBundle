<?php

namespace Extellient\MailBundle\Services;

interface MailTemplatingInterface
{
    /**
     * @param $templateCode
     * @param $recipients
     * @param array $variables
     * @param array $attachements
     *
     * @return mixed
     */
    public function createEmail($templateCode, $recipients, $externalId, array $variables = [], $attachements = []);
}
