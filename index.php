<?php include('inc/include.php');?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-4 mb-3">
                <h3>Add novos produtos</h3>
                <p>
                    Preencha os campos abaixo para criar um novo produto com skus
                </p>
            </div>
            <div class="col-md-8">
                <label>Digite o tipo de grade do seu produto separado por vírgula. (ex: P,M,G,GG | 6,8,10,12)</label>
                <input type="text" class="form-control" id="_grade" placeholder="" value="teste">
            </div> 

        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>_NomeProduto</label>
                    <input type="text" class="form-control" id="_NomeSku" placeholder="Camiseta de bolinha">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_Altura</label>
                    <input type="number" class="form-control" id="_Altura" value="4" placeholder="4">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_Largura</label>
                    <input type="number" class="form-control" id="_Largura" value="30" placeholder="30">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_Comprimento</label>
                    <input type="number" class="form-control" id="_Comprimento" value="40" placeholder="40">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_Peso (gramas)</label>
                    <input type="number" class="form-control" id="_Peso" value="" placeholder="200">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_Cor do produto</label>
                    <input type="text" class="form-control" id="_CodigoReferenciaSKU" value="" placeholder="roxo">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_NomeSku</label>
                    <input type="text" class="form-control" id="_NomeProduto" readonly placeholder="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_CodigoReferenciaProduto</label>
                    <input type="text" class="form-control" id="_CodigoReferenciaProduto" placeholder="HE300">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_TextoLink</label>
                    <input type="text" class="form-control" id="_TextoLink" readonly placeholder="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_DescricaoProduto</label>
                    <input type="text" class="form-control" id="_DescricaoProduto" value="" placeholder="Escreva algo longo">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_MetaTagDescription (curta)</label>
                    <input type="text" class="form-control" id="_MetaTagDescription" value="" placeholder="Escreva algo curto">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_IdDepartamento</label>
                    <input type="number" class="form-control" id="_IdDepartamento" value="" placeholder="2">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_NomeDepartamento (principal)</label>
                    <input type="text" class="form-control" id="_NomeDepartamento" value="" placeholder="Feminino">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_IdCategoria</label>
                    <input type="number" class="form-control" id="_IdCategoria" value="" placeholder="4">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>_NomeCategoria (subcategoria)</label>
                    <input type="text" class="form-control" id="_NomeCategoria" value="" placeholder="Camisetas">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <input type="button" id="btnExport" class="btn btn-primary" value="Adicionar produto" data-toggle="modal" data-target="#staticBackdrop" /> 
                <span id="itens"></span>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <div id="divTabela" class="">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>_SkuId (Não alterável)</th>
                    <th>_NomeSku</th>
                    <th>_AtivarSkuSePossível</th>
                    <th>_SkuAtivo (Não alterável)</th>
                    <th>_SkuEan</th>
                    <th>_Altura</th>
                    <th>_AlturaReal</th>
                    <th>_Largura</th>
                    <th>_LarguraReal</th>
                    <th>_Comprimento</th>
                    <th>_ComprimentoReal</th>
                    <th>_Peso</th>
                    <th>_PesoReal</th>
                    <th>_UnidadeMedida</th>
                    <th>_MultiplicadorUnidade</th>
                    <th>_CodigoReferenciaSKU</th>
                    <th>_ValorFidelidade</th>
                    <th>_DataPrevisaoChegada</th>
                    <th>_CodigoFabricante</th>
                    <th>_IdProduto (Não alterável)</th>
                    <th>_NomeProduto (Obrigatório)</th>
                    <th>_NomeComplemento</th>
                    <th>_ProdutoAtivo (Não alterável)</th>
                    <th>_CodigoReferenciaProduto</th>
                    <th>_ExibeNoSite</th>
                    <th>_TextoLink (Não alterável)</th>
                    <th>_DescricaoProduto</th>
                    <th>_DataLancamentoProduto</th>
                    <th>_PalavrasChave</th>
                    <th>_TituloSite</th>
                    <th>_MetaTagDescription</th>
                    <th>_IdFornecedor</th>
                    <th>_ExibeSemEstoque</th>
                    <th>_Kit (Não alterável)</th>
                    <th>_IdDepartamento (Não alterável)</th>
                    <th>_NomeDepartamento</th>
                    <th>_IdCategoria</th>
                    <th>_NomeCategoria</th>
                    <th>_IdMarca</th>
                    <th>_Marca</th>
                    <th>_PesoCubico</th>
                    <th>_CondicaoComercial</th>
                    <th>_CodigosLojas</th>
                    <th>_Acessorios</th>
                    <th>_Similares</th>
                    <th>_Sugestoes</th>
                    <th>_MostrarJunto</th>
                    <th>_Anexos</th>
                </tr>
            </thead>
            <tbody id="tb">
            </tbody>
        </table>
    </div>

    <div id="divTabela2">
        <table id="tb2" class="table table-bordered"></table>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Produto adicionado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Instruções</strong></p>
        <p><strong>Ao exportar o arquivo será necessário salvá-lo novamente no formato excel 97-2003.xls</strong></p>
        <p>Abra o arquivo. Clique em sim para a mensagem que irá aparecer. E siga o passo acima.</p>
        <p>Deseja exportar os produtos?</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Adicionar mais produtos</button>
        <button type="button" id="btnExcel" class="btn btn-primary " value=" Gerar Excel">Exportar para excel</button>
        <button type="button" id="btnExcel2" class="btn btn-primary " value=" Gerar Excel">Exportar para excel sku</button>
      </div>
    </div>
  </div>
