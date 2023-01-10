@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <span>Kitaplar</span>
                    <a href="{{route('create')}}" class="btn btn-primary">Kitap Ekle</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kitap Adı</th>
                                <th scope="col">Kitap Ekleyen Kişi</th>
                                <th scope="col">Kitap Fiyatı</th>
                                <th scope="col">İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)

                             <tr>
                                <td>{{$book->name}}</td>
                                <td>{{$book->user->name}}</td>
                                <td>{{$book->price}}</td>
                                <td>
                                    <a href="{{route('book.edit',$book->id)}}" class="btn btn-warning">Düzenle</a>
                                    <a href="{{route('book.delete',$book->id)}}" class="btn btn-danger">Sil</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
