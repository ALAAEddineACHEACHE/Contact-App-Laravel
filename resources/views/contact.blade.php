@extends('layouts.app')
@section('contenu')
    {{-- @section('title')
    Contactez-vous
@endsection --}}
@section('title', 'contactez-nous')

<main class="form-signin">
    <div class="container" style="box-shadow: 3px 3px red, -1em 0 .4em olive;">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('send-message') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom Complet</label>
                        <input name="name" type="text" class="form-control" id="name">
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type=" email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="content" id="message" cols="30" rows="5"
                            placeholder="Votre message içi"></textarea>
                        @error('content')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Send the message</button>
                </form>

            </div>


        </div>
    </div>
    </div>


</main>
@endsection
