@extends('layouts.main')
@section('title', 'All')

@section('content')
    <div>
        <h1 id="titleOne">Crie uma tarefa</h1>
        <div class="gridTasks">
            <form action="">
                <div>Selecione um icone:
                    <select name="">
                        <option value="../imgs/icons/icone1.png">Estudos</option>
                        <option value="../imgs/icons/icone2.png">Lazer</option>
                        <option value="../imgs/icons/icone3.png">Trabalho</option>
                        <option value="../imgs/icons/icone4.png">Esportes</option>
                        <option value="../imgs/icons/icone5.png">Viagens</option>
                        <option value="../imgs/icons/icone6.png">Consulta</option>
                        <option value="../imgs/icons/icone7.png">Outro</option>
                    </select>
                </div>
                <div>Tarefa:
                    <input type="text">
                </div>
                <div>Data:
                    <input type="date" name="" id="calendar" required onkeydown="return false">
                </div>
                <script>
                    calendar.min = new Date().toISOString().split("T")[0];
                </script>
                <div>Cor do fundo
                    <input type="color" name="" id="">
                </div>
                <div>Cor das letras
                    <input type="color" name="" id="">
                </div>
                <div>Cor das bordas
                    <input type="color" name="" id="">
                </div>
                <input type="submit" value="Cadastrar">
            </form>
        </div>
    </div>
    <div>
        <h1 id="titleOne">Suas tarefas</h1>
    </div>

@endsection