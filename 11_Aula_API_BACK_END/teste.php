<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comidinhas - API</title>
    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

</head>
<body class="bg-light">

<div class="container py-5">
    <div class="text-center mb-5">

        <h1 class="display-5 fw-bold">
                Comidinhas
        </h1>
    </div>


    <div id="mensagem"></div>
    <div class="row g-4">


        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        Cadastrar Comidinha
                    </h4>
                </div>
                <div class="card-body">
                    <form id="formcadastro">
                        <div class="mb-3">
                            <label class="form-label">
                                Nome
                            </label>
                            <input
                                type="text"
                                id="nome"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Descrição
                            </label>
                            <textarea
                                id="descricao"
                                class="form-control"
                                rows="4"required>
                            </textarea>
                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
    </div>
</div>


<script>
    //Enviando parâmetros no POST
    document.getElementById("formcadastro")
            .addEventListener("submit",function(event)
            {   
                alert('TESTE');
                //event.preventDefault();

                //Recuperando os valores do input
                let nome = document.getElementById("nome").value;
                let descricao =document.getElementById("descricao").value;

                //Montando o cabeçalho para passar os valores
                fetch("apiRest.php",
                { 
                    method: "POST",
                    headers{"Content-Type:":"application/json"},
                    body: JSON.stringify({
                                            nome: nome,
                                            descricao: descricao
                                        })//corpo com os campos
                }).then(response => response.json())
                  .then(dados => {
                                    //Resposta da API
                                    alert(dados.mensagem);

                                    //Limpando o form
                                    document.getElementById("formcadastro").reset();
                                 });

            });//Evento do envio do form

</script>


</body>

</html>
