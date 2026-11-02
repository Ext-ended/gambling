<?php

namespace App\Entity;

use App\Repository\SpinHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SpinHistoryRepository::class)]
class SpinHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $betAmount = null;

    #[ORM\Column]
    private ?float $multiplier = null;

    #[ORM\Column]
    private ?float $payout = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $spinnedUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getBetAmount(): ?float
    {
        return $this->betAmount;
    }

    public function setBetAmount(float $betAmount): static
    {
        $this->betAmount = $betAmount;

        return $this;
    }

    public function getMultiplier(): ?float
    {
        return $this->multiplier;
    }

    public function setMultiplier(float $multiplier): static
    {
        $this->multiplier = $multiplier;

        return $this;
    }

    public function getPayout(): ?float
    {
        return $this->payout;
    }

    public function setPayout(float $payout): static
    {
        $this->payout = $payout;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSpinnedUser(): ?User
    {
        return $this->spinnedUser;
    }

    public function setSpinnedUser(?User $spinnedUser): static
    {
        $this->spinnedUser = $spinnedUser;

        return $this;
    }
}
