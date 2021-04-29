<?php

/**
 * Class PersonRepository
 */
class PersonRepository {
	/**
	 * @var
	 */
	public $person;

	/**
	 * @return mixed
	 */
	public function getPerson() {
		return $this->person;
	}

	/**
	 * @param $person
	 */
	public function setPerson( $person ) {
		$this->person = $person;
	}

	/**
	 *
	 */
	public function save() {

	}

}

/**
 * Class Decorator
 */
class Decorator {
	/**
	 * @var
	 */
	private $personRepository;

	/**
	 * @return mixed
	 */
	public function getPersonRepository() {
		return $this->personRepository;
	}

	/**
	 * @param $personRepository
	 */
	public function setPersonRepository( $personRepository ) {
		$this->personRepository = $personRepository;
	}
}

/**
 * Class LowerCaseReadPersonDecorator
 */
class LowerCaseReadPersonDecorator extends Decorator {
	/**
	 *
	 */
	public function readPerson() {
		return $this->execute( $this->getPersonRepository()->getPerson() );
	}

	/**
	 *
	 */
	public function readPeople() {
		return $this->execute( $this->getPersonRepository()->getPerson() );
	}

	/**
	 *
	 */
	public function execute() {

	}

}

/**
 * Class UppercaseWritePersonDecorator
 */
class UppercaseWritePersonDecorator extends Decorator {
	/**
	 * @return mixed
	 */
	public function writePerson() {
		return $this->getPersonRepository()->save( $this->getPersonRepository( $this->getPersonRepository()->getPerson() ) );
	}

	/**
	 *
	 */
	public function execute() {

	}
}

$personRepository = new PersonRepository;

$lowerCaseReadPersonDecorator = new LowerCaseReadPersonDecorator;
$lowerCaseReadPersonDecorator->setPersonRepository( $personRepository );

$uppercaseWritePersonDecorator = new UppercaseWritePersonDecorator;
$uppercaseWritePersonDecorator->setPersonRepository( $personRepository );