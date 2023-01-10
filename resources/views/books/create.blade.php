@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kitap Ekle') }}</div>
                    <div class="card-body">


                        <form action="{{route('book.store')}}" method="POST">
                            @CSRF
                            <div class="forum-group">
                                <label for="title">Kitap Adı</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Kitap Adı" required="on">
                            </div>
                            <div class="forum-group">
                                <label for="title">Kitap Fiyati</label>
                                <input type="text" name="price" id="price"  class="form-control" placeholder="Kitap Fiyati" required="on">
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
