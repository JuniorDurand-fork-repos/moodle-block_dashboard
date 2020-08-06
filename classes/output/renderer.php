<?php

namespace block_dashboard\output;

use stdClass;
use plugin_renderer_base;
use block_dashboard\extras\utils;

/**
 * Dashboard block renderer
 * 
 * @package block_dashboard
 * @copyright 2020 Grupo Saite
 * @author Vinicius Costa Castro <costacastrovinicius7@gmail.com>
 */
class renderer extends plugin_renderer_base {
    /**
     * Export this data so it can be used as the context for a mustache template
     * 
     * @return stdClass
     */
    public function export_for_template() {
        $templatecontext = new stdClass();
        $templatecontext->courses = utils::get_courses();

        return $templatecontext;
    }

    /**
     * Return the content for the block dashboard.
     * 
     * @return string HTML String
     */
    public function render() {
        return $this->render_from_template("block_dashboard/main", $this->export_for_template());
    }
}