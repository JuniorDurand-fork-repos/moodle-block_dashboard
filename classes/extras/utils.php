<?php

namespace block_dashboard\extras;

/**
 * Useful functions class
 * 
 * @package block_dashboard
 * @copyright 2020 Grupo Saite
 * @author Vinicius Costa Castro <costacastrovinicius7@gmail.com>
 */
class utils {
    /**
     * Returns a list of courses eligible for the block proposal
     * 
     * @return array
     */
    public static function get_courses() {
        $response = array();
        $courses = course_get_enrolled_courses_for_logged_in_user();

        foreach ($courses as $course) {
            $course = course_get_format($course->id)->get_course();
            if ($course->isunit) {
                continue;
            }

            $response[] = $course;
        }

        return $response;
    }
}