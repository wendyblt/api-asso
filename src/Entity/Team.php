<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
#[ApiResource()]
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\OneToOne(targetEntity=Project::class)
     */
    private $project;

    /**
     * @ORM\OneToOne(targetEntity=Association::class)
     */
    private $association;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Team", mappedBy="user")
     *
     * @var Collection
     */
    private $users;


    public function __construct()
    {

        $this->users = new ArrayCollection();
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Team
     */

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return Team
     */
    public function setProjectId(int $projectId): Team
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return Team
     */
    public function setUserId(int $userId): Team
    {
        $this->userId = $userId;
        return $this;
    }

}
