@extends('layouts.app')

@section('content')
    <div class="container">
        <section>

            <h1>{{$department->name}}</h1>
            <h3>{{$department->head_of_department}}</h3>
            <div>
                <ul>
                    <li>
                        <span>Indirizzo:</span>{{$department->address}}
                    </li>
                    <li>
                        <span>Email:</span>{{$department->email}}
                    </li>
                    <li>
                        <span>Telefono:</span>{{$department->phone}}
                    </li>
                <li>
                    <span>Sito:</span>{{$department->website}}
                </li>
                <li>
                    <a href="{{route('departments.edit', $department)}}">Modifica Dipartimento</a>
                   <form action="{{route('departments.destroy', $department)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Elimina">
                    
                   </form>
                </li>
            </ul>
        </div>
    </div>
</section>
<section>
    <h2> Elenco dei corsi di laurea</h2>
</section>
    @endsection