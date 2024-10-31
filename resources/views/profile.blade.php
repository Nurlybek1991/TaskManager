<header>

        <h1>RMAN</h1>
        <!-- Navigation menu -->
        <ul>
            <li><a  href="{{ route('main')}}" >Главная страница</a></li>
        </ul>

</header>

<div class="container">
    <form enctype="multipart/form-data" class="f-col m-auto form-container" action="{{ route('updateProfile')}}" method="POST"   >
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        @csrf
        <h1>Профиль</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
                <div class="text-center" >
                    <img
                        src="{{ $user->image }}"
                        class="avatar img-circle" alt="Нет фото">
                    <h6></h6>
{{--                    <input type="file" name="image" id="image" class="form-control">--}}
{{--                    @error ('image')--}}
{{--                    <span class="darksoul-input" style="color: red">{{ $message}}</span>--}}
{{--                    @enderror--}}
                    <label for="file">Выберите файл для загрузки:</label>
                    <input type="file" name="image" id="image" required>
                    @error ('image')
                    <span class="darksoul-input" style="color: red">{{ $message}}</span>
                    @enderror
                    <button type="submit">Загрузить</button>
                </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    {{--                <a class="panel-close close" data-dismiss="alert">×</a>--}}
                    {{--                <i class="fa fa-coffee"></i>--}}
                    {{--                This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
                </div>
                <h3>Персональная информация</h3>

                <div class="form-group">
                    <label class="col-md-3 control-label">Имя:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="firstname" value="{{ $user->firstname }} "
                               required autofocus>
                        @error ('firstname')
                        <span class="darksoul-input" style="color: red">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Фамилия:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}" required
                               autofocus>
                        @error ('lastname')
                        <span class="darksoul-input" style="color: red">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Почта:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}" required
                               autofocus>
                        @error ('email')
                        <span class="darksoul-input" style="color: red">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Пароль:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="password" value="" required>
                        @error ('password')
                        <span class="darksoul-input" style="color: red">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Повторите пароль:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="password" value="" required>
                        @error ('password')
                        <span class="darksoul-input" style="color: red">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <button type = "submit">Сохранить</button>
                        {{--                        <input type="button" class="btn btn-primary" value="Save Changes">--}}
                        {{--                        <span></span>--}}
                        {{--                        <input type="reset" class="btn btn-default" value="Cancel">--}}
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
<hr>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);


    .jumbotron-flat {
        background-color: solid #4DB8FFF;
        height: 100%;
        border: 1px solid #4DB8FF;
        background: white;
        width: 100%;
        text-align: center;
        overflow: auto;
        color: var(--dark-color);
    }

    .paymentAmt {
        color: var(--dark-color);
        font-size: 80px;
    }

    .centered {
        text-align: center;
    }

    .title {
        padding-top: 15px;
        color: var(--dark-color);
    }


     body {
         margin: 0;
         padding: 0;
         font-family: Arial, sans-serif;
     }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
    }

    h1 {
        margin: 0;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav li {
        display: inline-block;
        margin-left: 10px;
    }

    nav a {
        text-decoration: none;
        color: #fff;
        padding: 5px;
    }

    main {
        margin: 20px 0;
    }

    section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #ddd;
    }

    article {
        flex: 1;
        margin-right: 20px;
    }

    img {
        width: 100px;
        height: 100px;
    }

    h3 {
        margin: 0;
    }

    button {
        padding: 5px 10px;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    footer {
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
    }



</style>
