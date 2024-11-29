$(document).ready(function () {
    $('#barra-pesquisa').on('input', function () {
        let termo = $(this).val();

        if (termo.length >= 2) { // Só pesquisar se tiver pelo menos 2 caracteres
            $.ajax({
                url: 'buscar_produtoAPI.php',
                method: 'GET',
                data: { nome: termo },
                dataType: 'json',
                success: function (data) {
                    let resultados = $('#resultados');
                    resultados.empty();

                    if (data.length === 0) {
                        resultados.append('<p>Nenhum produto encontrado.</p>');
                    } else {
                        data.forEach(produto => {
                            resultados.append(`
                                <div class="produto">
                                    <img src="${produto.imagem}" alt="${produto.nome}">
                                    <h3>${produto.nome}</h3>
                                    <p>${produto.descricao}</p>
                                    <p><strong>R$ ${produto.preco.toFixed(2).replace('.', ',')}</strong></p>
                                    <a href="detalhes.php?id=${produto.id}" class="btn">Detalhes</a>
                                </div>
                            `);
                        });
                    }
                },
                error: function () {
                    alert('Erro ao buscar produtos. Tente novamente.');
                }
            });
        } else {
            $('#resultados').empty(); // Limpar resultados se o termo for muito curto
        }
    });
});