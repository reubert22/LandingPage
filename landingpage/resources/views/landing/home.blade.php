@extends('layout.app')
@section('script')
	<script type="text/javascript">
		  function limpa_formulário_cep() {
	            //Limpa valores do formulário de cep.
	            document.getElementById('rua').value=("");
	            document.getElementById('bairro').value=("");
	            document.getElementById('cidade').value=("");
	            document.getElementById('uf').value=("");
	            document.getElementById('ibge').value=("");
	    }

	    function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            document.getElementById('cidade').value=(conteudo.localidade);
	            document.getElementById('uf').value=(conteudo.uf);
	            document.getElementById('ibge').value=(conteudo.ibge);
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }
	        
	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="...";
	                document.getElementById('bairro').value="...";
	                document.getElementById('cidade').value="...";
	                document.getElementById('uf').value="...";
	                document.getElementById('ibge').value="...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                limpa_formulário_cep();
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            limpa_formulário_cep();
	        }
	    };
    </script>
@endsection

@section('body')
	@if(Session::has('flash_message'))
	    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
	@endif
	<div class="col-lg-6 col-lg-offset-6"> 
	
	<form class="form-horizontal" action="/landing" method="post">
	{{csrf_field()}}
	  <fieldset>
	    <center><legend>Cadastre-se e obtenha já o seu</legend></center>
	    <div class="form-group">
	    @if(count ($errors)>0)
			<div class="alert alert-warning">
		    	@foreach($errors->all() as $error)
			   		<p style="font-size: 10px">{{$error}}</p>
			   	@endforeach
		   	</div>
		@endif
	      <label for="inputNome" class="col-lg-2 control-label">Nome*</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputNome" name="nome" placeholder="Nome" type="text">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputTelefone" class="col-lg-2 control-label">Telefone*</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputTelefone" name="telefone" placeholder="33333-3333 (Somente números)" type="text">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email*</label>
	      <div class="col-lg-10">
	        <input class="form-control" id="inputEmail" name="email" placeholder="exemplo@exemplo.com" type="text">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputCEP" class="col-lg-2 control-label">CEP*</label>
	      <div class="col-lg-10">
	        <input name="cep" class="form-control" id="cep" size="10" maxlength="9" placeholder="CEP (Digite somente números)" type="text" onblur="pesquisacep(this.value);">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputRua" class="col-lg-2 control-label">Rua*</label>
	      <div class="col-lg-10">
	        <input name="rua" class="form-control" id="rua" placeholder="Rua" type="text" size="60">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputBairro" class="col-lg-2 control-label">Bairro*</label>
	      <div class="col-lg-10">
	        <input name="bairro" class="form-control" id="bairro" placeholder="Bairro" type="text" size="40">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputCidade" class="col-lg-2 control-label">Cidade*</label>
	      <div class="col-lg-10">
	        <input name="cidade" class="form-control" id="cidade" placeholder="Cidade" type="text" size="40">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputEstado" class="col-lg-2 control-label">Estado*</label>
	      <div class="col-lg-10">
	        <input name="uf" class="form-control" id="uf" placeholder="Estado" type="text" size="2">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputIBGE" class="col-lg-2 control-label">Ibge</label>
	      <div class="col-lg-10">
	        <input name="ibge" class="form-control" id="ibge" placeholder="Após inserir o cep, esse campo se auto completará" type="text" size="8">
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="submit" class="btn btn-info btn-block" >Cadastrar</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
	
	</div>
@endsection