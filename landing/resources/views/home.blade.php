@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                        <div data-spy="scroll" data-target="#scroller" data-offset="0" class="scrollspy-example">
                                <div class="text-white" style="background-color: #3A499C">
                                    <img class="bg-img" width="100%" src="https://www.reksoft.ru/wp-content/uploads/2022/04/ce-1.jpg" alt="Почта-лого-задник">

                                    <h4 id="list-item-1">Почта России - это...</h4>
                                    <p> Почта России – федеральный почтовый оператор, входит в перечень стратегических предприятий РФ. Предприятие включает в себя 38 тысяч отделений по всей стране и объединяет один из самых больших трудовых коллективов в стране – около 311 тысяч почтовых работников.

                                        Ежегодно Почта России принимает около 2,6 млрд писем и счетов и обрабатывает почти 400 млн посылок. Компания обслуживает около 20 млн подписчиков в России, которым доставляется более 500 млн экземпляров печатных изданий в год. Ежегодный объем транзакций, которые проходят через Почту России, составляет около 2,6 триллиона рублей (пенсии, платежи и переводы).</p>
                                </div>
                            <br>
                                <div class="blockquote text-right">
                                    <img class="bg-img" width="100%" src="https://cdn5.vedomosti.ru/image/2018/8g/16nv20/original-1jah.jpg" alt="Почта-лого-задник">

                                    <h4 id="list-item-2">Наша миссия:</h4>
                                    <p>Роль АО «Почта России» с момента создания компании и по сегодняшний день состоит в сохранении коммуникационной связанности граждан на территории всей страны. Почта России продолжит гарантированно доставлять в любой город или село письма, посылки, деньги и товары не только в физическом, но и цифровом виде.

                                        Пандемия COVID-19 значительным образом трансформировала клиентские предпочтения и увеличила ценность цифрового потребления. На фоне изменения мировой макроэкономической ситуации произошла перестройка ряда отраслей, рынки присутствия АО «Почта России» развиваются ускоренными темпами. Реагируя на происходящие изменения, компания смотрит на стоящие перед ней цели и задачи под новым углом.</p>
                                </div>
                            <br>
                                <div class="text-white" style="background-color: #3A499C">
                                    <img class="bg-img" width="100%" src="https://sdelanounas.ru/i/a/2/f/f_a2FtYXoucnUvdXBsb2FkL2libG9jay83NTgvNzU4OWZjNzFlYTQ0Y2QzY2NkYTE2OGM3Y2YyNzkxYzUuanBnP19faWQ9MTM1MjM5.jpeg" alt="Почта-лого-задник">

                                    <h4 id="list-item-3">Работа с нами.</h4>
                                    <p>Почта России не только ищет специалистов всех сортов, но также заинтересована в сотрудничестве с малым и средним бизнесами. Почта России, также, предоставялет возможность работы по франшизе в нескольких регионах РФ.</p>
                                </div>
                            <br>
                                <div>
                                    <h4 id="list-item-4">Регистрация</h4>


                                    <p>Пройдите простую регистрации и начните сотрудничество уже сейчас!</p>
                                    <div class="container align-content-center">
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header">Регистрация</div>

                                                    <div class="card-body">
                                                        <form method="POST">
                                                            @csrf

                                                            <div class="row mb-3">
                                                                <label for="email" class="col-md-4 col-form-label text-md-end">Электронная почта</label>

                                                                <div class="col-md-6">
                                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                                    @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                                                                <div class="col-md-6">
                                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                                    @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-0">
                                                                <div class="col-md-8 offset-md-4">
                                                                    <button type="submit" class="btn btn-primary" href="/Thats_all">
                                                                        {{ __('Создать') }}
                                                                    </button>

                                                                    @if (Route::has('password.request'))
                                                                        <a class="btn btn-link" href="/Thats_all">
                                                                            {{ __('Уже есть профиль?') }}
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
        </div>
    </div>
</div>
@endsection
