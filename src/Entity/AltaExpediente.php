<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AltaExpedienteRepository")
 * @ORM\Table(name="exp_fis")
 */
class AltaExpediente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $exp_id;

    /**
     * @ORM\Column(type="text")
     */
    private $request;

    public function getExpId(): ?int
    {
        return $this->exp_id;
    }

    public function getOneRequest(): ?blob
    {
        return $this->request;
    }

    public function setRequest(string $request): self
    {
        $this->request = $request;

        return $this;
    }

    public function getRequest(): ?string
    {
        return $this->request;
    }
}
