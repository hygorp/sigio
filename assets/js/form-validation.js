$(function(){
    $('.ui.form').form({
       fields: {
           usuario: {
               identifier: 'usuario',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Usuário'
               }]
           },
           senha: {
               identifier: 'senha',
               rules: [{
                    type: 'empty',
                    prompt: 'Preencha o campo Senha'
               },
               
               {
                    type: 'minLength[8]',
                    prompt: 'A senha precisa conter no mínimo {ruleValue} dígitos'
               }]
           }
       } 
    });
});