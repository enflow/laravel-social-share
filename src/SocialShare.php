<?php

namespace Enflow\SocialShare;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;

class SocialShare implements Renderable
{
    public Collection $services;
    public string $size = 'normal';
    public string $style = 'rounded';
    public ?string $text = null;

    public function __construct()
    {
        $this->services = collect();
    }

    public function __call(string $service, array $parameters = []): self
    {
        $this->services->push(new ConfiguredSocialShareService($this, $service, $parameters));

        return $this;
    }

    public function text(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function normal(): self
    {
        $this->size = 'normal';

        return $this;
    }

    public function large(): self
    {
        $this->size = 'large';

        return $this;
    }

    public function square(): self
    {
        $this->style = 'square';

        return $this;
    }

    public function rounded(): self
    {
        $this->style = 'rounded';

        return $this;
    }

    public function circle(): self
    {
        $this->style = 'circle';

        return $this;
    }

    public function render(): HtmlString
    {
        return new HtmlString(view('social-share::social-share', [
            'services' => $this->services,
            'size' => $this->size,
            'style' => $this->style,
        ])->render());
    }
}
