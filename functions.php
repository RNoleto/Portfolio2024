<?php 

function get_field2($key, $page_id = 0){
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
};

function the_field2($key, $page_id = 0){
    echo get_field2($key, $page_id);
}

// Campos para página Home sessão Job
add_action('cmb2_admin_init', 'cmb2_fields_jobs');
function cmb2_fields_jobs(){
    $cmb = new_cmb2_box([
        'id' => 'jobs_box',
        'title' => 'Sessão de Trabalhos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-home.php']
        ],
    ]);

    $jobs = $cmb->add_field([
        'name' => 'Trabalhos',
        'id' => 'jobs',
        'type' => 'group',
       'repeatable' => true,
        'options' => [
            'group_title' => 'Projeto {#}',
            'add_button' => 'Adicionar Projeto',
            'sortable' => true,
        ],
    ]);

    $cmb->add_group_field($jobs, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($jobs, [
        'name' => 'Estilo Grid',
        'id' => 'style',
        'type' => 'text',
    ]);

    $cmb->add_group_field($jobs, [
        'name' => 'Imagem',
        'id' => 'imagem',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_group_field($jobs, [
        'name' => 'URL do Projeto',
        'id' => 'url',
        'type' => 'text',
    ]);
}

?>