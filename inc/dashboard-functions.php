<?php 

add_action( 'show_user_profile', 'my_custom_user_profile_field' );
add_action( 'edit_user_profile', 'my_custom_user_profile_field' );
function my_custom_user_profile_field( $user ) { 

    
    $user_meta = get_userdata($user->id);
    $user_roles = $user_meta->roles;
    $paises = $GLOBALS['paises'];
    $escolaridade = $GLOBALS['escolaridade'];

    $instituicoes_query = get_users(array('role' => 'editor'));

    $instituicoes = [];
    foreach($instituicoes_query as $i) {
      array_push($instituicoes, $i->display_name);
    }
    array_unshift($instituicoes, 'Não Possui');


    $tp_instituicao = $GLOBALS['tipo_instituicao'];
    $tm_empresa = $GLOBALS['tamanho_empresa'];
    $p_institucional = $GLOBALS['p_institucional'];
    $ambientes = $GLOBALS['ambientes'];
    
    $user_id = $user_meta->id;

    if($user_roles[0] == 'subscriber') {
        //Pessoa Física
?>

<h3 style="margin-top: 25px;">Dados de Usuário</h3>
<table class="form-table">
    <tr>
        <th><label for="cpf">CPF:</label></th>
        <td>
            <input name="cpf" id="cpf" value="<?php echo esc_attr( get_the_author_meta( 'cpf', $user_id ) ); ?>" class="regular-text"
                type="text">
        </td>
    </tr>

    <tr>
        <th><label for="data_de_nascimento">Data de Nascimento:</label></th>
        <td>
            <input name="data_de_nascimento" id="data_de_nascimento" value="<?php echo esc_attr( get_the_author_meta( 'data_de_nascimento', $user_id ) ); ?>"
                class="regular-text" type="date">
        </td>
    </tr>

    <tr>
        <th><label for="pais_de_nascimento">País de Nascimento:</label></th>
        <td>
            <select name="pais_de_nascimento" id="pais_de_nascimento" style="width: 350px">
                <?php 

            foreach ($paises as $p) {
                ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('pais_de_nascimento', $user_id)==$p) {
                    echo 'selected' ; } ?>

                    >

                    <?php echo $p ?>
                </option>

                <?php
            }
            ?>
            </select>
        </td>
    </tr>

    <tr>
        <th><label for="celular_">Celular:</label></th>
        <td>
            <input name="celular_" id="celular_" value="<?php echo esc_attr( get_the_author_meta( 'celular_', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="telefone_fixo">Telefone Fixo:</label></th>
        <td>
            <input name="telefone_fixo" id="telefone_fixo" value="<?php echo esc_attr( get_the_author_meta( 'telefone_fixo', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="url_lattes">Url Lattes:</label></th>
        <td>
            <input name="url_lattes" id="url_lattes" value="<?php echo esc_attr( get_the_author_meta( 'url_lattes', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="pais_de_residencia">País de Residencia:</label></th>
        <td>
            <select name="pais_de_residencia" id="pais_de_residencia" style="width: 350px">
                <?php 

            foreach ($paises as $p) {
                ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('pais_de_residencia', $user_id)==$p) {
                    echo 'selected' ; } ?>

                    >

                    <?php echo $p ?>
                </option>

                <?php
            }
            ?>
            </select>
        </td>
    </tr>

    <tr>
        <th><label for="cep">CEP:</label></th>
        <td>
            <input name="cep" id="cep" value="<?php echo esc_attr( get_the_author_meta( 'cep', $user_id ) ); ?>" class="regular-text"
                type="text">
        </td>
    </tr>

    <tr>
        <th><label for="logradouro">Logradouro:</label></th>
        <td>
            <input name="logradouro" id="logradouro" value="<?php echo esc_attr( get_the_author_meta( 'logradouro', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="numero">Número:</label></th>
        <td>
            <input name="numero" id="numero" value="<?php echo esc_attr( get_the_author_meta( 'numero', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="bairro">Bairro:</label></th>
        <td>
            <input name="bairro" id="bairro" value="<?php echo esc_attr( get_the_author_meta( 'bairro', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="cidade">Cidade:</label></th>
        <td>
            <input name="cidade" id="cidade" value="<?php echo esc_attr( get_the_author_meta( 'cidade', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="estado">Estado / UF:</label></th>
        <td>
            <input name="estado" id="estado" value="<?php echo esc_attr( get_the_author_meta( 'estado', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="vinculo_institucional">Vinculo Institucional:</label></th>
        <td>

            <select name="vinculo_institucional" id="vinculo_institucional" style="width: 350px">
                <?php 

                foreach($instituicoes as $user) {
                ?>

                <option value="<?php echo $user->display_name ?>" <?php if
                    (get_the_author_meta('vinculo_institucional', $user_id)==$user)
                    {
                    echo 'selected';
                    } ?>

                    >

                    <?php echo $user ?>
                </option>

                <?php
            }
            ?>
            </select>
        </td>
    </tr>

    <tr>
        <th><label for="departamento">Departamento:</label></th>
        <td>
            <input name="departamento" id="departamento" value="<?php echo esc_attr( get_the_author_meta( 'departamento', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="cargofuncao">Cargo / Função:</label></th>
        <td>
            <input name="cargofuncao" id="cargofuncao" value="<?php echo esc_attr( get_the_author_meta( 'cargofuncao', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="telefone">Telefone:</label></th>
        <td>
            <input name="telefone" id="telefone" value="<?php echo esc_attr( get_the_author_meta( 'telefone', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="ramal">Ramal:</label></th>
        <td>
            <input name="ramal" id="ramal" value="<?php echo esc_attr( get_the_author_meta( 'ramal', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="formacao_academica">Formação Acadêmica:</label></th>
        <td>
            <select name="formacao_academica" id="formacao_academica" style="width: 350px">
                <?php 

            foreach ($escolaridade as $p) {
                ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('formacao_academica', $user_id)==$p) {
                    echo 'selected' ; } ?>

                    >

                    <?php echo $p ?>
                </option>

                <?php
            }
            ?>
            </select>
        </td>
    </tr>

    <tr>
        <th><label for="formacao_tipo">Nível:</label></th>
        <td>
            <input name="formacao_tipo" id="formacao_tipo" value="<?php echo esc_attr( get_the_author_meta( 'formacao_tipo', $user_id ) ); ?>"
                class="regular-text" type="text">
        </td>
    </tr>

    <tr>
        <th><label for="areas_do_conhecimento">Áreas do Conhecimento:</label></th>
        <td>
            <?php

        $nomeAreas = $GLOBALS['areas_conhecimento'];
        $checkedItems = get_the_author_meta( 'areas_do_conhecimento', $user_id );

        foreach( $nomeAreas as $v )

        {            
            echo '<div class="form-check">';
            echo '<input type="checkbox" name="areas_do_conhecimento[]" value="'. $v .'"';

            if (in_array($v, $checkedItems)) {
                echo 'checked';
            }

            echo '><label class="form-check-label" for="areas_do_conhecimento">';
            echo $v;
            echo '</label>';
            echo '</div>';
        } 
        
        ?>

        </td>
    </tr>

    <tr>
        <th><label for="temas_de_interesse_">Temas de Interesse:</label></th>
        <td>

            <?php

        $terms = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        ));
        $names = wp_list_pluck( $terms, 'name' );
        $checkedItems = get_the_author_meta( 'temas_de_interesse_', $user_id);

        foreach( $names as $v )

        {
            echo '<div class="form-check">';
            echo '<input type="checkbox" name="temas_de_interesse_[]" value="'. $v .'"';

            if (in_array($v, $checkedItems)) {
                echo 'checked';
            }

            echo '><label class="form-check-label" for="temas_de_interesse_">';
            echo $v;
            echo '</label>';
            echo '</div>';

        } 
        
        ?>

        </td>
    </tr>

    <?php } ?>

    <?php if($user_roles[0] == 'editor') {        
        //Pessoa Juridica
    ?>

    <h3 style="margin-top: 25px;">Dados de Usuário</h3>
    <table class="form-table">
        <tr>
            <th><label for="first_name">Nome Fantasia:</label></th>
            <td>
                <input name="first_name" id="first_name" value="<?php echo esc_attr( get_the_author_meta( 'first_name', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="user_url">Website:</label></th>
            <td>
                <input name="user_url" id="user_url" value="<?php echo esc_attr( get_the_author_meta( 'user_url', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="CNPJ">CNPJ:</label></th>
            <td>
                <input name="cnpj" id="CNPJ" value="<?php echo esc_attr( get_the_author_meta( 'cnpj', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="responsavel_nome_completo_do_responsavel">Nome completo do responsável:</label></th>
            <td>
                <input name="responsavel_nome_completo_do_responsavel" id="responsavel_nome_completo_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_nome_completo_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="responsavel_email_do_responsavel">Email do responsável:</label></th>
            <td>
                <input name="responsavel_email_do_responsavel" id="responsavel_email_do_responsavel" value="<?php echo esc_attr( get_the_author_meta( 'responsavel_email_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="responsavel_celular_do_responsavel">Celular do responsável:</label></th>
            <td>
                <input name="responsavel_celular_do_responsavel" id="responsavel_celular_do_responsavel" value="<?php echo esc_attr( get_the_author_meta( 'responsavel_celular_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="responsavel_telefone_fixo_do_responsavel">Telefone fixo do responsável:</label></th>
            <td>
                <input name="responsavel_telefone_fixo_do_responsavel" id="responsavel_telefone_fixo_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_telefone_fixo_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="responsavel_substituto_nome_completo_do_responsavel">Nome completo do responsável
                    substituto:</label></th>
            <td>
                <input name="responsavel_substituto_nome_completo_do_responsavel" id="responsavel_substituto_nome_completo_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_substituto_nome_completo_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="responsavel_substituto_email_do_responsavel">Email do responsável substituto:</label></th>
            <td>
                <input name="responsavel_substituto_email_do_responsavel" id="responsavel_substituto_email_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_substituto_email_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="responsavel_substituto_celular_do_responsavel">Celular do responsável substituto:</label></th>
            <td>
                <input name="responsavel_substituto_celular_do_responsavel" id="responsavel_substituto_celular_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_substituto_celular_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="responsavel_substituto_telefone_fixo_do_responsavel">Telefone do responsável substituto:</label></th>
            <td>
                <input name="responsavel_substituto_telefone_fixo_do_responsavel" id="responsavel_substituto_telefone_fixo_do_responsavel"
                    value="<?php echo esc_attr( get_the_author_meta( 'responsavel_substituto_telefone_fixo_do_responsavel', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="cep">CEP:</label></th>
            <td>
                <input name="cep" id="cep" value="<?php echo esc_attr( get_the_author_meta( 'cep', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="logradouro">Logradouro:</label></th>
            <td>
                <input name="logradouro" id="logradouro" value="<?php echo esc_attr( get_the_author_meta( 'logradouro', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="numero">Número:</label></th>
            <td>
                <input name="numero" id="numero" value="<?php echo esc_attr( get_the_author_meta( 'numero', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>
        <tr>
            <th><label for="bairro">Bairro:</label></th>
            <td>
                <input name="bairro" id="bairro" value="<?php echo esc_attr( get_the_author_meta( 'bairro', $user_id ) ); ?>"
                    class="regular-text" type="text">
            </td>
        </tr>

        <tr>
            <th><label for="tipo_de_instituicao">Tipo de Instituição:</label></th>
            <td>
                <select name="tipo_de_instituicao" id="tipo_de_instituicao">
                    <?php 

            foreach ($tp_instituicao as $p) {
                ?>

                    <option value="<?php echo $p ?>" <?php if (get_the_author_meta('tipo_de_instituicao', $user_id)==$p)
                        { echo 'selected' ; } ?>

                        >

                        <?php echo $p ?>
                    </option>

                    <?php
            }
            ?>
                </select>

            </td>
        </tr>

        <tr>
            <th><label for="tamanho_da_empresa">Tamanho da empresa:</label></th>
            <td>
                <select name="tamanho_da_empresa" id="tamanho_da_empresa">
                    <?php 

            foreach ($tm_empresa as $p) {
                ?>

                    <option value="<?php echo $p ?>" <?php if (get_the_author_meta('tamanho_da_empresa', $user_id)==$p)
                        { echo 'selected' ; } ?>

                        >

                        <?php echo $p ?>
                    </option>

                    <?php
            }
            ?>
                </select>
            </td>
        </tr>

        <tr>
            <th><label for="perfil_institucional">Perfil Institucional:</label></th>
            <td>
                <select name="perfil_institucional" id="perfil_institucional">
                    <?php 

                foreach ($p_institucional as $p) {
                    ?>

                    <option value="<?php echo $p ?>" <?php if (get_the_author_meta('perfil_institucional', $user_id)==$p)
                        { echo 'selected' ; } ?>

                        >

                        <?php echo $p ?>
                    </option>

                    <?php
                }
                ?>
                </select>
            </td>
        </tr>

        <tr>
            <th><label for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">Possui ambientes ou grupos
                    voltados
                    à pesquisa e inovação?</label></th>
            <td>
                <?php


    $checkedItems = get_the_author_meta( 'possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao', $user_id );

    foreach( $ambientes as $v )

    {        
        echo '<div class="form-check">';
        echo '<input type="checkbox" name="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao[]" value="'. $v .'"';

        if (in_array($v, $checkedItems)) {
            echo 'checked';
        }
        echo '><label class="form-check-label" for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">';
        echo $v;
        echo '</label>';
        echo '</div>';
        } 

    ?>
            </td>
        </tr>

        <tr>
            <th><label for="temas_de_interesse_">Temas de Interesse:</label></th>
            <td>

                <?php

        $terms = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => false,
        ));
        $names = wp_list_pluck( $terms, 'name' );
        $checkedItems = get_the_author_meta( 'temas_de_interesse_', $user_id);

        foreach( $names as $v )

        {
                echo '<div class="form-check">';
                echo '<input type="checkbox" name="temas_de_interesse_[]" value="'. $v .'"';

                if (in_array($v, $checkedItems)) {
                    echo 'checked';
                }

                echo '><label class="form-check-label" for="temas_de_interesse_">';
                echo $v;
                echo '</label>';
                echo '</div>';

        } 
        
        ?>

            </td>
        </tr>

        <?php

} ?>

        <tr>
            <th><label for="li_e_aceito_o_termo_de_adesao">Li e aceito o <a target="_blank" href="<?php echo site_url() ?>/institucional/termo-de-adesao/">termo
                        de adesão</a></label></th>
            <td>
                <input name="li_e_aceito_o_termo_de_adesao" id="li_e_aceito_o_termo_de_adesao" checked="<?php echo esc_attr( get_the_author_meta( 'li_e_aceito_o_termo_de_adesao', $user_id ) ); ?>"
                    class="regular-text" type="checkbox">
            </td>
        </tr>

    </table>



    <?php }

add_action( 'personal_options_update', 'save_my_custom_user_profile_field' );
add_action( 'edit_user_profile_update', 'save_my_custom_user_profile_field' );
function save_my_custom_user_profile_field( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    if($user_roles[0] != 'editor') {
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