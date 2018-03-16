<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FirmUserRepository")
 * @ORM\Table(name="firms_users")
 */
class FirmUser
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\Firm", inversedBy="userFirm")
     * @ORM\JoinColumn(name="firm_id")
     */
    private $firm;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="userFirm")
     * @ORM\JoinColumn(name="user_id")
     */
    private $user;

    /**
     * @ORM\Column(type="smallint")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getFirm(): Firm
    {
        return $this->firm;
    }

    public function setFirm(Firm $firm): void
    {
        $this->firm = $firm;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
