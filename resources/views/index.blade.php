<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <script>
        const dirModal = document.getElementById('diretorioModal')
        const dirInput = document.getElementById('diretorioInput')
        dirModal.addEventListener('shown.bs.modal', () => {
            dirInput.focus()
        })

        const arquivoModal = document.getElementById('arquivoModal')
        const arquivoInput = document.getElementById('arquivoInput')
        arquivoModal.addEventListener('shown.bs.modal', () => {
            arquivoInput.focus()
        })
    </script>

    <div class="my-3 container d-flex justify-content-center">
        <button id="dirInput" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#diretorioModal">
            Criar Diretório
        </button>
        <div id="diretorioModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Criação de Diretório</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="diretorioForm" action="{{route('criaDiretorio')}}" method="POST">
                            @csrf
                            <label class="form-label" for="nomeDiretorio">Nome do Diretório</label>
                            <input class="form-control" name="nomeDiretorio" type="text">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" form="diretorioForm">Criar</button>
                    </div>
                </div>
            </div>
        </div>

        <button id="arquivoInput" type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#arquivoModal">
            Upload de Arquivo
        </button>
        <div id="arquivoModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Envio de Arquivo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="arquivoForm" action="{{route('enviaArquivo')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label class="form-label" for="nomeArquivo">Salvar Como</label>
                            <input class="form-control" name="nomeArquivo" type="text">
                            <label class="form-label" for="nomeArquivo">Selecionar Arquivo</label>
                            <input class="form-control" name="arquivo" type="file">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
