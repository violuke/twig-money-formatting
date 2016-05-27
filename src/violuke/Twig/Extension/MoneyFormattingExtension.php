<?php
namespace violuke\Twig\Extension;

use antonienko\MoneyFormatter\MoneyFormatter;
use Money\Currency;
use Money\Money;

class MoneyFormattingExtension extends \Twig_Extension
{
	public function getFilters()
	{
		return [
			new \Twig_SimpleFilter('money_format', [$this, 'moneyFormat']),
		];
	}

	public function getName()
	{
		return 'money_formatting_extension';
	}

	public function moneyFormat(Money $money){
		$mf = new MoneyFormatter(Locale::getDefault());
		return $mf->toSymbol($money);
	}
}