<?php declare(strict_types = 1);

namespace Utilitte\I18N\Date;

use DateTimeInterface;

interface DateFormatterInterface
{

	/**
	 * Format day, month, year, hour, minute, second
	 */
	public function getDateTimeFormat(): string;

	/**
	 * Format day, month, year
	 */
	public function getDateFormat(): string;

	/**
	 * Format hour, minute, second
	 */
	public function getTimeFormat(): string;

	/**
	 * Format day, month, year, hour, minute, second
	 */
	public function formatDateTime(DateTimeInterface $dateTime): string;

	/**
	 * Format day, month, year
	 */
	public function formatDate(DateTimeInterface $dateTime): string;

	/**
	 * Format hour, minute, second
	 */
	public function formatTime(DateTimeInterface $dateTime): string;

}
