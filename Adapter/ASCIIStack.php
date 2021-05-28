<?php
/**
 * Class ASCIIStack
 */
class ASCIIStack {
	/**
	 * @var
	 */
	public $data;

	/**
	 * @param $char
	 *
	 * @return mixed|void
	 */
	public function push( $char ) {
		$this->data = $char;
	}

	/**
	 * @return mixed|void
	 */
	public function pop() {

	}
}