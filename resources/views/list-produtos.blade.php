<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
    </head>
    <style>

    .button{
        position: absolute;
        left:5%;
        bottom:20px;
        width:90%;
    }
    </style>
    <body>
        
    <br>
<div class="button">
        <a href="{{route('product.create')}}" 
        class="btn btn-default btn-sm pull-right">
        <span class="glyphicon glyphicon-plus"></span> Cadastrar</a>
</div>

<div class="row">
    <div class="col-md-12">   
        <br />
        <center>
        <h4 id="center"><b>Produtos Cadastrados ({{$total}})</b></h4>
        <br>
        <div class="table-responsive">
        <table class="table table-hover">
        </center>
            <thead>
                <tr>
                <th id="center">Id</th>
                <th id="center">Descrição</th>
                <th id="center">Quantidade</th>
                <th id="center">Preço</th>                
                <th id="center">Tipo do Produto</th>                
                </tr>
            </thead>

    <tbody>
        @foreach($produtos as $produto)
        <tr>
        <td title="Id">{{$produto->id}}</td>
        <td title="Descrição">{{$produto->description}}</td>
        <td title="Quantidade" id="center">{{$produto->quantity}}</td>
        <td title="Preço">{{$produto->price}}</td>
        <td title="Tipo do Produto">{{$produto->type}}</td>


        <td id="center">
            <a href="{{URL::asset('produtos/'. '1' . $produto->imagem)}}" 
            data-lightbox="{{URL::asset('produtos/'. '1' . $produto->imagem)}}">
            <img src="{{URL::asset('produtos/'. $produto->imagem)}}" />
            </a></td>

        <td id="center">
            <a href="{{route('product.edit', $produto->id)}}" 
            data-toggle="tooltip" data-placement="top"title="Alterar"><i class="fa fa-pencil"></i></a>
            &nbsp;<form style="display: inline-block;" method="POST" action="{{route('product.destroy', $produto->id)}}"                                                        
            data-toggle="tooltip" data-placement="top" title="Excluir" 
            onsubmit="return confirm('Confirma exclusão?')">
            {{method_field('DELETE')}}{{ csrf_field() }}                                                
            <button type="submit" style="background-color: #fff"><a><i class="fa fa-trash-o"></i></a>                                                    
            </button></form></td>               
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</body>
</html>
