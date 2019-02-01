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
            <input name="responsavel_nome_completo_do_responsavel" id="responsavel_nome_completo_do_responsavel" value="<?php echo esc_attr( get_the_author_meta( 'responsavel_nome_completo_do_responsavel', $user_id ) ); ?>"
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
            <input name="responsavel_telefone_fixo_do_responsavel" id="responsavel_telefone_fixo_do_responsavel" value="<?php echo esc_attr( get_the_author_meta( 'responsavel_telefone_fixo_do_responsavel', $user_id ) ); ?>"
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
        <th><label for="tipo_de_instituicao">Tipo de Instituição:</label></th>
        <td>
            <select name="tipo_de_instituicao" id="tipo_de_instituicao">
                <?php 

            foreach ($tp_instituicao as $p) {
                ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('tipo_de_instituicao', $user_id)==$p) {
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
        <th><label for="tamanho_da_empresa">Tamanho da empresa:</label></th>
        <td>
            <select name="tamanho_da_empresa" id="tamanho_da_empresa">
                <?php 

            foreach ($tm_empresa as $p) {
                ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('tamanho_da_empresa', $user_id)==$p) {
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
        <th><label for="perfil_institucional">Perfil Institucional:</label></th>
        <td>
            <select name="perfil_institucional" id="perfil_institucional">
                <?php 

                foreach ($p_institucional as $p) {
                    ?>

                <option value="<?php echo $p ?>" <?php if (get_the_author_meta('perfil_institucional', $user_id)==$p) {
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
    <tr>
        <th><label for="li_e_aceito_o_termo_de_adesao">Li e aceito o <a target="_blank" href="<?php echo site_url() ?>/institucional/termo-de-adesao/">termo
                    de adesão</a></label></th>
        <td>
            <input name="li_e_aceito_o_termo_de_adesao" id="li_e_aceito_o_termo_de_adesao" checked="<?php echo esc_attr( get_the_author_meta( 'li_e_aceito_o_termo_de_adesao', $user_id ) ); ?>"
                class="regular-text" type="checkbox">
        </td>
    </tr>

</table>