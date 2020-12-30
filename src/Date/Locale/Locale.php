<?php declare(strict_types = 1);

namespace Utilitte\I18N\Date\Locale;

use DateTimeInterface;

class Locale
{

	private string $dateTimeFormat;

	private string $dateFormat;

	private string $timeFormat;

	public function __construct(string $dateTimeFormat, string $dateFormat, string $timeFormat)
	{
		$this->dateTimeFormat = $dateTimeFormat;
		$this->dateFormat = $dateFormat;
		$this->timeFormat = $timeFormat;
	}

	public function getDateTimeFormat(): string
	{
		return $this->dateTimeFormat;
	}

	public function getTimeFormat(): string
	{
		return $this->timeFormat;
	}

	public function getDateFormat(): string
	{
		return $this->dateFormat;
	}

	public function formatDateTime(DateTimeInterface $dateTime): string
	{
		return $dateTime->format($this->dateTimeFormat);
	}

	public function formatDate(DateTimeInterface $dateTime): string
	{
		return $dateTime->format($this->dateFormat);
	}

	public function formatTime(DateTimeInterface $dateTime): string
	{
		return $dateTime->format($this->timeFormat);
	}

}
