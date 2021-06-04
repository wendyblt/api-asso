<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity
 */
#[ApiResource(
    collectionOperations: [
    'get' => ['normalization_context' => ['groups' => 'bisou']]
],

    itemOperations: [
        'get' => [
            'normalization_context' => ['groups' => ['read:collection', 'read:item', 'read:Project']]
        ],
        'put' =>[
            'normalization_context' => ['groups' => ['read:collection', 'read:item', 'read:Project']]
        ],

    ]
    , normalizationContext: ['groups' => ['read:collection']]
)]
class Project
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:collection', 'bisou'])]
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    #[Groups(['read:collection'])]
    private $name;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    #[Groups(['read:collection'])]
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Association", inversedBy="projects")
     */
    #[Groups(['read:collection','bisou'])]
    private $association;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    #[Groups(['read:collection'])]
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\State", inversedBy="projects")
     */
    #[Groups(['read:collection', 'bisou'])]
    private $state;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="projects")
     */
    #[Groups(['read:collection', 'bisou'])]
    private $category;


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
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Project
     */
    public function setSlug(string $slug): Project
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * @param mixed $association
     * @return Project
     */
    public function setAssociation($association)
    {
        $this->association = $association;
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

}

