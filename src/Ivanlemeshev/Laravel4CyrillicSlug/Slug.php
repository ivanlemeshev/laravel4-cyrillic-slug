<?php namespace Ivanlemeshev\Laravel4CyrillicSlug;

class Slug {

	/**
	 * Generate a URL friendly "slug" from a given Cyrillic string.
	 *
	 * @param string $title
	 * @param string $separator
	 * @return string
	 */
	function make($title, $separator = '-')
	{
		$matrix = array(
			'й' => 'i',  'ц' => 'c',  'у' => 'u',    'к' => 'k',  'е' => 'e',  'н' => 'n',
			'г' => 'g',  'ш' => 'sh', 'щ' => 'shch', 'з' => 'z',  'х' => 'h',  'ъ' => '',
			'ф' => 'f',  'ы' => 'y',  'в' => 'v',    'а' => 'a',  'п' => 'p',  'р' => 'r',
			'о' => 'o',  'л' => 'l',  'д' => 'd',    'ж' => 'zh', 'э' => 'e',  'ё' => 'e',
			'я' => 'ya', 'ч' => 'ch', 'с' => 's',    'м' => 'm',  'и' => 'i',  'т' => 't',
			'ь' => '',   'б' => 'b',  'ю' => 'yu',   'Й' => 'I',  'Ц' => 'C',  'У' => 'U',
			'К' => 'K',  'Е' => 'E',  'Н' => 'N',    'Г' => 'G',  'Ш' => 'SH', 'Щ' => 'SHCH',
			'З' => 'Z',  'Х' => 'H',  'Ъ' => '',     'Ф' => 'F',  'Ы' => 'Y',  'В' => 'V',
			'А' => 'A',  'П' => 'P',  'Р' => 'R',    'О' => 'O',  'Л' => 'L',  'Д' => 'D',
			'Ж' => 'ZH', 'Э' => 'E',  'Ё' => 'E',    'Я' => 'YA', 'Ч' => 'CH', 'С' => 'S',
			'М' => 'M',  'И' => 'I',  'Т' => 'T',    'Ь' => '',   'Б' => 'B',  'Ю' => 'YU',
		);

		foreach ($matrix as $from => $to)
		{
			$title = mb_eregi_replace($from, $to, $title);
		}

		$title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', mb_strtolower($title));

		$flip = $separator == '-' ? '_' : '-';

		$title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

		$title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

		return trim($title, $separator);
	}

}
