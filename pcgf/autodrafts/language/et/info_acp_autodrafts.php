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

// Merging language data for the ACP with the other language data
$lang = array_merge($lang, array(
    'ACP_PCGF_AUTODRAFTS'                                 => 'Automaatsed mustatndid',
    'ACP_PCGF_AUTODRAFTS_EXPLAIN'                         => 'Siin saab konfigureerida automaatsete mustandite standardseid seadeid.',
    'ACP_PCGF_AUTODRAFTS_DELETE_AFTER_SUBMISSION'         => 'Kustuta pärast esitamist',
    'ACP_PCGF_AUTODRAFTS_DELETE_AFTER_SUBMISSION_EXPLAIN' => 'Määrab kas pärast teate esitamist tuleks kõik mustandid kustutada.',
    'ACP_PCGF_AUTODRAFTS_DELETE_INTERVAL'                 => 'Kustutamise aeg',
    'ACP_PCGF_AUTODRAFTS_DELETE_INTERVAL_EXPLAIN'         => 'See seade määrab pärast seda, kui mustandid kustutatakse automaatselt. Selle funktsiooni keelamiseks määrake väärtus 0.',
    'ACP_PCGF_AUTODRAFTS_INSERT_LAST'                     => 'Laadige viimane mustand',
    'ACP_PCGF_AUTODRAFTS_INSERT_LAST_EXPLAIN'             => 'Määrab, kas viimane mustand automaatselt laadida.',
    'ACP_PCGF_AUTODRAFTS_SAVE_INTERVAL'                   => 'Salvestamise aeg',
    'ACP_PCGF_AUTODRAFTS_SAVE_INTERVAL_EXPLAIN'           => 'See seade määrab, millise ajajooksul luuakse automaatne mustand. Automaatsete mustandite keelamiseks seadke see väärtus väärtuseks 0.',
    'ACP_PCGF_AUTODRAFTS_SETTINGS'                        => 'Automaatsete mustandite seaded',
    'ACP_PCGF_AUTODRAFTS_SETTINGS_SAVED'                  => 'Seadistused on edukalt salvestatud!',
));
