<?php

namespace Enflow\SocialShare;

class ConfiguredSocialShareService
{
    public string $url;

    public string $color;

    public function __construct(public SocialShare $socialShare, public string $name, public array $parameters = [])
    {
        if (! array_key_exists($name, config('social-share.services'))) {
            throw Exceptions\UnknownService::create($name);
        }

        $this->url = config('social-share.services.'.$this->name.'.url');
        $this->color = config('social-share.services.'.$this->name.'.color');
    }

    public function url(): string
    {
        $this->parameters['url'] = request()->fullUrl();
        $this->parameters['text'] = $this->socialShare->text;
        $this->parameters['textWithUrl'] = $this->socialShare->text ? sprintf('%s - %s', $this->socialShare->text, $this->parameters['url']) : $this->parameters['url'];

        $url = $this->url;

        foreach ($this->parameters as $key => $value) {
            $url = str_replace('#'.$key.'#', urlencode($value), $url);
        }

        return $url;
    }

    public function icon(): ?string
    {
        if (file_exists($iconPath = __DIR__.'/../resources/icons/'.$this->name.'.svg')) {
            return file_get_contents($iconPath);
        }

        return null;
    }
}
