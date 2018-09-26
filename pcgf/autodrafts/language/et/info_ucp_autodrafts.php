<?php

/**
 *
 * Estonian translation by phpBBestonia.eu <https://www.phpbbestonia.eu>
 *
 * @author    MarkusWME <markuswme@pcgamingfreaks.at>
 * @copyright 2017 MarkusWME
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @version   1.1.0
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// Merging language data for the UCP with the other language data
$lang = array_merge($lang, array(
    'UCP_PCGF_AUTODRAFTS'                                 => 'Automaatsed mustandid',
    'UCP_PCGF_AUTODRAFTS_EXPLAIN'                         => 'Siin saad määrata automaatsete mustandite seadeid.',
    'UCP_PCGF_AUTODRAFTS_DELETE_AFTER_SUBMISSION'         => 'Kustuta pärast esitamist',
    'UCP_PCGF_AUTODRAFTS_DELETE_AFTER_SUBMISSION_EXPLAIN' => 'Määrab, kas pärast esitamist tuleks kõik mustandid kustutada.',
    'UCP_PCGF_AUTODRAFTS_DELETE_INTERVAL'                 => 'Kustutamise aeg',
    'UCP_PCGF_AUTODRAFTS_DELETE_INTERVAL_EXPLAIN'         => 'See seade määrab pärast seda, kui mustandid kustutatakse automaatselt. Selle funktsiooni keelamiseks määrake väärtus 0.',
    'UCP_PCGF_AUTODRAFTS_INSERT_LAST'                     => 'Laadi viimane mustand',
    'UCP_PCGF_AUTODRAFTS_INSERT_LAST_EXPLAIN'             => 'Määrab, kas viimane mustand automaatselt laadida.',
    'UCP_PCGF_AUTODRAFTS_SAVE_INTERVAL'                   => 'Salvestamise aeg',
    'UCP_PCGF_AUTODRAFTS_SAVE_INTERVAL_EXPLAIN'           => 'See seade määrab, millise ajajooksul luuakse automaatne mustand. Automaatsete mustandite keelamiseks seadke see väärtus väärtuseks 0.',
    'UCP_PCGF_AUTODRAFTS_SETTINGS_SAVED'                  => 'Seaded edukalt salvestatud!',
    'UCP_PCGF_AUTODRAFTS_SAVE_ERROR'                      => 'Seadistusi ei saanud salvestada, proovige hiljem uuesti!',
    'UCP_PCGF_AUTODRAFTS_SAVED_DRAFTS'                    => 'Hetkel salvestatud mustandid',
    'UCP_PCGF_AUTODRAFTS_CLEAR'                           => 'Kustuta kõik mustandid',
));
