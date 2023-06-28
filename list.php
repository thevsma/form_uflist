<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Estados do Brasil</title>
</head>
<body>
    <header>
        <h2>WebDev2023</h2>
    </header>
    <main>
        <?php
            $countiesdata = [
                'Acre' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg',
                    'Unidade Federativa' => 'Acre',
                    'Abreviação' => 'AC',
                    'Sede de governo' => 'Rio Branco',
                    'Área (km^2)' => 164122.2,
                    'População (2014)' => 795145,
                    'Densidade (2005)' => 4.30,
                    'PIB (2015)' => 13622000,
                    '% total (2015)' => 0.2,
                    'PIB per capita (R$) (2015)' => 16953.46,
                    'IDH (2010)' => 0.663,
                    'Alfabetização (2016)' => '86.9%',
                    'Mortalidade infantil (2016)' => '17.0‰',
                    'Expectativa de vida (2016)' => '73.9 anos'
                ),
                'Alagoas' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg',
                    'Unidade Federativa' => 'Alagoas',
                    'Abreviação' => 'AL',
                    'Sede de governo' => 'Maceió',
                    'Área (km^2)' => 27767.7,
                    'População (2014)' => 3327551,
                    'Densidade (2005)' => 108.61,
                    'PIB (2015)' => 46364000,
                    '% total (2015)' => 0.8,
                    'PIB per capita (R$) (2015)' => 13877.53,
                    'IDH (2010)' => 0.631,
                    'Alfabetização (2016)' => '80.6%',
                    'Mortalidade infantil (2016)' => '19.5‰',
                    'Expectativa de vida (2016)' => '71.6 anos'
                ),
                'Amapa' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amapá.svg',
                    'Unidade Federativa' => 'Amapá',
                    'Abreviação' => 'AP',
                    'Sede de governo' => 'Macapá',
                    'Área (km^2)' => 142814.6,
                    'População (2014)' => 756500,
                    'Densidade (2005)' => 4.16,
                    'PIB (2015)' => 13861000,
                    '% total (2015)' => 0.2,
                    'PIB per capita (R$) (2015)' => 18079.54,
                    'IDH (2010)' => 0.708,
                    'Alfabetização (2016)' => '95%',
                    'Mortalidade infantil (2016)' => '23.2‰',
                    'Expectativa de vida (2016)' => '73.9 anos'
                ),
                'Amazonas' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg',
                    'Unidade Federativa' => 'Amazonas',
                    'Abreviação' => 'AM',
                    'Sede de governo' => 'Manaus',
                    'Área (km^2)' => 15707457,
                    'População (2014)' => 3893763,
                    'Densidade (2005)' => 2.05,
                    'PIB (2015)' => 86560000,
                    '% total (2015)' => 1.4,
                    'PIB per capita (R$) (2015)' => 2197895,
                    'IDH (2010)' => 0.674,
                    'Alfabetização (2016)' => '93.1%',
                    'Mortalidade infantil (2016)' => '18.2‰',
                    'Expectativa de vida (2016)' => '71.9 anos'
                ),
                'Bahia' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg',
                    'Unidade Federativa' => 'Bahia',
                    'Abreviação' => 'BA',
                    'Sede de governo' => 'Salvador',
                    'Área (km^2)' => 564692.7,
                    'População (2014)' => 15150143,
                    'Densidade (2005)' => 24.46,
                    'PIB (2015)' => 245025000,
                    '% total (2015)' => 4.1,
                    'PIB per capita (R$) (2015)' => 16115.89,
                    'IDH (2010)' => 0.660,
                    'Alfabetização (2016)' => '87%',
                    'Mortalidade infantil (2016)' => '17.3‰',
                    'Expectativa de vida (2016)' => '73.5 anos'
                ),
                'Ceara' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Ceará.svg',
                    'Unidade Federativa' => 'Ceará',
                    'Abreviação' => 'CE',
                    'Sede de governo' => 'Fortaleza',
                    'Área (km^2)' => 148825.6,
                    'População (2014)' => 8867448,
                    'Densidade (2005)' => 54.40,
                    'PIB (2015)' => 130621000,
                    '% total (2015)' => 2.2,
                    'PIB per capita (R$) (2015)' => 14669.14,
                    'IDH (2010)' => 0.682,
                    'Alfabetização (2016)' => '84.8%',
                    'Mortalidade infantil (2016)' => '14.4‰',
                    'Expectativa de vida (2016)' => '73.8 anos'
                ),
                'Distrito Federal' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg',
                    'Unidade Federativa' => 'Distrito Federal',
                    'Abreviação' => 'DF',
                    'Sede de governo' => 'Brasília',
                    'Área (km^2)' => 5822.1,
                    'População (2014)' => 2867869,
                    'Densidade (2005)' => 400.73,
                    'PIB (2015)' => 215613000,
                    '% total (2015)' => 3.6,
                    'PIB per capita (R$) (2015)' => 73971.05,
                    'IDH (2010)' => 0.824,
                    'Alfabetização (2016)' => '97.4%',
                    'Mortalidade infantil (2016)' => '10.5‰',
                    'Expectativa de vida (2016)' => '78.1 anos'
                ),
                'Espirito Santo' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Espírito_Santo.svg',
                    'Unidade Federativa' => 'Espírito Santo',
                    'Abreviação' => 'ES',
                    'Sede de governo' => 'Vitória',
                    'Área (km^2)' => 46077.5,
                    'População (2014)' => 3894899,
                    'Densidade (2005)' => 73.97,
                    'PIB (2015)' => 120363000,
                    '% total (2015)' => 2,
                    'PIB per capita (R$) (2015)' => 30627.45,
                    'IDH (2010)' => 0.740,
                    'Alfabetização (2016)' => '93.8%',
                    'Mortalidade infantil (2016)' => '8.8‰',
                    'Expectativa de vida (2016)' => '78.2 anos'
                ),
                'Goias' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goiás.svg',
                    'Unidade Federativa' => 'Goiás',
                    'Abreviação' => 'GO',
                    'Sede de governo' => 'Goiânia',
                    'Área (km^2)' => 340086.7,
                    'População (2014)' => 6551322,
                    'Densidade (2005)' => 16.52,
                    'PIB (2015)' => 173632000,
                    '% total (2015)' => 2.9,
                    'PIB per capita (R$) (2015)' => 26265.32,
                    'IDH (2010)' => 0.735,
                    'Alfabetização (2016)' => '93.5%',
                    'Mortalidade infantil (2016)' => '14.9‰',
                    'Expectativa de vida (2016)' => '74.2 anos'
                ),
                'Maranhao' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranhão.svg',
                    'Unidade Federativa' => 'Maranhão',
                    'Abreviação' => 'MA',
                    'Sede de governo' => 'São Luís',
                    'Área (km^2)' => 331983.3,
                    'População (2014)' => 6861924,
                    'Densidade (2005)' => 18.38,
                    'PIB (2015)' => 78475000,
                    '% total (2015)' => 1.3,
                    'PIB per capita (R$) (2015)' => 11366.23,
                    'IDH (2010)' => 0.639,
                    'Alfabetização (2016)' => '83.3%',
                    'Mortalidade infantil (2016)' => '21.3‰',
                    'Expectativa de vida (2016)' => '70.6 anos'
                ),
                'Mato Grosso' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg',
                    'Unidade Federativa' => 'Mato Grosso',
                    'Abreviação' => 'MT',
                    'Sede de governo' => 'Cuiabá',
                    'Área (km^2)' => 903357.9,
                    'População (2014)' => 3236578,
                    'Densidade (2005)' => 3.10,
                    'PIB (2015)' => 107418000,
                    '% total (2015)' => 1.8,
                    'PIB per capita (R$) (2015)' => 3289496,
                    'IDH (2010)' => 0.725,
                    'Alfabetização (2016)' => '93.5%',
                    'Mortalidade infantil (2016)' => '16.9‰',
                    'Expectativa de vida (2016)' => '74.2 anos'
                ),
                'Mato Grosso do Sul' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg',
                    'Unidade Federativa' => 'Mato Grosso do Sul',
                    'Abreviação' => 'MS',
                    'Sede de governo' => 'Campo Grande',
                    'Área (km^2)' => 357125.0,
                    'População (2014)' => 2630098,
                    'Densidade (2005)' => 6.34,
                    'PIB (2015)' => 83082000,
                    '% total (2015)' => 1.4,
                    'PIB per capita (R$) (2015)' => 31337.22,
                    'IDH (2010)' => 0.729,
                    'Alfabetização (2016)' => '93.7%',
                    'Mortalidade infantil (2016)' => '14.0‰',
                    'Expectativa de vida (2016)' => '75.5 anos'
                ),
                'Minas Gerais' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg',
                    'Unidade Federativa' => 'Minas Gerais',
                    'Abreviação' => 'MG',
                    'Sede de governo' => 'Belo Horizonte',
                    'Área (km^2)' => 586528.3,
                    'População (2014)' => 20777672,
                    'Densidade (2005)' => 32.79,
                    'PIB (2015)' => 519326000,
                    '% total (2015)' => 8.7,
                    'PIB per capita (R$) (2015)' => 24884.94,
                    'IDH (2010)' => 0.731,
                    'Alfabetização (2016)' => '93.8%',
                    'Mortalidade infantil (2016)' => '10.9‰',
                    'Expectativa de vida (2016)' => '77.2 anos'
                ),
                'Para' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Pará.svg',
                    'Unidade Federativa' => 'Pará',
                    'Abreviação' => 'PA',
                    'Sede de governo' => 'Belém',
                    'Área (km^2)' => 1247689.5,
                    'População (2014)' => 8101180,
                    'Densidade (2005)' => 5.58,
                    'PIB (2015)' => 130883000,
                    '% total (2015)' => 2.2,
                    'PIB per capita (R$) (2015)' => 1600998,
                    'IDH (2010)' => 0.646,
                    'Alfabetização (2016)' => '90.7%',
                    'Mortalidade infantil (2016)' => '16.6‰',
                    'Expectativa de vida (2016)' => '72.1 anos'
                ),
                'Paraiba' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Paraíba.svg',
                    'Unidade Federativa' => 'Paraíba',
                    'Abreviação' => 'PB',
                    'Sede de governo' => 'João Pessoa',
                    'Área (km^2)' => 56439.8,
                    'População (2014)' => 3950359,
                    'Densidade (2005)' => 63.71,
                    'PIB (2015)' => 56140000,
                    '% total (2015)' => 0.9,
                    'PIB per capita (R$) (2015)' => 14133.32,
                    'IDH (2010)' => 0.658,
                    'Alfabetização (2016)' => '83.7%',
                    'Mortalidade infantil (2016)' => '16.1‰',
                    'Expectativa de vida (2016)' => '73.2 anos'
                ),
                'Parana' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paraná.svg',
                    'Unidade Federativa' => 'Paraná',
                    'Abreviação' => 'PR',
                    'Sede de governo' => 'Curitiba',
                    'Área (km^2)' => 199314.9,
                    'População (2014)' => 11112062,
                    'Densidade (2005)' => 51.48,
                    'PIB (2015)' => 376960000,
                    '% total (2015)' => 6.3,
                    'PIB per capita (R$) (2015)' => 33768.62,
                    'IDH (2010)' => 0.749,
                    'Alfabetização (2016)' => '95.5%',
                    'Mortalidade infantil (2016)' => '9.3‰',
                    'Expectativa de vida (2016)' => '77.1 anos'
                ),
                'Pernambuco' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg',
                    'Unidade Federativa' => 'Pernambuco',
                    'Abreviação' => 'PE',
                    'Sede de governo' => 'Recife',
                    'Área (km^2)' => 98311.6,
                    'População (2014)' => 9297861,
                    'Densidade (2005)' => 85.58,
                    'PIB (2015)' => 156955000,
                    '% total (2015)' => 2.6,
                    'PIB per capita (R$) (2015)' => 16795.34,
                    'IDH (2010)' => 0.673,
                    'Alfabetização (2016)' => '87.2%',
                    'Mortalidade infantil (2016)' => '12.7‰',
                    'Expectativa de vida (2016)' => '73.9 anos'
                ),
                'Piaui' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piauí.svg',
                    'Unidade Federativa' => 'Piauí',
                    'Abreviação' => 'PI',
                    'Sede de governo' => 'Teresina',
                    'Área (km^2)' => 251529.2,
                    'População (2014)' => 3198185,
                    'Densidade (2005)' => 11.95,
                    'PIB (2015)' => 39148000,
                    '% total (2015)' => 0.7,
                    'PIB per capita (R$) (2015)' => 12218.51,
                    'IDH (2010)' => 0.646,
                    'Alfabetização (2016)' => '82.8%',
                    'Mortalidade infantil (2016)' => '19.1‰',
                    'Expectativa de vida (2016)' => '71.1 anos'
                ),
                'Rio de Janeiro' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg',
                    'Unidade Federativa' => 'Rio de Janeiro',
                    'Abreviação' => 'RJ',
                    'Sede de governo' => 'Rio de Janeiro',
                    'Área (km^2)' => 43696.1,
                    'População (2014)' => 16497395,
                    'Densidade (2005)' => 352.05,
                    'PIB (2015)' => 659137000,
                    '% total (2015)' => 11,
                    'PIB per capita (R$) (2015)' => 39826.95,
                    'IDH (2010)' => 0.761,
                    'Alfabetização (2016)' => '97.3%',
                    'Mortalidade infantil (2016)' => '11.5‰',
                    'Expectativa de vida (2016)' => '76.2 anos'
                ),
                'Rio Grande do Norte' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg',
                    'Unidade Federativa' => 'Rio Grande do Norte',
                    'Abreviação' => 'RN',
                    'Sede de governo' => 'Natal',
                    'Área (km^2)' => 52796.8,
                    'População (2014)' => 3419550,
                    'Densidade (2005)' => 56.88,
                    'PIB (2015)' => 57250000,
                    '% total (2015)' => 1,
                    'PIB per capita (R$) (2015)' => 16631.86,
                    'IDH (2010)' => 0.684,
                    'Alfabetização (2016)' => '85.3%',
                    'Mortalidade infantil (2016)' => '14.7‰',
                    'Expectativa de vida (2016)' => '75.7 anos'
                ),
                'Rio Grande do Sul' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg',
                    'Unidade Federativa' => 'Rio Grande do Sul',
                    'Abreviação' => 'RS',
                    'Sede de governo' => 'Porto Alegre',
                    'Área (km^2)' => 281748.5,
                    'População (2014)' => 11228091,
                    'Densidade (2005)' => 38.49,
                    'PIB (2015)' => 381985000,
                    '% total (2015)' => 6.4,
                    'PIB per capita (R$) (2015)' => 33960.36,
                    'IDH (2010)' => 0.746,
                    'Alfabetização (2016)' => '96.8%',
                    'Mortalidade infantil (2016)' => '9.6‰',
                    'Expectativa de vida (2016)' => '77.8 anos'
                ),
                'Rondonia' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rondônia.svg',
                    'Unidade Federativa' => 'Rondônia',
                    'Abreviação' => 'RO',
                    'Sede de governo' => 'Porto Velho',
                    'Área (km^2)' => 237576.2,
                    'População (2014)' => 1755015,
                    'Densidade (2005)' => 6.46,
                    'PIB (2015)' => 36563000,
                    '% total (2015)' => 0.6,
                    'PIB per capita (R$) (2015)' => 20677.95,
                    'IDH (2010)' => 0.690,
                    'Alfabetização (2016)' => '93.3%',
                    'Mortalidade infantil (2016)' => '20.0‰',
                    'Expectativa de vida (2016)' => '71.3 anos'
                ),
                'Roraima' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg',
                    'Unidade Federativa' => 'Roraima',
                    'Abreviação' => 'RR',
                    'Sede de governo' => 'Boa Vista',
                    'Área (km^2)' => 224299.0,
                    'População (2014)' => 500826,
                    'Densidade (2005)' => 1.74,
                    'PIB (2015)' => 10354000,
                    '% total (2015)' => 0.2,
                    'PIB per capita (R$) (2015)' => 20476.71,
                    'IDH (2010)' => 0.707,
                    'Alfabetização (2016)' => '93.4%',
                    'Mortalidade infantil (2016)' => '17.2‰',
                    'Expectativa de vida (2016)' => '71.5 anos'
                ),
                'Santa Catarina' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg',
                    'Unidade Federativa' => 'Santa Catarina',
                    'Abreviação' => 'SC',
                    'Sede de governo' => 'Florianópolis',
                    'Área (km^2)' => 95346.2,
                    'População (2014)' => 6734568,
                    'Densidade (2005)' => 61.53,
                    'PIB (2015)' => 249073000,
                    '% total (2015)' => 4.2,
                    'PIB per capita (R$) (2015)' => 36525.28,
                    'IDH (2010)' => 0.774,
                    'Alfabetização (2016)' => '97.2%',
                    'Mortalidade infantil (2016)' => '9.2‰',
                    'Expectativa de vida (2016)' => '79.1 anos'
                ),
                'Sao Paulo' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_São_Paulo.svg',
                    'Unidade Federativa' => 'São Paulo',
                    'Abreviação' => 'SP',
                    'Sede de governo' => 'São Paulo',
                    'Área (km^2)' => 248209.4,
                    'População (2014)' => 44169350,
                    'Densidade (2005)' => 162.93,
                    'PIB (2015)' => 1939890000,
                    '% total (2015)' => 32.4,
                    'PIB per capita (R$) (2015)' => 43694.68,
                    'IDH (2010)' => 0.783,
                    'Alfabetização (2016)' => '97.2%',
                    'Mortalidade infantil (2016)' => '9.9‰',
                    'Expectativa de vida (2016)' => '78.1 anos'
                ),
                'Sergipe' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg',
                    'Unidade Federativa' => 'Sergipe',
                    'Abreviação' => 'SE',
                    'Sede de governo' => 'Aracaju',
                    'Área (km^2)' => 21910.3,
                    'População (2014)' => 2227294,
                    'Densidade (2005)' => 89.81,
                    'PIB (2015)' => 38554000,
                    '% total (2015)' => 0.6,
                    'PIB per capita (R$) (2015)' => 17189.28,
                    'IDH (2010)' => 0.665,
                    'Alfabetização (2016)' => '85.3%',
                    'Mortalidade infantil (2016)' => '16.2‰',
                    'Expectativa de vida (2016)' => '72.7 anos'
                ),
                'Tocantins' => array(
                    'Bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg',
                    'Unidade Federativa' => 'Tocantins',
                    'Abreviação' => 'TO',
                    'Sede de governo' => 'Palmas',
                    'Área (km^2)' => 277620.9,
                    'População (2014)' => 1502759,
                    'Densidade (2005)' => 4.70,
                    'PIB (2015)' => 28930000,
                    '% total (2015)' => 0.5,
                    'PIB per capita (R$) (2015)' => 19094.16,
                    'IDH (2010)' => 0.699,
                    'Alfabetização (2016)' => '89.6%',
                    'Mortalidade infantil (2016)' => '15.8‰',
                    'Expectativa de vida (2016)' => '73.4 anos'
                ),
            ];
        ?>

        <h1>Lista sintética</h1>

        <table>
            <thead>
                <?php
                    foreach ($countiesdata as $county => $countydata) {
                        echo '<tr>';
                        foreach ($countydata as $type => $info) {
                            echo "<th>$type</th>";
                        }
                        echo '</tr>';
                        break;
                    }
                ?>
            </thead>

            <tbody>
                <?php
                    foreach ($countiesdata as $county => $countydata) {
                        echo '<tr>';
                        foreach ($countydata as $type => $info) {
                            echo $type === 'Bandeira' ? "<td><img src=\"$info\" alt=\"\" width=\"50px\"></td>" : "<td>$info</td>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy;2023 - Matheus Vieira</p>
    </footer>
</body>
</html>