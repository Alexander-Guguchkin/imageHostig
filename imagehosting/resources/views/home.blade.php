<x-layout>
    <div class="wrapper">
        <header>
            <nav>
                <div><a href="#">Главная</a></div>
            </nav>
        </header>
        <div class="main">
            <div class="sec1">

                <div class="container">
                    <div class="image">
                        @isset($path)
                            <img src="{{asset('/storage/' . $path)}}" alt="" width="100px" height="100px">
                        @endisset
                    </div>
                    <div class="info">
                        <div class="info__atribute">
                            <div class="info__item atribute">Название:</div>
                            <div class="info__item atribute">Дата:</div>
                            <div class="info__item atribute">Время:</div>
                        </div>
                        <div class="info__body">
                            <div class="info__item">xxxxx</div>
                            <div class="info__item">xx.xx.xxxx</div>
                            <div class="info__item">xx:xx</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sec2">
                <button class="active__form" id="activeForm">+</button>
            </div>
        </div>
        <div class="wrap__form">
            <form action="{{route('addImages')}}" class="form" enctype="multipart/form-data" method="post">
                @csrf
{{--                <input type="file" name="image">--}}
{{--                <button type="submit">Загрузить</button>--}}

                <div class="form__header form__container">
                    <button class="close"><img src="{{asset('image/Close_round.svg')}}"></button>
                </div>
                <div class="form__body form__container">
                    <h4>Добавить изображение</h4>
                    <input name="images[]" multiple type="file" class="addFile"  accept="image/*,image/jpeg, image/png">
                    <button type="submit" class="add">Загрузить</button>
                </div>
                <div class="form__buttons form__container">
                    <div class="button__wrapper">
                        <input type="submit" class="add" value="Добавить изображение">
                    </div>
                    <div class="button__wrapper">
                        <input type="reset" class="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>

