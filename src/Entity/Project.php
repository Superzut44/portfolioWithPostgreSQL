<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 40)]
    #[Groups("project:read")]
    private $name;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\NotBlank]
    #[Groups("project:read")]
    private $description;

    #[ORM\Column(type: 'string', nullable: true)]
    #[Groups("project:read")]
    private $image;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups("project:read")]
    private $github;

    #[ORM\ManyToMany(targetEntity: Language::class, inversedBy: 'projects')]
    #[Groups("project:read")]
    private $languages;

    #[ORM\ManyToMany(targetEntity: Tool::class, inversedBy: 'projects')]
    #[Groups("project:read")]
    private $tools;

    #[ORM\ManyToOne(targetEntity: Screen::class, inversedBy: 'projects')]
    #[Groups("project:read")]
    private $screen;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups("project:read")]
    private $link;

    #[ORM\Column(type: 'datetime_immutable')]
    private $startThe;

    public function __construct()
    {
        $this->languages = new ArrayCollection();
        $this->tools = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getGithub(): ?string
    {
        return $this->github;
    }

    public function setGithub(?string $github): self
    {
        $this->github = $github;

        return $this;
    }

    /**
     * @return Collection<int, Language>
     */
    public function getLanguages(): Collection
    {
        return $this->languages;
    }

    public function addLanguage(Language $language): self
    {
        if (!$this->languages->contains($language)) {
            $this->languages[] = $language;
        }

        return $this;
    }

    public function removeLanguage(Language $language): self
    {
        if ($this->languages->removeElement($language)) {
        }

        return $this;
    }

    /**
     * @return Collection<int, Tool>
     */
    public function getTools(): Collection
    {
        return $this->tools;
    }

    public function addTool(Tool $tool): self
    {
        if (!$this->tools->contains($tool)) {
            $this->tools[] = $tool;
        }

        return $this;
    }

    public function removeTool(Tool $tool): self
    {
        if ($this->tools->removeElement($tool)) {
        }

        return $this;
    }

    public function getScreen(): ?Screen
    {
        return $this->screen;
    }

    public function setScreen(?Screen $screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    public function getStartThe(): ?\DateTimeImmutable
    {
        return $this->startThe;
    }

    public function setStartThe(\DateTimeImmutable $startThe): self
    {
        $this->startThe = $startThe;

        return $this;
    }
}
