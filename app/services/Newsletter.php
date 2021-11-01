<?php

namespace App\services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribed(String $email, String $list = null)
    {
        $list ??= config('services.mailchimp.list.subscribers');
        return $this->client()->lists->addListMember($list, [
            "email_address" => request('email'),
            "status" => "subscribed"
        ]);
    }
    protected function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us5'
        ]);
    }
}
