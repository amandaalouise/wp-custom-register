<?php 

function registration_validation_fisica(
    $username, 
    $password, 
    $email, 
    $first_name, 
    $last_name,
    $cpf,
    $data_de_nascimento,
    $pais_de_nascimento,
    $celular_,
    $telefone_fixo,
    $url_lattes,
    $pais_de_residencia,
    $cep,
    $logradouro,
    $numero,
    $bairro,
    $cidade,
    $estado,
    $vinculo_institucional,
    $departamento,
    $cargofuncao,
    $telefone,
    $ramal,
    $formacao_academica,
    $formacao_tipo,
    $areas_do_conhecimento,
    $temas_de_interesse_,
    $li_e_aceito_o_termo_de_adesao )  {

    global $reg_errors;
    $reg_errors = new WP_Error;

if ( empty( $username ) || empty( $password ) || empty( $email ) || empty($first_name) || 
    empty($last_name) || empty($cpf) || empty($data_de_nascimento) || empty($pais_de_nascimento) ||
    empty($celular_) || empty($telefone_fixo) || empty($pais_de_residencia) ||
    empty($cep) || empty($logradouro) || empty($numero) || empty($bairro) || empty($cidade) || empty($estado) ||
    empty($vinculo_institucional) || empty($departamento) || empty($cargofuncao) || empty($telefone) || empty($ramal) ||
    empty($formacao_academica) || empty($formacao_tipo) || empty($areas_do_conhecimento) || empty($temas_de_interesse_) ||
    empty($li_e_aceito_o_termo_de_adesao)
    )  
    {
    
    $reg_errors->add( 'field', 'Campo obrigatório, favor preencher.' );
}

if(!validaCPF($cpf)) {
    $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido é inválido.' );
}

if(in_array($cpf, get_meta_values('cpf'))) {
    $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido já existe.' );
}

if ( 4 > strlen( $username ) ) {
    $reg_errors->add( 'username_length', 'Nome de usuário deve conter pelo menos 5 caracteres.' );
}

if ( username_exists( $username ) ) {
    $reg_errors->add('user_name', 'Desculpe, este nome de usuário já existe!');
    
}

if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Desculpe, o nome de usuário preenchido é inválido.' );
}

if ( 5 > strlen( $password ) ) {
    $reg_errors->add( 'password', 'A senha deve conter mais de 5 caracteres.' );
}

if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'E-mail inválido.' );
}

if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Este e-mail já está sendo usado.' );
}

// if (! empty($website)) {
//     if (! filter_var($website, FILTER_VALIDATE_URL)) {
//         $reg_errors->add('website', 'Website is not a valid URL');
//     }
// }

if ( is_wp_error( $reg_errors ) ) {
 
    foreach ( $reg_errors->get_error_messages() as $error ) {

    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col-md-12">';
                echo '<div class="alert alert-danger" role="alert"> ' . $error . '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    
    }
}

}