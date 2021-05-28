<?php

$personRepository = new PersonRepository;

$lowerCaseReadPersonDecorator = new LowerCaseReadPersonDecorator;
$lowerCaseReadPersonDecorator->setPersonRepository( $personRepository );

$readPerson = $lowerCaseReadPersonDecorator->readPerson();

$uppercaseWritePersonDecorator = new UppercaseWritePersonDecorator;
$uppercaseWritePersonDecorator->setPersonRepository( $readPerson );
$wrotePerson = $uppercaseWritePersonDecorator->writePerson();