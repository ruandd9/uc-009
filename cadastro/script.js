document.getElementById('cadastroForm').addEventListener('submit', function (event) {
  event.preventDefault();

  //  valores dos campos do formulário
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  const telefone = document.getElementById('telefone').value;

  //  novo item na lista de usuários
  const lista = document.getElementById('listaUsuarios');
  const item = document.createElement('li');
  
  // add  dados do user ao item da lista
  item.textContent = `Nome: ${nome} | Email: ${email} | Telefone: ${telefone}`;
  lista.appendChild(item);

  //  limpa formulário dps o cadastro
  document.getElementById('cadastroForm').reset();
});
