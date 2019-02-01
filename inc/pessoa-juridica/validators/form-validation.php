<?php 

function registration_validation_juridica(
    $pessoaJuridica
    )  {

    global $reg_errors;
    $reg_errors = new WP_Error;

if (empty($pessoaJuridica->password)) {    
    $reg_errors->add( 'field', 'Senha: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->username )) {    
    $reg_errors->add( 'field', 'Nome de Usuário: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->email )) {    
    $reg_errors->add( 'field', 'Email: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->first_name )) {    
    $reg_errors->add( 'field', 'Nome Fantasia: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_nome_completo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Nome do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Email do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_celular_do_responsavel )) {    
    $reg_errors->add( 'field', 'Celular do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_telefone_fixo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Telefone do Responsável: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->cep)) {
    $reg_errors->add( 'field', 'CEP: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->logradouro)) {
    $reg_errors->add( 'field', 'Logradouro: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->numero)) {
    $reg_errors->add( 'field', 'Número: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->bairro)) {
    $reg_errors->add( 'field', 'Bairro: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->cidade)) {
    $reg_errors->add( 'field', 'Cidade: Campo obrigatório, favor preencher.' );
}

if(empty($pessoaJuridica->estado)) {
    $reg_errors->add( 'field', 'Estado / UF: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_substituto_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Nome do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_substituto_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Email do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_substituto_celular_do_responsavel )) {    
    $reg_errors->add( 'field', 'Celular do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->responsavel_substituto_telefone_fixo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Telefone do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->cnpj )) {    
    $reg_errors->add( 'field', 'CNPJ: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao )) {    
    $reg_errors->add( 'field', 'Possui ambientes ou grupos voltados a pesquisa e inovação: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->temas_de_interesse_ )) {    
    $reg_errors->add( 'field', 'Temas de Interesse: Campo obrigatório, favor preencher.' );
}

if (empty( $pessoaJuridica->li_e_aceito_o_termo_de_adesao )) {    
    $reg_errors->add( 'field', 'Favor aceitar o termo de adesão.' );
}

if(!validaCNPJ($pessoaJuridica->cnpj)) {
    $reg_errors->add( 'cpf', 'Desculpe, o CNPJ preenchido é inválido.' );
}

if(in_array($pessoaJuridica->cnpj, get_meta_values('cnpj'))) {
    $reg_errors->add( 'cnpj', 'Desculpe, o CNPJ preenchido já existe.' );
}

if ( 4 > strlen( $pessoaJuridica->username ) ) {
    $reg_errors->add( 'username_length', 'Nome de usuário deve conter pelo menos 5 caracteres.' );
}

if ( username_exists( $pessoaJuridica->username ) ) {
    $reg_errors->add('user_name', 'Desculpe, este nome de usuário já existe!');
    
}

if ( ! validate_username( $pessoaJuridica->username ) ) {
    $reg_errors->add( 'username_invalid', 'Desculpe, o nome de usuário preenchido é inválido.' );
}

if ( 5 > strlen( $pessoaJuridica->password ) ) {
    $reg_errors->add( 'password', 'A senha deve conter mais de 5 caracteres.' );
}

if ( !is_email( $pessoaJuridica->email ) ) {
    $reg_errors->add( 'email_invalid', 'E-mail inválido.' );
}

if ( email_exists( $pessoaJuridica->email ) ) {
    $reg_errors->add( 'email', 'Este e-mail já está sendo usado.' );
}

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