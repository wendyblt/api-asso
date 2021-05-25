<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;

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
     * @ORM\Column(type="string", length=255)
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
     * @OneToOne(targetEntity="Address", mappedBy="association")
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="association")
     *
     * @var Collection
     */
    private $projects;

    public function __construct()
    {

        $this->projects = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
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
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Association
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getProjects(): Collection
    {
        return $this->projects;
    }

    /**
     * @param Collection $projects
     * @return Association
     */
    public function setProjects(Collection $projects): Association
    {
        $this->projects = $projects;
        return $this;
    }

}

