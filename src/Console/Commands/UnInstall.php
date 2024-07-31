<?php
namespace NexaMerchant\Shopify\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Shopify:uninstall';

    protected $description = 'Uninstall Shopify an app';

    public function getAppVer() {
        return config("Shopify.ver");
    }

    public function getAppName() {
        return config("Shopify.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Shopify UnInstall cannelled");
            return false;
        }
    }
}