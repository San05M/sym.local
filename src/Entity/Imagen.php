<?php
namespace App\Entity;
use App\Entity\IEntity;

class Imagen implements IEntity
{
    private $id;
    private $nombre;
    private $descripcion;
    private $categoria;
    private $numVisualizaciones;
    private $numLikes;
    private $numDownloads;

    const RUTA_IMAGENES_PORTFOLIO = '/images/index/portfolio/';
    const RUTA_IMAGENES_GALERIA = '/images/index/gallery/';
    const RUTA_IMAGENES_CLIENTES = '/images/clients/';
    const RUTA_IMAGENES_SUBIDAS = '/images/galeria/';

    public function __construct(string $nombre = "", string $desc = "", int $cat = 1, int $numVis = 0, int $numLikes = 0, int $numDownloads = 0)
    {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion = $desc;
        $this->categoria = $cat;
        $this->numVisualizaciones = $numVis;
        $this->numLikes = $numLikes;
        $this->numDownloads = $numDownloads;
    }
    public function setNombre($nombre): Imagen
    {
        $this->nombre = $nombre;
        return $this; //Estamos devolviendo this, la referencia a la misma clase. Por eso arriba pone el nombre de la clase.
    }
    public function setDescripcion($descripcion): Imagen
    {
        $this->descripcion = $descripcion;
        return $this;
    }
    public function setCategoria($categoria): Imagen
    {
        $this->categoria = $categoria;
        return $this;
    }
    public function setNumVisualizaciones($numVis): Imagen
    {
        $this->numVisualizaciones = $numVis;
        return $this;
    }
    public function setNumLikes($numLikes): Imagen
    {
        $this->numLikes = $numLikes;
        return $this;
    }
    public function setNumDownloads($numDownloads): Imagen
    {
        $this->numDownloads = $numDownloads;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNombre(): ?string
    { //O devuelve un valor o devuelve null
        return $this->nombre;
    }
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
    public function getCategoria(): int
    {
        return $this->categoria;
    }
    public function getNumVisualizaciones(): int
    {
        return $this->numVisualizaciones;
    }
    public function getNumLikes(): int
    {
        return $this->numLikes;
    }
    public function getNumDownloads(): int
    {
        return $this->numDownloads;
    }
    public function __toString()
    {
        return $this->getDescripcion();
    }
    public function getUrlPortfolio(): string
    {
        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
    }
    public function getUrlGaleria(): string
    {
        return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
    }
    public function getUrlClientes(): string
    {
        return self::RUTA_IMAGENES_CLIENTES . $this->getNombre();
    }
    public function getUrlSubidas(): string
    {
        return self::RUTA_IMAGENES_SUBIDAS . $this->getNombre();
    }
    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'descripcion' => $this->getDescripcion(),
            'numVisualizaciones' => $this->getNumVisualizaciones(),
            'numLikes' => $this->getNumLikes(),
            'numDownloads' => $this->getNumDownloads(),
            'categoria' => $this->getCategoria()
        ];
    }
}
