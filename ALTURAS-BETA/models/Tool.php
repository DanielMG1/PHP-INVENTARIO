<?php
 
 class Tool extends BaseModel
 {
    private $id;
    private $nombre;
    private $marca;
    private $longitud;
    private $serie;
    private $descripcion;
    private $cantidad;
    private $foto;
    private $entidad_cert;
    private $fecha_fab;
    private $norma_cert;
    private $vencimiento;
    
    public function __construct($id=null,$nombre=null,$marca=null,$longitud=null,$serie=null,$descripcion=null,$cantidad=null,$foto=null,$entidad_cert=null,$fecha_fab=null,$norma_cert=null,$vencimiento=null)
    {
        parent::__construct();
        $this->id=$id;
        $this->nombre=$nombre;
        $this->marca=$marca;
        $this->longitud=$longitud;
        $this->serie=$serie;
        $this->descripcion=$descripcion;
        $this->cantidad=$cantidad;
        $this->foto=$foto;
        $this->entidad_cert=$entidad_cert;
        $this->fecha_fab=$fecha_fab;
        $this->norma_cert=$norma_cert;
        $this->vencimiento=$vencimiento;
        $this->table="herramientas";
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca=$marca;
        return $this;
    }
    public function getLongitud()
    {
        return $this->longitud;
    }
    public function setLongitud($longitud)
    {
        $this->longitud=$longitud;
        return $this;
    }
    public function getSerie()
    {
        return $this->serie;
    }
    public function setSerie($serie)
    {
        $this->serie=$serie;
        return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;
        return $this;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad=$cantidad;
        return $this;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto=$foto;
        return $this;
    }
    public function getEntidad()
    {
        return $this->entidad_cert;
    }
    public function setEntidad($entidad_cert)
    {
        $this->entidad_cert=$entidad_cert;
        return $this;
    }
    public function getFechaFab()
    {
        return $this->fecha_fab;
    }
    public function setFechaFab($fecha_fab)
    {
        $this->fecha_fab=$fecha_fab;
        return $this;
    }
    public function getNorma()
    {
        return $this->norma_cert;
    }
    public function setNorma($norma_cert)
    {
        $this->norma_cert=$norma_cert;
        return $this;
    }
    public function getVencimiento()
    {
        return $this->vencimiento;
    }
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento=$vencimiento;
        return $this;
    }


 }