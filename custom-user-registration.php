<?php
/*
  Plugin Name: Custom User Registration
  Description: Cadastro de usuário personalizado.
  Version: 1.1
  Author: Amanda Louise Acosta Morais
 */

$GLOBALS['paises'] = [
  'Brasil',
  'África do Sul',
    'Albânia',
    'Alemanha',
    'Andorra',
    'Angola',
    'Anguilla',
    'Antigua',
    'Arábia Saudita',
    'Argentina',
    'Armênia',
    'Aruba',
    'Austrália',
    'Áustria',
    'Azerbaijão',
    'Bahamas',
    'Bahrein',
    'Bangladesh',
    'Barbados',
    'Bélgica',
    'Benin',
    'Bermudas',
    'Botsuana',
    'Brunei',
    'Bulgária',
    'Burkina Fasso',
    'Butão',
    'Cabo Verde',
    'Camarões',
    'Camboja',
    'Canadá',
    'Cazaquistão',
    'Chade',
    'Chile',
    'China',
    'Cidade do Vaticano',
    'Colômbia',
    'Congo',
    'Coréia do Sul',
    'Costa do Marfim',
    'Costa Rica',
    'Croácia',
    'Dinamarca',
    'Djibuti',
    'Dominica',
    'EUA',
    'Egito',
    'El Salvador',
    'Emirados Árabes',
    'Equador',
    'Eritréia',
    'Escócia',
    'Eslováquia',
    'Eslovênia',
    'Espanha',
    'Estônia',
    'Etiópia',
    'Fiji',
    'Filipinas',
    'Finlândia',
    'França',
    'Gabão',
    'Gâmbia',
    'Gana',
    'Geórgia',
    'Gibraltar',
    'Granada',
    'Grécia',
    'Guadalupe',
    'Guam',
    'Guatemala',
    'Guiana',
    'Guiana Francesa',
    'Guiné-bissau',
    'Haiti',
    'Holanda',
    'Hondura',
    'Hong Kong',
    'Hungria',
    'Iêmen',
    'Ilhas Cayman',
    'Ilhas Cook',
    'Ilhas Curaçao',
    'Ilhas Marshall',
    'Ilhas Turks & Caicos',
    'Ilhas Virgens (brit.)',
    'Ilhas Virgens(amer.)',
    'Ilhas Wallis e Futuna',
    'Índia',
    'Indonésia',
    'Irlanda',
    'Islândia',
    'Israel',
    'Itália',
    'Jamaica',
    'Japão',
    'Jordânia',
    'Kuwait',
    'Latvia',
    'Líbano',
    'Liechtenstein',
    'Lituânia',
    'Luxemburgo',
    'Macau',
    'Macedônia',
    'Madagascar',
    'Malásia',
    'Malaui',
    'Mali',
    'Malta',
    'Marrocos',
    'Martinica',
    'Mauritânia',
    'Mauritius',
    'México',
    'Moldova',
    'Mônaco',
    'Montserrat',
    'Nepal',
    'Nicarágua',
    'Niger',
    'Nigéria',
    'Noruega',
    'Nova Caledônia',
    'Nova Zelândia',
    'Omã',
    'Palau',
    'Panamá',
    'Papua-nova Guiné',
    'Paquistão',
    'Peru',
    'Polinésia Francesa',
    'Polônia',
    'Porto Rico',
    'Portugal',
    'Qatar',
    'Quênia',
    'Rep. Dominicana',
    'Rep. Tcheca',
    'Reunion',
    'Romênia',
    'Ruanda',
    'Rússia',
    'Saipan',
    'Samoa Americana',
    'Senegal',
    'Serra Leone',
    'Seychelles',
    'Singapura',
    'Síria',
    'Sri Lanka',
    'St. Kitts & Nevis',
    'St. Lúcia',
    'St. Vincent',
    'Sudão',
    'Suécia',
    'Suiça',
    'Suriname',
    'Tailândia',
    'Taiwan',
    'Tanzânia',
    'Togo',
    'Trinidad & Tobago',
    'Tunísia',
    'Turquia',
    'Ucrânia',
    'Uganda',
    'Uruguai',
    'Venezuela',
    'Vietnã',
    'Zaire',
    'Zâmbia',
    'Zimbábue'
];

$GLOBALS['areas_conhecimento'] = [
  'Ciências Exatas e da Terra', 
  'Ciências Biológicas', 
  'Engenharias', 
  'Ciências da Saúde', 
  'Ciências Agrárias', 
  'Ciências Sociais Aplicadas', 
  'Ciências Humanas',
  'Linguística', 
  'Letras e Artes', 
  'Pós Graduação', 
  'Outros'
];

$GLOBALS['escolaridade'] = [
'Ensino Fundamental',
'Ensino Médio',
'Ensino Técnico',
'Ensino Superior',
'Pós Graduação',
'Mestrado',
'Doutorado',
'Pós Doutorado',
];

$GLOBALS['tipo_instituicao'] = [
  'Pública',
  'Privada'
];

$GLOBALS['tamanho_empresa'] = [
  'Grande',
  'Média',
  'Pequena',
  'MEI',
  'Não se aplica'
];

$GLOBALS['p_institucional'] = [
  'Organização da Sociedade Civil',
  'Empresa',
  'Governo',
  'Instituições de Ensino e Pesquisa',
  'Instituições de Apoio'
];

$GLOBALS['ambientes'] = [
  'Não',
  'Biblioteca',
  'Coworking',
  'Grupo de Pesquisa',
  'Incubadora/Aceleradora/Hotel Tecnológico',
  'Laboratório',
  'NIT',
  'Observatório',
  'Parque Tecnológico',
  'Outros'
];

//Funções cadastro de pessoa física
require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/templates/form-pfisica-template.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/validators/form-validation.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/core-form-pfisica.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/validators/cpf-validation.php';

//Funções cadastro de pessoa Juridica
require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/templates/form-pjuridica-template.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/validators/form-validation.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/core-form-pjuridica.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/validators/cnpj-validation.php';


//Funções Gerais do Plugin
require_once plugin_dir_path(__FILE__). '/inc/storage-functions.php';

require_once plugin_dir_path(__FILE__). '/inc/dashboard-functions.php';

require_once plugin_dir_path(__FILE__). '/plugin-styles.php';