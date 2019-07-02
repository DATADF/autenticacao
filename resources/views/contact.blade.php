@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>

    <form method="POST" action="{{ route('contact') }}">

        <label>Name</label><br>
        <input name="name" placeholder="Name..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <label>E-mail</label><br>
        <input type="text" name="email" placeholder="E-mail..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <label>Subject</label><br>
        <input name="subject" placeholder="Subject..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <label>Message</label><br>
        <textarea name="content" placeholder="Message">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>Send</button>

        @csrf
    </form>

@endsection
