<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter
{
    public function supscribe(string $email, string $list = null)
    {
        $list = $list?$list:config('services.mailchimp.list');

        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
    protected function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us6'
        ]);
    }
}
