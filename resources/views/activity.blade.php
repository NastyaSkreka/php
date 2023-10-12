@extends('layout')


@section('main_content')
    <div class="container">
        <div class="row">
            <!-- Вывод результатов слева -->
            <div class="col-md-6">
                @foreach($activities as $el)
                    <div class="alert alert-primary ">
                        <div class="d-flex justify-content-between align-items-center">
                            <p>Date: {{ $el->created_at }}</p>
                            <h3>{{ $el->activity  }}</h3>
                            <p>Duration: {{ $el->duration  }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Форма справа -->
            <div class="col-md-6">
                <form method="post" action="/activity/check">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="activity" id="activity" class="form-control" placeholder="Введите активность">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="duration" id="duration" class="form-control" placeholder="Введите время активности">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('gym-12.png') }}" alt="Image 1" class="img-thumbnail my-2 shadow">
                </div>
                <div class="col-4">
                    <img src="{{ asset('2.png') }}" alt="Image 2" class="img-thumbnail my-2 shadow">
                </div>
                <div class="col-4">
                    <img src="{{ asset('5.jpg') }}" alt="Image 3" class="img-thumbnail my-2 shadow">
                </div>
            </div>
        </div>


    </div>
@endsection


