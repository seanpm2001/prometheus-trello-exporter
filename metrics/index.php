<?php

require '../vendor/autoload.php';

$exporter = new \Ujamii\OpenMetrics\Trello\TrelloExporter(getenv('TRELLO_API_KEY'), getenv('TRELLO_API_TOKEN'));
$exporter->run();