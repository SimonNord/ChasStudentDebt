@extends('layout')

@section('content')

<div class="content">

<h2>Redigera drycker</h2>

    <table border='1'>
        <thead>
            <tr>
                <th><h3>Namn</h3></th>
                <th><h3>Antal</h3></th>
                <th><h3>Pris</h3></th>
                <th><h3>Redigera</h3></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
                <tr>
                    <td>{{$drink->name}}</td>
                    <td>{{$drink->stock}}</td>
                    <td>{{$drink->cost}}:-</td>
                    <td><a href = '/drinksEditDrink/{{ $drink->name }}'><button>Redigera</button></a></td>
                </tr> 
            @endforeach
        </tbody>
    </table>
    
    <a href="/drinks"><button>Tillbaka till Drycker</button></a>
</div>

@endsection