<?php declare(strict_types = 1);

namespace Utilitte\I18N;

use LogicException;
use Utilitte\I18N\Date\DateFormatterInterface;
use Utilitte\I18N\Number\NumberFormatterInterface;

final class I18N
{

	private static bool $initialized = false;

	private static DateFormatterInterface $dateFormatter;

	private static NumberFormatterInterface $numberFormatter;

	public static function getDateFormatter(): DateFormatterInterface
	{
		self::check();

		return self::$dateFormatter;
	}

	public static function getNumberFormatter(): NumberFormatterInterface
	{
		self::check();

		return self::$numberFormatter;
	}

	public static function initialize(
		DateFormatterInterface $dateFormatter,
		NumberFormatterInterface $numberFormatter
	): void
	{
		if (self::$initialized) {
			throw new LogicException('I18N is already initialized');
		}

		self::$initialized = true;
		self::$dateFormatter = $dateFormatter;
		self::$numberFormatter = $numberFormatter;
	}

	private static function check(): void
	{
		if (!self::$initialized) {
			throw new LogicException('I18N is not initialized');
		}
	}

}
