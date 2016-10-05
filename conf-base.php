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
    //Disabilitar os Selos na inscrição de projetos
    'app.enabled.seals'   => false
);
