<?php

enum Subject: string
{
    case php = 'PHP';
    case css = 'CSS';
    case html = 'HTML';
    case sql = 'SQL';
    case Laravel = 'LARAVEL';
}

enum ResourceType: string
{
    case file = 'file';
    case article = 'article';
    case web = 'web';
    case video = 'video';
}

class Resource
{
    public string $name;
    public Subject $subject;
    public ResourceType $typeOfResource;
    public string $URL;

    public function __construct(
        string $name,
        Subject $subject,
        ResourceType $typeOfResource,
        string $URL
    ) {
        $this->name = $name;
        $this->subject = $subject;
        $this->typeOfResource = $typeOfResource;
        $this->URL = $URL;
    }

    public function __toString(): string
    {
        return sprintf(
            "Resource Name: %s | Subject: %s | Type: %s | URL: %s\n",
            $this->name,
            $this->subject->value,
            $this->typeOfResource->value,
            $this->URL
        );
    }
}
