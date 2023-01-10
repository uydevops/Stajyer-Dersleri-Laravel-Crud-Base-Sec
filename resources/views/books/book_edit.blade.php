@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kitap Düzenle') }}</div>
                    <div class="card-body">

                        <form action="{{route('book.update',$book->id)}}" method="GET">
                            @CSRF
                            <div class="forum-group">
                                <label for="title">Kitap Adı</label>
                                <input type="text" name="name" id="title" class="form-control"  value="{{$book->name}}" placeholder="Kitap Adı">
                            </div>
                            <div class="forum-group">
                                <label for="title">Kitap Fiyati</label>
                                <input type="text" name="price" id="title" value="{{$book->price}}" class="form-control" placeholder="Kitap Fiyati">
                            </div>

                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                        <style>
                            .form-group{
                                margin-bottom: 1rem;
                            }


                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
