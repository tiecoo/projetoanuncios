<?php

function createPaginate($_modulo, $_total) {
    $ci = &get_instance();
    $ci->load->library('pagination');

    $config['base_url'] = base_url('/index.php/' . $_modulo);
    $config['total_rows'] = $_total;
    $config['per_page'] = 20;
    $config['uri_segment'] = 3;
    $config['first_link'] = 'Primeiro';
    $config['last_link'] = 'Último';
    $config['next_link'] = 'Próximo';
    $config['prev_link'] = 'Anterior';

    $ci->pagination->initialize($config);
    $links = $ci->pagination->create_links();

    return $links;
}
