<?php
namespace NexaMerchant\Shopify\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Shopify:install';

    protected $description = 'Install Shopify an app';

    public function getAppVer() {
        return config("Shopify.ver");
    }

    public function getAppName() {
        return config("Shopify.name");
    }

    public function handle()
    {
        $this->info("Install app: Shopify");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Shopify Install cannelled");
            return false;
        }
    }
}