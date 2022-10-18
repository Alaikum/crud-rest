@extends('layouts.app')


@section('content')
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Inserisci il Nome" value="{{ old('name') }}">
        <input type="text" name="surname" placeholder="Inserisci il Cognome" value="{{ old('surname') }}">
        <input type="date" name="date_of_birth" placeholder="Data di Nascita" value="{{ old('date_of_birth') }}">
        <input type="text" name="fiscal_code" placeholder="Codice fiscale" value="{{ old('fiscal_code') }}">
        <input type="date" name="enrolment_date" placeholder="Data di Iscrizione" value="{{ old('enrolment_date') }}">
        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">

        <input type="submit" name="salva">

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
    </form>
@endsection
