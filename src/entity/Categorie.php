<?php

class Categorie {

	private $id;

	private $wording;

	public function __construct($id, $wording)

	{
		$this->id = $id;
		$this->wording = $wording;
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
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * @param mixed $wording
     *
     * @return self
     */
    public function setWording($wording)
    {
        $this->wording = $wording;

        return $this;
    }
}

?>