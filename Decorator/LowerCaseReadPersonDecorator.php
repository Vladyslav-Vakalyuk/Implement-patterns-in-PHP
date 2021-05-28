<?php


/**
 * Class LowerCaseReadPersonDecorator
 */
class LowerCaseReadPersonDecorator {
	/**
	 * @var
	 */
	private $personRepository;

	/**
	 * Get person repository.
	 *
	 * @return mixed
	 */
	public function getPersonRepository() {
		return $this->personRepository;
	}

	/**
	 * Set person repository.
	 *
	 * @param $personRepository
	 */
	public function setPersonRepository( $personRepository ) {
		$this->personRepository = $personRepository;
	}

	/**
	 * readPerson
	 */
	public function readPerson() {
		return $this->execute( $this->getPersonRepository()->getPerson() );
	}

	/**
	 * readPeople
	 */
	public function readPeople() {
		return $this->execute( $this->getPersonRepository()->getPerson() );
	}

	/**
	 * execute
	 */
	public function execute() {

	}

}
