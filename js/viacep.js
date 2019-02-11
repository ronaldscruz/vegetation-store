$(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#txtEndereco").val("");
                $("#txtBairro").val("");
                $("#txtCidade").val("");
                $("#txtUf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#txtCep").blur(function() {
            	$('#txtCep').removeClass("is-invalid")

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#txtEndereco").val("...");
                        $("#txtBairro").val("...");
                        $("#txtCidade").val("...");
                        $("#txtUf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#txtEndereco").val(dados.logradouro);
		                        $("#txtBairro").val(dados.bairro);
		                        $("#txtCidade").val(dados.localidade);
		                        $("#txtUf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                $('#txtCep').addClass("is-invalid")
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        $('#txtCep').addClass("is-invalid")
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });