function atualizarNome() {
  // get o elemento de input pelo ID
  let inputNome = document.getElementById('novoNome');
  
  // get o valor digitado no campo
  let novoNome = inputNome.value;
  
  // verifica se foi digitado algum nome
  if (novoNome.trim() === '') {
    alert('Por favor, digite um nome!');
    return;
  }
  
  // atualiza o texto com o novo nome
  document.getElementById('resultado').textContent = "Nome atual: " + novoNome;
  
  // cls o campo de input depois a atualização
  inputNome.value = '';
}
