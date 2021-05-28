<?php

/**
 * Class UppercaseWritePersonDecorator
 */
class UppercaseWritePersonDecorator {

	/**
	 * @var
	 */
	private $personRepository;

	/**
	 * getPersonRepository
	 *
	 * @return mixed
	 */
	public function getPersonRepository() {
		return $this->personRepository;
	}

	/**
	 * setPersonRepository
	 *
	 * @param $personRepository
	 */
	public function setPersonRepository( $personRepository ) {
		$this->personRepository = $personRepository;
	}

	/**
	 * writePerson
	 *
	 * @return mixed
	 */
	public function writePerson() {
		return $this->execute( $this->getPersonRepository()->getPerson() );
	}

	/**
	 * execute
	 */
	public function execute() {

	}
}
