<form action="{{ route('postUploadImage') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <header>
        <h1>RMAN</h1>
        <!-- Navigation menu -->
        <nav>
            <ul>
                <li><a href="{{ route('main')}}">Главная страница</a></li>
                <li><a href="{{ route('registrate')}}">Регистрация</a></li>
                <li><a href="{{ route('login')}}">Логин</a></li>
                <li><a href="{{ route('editProfile')}}">Профиль</a></li>

            </ul>
        </nav>
    </header>
    <label for="file">Выберите файл для загрузки:</label>
    <input type="file" name="image" id="image" required>
    @error ('image')
    <span class="darksoul-input" style="color: red">{{ $message}}</span>
    @enderror
    <button type="submit">Загрузить</button>
</form>

<style>
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

