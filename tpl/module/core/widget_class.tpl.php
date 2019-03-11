<?php

/**
 * This file was generated by DAMB
 *
 * @copyright   Copyright (c) 2019 - 2020, AXeL-dev
 * @license     GPL
 * @link        https://gitlab.com/AXeL-dev/damb
 */

// Load ModeleBoxes class
include_once DOL_DOCUMENT_ROOT.'/core/boxes/modules_boxes.php';

// Load widget lib
dol_include_once('${module_folder}/lib/widget.lib.php');

/**
 * Class to manage the widget box
 *
 * Warning: for the box to be detected correctly by dolibarr,
 * the filename should be the lowercase classname
 */
class ${widget_class_name} extends ModeleBoxes
{
    /**
     * Constructor
     * 
     * @param     $db         Database handler
     * @param     $param      More widget options
     */
    public function __construct($db, $param = '')
    {
        global $langs;

        // Load language files
        $langs->load('${widget_lang_file}');

        // Widget configuration
        $this->db                = $db;
        $this->boxlabel          = $langs->trans('${widget_label}');
        $this->boximg            = '${widget_picture}@${module_folder}';
        $this->position          = ${widget_position};
        $this->enabled           = ${enable_widget};
        $this->depends           = array('${module_folder}');
        $this->info_box_head     = array();
        $this->info_box_contents = array();
    }

    /**
     * Load data into info_box_contents array to show array later. Called by Dolibarr before displaying the box.
     *
     * @param int $max Maximum number of records to load
     * @return void
     */
    public function loadBox($max = 5)
    {
        set_title($this, '${widget_title}');

        add_content($this, 'Add some content here..');
    }

    /**
     * Method to show box. Called by Dolibarr eatch time it wants to display the box.
     *
     * @param   array   $head       Array with properties of box title
     * @param   array   $contents   Array with properties of box lines
     * @param   int     $nooutput   No print, only return string
     * @return  void
     */
    public function showBox($head = null, $contents = null, $nooutput = 0)
    {
        // You may make your own code here…
        // … or use the parent's class function using the provided head and contents templates
        parent::showBox($this->info_box_head, $this->info_box_contents);
    }
}
