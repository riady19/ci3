<?php

function is_logged_in()
{
    $logged = get_instance();
    if (!$logged->session->userdata('email')) {
        redirect('auth');
    }else {
        $role_id = $logged->session->userdata('role_id');
        $menu = $logged->uri->segment(1);
}
}
