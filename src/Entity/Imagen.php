<?php

namespace App\Entity;

use App\Repository\ImagenRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ImagenRepository::class)]
class Imagen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    /**
     * @Assert\File(
     * mimeTypes={"image/jpeg","image/png"},
     * mimeTypesMessage = "Solamente se permiten archivos jpeg o png.")
     */
    private ?string $nombre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column]
    private ?int $categoria = null;

    #[ORM\Column(nullable: true)]
    private ?int $numVisualizaciones = null;

    #[ORM\Column(nullable: true)]
    private ?int $numLikes = null;

    #[ORM\Column(nullable: true)]
    private ?int $numDownloads = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    const RUTA_IMAGENES_PORTFOLIO = '../images/index/portfolio/';
    const RUTA_IMAGENES_GALERIA = '../images/index/gallery/';
    const RUTA_IMAGENES_CLIENTES = '../images/clients/';
    const RUTA_IMAGENES_SUBIDAS = '../images/galeria/';


    public function __construct($nombre = "", $descripcion = "", $categoria = 0, $numVisualizaciones = 0, $numLikes = 0, $numDownloads = 0, $password = "")
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->numVisualizaciones = $numVisualizaciones;
        $this->numLikes = $numLikes;
        $this->numDownloads = $numDownloads;
        $this->password = $password;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCategoria(): ?int
    {
        return $this->categoria;
    }

    public function setCategoria(int $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getNumVisualizaciones(): ?int
    {
        return $this->numVisualizaciones;
    }

    public function setNumVisualizaciones(?int $numVisualizaciones): static
    {
        $this->numVisualizaciones = $numVisualizaciones;

        return $this;
    }

    public function getNumLikes(): ?int
    {
        return $this->numLikes;
    }

    public function setNumLikes(?int $numLikes): static
    {
        $this->numLikes = $numLikes;

        return $this;
    }

    public function getNumDownloads(): ?int
    {
        return $this->numDownloads;
    }

    public function setNumDownloads(?int $numDownloads): static
    {
        $this->numDownloads = $numDownloads;

        return $this;
    }

    function getUrlPortafolio(): ?string
    {
        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
    }

    function getUrlGaleria(): ?string
    {
        return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
    }
    function getUrlSubidas(): ?string
    {
        return self::RUTA_IMAGENES_SUBIDAS . $this->getNombre();
    }

    function getUrlCliente(): ?string
    {
        return self::RUTA_IMAGENES_CLIENTES . $this->getNombre();
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }


    public function __toString(): string
    {
        return $this->getDescripcion();
    }
}
