<?php

namespace block_dashboard;

use advanced_testcase;
use block_dashboard\extras\utils;

class block_dashboard_course_test extends advanced_testcase {
    public function test_course_query() {
        global $DB;

        $courses = utils::get_courses();
        $this->assertTrue(gettype($courses) === "array");
    }
}