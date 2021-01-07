<?php

namespace Enflow\SocialShare\Test;

use Enflow\SocialShare\ConfiguredSocialShareService;
use Enflow\SocialShare\Exceptions\UnknownService;
use Enflow\SocialShare\SocialShare;
use Illuminate\Http\Request;
use Mockery;
use Spatie\Snapshots\MatchesSnapshots;

class SocialShareTest extends TestCase
{
    use MatchesSnapshots;

    public function test_that_social_share_is_empty_by_default()
    {
        $this->assertEmpty((new SocialShare())->services);
    }

    public function test_that_service_is_added()
    {
        $socialShare = (new SocialShare())->facebook();

        $this->assertCount(1, $socialShare->services);

        $socialShare->twitter();
        $this->assertCount(2, $socialShare->services);
    }

    public function test_that_service_is_rendered()
    {
        $socialShare = (new SocialShare())->facebook();

        $this->assertMatchesXmlSnapshot($socialShare->render()->toHtml());
    }

    public function that_that_a_wrapper_class_can_be_added()
    {
        $socialShare = (new SocialShare())->class('mt-2 mb-4');

        $this->assertEquals('mt-2 mb-4', $socialShare->class);
        $this->assertMatchesXmlSnapshot($socialShare->render()->toHtml());
    }

    public function test_size_modifiers()
    {
        $socialShare = (new SocialShare())->large()->circle();

        $this->assertEquals('large', $socialShare->size);
        $this->assertEquals('circle', $socialShare->style);
    }

    public function test_url_replacement_with_just_a_url()
    {
        $service = new ConfiguredSocialShareService(new SocialShare(), 'whatsapp');

        $this->assertEquals('https://wa.me/?text=http%3A%2F%2Flocalhost', $service->url());
    }

    public function test_url_replacement_with_text_and_url()
    {
        $service = new ConfiguredSocialShareService((new SocialShare())->text('Text to append!'), 'whatsapp');

        $this->assertEquals('https://wa.me/?text=Text+to+append%21+-+http%3A%2F%2Flocalhost', $service->url());
    }

    public function test_that_exception_is_thrown_if_unknown_service_is_called()
    {
        $this->expectException(UnknownService::class);
        $this->expectExceptionMessage("Service 'googlePlus' is not defined in the services config.");

        (new SocialShare())->googlePlus();
    }
}
