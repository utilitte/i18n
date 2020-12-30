<?php declare(strict_types = 1);

namespace Utilitte\I18N\Date\Locale;

final class EnglishLocale extends Locale
{

	public function __construct()
	{
		parent::__construct('m.d.y H:i:s', 'm.d.y', 'H:i:s');
	}

}
