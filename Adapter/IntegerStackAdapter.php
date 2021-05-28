<?php
class IntegerStackAdapter {

	/**
	 * @var
	 */
	public $integerStack;

	/**
	 * @var
	 */
	public $calculateIntegerService;

	/**
	 * @param $integerStack
	 */
	public function set_integer_stack( $integerStack ) {
		$this->integerStack = $integerStack;
	}

	/**
	 * @param $calculateIntegerService
	 */
	public function set_calculateIntegerService( $calculateIntegerService ) {
		$this->calculateIntegerService = $calculateIntegerService;
	}

	/**
	 * @return mixed
	 */
	public function get_integer_stack() {
		return $this->integerStack;
	}

	/**
	 * @return mixed
	 */
	public function get_calculateIntegerService() {
		return $this->calculateIntegerService;
	}

	/**
	 * @return mixed
	 */
	public function execute() {
		$integer_stack[] = $this->get_integer_stack();
		$integer_stack[] = date();

		return $this->get_calculateIntegerService( $integer_stack );
	}

}