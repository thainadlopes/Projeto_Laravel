<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>


        <!-- Fonts -->        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />       

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>

</head>

<body>
      
<div class="body">       
 <center>
    <br>
    <h4><b>Cadastro de Produtos</b></h4>
    <br> 
    <form  method="post" 
    action="{{route('product.store')}}" 
    enctype="multipart/form-data">
        {{ csrf_field() }}
 </center> 


    <div class="form-group">
        <label for="description">Descrição:</label>
        <input type="text" name="description"
        class="form-control" 
        required>
    </div>
  </div>
</div>



    <div class="form-group">
        <label for="quantity">Quantidade:</label>
        <input type="number" name="quantity" 
        class="form-control" 
        required>
    </div>    
  </div> 
</div>                
                        

    <div class="form-group">
        <label for="price"> Preço: </label>
        <input type="text" name="price"                               
        class="form-control">
    </div>
  </div> 
</div>         

<label for "type">Tipo do Produto:</label>
<div class="form-group">
<select name="type">
    <option value="">Selecione...</option>
    <option value="Alimentos">Alimentos</option>
    <option value="Vestuário">Vestuário</option>
    <option value="Cuidados Pessoais">Cuidados Pessoais</option>
    <option value="Bebê">Bebê</option>                       
</select>   
</div>       
                  
               
       <button type="reset" class="btn btn-default">Limpar</button>
       <button type="submit" class="btn btn-warning" id="black">Cadastrar</button>
       </div>    
    </form>           
</div>
</body>
</html>
