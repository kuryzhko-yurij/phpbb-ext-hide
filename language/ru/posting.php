<?php

/**
 * Hide extension for phpBB.
 * @author Alfredo Ramos <alfredo.ramos@yandex.com>
 * @copyright 2017 Alfredo Ramos
 * @license GPL-2.0-only
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * @ignore
 */
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HIDE' => 'Hide',
	'HIDE_HELPLINE' => 'Использование: [hide]текст[/hide] или [hide inline=1]текст[/hide]',
	'HIDDEN_CONTENT' => 'Скрытое содержимое.',
	'HIDDEN_CONTENT_EXPLAIN' => 'Вы должны быть зарегистрированным пользователем, чтобы прочитать это содержимое.'
]);
