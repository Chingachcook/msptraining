@extends('layouts.app')

@section('content')

    <br>
    <br>
    <section class="module_list">
        <div class="container">
            <h1>Список уроков по модулю</h1>
            <br>
            <div class="row d-flex flex-row">
                @foreach($lessons as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center">
                        <div class="list-group d-flex align-items-start flex-column">
                            <a href="{{ url('/lesson/'.$item->id) }}"
                               class="list-group-item list-group-item-action active">
                                <div class="card-title p-2">
                                    <h5>Урок {{$i++}}</h5>
                                </div>
                                <p class="p-2">{{$item->title}}
                                <p class="card-text mt-auto p-2">{{$item->description}}</p>
                            </a>
                            <a class="btn btn-outline-info btn-block mt-auto p-2" style="border-radius: 0 0 5px 5px;"
                               href="{{ url('/statistics_lesson/'.$item->id) }}" role="button">Статистика {{ $i-1 }}
                                Урока</a>
                            <br>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection