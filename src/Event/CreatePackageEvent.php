<?php

declare(strict_types=1);

namespace MauticLanguagePacker\Event;

use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Contracts\EventDispatcher\Event;

class CreatePackageEvent extends Event
{
    public const NAME = 'mlp.create.package';

    public function __construct(
        private readonly SymfonyStyle $io,
        private readonly array $filterLanguages,
        private readonly string $translationsDir,
        private readonly string $packagesTimestampDir
    ) {
    }

    public function getIo(): SymfonyStyle
    {
        return $this->io;
    }

    public function getFilterLanguages(): array
    {
        return $this->filterLanguages;
    }

    public function getTranslationsDir(): string
    {
        return $this->translationsDir;
    }

    public function getPackagesTimestampDir(): string
    {
        return $this->packagesTimestampDir;
    }
}
