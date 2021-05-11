<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
#[ApiResource()]
class Association
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     *
     * @var string
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=50)
     *
     * @var string
     */
    private $email;


    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $adresseId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Association
     */

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Association
     */
    public function setName(string $name): Association
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return Association
     */
    public function setPhoneNumber(string $phoneNumber): Association
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Association
     */
    public function setEmail(string $email): Association
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Association
     */
    public function setPassword(string $password): Association
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    /**
     * @param int $adresseId
     * @return Association
     */
    public function setAdresseId(int $adresseId): Association
    {
        $this->adresseId = $adresseId;
        return $this;
    }

}

