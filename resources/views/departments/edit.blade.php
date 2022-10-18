@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2>Crea un nuovo Dipartimento</h2>
        </div>
        <div class="container">
            {{-- non li mando nello store   --}}
            <form action="{{ route('departments.update',$department) }}" method="POST">
                @csrf
                @method('PUT')
                <p>
                    <label for="name">Nome</label>
                    {{-- BORDO ROSSO CON ERORRE  --}}
                    <input type="text" style=" @error('name') border-color:red @enderror" name='name' value="{{old('name',$department->name)}}" id='name'
                        placeholder="Nome Dipartimento">

                    {{-- MESSAGGIO DI ERRORE VICINO ALL INPUT CHE GENERA ERRORE  --}}
                    @error('name')
                    <div class="alert alert-danger" style="color: red; font-size:12px;">{{ $message }}</div>
                @enderror

                </p>
                <p>
                    <label for="head-of-department">Capo Di Dipartimento</label>
                    <input type="text" name='head_of_department'value="{{$department->head_of_department}}" id='head_of_department'
                        placeholder="Nome Capo Dipartimento">
                </p>
                <p>
                    <label for="email">email</label>
                    <input type="email" name='email' value="{{$department->email}}" id='email' placeholder="Email">
                </p>
                <p>
                    <label for="address">Indiritto</label>
                    <input type="text" name='address' id='address' value="{{$department->address}}" placeholder="Indirizzo Dipartimento">
                </p>
                <p>
                    <label for="phone">Telefono</label>
                    <input type="tel" name='phone' id='phone' value="{{$department->phone}}" placeholder="Numero del Dipartimento">
                </p>
                <p>
                    <label for="website">Sito Web</label>
                    <input type="text" name='website' id='website' value="{{$department->website}}" placeholder="Sito Web Del Dipartimento">
                </p>
                <p>
                    <input type="submit" value="salva">
                </p>

            </form>
        </div>
    </section>




    {{-- STAMPA L'ERRORE  --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
