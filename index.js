function visualizar(entity) {
  switch (entity) {
    case "clientes":
      document.getElementById("tabela_simples_header").style.backgroundColor =
        "#208dbe";
      break;

    case "usuarios":
      document.getElementById("tabela_simples_header").style.backgroundColor =
        "#10a062";
      break;

    case "fornecedores":
      document.getElementById("tabela_simples_header").style.backgroundColor =
        "#6e1881";
      break;
  }
}
