<?php

declare(strict_types=1);

/**
 * Created by lei
 */

namespace Lei\SyliusSupplierPlugin\Entity;

class Supplier implements SupplierInterface
{
    private $id;

    private $name;

    private $description;

    private $enabled;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function __toString(): ?string
    {
        return (string) $this->getName();
    }
}
