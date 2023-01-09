<?php
namespace App\services;

use MailchimpMarketing\ApiClient;
use Illuminate\Validation\ValidationException;

class Newsletter {

public function supscribe(string $email)
{
        // $list ?? config('services.mailchimp.list');

           return $this->client()->lists->addListMember('9ce7d1415c', [
                "email_address" => $email,
                "status" => "subscribed",
            ]);
        }
protected function client()
{
    $mailchimp = new ApiClient();

   return $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21'
    ]);
}
}
