<?php

/**
 * This file was generated by DAMB
 *
 * @copyright   Copyright (c) 2019 - 2020, AXeL-dev
 * @license     GPL
 * @link        https://github.com/AXeL-dev/damb
 */

// Load Dolibarr environment (mandatory)
if (false === (@include_once '../../main.inc.php')) { // From htdocs directory
    require_once '../../../main.inc.php'; // From "custom" directory
}

// Load page & ${module_folder} lib
dol_include_once('${module_folder}/lib/page.lib.php');
dol_include_once('${module_folder}/lib/${module_folder}.lib.php');
dol_include_once('${module_folder}/lib/dolistore.lib.php');

// Load module class
dol_include_once('${module_folder}/core/modules/${module_class_name}.class.php');

// Control access to page
control_access('$user->admin');

/**
 * View
 */

print_header('About', array('admin', '${lang_file}@${module_folder}'));

print_subtitle('About', 'title_generic.png', 'link:modules_list');

print_admin_tabs('About');

$module = new ${module_class_name}(null);

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
