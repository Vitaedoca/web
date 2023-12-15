<?php
class Tarefa {

	private $id;
	private $img;
	private $name;
	private $dsc;
	private $price;
	private $categoria;

    public function __construct() {
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

	public function getImg() {
		return $this->img;
	}

	public function setImg($img) {
		$this->img = $img;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getDsc() {
		return $this->dsc;
	}

	public function setDsc($dsc) {
		$this->dsc = $dsc;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice($price) {
		$this->price = $price;
	}
	
	public function getCategoria() {
		return $this->categoria;
	}

	public function setCategoria($categoria) {
		$this->categoria = $categoria;
	}
}


?>