<?php
$a = 3;
$b = 4;
$c = 5;
$d  = "Масло";
$$d = "масляное";
?>


<?php
$start = microtime(true);
function get_currency($currency_code, $format) {

	$date = date('d/m/Y'); // Текущая дата
	$cache_time_out = '3600'; // Время жизни кэша в секундах

	$file_currency_cache = __DIR__.'/currency.xml'; // Файл кэша

	if(!is_file($file_currency_cache) || filemtime($file_currency_cache) < (time() - $cache_time_out)) {

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://www.cbr.ru/scripts/XML_daily.asp?date_req='.$date);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_HEADER, 0);

		$out = curl_exec($ch);

		curl_close($ch);

		file_put_contents($file_currency_cache, $out);

	}

	$content_currency = simplexml_load_file($file_currency_cache);

	return number_format(str_replace(',', '.', $content_currency->xpath('Valute[CharCode="'.$currency_code.'"]')[0]->Value), $format);

}
echo "Курс доллара на сегодня: ", get_currency('USD', 3), " рублей за 1 доллар";
echo '<br>';
echo 'Время выполнения скрипта с информцией о курсе доллара: ' . (microtime(true) - $start) . ' sec.';
?>
