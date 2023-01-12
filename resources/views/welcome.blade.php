<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - Início</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/welcome.css">
    <script src="../scripts/time.js" rel="text/javascript"></script>
    <script src="../scripts/openDiv.js" rel="text/javascript"></script>
</head>
<body onload="time()">
    <div class="divWelcome">
        <h1 id="titleOne">Tasks - O seu calendário Online!</h1>
        <p>O seu calendário online totalmente grátis, organize suas tarefas com um layout fácil e intuitivo.</p>
        <p id="version">Versão do sistema (1.0)</p>
    </div>

    @guest
    <div class="divDivision"></div>

    <div class="divLoginOrRegister">
        <h1 id="titleTwo">Faça o Login ou Cadastre-se agora!</h1>
        <div class="divGridLoginOrRegister">
            <div>
                <h1>Entrar</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Insira o seu e-mail"/>
                    <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Insira a senha"/>

                    <x-jet-button>
                        {{ __('Entrar') }}
                    </x-jet-button>
                </form>
            </div>
            <div>
                <h1>Cadastre-se</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Insira seu Nome"/>
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required placeholder="Insira um E-mail"/>
                    <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Insira uma senha"/>
                    <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha"/>
                    <x-jet-button>
                        {{ __('Cadastrar') }}
                    </x-jet-button>
                </form>
            </div>
        </div>
    </div>
    @endguest

    @auth
    <div class="divDivision"></div>
        <div class="divWelcomeAuth">
            <ul>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" id="exit">Sair</a>
                    </form>
                </li>
                <li><a href="https://github.com/kelvinhenri99/calendario_taferas" target="_blank">Link repositório</a></li>
                <li><a href="mailto:kelvin5henri@gmail.com" title="kelvin5henri@gmail.com">E-mail para contato</a></li>
                <li><a href="https://www.linkedin.com/in/kelvin-henrique-ferreira-55b0b3200/" target="_blank">linkedin</a></li>
            </ul>
        </div>
    @endauth

    <div class="divDivision"></div>

    <div>
        <h1 id="titleOne">Acesse o calendário 2023</h1>

        @auth
        <p id="titleTree">
            <span id="time"></span>
        </p>

            <select class="selectMonth">
                <option value="">Selecione o mês</option>
                @foreach ($month as $month)
                    <option onclick="openDiv{{$month->id}}()">{{$month->month}}</option>
                @endforeach
            </select>
 
            <div class="divCalendar">
                <div id="1" class="gridCalendar">
                    <div class="titleGrid">Janeiro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($jan2023 as $jan)
                        @if ($jan->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$jan->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="2" class="gridCalendar">
                    <div class="titleGrid">Fevereiro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="3" class="gridCalendar">
                    <div class="titleGrid">Março - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="4" class="gridCalendar">
                    <div class="titleGrid">Abril - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="5" class="gridCalendar">
                    <div class="titleGrid">Maio - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="6" class="gridCalendar">
                    <div class="titleGrid">Junho - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="7" class="gridCalendar">
                    <div class="titleGrid">Julho - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="8" class="gridCalendar">
                    <div class="titleGrid">Agosto - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="9" class="gridCalendar">
                    <div class="titleGrid">Setembro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="10" class="gridCalendar">
                    <div class="titleGrid">Outubro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="11" class="gridCalendar">
                    <div class="titleGrid">Novembro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="12" class="gridCalendar">
                    <div class="titleGrid">Dezembro - 2023</div>
                    @foreach ($dayweek as $week)
                        <div class="dayweek">{{$week->dayweek}}</div>
                    @endforeach
                    @foreach ($fer2023 as $fer)
                        @if ($fer->day === 0)
                            <div id="null"></div>
                        @else
                            <div>{{$fer->day}}</div>
                        @endif
                    @endforeach
                </div>
            </div>

        @endauth
    </div>

    <div>
        @auth
            <div class="divDivision"></div>
            <h1 id="titleOne">Agenda virtual</h1>
            <div class="divTasksAuth">
                @if($tasksLimit->isEmpty())
                    <p>Nenhuma tarefa cadastrada. <a href="/tasks">Crie tarefa</a></p>
                @else
                    <p>Veja as suas próximas tarefas</p>
                    @foreach ($tasksLimit as $task)
                        <div class="divTask" style="background-color:{{$task->bg_color}}; border-color: {{$task->border_color}};">
                            <img src="{{$task->icon}}" alt="icon">
                            <h1 style="border-color: {{$task->border_color}};">{{$task->task}}</h1>
                            <p style="background-color:{{$task->bg_color}}; border-color: {{$task->border_color}};">{{$task->date}}</p>
                            <p style="background-color:{{$task->bg_color}}; border-color: {{$task->border_color}};">{{$task->status}}</p>
                            <p id="date">
                                Criado em: {{$task->created_at}} <br>
                                Ultima atualização: {{$task->updated_at}}
                            </p>
                            <p id="edit" style="background-color: {{$task->border_color}};"><a href="">Editar tarefa</a></p>
                        </div>
                    @endforeach
                    <p>Veja <a href="/tasks/all">aqui</a> todas suas tarefas ou <a href="/tasks">crie agora</a>.</p>
                @endif
            </div>
        @endauth

        @guest
        <div class="divCalendarGuest">
            <p>Faça o login para ter o acesso a essa parte do sistema!</p>
        </div>
        @endguest

    </div>

</body>
</html>