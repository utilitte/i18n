<?php declare(strict_types = 1);

use Tester\Assert;
use Utilitte\I18N\Date\DateFormatter;
use Utilitte\I18N\Date\Locale\EnglishLocale;

require __DIR__ . '/../bootstrap.php';

$formatter = new DateFormatter(new EnglishLocale());
$date = new DateTime('2020-01-01 12:00:00');

Assert::same('12:00:00', $formatter->formatTime($date));
Assert::same('01.01.20', $formatter->formatDate($date));
Assert::same('01.01.20 12:00:00', $formatter->formatDateTime($date));
