<?php

/**
 * Nav Menu Dropdown
 *
 * @package      BE_Genesis_Child
 * @since        1.0.0
 * @link         https://github.com/billerickson/BE-Genesis-Child
 * @author       Bill Erickson <bill@billerickson.net>
 * @copyright    Copyright (c) 2011, Bill Erickson
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */
class MP_Emmet_Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth); // don't output children closing tag
    }

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $url = '#' !== $item->url ? $item->url : '';
        $output .= '<option value="' . $url . '" ';
        if ($item->current):
            $output.=' selected ';
        endif;
        $output.='>' . $item->title.'</option>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "\n"; // replace closing </li> with the option tag
    }

}