</div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            var _NomeSku = document.getElementById("_NomeSku"),
                _Altura = document.getElementById("_Altura"),
                _Largura = document.getElementById("_Largura"),
                _Comprimento = document.getElementById("_Comprimento"),
                _Peso = document.getElementById("_Peso"),
                _CodigoReferenciaSKU = document.getElementById("_CodigoReferenciaSKU"),
                _NomeProduto = document.getElementById("_NomeProduto"),
                _CodigoReferenciaProduto = document.getElementById("_CodigoReferenciaProduto"),
                _TextoLink = document.getElementById("_TextoLink"),
                _DescricaoProduto = document.getElementById("_DescricaoProduto"),
                _MetaTagDescription = document.getElementById("_MetaTagDescription"),
                _IdDepartamento = document.getElementById("_IdDepartamento"),
                _NomeDepartamento = document.getElementById("_NomeDepartamento"),
                _IdCategoria = document.getElementById("_IdCategoria"),
                _NomeCategoria = document.getElementById("_NomeCategoria"),
                _cor = "",
                _c = 0,
                _itens = 1,
                resultado   = "",
                _grade = document.getElementById("_grade"),
                resultado2  = "";

            function retornarUrl(_campo) {
                var n = _campo.value.trim().toLowerCase();
                n = n.replace("/", "");
                n = n.replace("+", "");
                n = n.replace("@", "");
                n = n.replace(new RegExp('[ÁÀÂÃ]', 'gi'), 'a');
                n = n.replace(new RegExp('[ÉÈÊ]', 'gi'), 'e');
                n = n.replace(new RegExp('[ÍÌÎ]', 'gi'), 'i');
                n = n.replace(new RegExp('[ÓÒÔÕ]', 'gi'), 'o');
                n = n.replace(new RegExp('[ÚÙÛ]', 'gi'), 'u');
                n = n.replace(new RegExp('[Ç]', 'gi'), 'c');
                n = n.replace(/\s/g, "-");
                return n;
            }

            function retonarReferenciaSku() {
                return _CodigoReferenciaProduto.value.toUpperCase() + "-" + _CodigoReferenciaSKU.value;
            }

            function validaCampo() {
                let campos = $('input');
                let c = 0;
                campos.each(function (i, val) {
                    if (val.value == "") {
                        $(this).addClass('alert alert-danger');
                        c++;
                    } else {
                        $(this).removeClass('alert alert-danger');
                    }
                });
                if (c > 0) {
                    alert("preencha todos os campos");
                    return false;
                } else {
                    return true;
                }
            }

            $(_NomeSku).on('keyup', function () {
                _NomeProduto.value = _NomeSku.value;
                var r = retornarUrl(_NomeSku);
                _TextoLink.value = r;
            });

            $("#btnExport").click(function () {
                if (validaCampo() == false) return false;

                var t = ["P", "M", "G", "GG"];

                //var t = _grade.value.split(",");

                if (_c == 1) {
                    _cor = "#eeeeee";
                    _c = 0;
                } else {
                    _cor = "#ffffff";
                    _c++;
                }

                for (let i = 0; i < t.length; i++) {
                    resultado += `
                        <tr style="background-color: ${_cor}">
                            <td></td>
                            <td>${retonarReferenciaSku() + "-" + t[i] + " " + _NomeSku.value}</td>
                            <td>SIM</td>
                            <td>SIM</td>
                            <td></td>
                            <td>${_Altura.value}</td>
                            <td></td>
                            <td>${_Largura.value}</td>
                            <td></td>
                            <td>${_Comprimento.value}</td>
                            <td></td>
                            <td>${_Peso.value}</td>
                            <td></td>
                            <td>un</td>
                            <td>1,000000</td>
                            <td>${ retonarReferenciaSku() + '-' + t[i] }</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>${_NomeProduto.value}</td>
                            <td></td>
                            <td>SIM</td>
                            <td>${_CodigoReferenciaProduto.value.toUpperCase()}</td>
                            <td>SIM</td>
                            <td>${_TextoLink.value + "-"+_CodigoReferenciaProduto.value.toLowerCase()}</td>
                            <td>${_DescricaoProduto.value}</td>
                            <td>07/07/2020</td>
                            <td>${_NomeProduto.value}</td>
                            <td>${_NomeProduto.value}</td>
                            <td>${_MetaTagDescription.value}</td>
                            <td></td>
                            <td>NÃO</td>
                            <td>NÃO</td>
                            <td>${_IdDepartamento.value}</td>
                            <td>${_NomeDepartamento.value}</td>
                            <td>${_IdCategoria.value}</td>
                            <td>${_NomeCategoria.value}</td>
                            <td>2000001</td>
                            <td>HEAD</td>
                            <td>1,000000</td>
                            <td>Padrão</td>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                   `;
                }

                for (let i = 0; i < t.length; i++) {
                    resultado2 += `
                        <tr><td>${_CodigoReferenciaSKU.value}</td></tr>
                        <tr><td>${t[i]}</td></tr>
                    `;
                }
                $("#tb").html(resultado);
                $("#tb2").html(resultado2);

                $("#itens").html("Itens adicionados " + _itens++);

            });

            $("#btnExcel").click(function (e) {
                e.preventDefault();
                var table_div = document.getElementById('divTabela');
                // esse "\ufeff" é importante para manter os acentos         
                var blobData = new Blob(['\ufeff' + table_div.outerHTML], {
                    type: 'application/vnd.ms-excel'
                });
                var url = window.URL.createObjectURL(blobData);
                var a = document.createElement('a');
                a.href = url;
                a.download = 'produtos'
                a.click();
            });

            $("#btnExcel2").click(function(e){
                e.preventDefault();
                var table_div2 = document.getElementById('divTabela2');
                // esse "\ufeff" é importante para manter os acentos         
                var blobData2 = new Blob(['\ufeff' + table_div2.outerHTML], {
                    type: 'application/vnd.ms-excel'
                });
                var url2 = window.URL.createObjectURL(blobData2);
                var a2 = document.createElement('a');
                a2.href = url2;
                a2.download = 'produtossku'
                a2.click();
            })

            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            });

        });
    </script>
</body>

</html>