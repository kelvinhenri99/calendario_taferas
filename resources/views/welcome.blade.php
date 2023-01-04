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
        
            <div class="divGridCalendar">
                @foreach ($months as $months)
                    <div class="divMonths">
                        <h1>{{$months->month}}</h1>
                    </div>
                @endforeach
            </div>

            <div class="divMonthsCalendar">
                <table>
                    <tr>
                        <th>DOM</th>
                        @foreach ($weekOn as $On)
                            @if ($On->day === 0)
                                <td></td>
                            @else
                                <td>{{$On->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>SEG</th>
                        @foreach ($weekTwo as $Two)
                            @if ($Two->day === 0)
                                <td></td>
                            @else
                                <td>{{$Two->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>TER</th>
                        @foreach ($weekTree as $Tree)
                            @if ($Tree->day === 0)
                                <td></td>
                            @else
                                <td>{{$Tree->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>QUA</th>
                        @foreach ($weekFor as $For)
                            @if ($For->day === 0)
                                <td></td>
                            @else
                                <td>{{$For->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>QUI</th>
                        @foreach ($weekFive as $Five)
                            @if ($Five->day === 0)
                                <td></td>
                            @else
                                <td>{{$Five->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>SEX</th>
                        @foreach ($weekSix as $Six)
                            @if ($Six->day === 0)
                                <td></td>
                            @else
                                <td>{{$Six->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <th>SAB</th>
                        @foreach ($weekSeven as $Seven)
                            @if ($Seven->day === 0)
                                <td></td>
                            @else
                                <td>{{$Seven->day}}</td>
                            @endif
                        @endforeach
                    </tr>
                </table>
            </div>
        @endauth

    </div>

    <div>
        @guest
        <div class="divCalendarGuest">
            <p>Faça o login para ter o acesso a essa parte do sistema!</p>
        </div>
        @endguest

        <div class="divDivision"></div>

        <h1 id="titleOne">Tarefas agendadas</h1>

        @auth
            <div class="divTasksAuth">
                <p>Ops!!! Não há nada por aqui...</p>
            </div>
        @endauth

        @guest
        <div class="divCalendarGuest">
            <p>Faça o login para ter o acesso a essa parte do sistema!</p>
        </div>
        @endguest

        <div class="divDivision"></div>

        <h1 id="titleOne">Tarefas concluídas</h1>

        @auth
            <div class="divTasksAuth">
                <p>Ops!!! Não há nada por aqui...</p>
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