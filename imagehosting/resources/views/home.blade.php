<x-layout>
    <div class="wrapper">

        <div class="main">
            <div class="sec1">
                @isset($results)
                    @foreach($results as $result)
                    <div class="container">
                        <div class="image" id="{{$result->id}}">
                            <a href="/getImage/{{$result->id}}"><img src="{{asset('/storage/' . $result->path)}}" alt="" width="100px" height="100px"></a>
                        </div>
                        <div class="info">
                            <div class="info__body">
                                <div class="info__item"> <span>Название:</span><span>{{$result->original_filename}}</span></div>
                                <div class="info__item"> <span>Дата:</span><span>{{$result->created_at}}</span></div>
                                <div class="info__item"> <button>Скачать</button></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endisset
            </div>
            <div class="sec2">
                <button class="active__form" id="activeForm">+</button>
            </div>
        </div>
        <div class="wrap__form">
            <form action="{{route('addImages')}}" class="form" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form__header form__container">
                    <button class="close"><img src="{{asset('image/Close_round.svg')}}"></button>
                </div>
                <div class="form__body form__container">
                    <h4>Добавить изображение</h4>
                    <input name="images[]" multiple type="file" class="addFile"  accept="image/*,image/jpeg, image/png">
                </div>
                <div class="form__buttons form__container">
                    <button type="submit" class="add">Загрузить</button>
                    <div class="button__wrapper">
                        <input type="reset" class="reset" value="Очистить">
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>

