<?php
namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait SlugTrait {

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    public function getSlug(): ?String
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }
}