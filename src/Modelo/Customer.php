<?php 
namespace Model;

class Customer  
{
	private $id_customer;
	private $name;
	private $surname;
	private $dni;
	private $id_facebook;



	public function __construct($name, $surname, $dni, $id_facebook)
	{
		$this->id_customer = $id_customer;
		$this->name = $name;
		$this->surname = $surname;
		$this->dni = $dni;
		$this->id_facebook = $id_facebook;
	}


    /**
     * @return mixed
     */
    public function getIdCustomer()
    {
    	return $this->id_customer;
    }

    /**
     * @param mixed $id_customer
     *
     * @return self
     */
    public function setIdCustomer($id_customer)
    {
    	$this->id_customer = $id_customer;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
    	return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
    	$this->name = $name;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
    	return $this->surname;
    }

    /**
     * @param mixed $surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
    	$this->surname = $surname;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
    	return $this->dni;
    }

    /**
     * @param mixed $dni
     *
     * @return self
     */
    public function setDni($dni)
    {
    	$this->dni = $dni;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getIdFacebook()
    {
    	return $this->id_facebook;
    }

    /**
     * @param mixed $id_facebook
     *
     * @return self
     */
    public function setIdFacebook($id_facebook)
    {
    	$this->id_facebook = $id_facebook;

    	return $this;
    }
}
