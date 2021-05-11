<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
#[ApiResource()]
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=50)
     *
     * @var string
     */
    private $firstName;


    /**
     * @ORM\Column(type="string", length=50)
     *
     * @var string
     */
    private $lastName;

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
     * @ORM\Column(type="integer", length=50, nullable=true)
     *
     * @var integer
     */
    private $teamId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Category
     */

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Category
     */
    public function setFirstName(string $firstName): Category
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Category
     */
    public function setLastName(string $lastName): Category
    {
        $this->lastName = $lastName;
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
     * @return Category
     */
    public function setPhoneNumber(string $phoneNumber): Category
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
     * @return Category
     */
    public function setEmail(string $email): Category
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
     * @return Category
     */
    public function setPassword(string $password): Category
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
     * @return Category
     */
    public function setAdresseId(int $adresseId): Category
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     * @return Category
     */
    public function setTeamId(int $teamId): Category
    {
        $this->teamId = $teamId;
        return $this;
    }

}

