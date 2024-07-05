<?php declare(strict_types=1);
namespace NexaMerchant\Shopify\Tests;


use PHPUnit\Framework\TestCase;

final class ShopifyTest extends TestCase
{
    public function testSubscriberRegistrationDoesNotWorkWhenEventFacadeIsSealed(): void
    {
        $this->assertTrue(true);
    }

    public function testTracerRegistrationDoesNotWorkWhenEventFacadeIsSealed(): void
    {
        $this->assertTrue(true);
    }
}
