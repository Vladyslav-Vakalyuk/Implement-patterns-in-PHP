<?php
/**
 * Class IntegerStack
 */
class IntegerStack {
	/**
	 * @var
	 */
	public $data;

	/**
	 * @param $integer
	 *
	 * @return mixed|void
	 */
	public function push( $integer ) {
		$this->data = $integer;
	}

	/**
	 * @return mixed|void
	 */
	public function pop() {

	}
}