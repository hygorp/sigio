$(function(){
    $('.ui.form.login-form').form({
       keyboardShortcuts: false,
       fields: {
           usuario: {
               identifier: 'usuario',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Usuário',
               }]
           },
           senha: {
               identifier: 'senha',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Senha',
               }]
           }
        }
    });
    
    $('.ui.form.cadastro-pacientes-form').form({
        keyboardShortcuts: false,
        fields: {
           nome_completo_pacientes: {
               identifier: 'nome_completo_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome Completo',
               }]
           },
           data_nascimento_pacientes: {
               identifier: 'data_nascimento_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Nascimento',
               }]
           },
           cpf_pacientes: {
               identifier: 'cpf_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo CPF',
               }]
           },
           endereco_pacientes: {
               identifier: 'endereco_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Endereço',
               }]
           },
           complemento_pacientes: {
               identifier: 'complemento_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Complemento',
               }]
           },
           bairro_pacientes: {
               identifier: 'bairro_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Bairro',
               }]
           },
           cidade_pacientes: {
               identifier: 'cidade_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o Cidade',
               }]
           },
           uf_pacientes: {
               identifier: 'uf_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo UF',
               }]
           },
           pais_pacientes: {
               identifier: 'pais_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo País',
               }]
           },
           celular1_pacientes: {
               identifier: 'celular1_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o primeiro campo Celular',
               }]
           },
           data_cadastro_pacientes: {
               identifier: 'data_cadastro_pacientes',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Cadastro',
               }]
           }
        }
    });
    
    $('.ui.form.cadastro-dentistas-form').form({
        keyboardShortcuts: false,
        fields: {
           nome_completo_dentistas: {
               identifier: 'nome_completo_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome Completo',
               }]
           },
           data_nascimento_dentistas: {
               identifier: 'data_nascimento_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Nascimento',
               }]
           },
           cpf_dentistas: {
               identifier: 'cpf_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo CPF',
               }]
           },
           endereco_dentistas: {
               identifier: 'endereco_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Endereço',
               }]
           },
           complemento_dentistas: {
               identifier: 'complemento_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Complemento',
               }]
           },
           bairro_dentistas: {
               identifier: 'bairro_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Bairro',
               }]
           },
           cidade_dentistas: {
               identifier: 'cidade_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o Cidade',
               }]
           },
           uf_dentistas: {
               identifier: 'uf_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo UF',
               }]
           },
           pais_dentistas: {
               identifier: 'pais_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo País',
               }]
           },
           celular1_dentistas: {
               identifier: 'celular1_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o primeiro campo Celular',
               }]
           },
           data_cadastro_dentistas: {
               identifier: 'data_cadastro_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Cadastro',
               }]
           },
           conselho_tipo_dentistas: {
               identifier: 'conselho_tipo_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Tipo de Conselho',
               }]
           },
           conselho_numero_dentistas: {
               identifier: 'conselho_numero_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Número do Conselho',
               }]
           },
           conselho_estado_dentistas: {
               identifier: 'conselho_estado_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo UF de Expedição',
               }]
           },
           comissao_dentistas: {
               identifier: 'comissao_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Comissao',
               }]
           },
           data_admissao_dentistas: {
               identifier: 'data_admissao_dentistas',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Admissao',
               }]
           }
        }
    });
    
    $('.ui.form.cadastro-funcionarios-form').form({
        keyboardShortcuts: false,
        fields: {
           nome_completo_funcionarios: {
               identifier: 'nome_completo_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome Completo',
               }]
           },
           data_nascimento_funcionarios: {
               identifier: 'data_nascimento_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Nascimento',
               }]
           },
           cpf_funcionarios: {
               identifier: 'cpf_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo CPF',
               }]
           },
           endereco_funcionarios: {
               identifier: 'endereco_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Endereço',
               }]
           },
           complemento_funcionarios: {
               identifier: 'complemento_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Complemento',
               }]
           },
           bairro_funcionarios: {
               identifier: 'bairro_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Bairro',
               }]
           },
           cidade_funcionarios: {
               identifier: 'cidade_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o Cidade',
               }]
           },
           uf_funcionarios: {
               identifier: 'uf_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo UF',
               }]
           },
           pais_funcionarios: {
               identifier: 'pais_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo País',
               }]
           },
           celular1_funcionarios: {
               identifier: 'celular1_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o primeiro campo Celular',
               }]
           },
           cargo_funcionarios: {
               identifier: 'cargo_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Função',
               }]
           },
           salario_funcionarios: {
               identifier: 'salario_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Salário',
               }]
           },
           data_admissao_funcionarios: {
               identifier: 'data_admissao_funcionarios',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Admissao',
               }]
           }
        }
    });
    $('.ui.form.cadastro-estoque-form').form({
        keyboardShortcuts: false,
        fields: {
           produto_estoque: {
               identifier: 'produto_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome do Produto',
               }]
           },
           descricao_produto_estoque: {
               identifier: 'descricao_produto_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Descrição do Produto',
               }]
           },
           valor_produto_estoque: {
               identifier: 'valor_produto_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Valor do Produto',
               }]
           },
           codigo_produto_estoque: {
               identifier: 'codigo_produto_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Códio do Produto',
               }]
           },
           quantidade_estoque: {
               identifier: 'quantidade_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Quantidade',
               }]
           },
           data_entrada_estoque: {
               identifier: 'data_entrada_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Entrada',
               }]
           },
           unidade_medida_estoque: {
               identifier: 'unidade_medida_estoque',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Unidade de Medida',
               }]
           }
           
        }
    });
    $('.ui.form.cadastro-patrimonio-form').form({
        keyboardShortcuts: false,
        fields: {
           nome_patrimonio: {
               identifier: 'nome_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome do Patrimônio',
               }]
           },
           descricao_patrimonio: {
               identifier: 'descricao_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Descrição',
               }]
           },
           valor_patrimonio: {
               identifier: 'valor_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Valor do Patrimônio',
               }]
           },
           setor_patrimonio: {
               identifier: 'setor_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Setor',
               }]
           },
           quantidade_patrimonio: {
               identifier: 'quantidade_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Quantidade',
               }]
           },
           cor_produto_patrimonio: {
               identifier: 'cor_produto_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Cor',
               }]
           },
           data_compra_patrimonio: {
               identifier: 'data_compra_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data da Compra',
               }]
           },
           fabricante_patrimonio: {
               identifier: 'fabricante_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Fabricante',
               }]
           },
           nota_fiscal_patrimonio: {
               identifier: 'nota_fiscal_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nota Fiscal',
               }]
           },
           serie_nota_fiscal_patrimonio: {
               identifier: 'serie_nota_fiscal_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Série',
               }]
           },
           cobertura_garantia_patrimonio: {
               identifier: 'cobertura_garantia_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Cobertura da Garantia',
               }]
           },
           status_patrimonio: {
               identifier: 'status_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Status',
               }]
           },
           data_cadastro_patrimonio: {
               identifier: 'data_cadastro_patrimonio',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Data de Cadastro',
               }]
           },
           
        }
    });
    
    $('.ui.form.cadastro-fornecedores-form').form({
        keyboardShortcuts: false,
        fields: {
           razao_social_fornecedores: {
               identifier: 'razao_social_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Razão Social',
               }]
           },
           nome_fantasia_fornecedores: {
               identifier: 'nome_fantasia_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome Fantasia',
               }]
           },
           inscricao_estadual_fornecedores: {
               identifier: 'inscricao_estadual_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Inscrição Estadual',
               }]
           },
           cnpj_fornecedores: {
               identifier: 'cnpj_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo CNPJ',
               }]
           },
           atuacao_fornecedores: {
               identifier: 'atuacao_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Áre de Atuação',
               }]
           },
           endereco_fornecedores: {
               identifier: 'endereco_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Endereço',
               }]
           },
           complemento_fornecedores: {
               identifier: 'complemento_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Complemento',
               }]
           },
           bairro_fornecedores: {
               identifier: 'bairro_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Bairro',
               }]
           },
           cidade_fornecedores: {
               identifier: 'cidade_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o Cidade',
               }]
           },
           uf_fornecedores: {
               identifier: 'uf_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo UF',
               }]
           },
           pais_fornecedores: {
               identifier: 'pais_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo País',
               }]
           },
           telefone_fornecedores: {
               identifier: 'telefone_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o primeiro campo Telefone',
               }]
           },
           nome_representante_fornecedores: {
               identifier: 'nome_representante_fornecedores',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Nome do Representante',
               }]
           }
        }
    });
});