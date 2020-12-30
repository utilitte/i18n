<?php declare(strict_types = 1);

namespace Utilitte\I18N\Date\Locale;

final class CzechLocale extends Locale
{

	public function __construct()
	{
		parent::__construct('d.m.Y H:i:s', 'd.m.Y', 'H:i:s');
	}

}
