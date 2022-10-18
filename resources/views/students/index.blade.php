@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Index studenti</h1>
        <a href="{{route('students.create')}}">Aggiungi Studente</a>
        {{-- @dump($students) --}}
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Matricola</th>
                    <th>Iscrizione</th>
                    <th colspan="3"></th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->surname}}</td>
                    <td>{{$d->registration_number}}</td>
                    <td>{{$d->enrolment_date}}</td>
                    <td><a href="{{route('students.edit', $d)}}">Edit</a></td>
                    <td><a href="{{route('students.show', $d)}}">Show</a></td>
                    <td><form action="{{route('students.destroy', $d)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina">
                        
                       </form></td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection