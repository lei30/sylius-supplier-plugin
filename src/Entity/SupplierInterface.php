<?php
declare(strict_types=1);

namespace Lei\SyliusSupplierPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Created by lei
 */
interface SupplierInterface extends ResourceInterface
{
    public function setId(?int $id): void;

    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getDescription(): ?string;

    public function setDescription(?string $description): void;

    public function getEnabled(): ?bool;

    public function setEnabled(?bool $enabled): void;

    public function __toString(): ?string;
}
