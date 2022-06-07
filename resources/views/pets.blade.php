@extends('app')
@section('title')
    Пошук улюбленця
@endsection
@section('content')

    <div class="container">
        <section class="navigation">
            <div><a href="{{route('home')}}">Головна</a></div>
            <div>/</div>
            <div><a href="#">Пошук улюбленця</a></div>
        </section>
    </div>

    <div class="container">
        <section class="menu_search">
            <h1>Пошук улюбленця</h1>
            <div class="menu_first_line">
                <div class="row">
                    <div class="col-6">
                        <button id="cats" onclick="cats(1)">
                            <img src="pictures/menu/cat1.svg" alt="Cat1">
                            <blockquote>Коти</blockquote>
                            <img class="second_picture" src="pictures/menu/cat2.svg" alt="Cat2">
                        </button>
                    </div>

                    <div class="col-6">
                        <button id="dogs" onclick="dogs(1)">
                            <img src="pictures/menu/dog1.svg" alt="Dog1">
                            <blockquote>Собаки</blockquote>
                            <img class="second_picture" src="pictures/menu/dog2.svg" alt="Dog2">
                        </button>
                    </div>
                </div>
            </div>

            <div class="menu_second_line">
                <div class="menu_second_line_block">
                    <blockquote>Стать</blockquote>
                    <label>
                        <select>
                            <option value="Any">Будь-яка</option>
                            <option value="Men">Чоловіча</option>
                            <option value="Women">Жіноча</option>
                        </select>
                    </label>
                </div>

                <div class="menu_second_line_block">
                    <blockquote>Забарвлення</blockquote>
                    <label>
                        <select>
                            <option value="Any">Будь-яке</option>
                            <option value="White">Білий</option>
                            <option value="Black">Чорний</option>
                            <option value="Gray">Сірий</option>
                            <option value="Brown">Коричневий</option>
                            <option value="Red">Рудий</option>
                            <option value="Other">Інше</option>
                        </select>
                    </label>
                </div>

                <div class="menu_second_line_block">
                    <blockquote>Вік</blockquote>
                    <label>
                        <select>
                            <option value="Any">Будь-який</option>
                            <option value="<1">До 1 року</option>
                            <option value="1-5">1-5 років</option>
                            <option value="5+">Від 5 років</option>
                        </select>
                    </label>
                </div>
            </div>


            <div class="menu_third_line">
                <blockquote>Здоров'я</blockquote>
                <div class="menu_third_line_block">
                    <div>
                        <button id="health1" onclick="health1(1)" class="first">Відмінне</button>
                    </div>
                    <div>
                        <button id="health2" onclick="health2(1)" class="second">Незначні проблеми</button>
                    </div>
                </div>
                <div>
                    <button id="health3" onclick="health3(1)" class="third"> Потрібен особливий догляд</button>
                </div>
            </div>
        </section>
    </div>


    <div class="container">
        <section class="pets">
            <div class="row">
                @foreach($data as $pet)
                <div class="col-lg-4 col-12">
                    <a href="{{route('pet', $pet['img'])}}">
                        <div class="pet">
                            <img src="pictures/pets/{{$pet['img']}}.png" alt="Pesyk">
                            <div>
                                <h2>{{$pet['name']}}</h2>
                                <blockquote>{{$pet['age']}}, {{$pet['sex']}}</blockquote>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 col-12">
                    <button onClick=location.href="{{route('pets')}}">Показати більше</button>
                </div>
            </div>
    </section>
    </div>

@endsection
