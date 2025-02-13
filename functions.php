<?php


function add_pmpro_membership_body_class($classes) {
    if (function_exists('pmpro_getMembershipLevelForUser')) {
        $user_id = get_current_user_id();
        $membership_level = pmpro_getMembershipLevelForUser($user_id);
        
        if (!empty($membership_level)) {
            // Add a class based on the membership level name
            $classes[] = 'pmpro-member-' . sanitize_title($membership_level->name);
            $classes[] = 'pmpro-member'; // General class for all members
        } else {
            $classes[] = 'pmpro-non-member'; // Class for non-members
        }
    }
    return $classes;
}
add_filter('body_class', 'add_pmpro_membership_body_class');
