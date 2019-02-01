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
                    (get_the_author_meta('vinculo_institucional', $user_id)==$user) { echo 'selected' ; } ?>

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
    <tr>
        <th><label for="li_e_aceito_o_termo_de_adesao">Li e aceito o <a target="_blank" href="<?php echo site_url() ?>/institucional/termo-de-adesao/">termo
                    de adesão</a></label></th>
        <td>
            <input name="li_e_aceito_o_termo_de_adesao" id="li_e_aceito_o_termo_de_adesao" checked="<?php echo esc_attr( get_the_author_meta( 'li_e_aceito_o_termo_de_adesao', $user_id ) ); ?>"
                class="regular-text" type="checkbox">
        </td>
    </tr>

</table>