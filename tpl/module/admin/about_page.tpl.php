<?php

/**
 * This file was generated by DAMB
 *
 * @copyright   Copyright (c) 2019 - 2020, AXeL-dev
 * @license     GPL
 * @link        https://gitlab.com/AXeL-dev/damb
 */

// Load Dolibarr environment (mandatory)
if (false === (@include_once '../../main.inc.php')) { // From htdocs directory
    require_once '../../../main.inc.php'; // From "custom" directory
}

// Load page lib
dol_include_once('${module_folder}/lib/page.lib.php');

// Load module class
dol_include_once('${module_folder}/core/modules/${module_class_name}.class.php');

// Control access to page
control_access('$user->admin');

/**
 * View
 */

print_header('About', array('admin', '${lang_file}@${module_folder}'));

$linkback = '<a href="'.DOL_URL_ROOT.'/admin/modules.php?mainmenu=home">'.print_trans('BackToModuleList', false).'</a>';
print_subtitle('About', 'title_generic.png', $linkback);

$tabs = array(
    array('title' => 'Setup', 'url' => '${module_folder}/admin/setup.php?mainmenu=home'),
    ${more_tabs}array('title' => 'About', 'url' => '${module_folder}/admin/about.php?mainmenu=home', 'active' => true)
);
print_tabs($tabs, '${module_name}', '${module_picture}@${module_folder}', -1);

$module = new ${module_class_name}(NULL);

load_template('${module_folder}/tpl/about.tpl.php', array(
    'module_name' => $module->name,
    'module_desc' => $module->description,
    'module_picture' => '${module_picture}@${module_folder}',
    'module_version' => $module->version,
    'module_url' => '#',
    'author_name' => $module->editor_name,
    'author_url' => $module->editor_url,
    'author_email' => '${author_email}',
    'author_dolistore_url' => '${author_dolistore_url}'
));

print_footer(true);
