<?php declare(strict_types = 1);

namespace Utilitte\I18N\Number\Locale;

class Locale
{

	private string $decimalSeparator;

	private string $thousandSeparator;

	public function __construct(string $decimalSeparator, string $thousandSeparator)
	{
		$this->decimalSeparator = $decimalSeparator;
		$this->thousandSeparator = $thousandSeparator;
	}

	public function getDecimalSeparator(): string
	{
		return $this->decimalSeparator;
	}

	public function getThousandSeparator(): string
	{
		return $this->thousandSeparator;
	}

}
