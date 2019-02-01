<?php 

add_action( 'show_user_profile', 'my_custom_user_profile_field' );
add_action( 'edit_user_profile', 'my_custom_user_profile_field' );
function my_custom_user_profile_field($user)
{
    $user_meta = get_userdata($user->id);
    $user_roles = $user_meta->roles;
    $paises = $GLOBALS['paises'];
    $escolaridade = $GLOBALS['escolaridade'];

    $instituicoes_query = get_users(array('role' => 'editor'));

    $instituicoes = [];
    foreach ($instituicoes_query as $i) {
        array_push($instituicoes, $i->display_name);
    }
    array_unshift($instituicoes, 'Não Possui');


    $tp_instituicao = $GLOBALS['tipo_instituicao'];
    $tm_empresa = $GLOBALS['tamanho_empresa'];
    $p_institucional = $GLOBALS['p_institucional'];
    $ambientes = $GLOBALS['ambientes'];
    
    $user_id = $user_meta->id;

    if ($user_roles[0] == 'subscriber') {
        //Pessoa Física
        require_once 'pessoa-fisica/templates/pessoa-fisica-dashboard.php';
    }
    
    if ($user_roles[0] == 'editor') {
        //Pessoa Juridica
        require_once 'pessoa-juridica/templates/pessoa-juridica-dashboard.php';
    }
}

add_action( 'personal_options_update', 'save_my_custom_user_profile_field' );
add_action( 'edit_user_profile_update', 'save_my_custom_user_profile_field' );
function save_my_custom_user_profile_field( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    if($user_roles[0] != 'editor') {

        //Edita User meta customizados de pessoa física
        update_user_meta( absint( $user_id ), 'cpf', wp_kses_post( $_POST['cpf'] ));
        update_user_meta( absint( $user_id ), 'data_de_nascimento', wp_kses_post( $_POST['data_de_nascimento'] ));
        update_user_meta( absint( $user_id ), 'pais_de_nascimento', wp_kses_post( $_POST['pais_de_nascimento'] )); 
        update_user_meta( absint( $user_id ), 'celular_', wp_kses_post( $_POST['celular_'] ));
        update_user_meta( absint( $user_id ), 'telefone_fixo', wp_kses_post( $_POST['telefone_fixo'] ));
        update_user_meta( absint( $user_id ), 'url_lattes', wp_kses_post( $_POST['url_lattes'] ));
        update_user_meta( absint( $user_id ), 'pais_de_residencia', wp_kses_post( $_POST['pais_de_residencia'] ));
        update_user_meta( absint( $user_id ), 'cep', wp_kses_post( $_POST['cep'] ));
        update_user_meta( absint( $user_id ), 'logradouro', wp_kses_post( $_POST['logradouro'] ));
        update_user_meta( absint( $user_id ), 'numero', wp_kses_post( $_POST['numero'] ));
        update_user_meta( absint( $user_id ), 'bairro', wp_kses_post( $_POST['bairro'] ));
        update_user_meta( absint( $user_id ), 'cidade', wp_kses_post( $_POST['cidade'] ));
        update_user_meta( absint( $user_id ), 'estado', wp_kses_post( $_POST['estado'] ));
        update_user_meta( absint( $user_id ), 'vinculo_institucional', wp_kses_post( $_POST['vinculo_institucional'] ));
        update_user_meta( absint( $user_id ), 'departamento', wp_kses_post( $_POST['departamento'] ));
        update_user_meta( absint( $user_id ), 'cargofuncao', wp_kses_post( $_POST['cargofuncao'] ));
        update_user_meta( absint( $user_id ), 'telefone', wp_kses_post( $_POST['telefone'] ));
        update_user_meta( absint( $user_id ), 'ramal', wp_kses_post( $_POST['ramal'] ));
        update_user_meta( absint( $user_id ), 'formacao_academica', wp_kses_post( $_POST['formacao_academica'] ));
        update_user_meta( absint( $user_id ), 'formacao_tipo', wp_kses_post( $_POST['formacao_tipo'] ));
        update_user_meta( absint( $user_id ), 'areas_do_conhecimento', wp_kses_post( $_POST['areas_do_conhecimento'] ));
        update_user_meta( absint( $user_id ), 'temas_de_interesse_', wp_kses_post( $_POST['temas_de_interesse_'] ));
        update_user_meta( absint( $user_id ), 'li_e_aceito_o_termo_de_adesao', wp_kses_post( $_POST['li_e_aceito_o_termo_de_adesao'] ));
    }

    if($user_roles[0] != 'subscriber') {

         //Edita User meta customizados de pessoa juridica
        update_user_meta( absint( $user_id ), 'responsavel_nome_completo_do_responsavel', wp_kses_post( $_POST['responsavel_nome_completo_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_email_do_responsavel', wp_kses_post( $_POST['responsavel_email_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_celular_do_responsavel', wp_kses_post( $_POST['responsavel_celular_do_responsavel'] )); 
        update_user_meta( absint( $user_id ), 'responsavel_telefone_fixo_do_responsavel', wp_kses_post( $_POST['responsavel_telefone_fixo_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_substituto_nome_completo_do_responsavel', wp_kses_post( $_POST['responsavel_substituto_nome_completo_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_substituto_email_do_responsavel', wp_kses_post( $_POST['responsavel_substituto_email_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_substituto_celular_do_responsavel', wp_kses_post( $_POST['responsavel_substituto_celular_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'responsavel_substituto_telefone_fixo_do_responsavel', wp_kses_post( $_POST['responsavel_substituto_telefone_fixo_do_responsavel'] ));
        update_user_meta( absint( $user_id ), 'logradouro', wp_kses_post( $_POST['logradouro'] ));
        update_user_meta( absint( $user_id ), 'numero', wp_kses_post( $_POST['numero'] ));
        update_user_meta( absint( $user_id ), 'bairro', wp_kses_post( $_POST['bairro'] ));
        update_user_meta( absint( $user_id ), 'cidade', wp_kses_post( $_POST['cidade'] ));
        update_user_meta( absint( $user_id ), 'estado', wp_kses_post( $_POST['estado'] ));
        update_user_meta( absint( $user_id ), 'cnpj', wp_kses_post( $_POST['cnpj'] ));
        update_user_meta( absint( $user_id ), 'cep', wp_kses_post( $_POST['cep'] ));
        update_user_meta( absint( $user_id ), 'tipo_de_instituicao', wp_kses_post( $_POST['tipo_de_instituicao'] ));
        update_user_meta( absint( $user_id ), 'tamanho_da_empresa', wp_kses_post( $_POST['tamanho_da_empresa'] ));
        update_user_meta( absint( $user_id ), 'perfil_institucional', wp_kses_post( $_POST['perfil_institucional'] ));
        update_user_meta( absint( $user_id ), 'possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao', wp_kses_post( $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'] ));
        update_user_meta( absint( $user_id ), 'li_e_aceito_o_termo_de_adesao', wp_kses_post( $_POST['li_e_aceito_o_termo_de_adesao'] ));
    }

}