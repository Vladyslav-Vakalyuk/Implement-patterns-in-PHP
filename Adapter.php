<?php

/**
 * Interface IntegerStackInterface
 */
interface IntegerStackInterface {
	/**
	 * @param $integer
	 *
	 * @return mixed
	 */
	public function push( $integer );

	/**
	 * @return mixed
	 */
	public function pop();
}

/**
 * Interface ASCIIStackInterface
 */
interface ASCIIStackInterface {
	/**
	 * @param $char
	 *
	 * @return mixed
	 */
	public function push( $char );

	/**
	 * @return mixed
	 */
	public function pop();
}

/**
 * Class Stack
 */
class Stack {
	/**
	 * @var
	 */
	public $stack;

	/**
	 * @param $element
	 */
	public function setStack( $element ) {
		$this->stack = $element;
	}
}

/**
 * Class IntegerStack
 */
class IntegerStack implements IntegerStackInterface {
	/**
	 * @var
	 */
	public $stackClass;

	/**
	 * @param $integer
	 *
	 * @return mixed|void
	 */
	public function push( $integer ) {
		$this->stackClass->setStack( $integer );
	}

	/**
	 * @return mixed|void
	 */
	public function pop() {

	}
}

/**
 * Class ASCIIStack
 */
class ASCIIStack implements ASCIIStackInterface {
	/**
	 * @var
	 */
	public $stackClass;

	/**
	 * @param $char
	 *
	 * @return mixed|void
	 */
	public function push( $char ) {
		$this->stackClass->setStack( $char );
	}

	/**
	 * @return mixed|void
	 */
	public function pop() {

	}
}

/**
 * Class IntegerStackAdapter
 */
class IntegerStackAdapter {
	/**
	 * @var
	 */
	public $stackClass;

	/**
	 * @param $integer
	 */
	public function setStack( $integer ) {
		$this->stackClass->setStack( $this->changeIntToASCII( $integer ) );
	}

	/**
	 * @param $integer
	 *
	 * @return string
	 */
	public function changeIntToASCII( $integer ) {
		$ASCII = 'ASCII';

		return $ASCII;
	}
}

$stack = new Stack();

$ASCIIStack   = new ASCIIStack();
$stack->stack = $ASCIIStack;

$IntegerStack                    = new IntegerStack();
$IntegerStackAdapter             = new IntegerStackAdapter();
$IntegerStackAdapter->stackClass = $stack;