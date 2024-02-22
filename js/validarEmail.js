document.querySelector('input[type=email').oninvalid = function(){
    this.setCustomValidity("");//remove mensagem de erros antigas
    if(!this.validity.valid){//reexecuta a validação
      this.setCustomValidity("Email inválido");// se inválido, coloca mensagem de erro
    }
  }