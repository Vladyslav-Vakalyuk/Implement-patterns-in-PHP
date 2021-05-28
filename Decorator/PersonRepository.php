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

}