<?php

$IntegerStack            = new IntegerStack();
$calculateIntegerService = new CalculateIntegerService();

$IntegerStackAdapter = new IntegerStackAdapter();
$IntegerStackAdapter->set_integer_stack( $IntegerStack );
$IntegerStackAdapter->set_calculateIntegerService( $calculateIntegerService );
$IntegerStackAdapter->execute();
