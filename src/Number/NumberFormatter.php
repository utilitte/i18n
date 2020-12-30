<?php declare(strict_types = 1);

namespace Utilitte\I18N\Number;

use Utilitte\I18N\Number\Locale\Locale;

class NumberFormatter
{

	private Locale $locale;

	private int $decimals;

	public function __construct(Locale $locale, int $decimals = 0)
	{
		$this->locale = $locale;
		$this->decimals = $decimals;
	}

	/**
	 * @param int|float $number
	 */
	public function format($number, ?int $decimals = null): string
	{
		$decimals ??= $this->decimals;

		return number_format(
			$number,
			$decimals,
			$this->locale->getDecimalSeparator(),
			$this->locale->getThousandSeparator()
		);
	}

}
