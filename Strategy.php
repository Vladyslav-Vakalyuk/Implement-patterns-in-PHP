<?php

/**
 * Interface Sort
 */
interface Sort {
	/**
	 * sort constructor.
	 *
	 * @param $employees
	 */
	public function sort( $employees );

	/**
	 * @param $employees
	 *
	 * @return mixed
	 */
	public function execute( $employees );
}

class EmployeeCollection {
	/**
	 * @var
	 */
	private $employees;
	/**
	 * @var
	 */
	private $strategy;

	/**
	 * @param Sort $strategy
	 */
	public function setStrategy( Sort $strategy ) {
		$this->strategy = $strategy;
	}

	/**
	 * @param $employees
	 *
	 * @return mixed
	 */
	private function executeStrategy( $employees ) {
		return $this->strategy->sort( $employees );
	}

	/**
	 * @return mixed
	 */
	public function getEmployee() {
		return $this->employees;
	}

	/**
	 * @param $employees
	 */
	public function setEmployee( $employees ) {
		$this->employees = $employees;
	}

	/**
	 * @return mixed
	 */
	public function showEmployees() {
		return $this->executeStrategy( $this->employees );
	}

}

/**
 * Class DepartmentNameAscendingAndDescending
 */
class DepartmentNameAscendingAndDescending implements Sort {
	/**
	 * @param $employees
	 *
	 * @return mixed|Sort
	 */
	public function sort( $employees ) {
		return $this->execute( $employees );
	}

	/**
	 * @param $employees
	 *
	 * @return mixed
	 */
	public function execute( $employees ) {
		return $employees;
	}
}

/**
 * Class NameAscendingAndDescending
 */
class NameAscendingAndDescending implements Sort {
	/**
	 * @param $employees
	 *
	 * @return mixed|Sort
	 */
	public function sort( $employees ) {
		return $this->execute( $employees );
	}

	/**
	 * @param $employees
	 *
	 * @return mixed
	 */
	public function execute( $employees ) {
		return $employees;
	}
}

/**
 * Class SalaryAscendingAndDescending
 */
class SalaryAscendingAndDescending implements Sort {
	/**
	 * @param $employees
	 *
	 * @return mixed|Sort
	 */
	public function sort( $employees ) {
		return $this->execute( $employees );
	}

	/**
	 * @param $employees
	 *
	 * @return mixed
	 */
	public function execute( $employees ) {
		return $employees;
	}
}

$employees                            = new EmployeeCollection;

$DepartmentNameAscendingAndDescending = new DepartmentNameAscendingAndDescending;
$employees->setStrategy( $DepartmentNameAscendingAndDescending );
$sortedEmployees = $employees->showEmployees();

$NameAscendingAndDescending = new NameAscendingAndDescending;
$employees->setStrategy( $NameAscendingAndDescending );
$sortedEmployees = $employees->showEmployees();

$SalaryAscendingAndDescending = new SalaryAscendingAndDescending;
$employees->setStrategy( $SalaryAscendingAndDescending );
$sortedEmployees = $employees->showEmployees();