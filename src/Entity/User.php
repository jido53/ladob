<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * * @ORM\Table(name="usr")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", name="usr_id")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $usr_nombre;

//    /**
//     * @ORM\Column(type="json")
//     */
//    private $roles = [];
//
//    /**
//     * @var string The hashed password
//     * @ORM\Column(type="string")
//     */
//    private $password;
//


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usr_habil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usr_cod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_iniciales;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pog_codigo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_voc;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsrNombre(): string
    {
        return $this->usr_nombre;
    }

    public function setUsrNombre(string $usr_nombre): self
    {
        $this->usr_nombre = $usr_nombre;

        return $this;
    }

    public function getUsrEmail()
    {
        return $this->usr_email;
    }

    public function setUsrEmail(string $usr_email): self
    {
        $this->usr_email = $usr_email;

        return $this;
    }

    public function getUsrHabil(): bool
    {
        return $this->usr_habil;
    }

    public function setUsrHabil(bool $usr_habil): self
    {
        $this->usr_habil = $usr_habil;

        return $this;
    }

    public function getUsrCod(): string
    {
        return $this->usr_cod;
    }

    public function setUsrCod(string $usr_cod): self
    {
        $this->usr_cod = $usr_cod;

        return $this;
    }

    public function getUsrIniciales(): string
    {
        return $this->usr_iniciales;
    }

    public function setUsrIniciales(string $usr_iniciales): self
    {
        $this->usr_iniciales = $usr_iniciales;

        return $this;
    }

    public function getPogCodigo(): string
    {
        return $this->pog_codigo;
    }

    public function setPogCodigo(string $pog_codigo): self
    {
        $this->pog_codigo = $pog_codigo;

        return $this;
    }

    public function getUsrVoc(): string
    {
        return $this->usr_voc;
    }


    public function setUsrVoc(string $usr_voc): self
    {
        $this->usr_voc = $usr_voc;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->usr_nombre;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        //$roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) 'k';//$this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
