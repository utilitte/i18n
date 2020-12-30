<?php declare(strict_types = 1);

use Tester\Assert;
use Utilitte\I18N\Number\Locale\EnglishLocale;
use Utilitte\I18N\Number\NumberFormatter;

require __DIR__ . '/../bootstrap.php';

$formatter = new NumberFormatter(new EnglishLocale());

Assert::same('1,500.1', $formatter->format(1500.1, 1));
