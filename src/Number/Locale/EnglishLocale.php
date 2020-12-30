<?php declare(strict_types = 1);

namespace Utilitte\I18N\Number\Locale;

final class EnglishLocale extends Locale
{

	public function __construct()
	{
		parent::__construct('.', ',');
	}

}
