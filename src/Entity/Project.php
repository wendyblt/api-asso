<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * @ORM\Entity
 */
#[ApiResource()]
class Project
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
     * @ManyToOne(targetEntity="Association", inversedBy="projects")
     * @JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $assocoiation;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $description;

    /**
     * @OneToOne(targetEntity="State")
     * @JoinColumn(name="state_id", referencedColumnName="id")
     */
    private $state;

    /**
     * @ManyToOne(targetEntity="Category", inversedBy="projects")
     * @JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $category;


    /**
     * @ORM\OneToOne(targetEntity=Team::class)
     */
    protected $team;

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
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssocoiation()
    {
        return $this->assocoiation;
    }

    /**
     * @param mixed $assocoiation
     * @return Project
     */
    public function setAssocoiation($assocoiation)
    {
        $this->assocoiation = $assocoiation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Project
     */
    public function setDescription(string $description): Project
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Project
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     * @return Project
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     * @return Project
     */
    public function setTeam($team)
    {
        $this->team = $team;
        return $this;
    }

}

