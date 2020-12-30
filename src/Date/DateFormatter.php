<?php declare(strict_types = 1);

namespace Utilitte\I18N\Date;

use DateTimeInterface;
use Utilitte\I18N\Date\Locale\Locale;

final class DateFormatter implements DateFormatterInterface
{

	private Locale $locale;

	public function __construct(Locale $locale)
	{
		$this->locale = $locale;
	}

	public function getDateTimeFormat(): string
	{
		return $this->locale->getDateTimeFormat();
	}

	public function getDateFormat(): string
	{
		return $this->locale->getDateFormat();
	}

	public function getTimeFormat(): string
	{
		return $this->locale->getTimeFormat();
	}

	public function formatDateTime(DateTimeInterface $dateTime): string
	{
		return $this->locale->formatDateTime($dateTime);
	}

	public function formatDate(DateTimeInterface $dateTime): string
	{
		return $this->locale->formatDate($dateTime);
	}

	public function formatTime(DateTimeInterface $dateTime): string
	{
		return $this->locale->formatTime($dateTime);
	}

}
