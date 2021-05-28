<?php

$client  = new Client();
$adapter = new Adapter($client);
$service = new Service($adapter);