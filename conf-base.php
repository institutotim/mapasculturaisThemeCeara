<?php
return array(
    'registration.ownerDefinition' => array(
        'required' => true,
        'label' => 'Agente responsável pelo Projeto',
        'agentRelationGroupName' => 'owner',
        'description' => 'Indicar pessoa física que ficará responsável pela execução do Projeto apresentado para este edital',
        'type' => 1,
        'requiredProperties' => array('documento', 'raca', 'dataDeNascimento', 'genero', 'emailPrivado', 'telefone1')
    ),
    'registration.agentRelations' => array(
        array(
            'required' => false,
            'label' => 'Instituição Proponente',
            'agentRelationGroupName' => 'instituicao',
            'description' => 'Indicar pessoa jurídica proponente do Projeto apresentado para este edital',
            'type' => 2,
            'requiredProperties' => array('documento', 'dataDeNascimento', 'emailPrivado', 'telefone1')
        ),
        array(
            'required' => false,
            'label' => 'Coletivo',
            'agentRelationGroupName' => 'coletivo',
            'description' => 'Agente coletivo sem CNPJ, com os campos Data de Nascimento/Fundação e Email Privado obrigatoriamente preenchidos',
            'type' => 2,
            'requiredProperties' => array('dataDeNascimento', 'emailPrivado')
        )
    ),
    // Campos a serem exportados relatorio de inscritos Edital
    'registration.propertiesToExport' => array(
        'id',
        'name',
        'nomeCompleto',
        'documento',
        'dataDeNascimento',
        'genero',
        'raca',
        'location',
        'En_Nome_Logradouro',
        'En_Num',
        'En_CEP',
        'En_Complemento',
        'En_Bairro',
        'En_Municipio',
        'En_Estado',
        'geoZona',
        'geoSubprefeitura',
        'geoDistrito',
        'telefone1',
        'telefone2',
        'telefonePublico',
        'emailPrivado',
        'emailPublico',
        'site',
        'googleplus',
        'facebook',
        'twitter'
    ),
    //Desabilitar os Selos na inscrição de projetos
    'app.enabled.seals'   => false
);
