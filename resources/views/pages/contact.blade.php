@extends('layouts.default')
@section('content')

    <!-- Page Header-->

    <x-header-component title="Kapcsolat" sub-title="Hiányolsz egy filmet? Írj nekünk!" :img-url="URL::asset('assets/img/schindler-listaja.jpg')"/>

    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">

                        <form id="contactForm" method="POST" action="{{ route('contact.save') }}" data-sb-form-api-token="API_TOKEN">
                            @csrf
                            <div class="form-floating">
                                <input class="form-control" id="name" value="{{old('name')}}" name="name" type="text" placeholder="Add meg a neved..." data-sb-validations="required" required/>
                                <label for="name">Név</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Kötelező mező.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" name="email" value="{{old('email')}}" type="email" placeholder="Add meg az e-mail címed..." data-sb-validations="required,email" required/>
                                <label for="email">E-mail cím</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Kötelező mező.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Érvénytelen e-mail cím.</div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Írd ide az üzeneted..." style="height: 12rem" data-sb-validations="required" required>{{old('message')}}</textarea>
                                <label for="message">Üzenet</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Kötelező mező.</div>
                            </div>
                            <br />

                            @if(isset($success))
                                <div id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">{{$success}}</div>
                                    </div>
                                </div>
                            @endif

                            @if(count($errors) > 0)
                                <div id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Hiba a küldés során!</div>
                                    @foreach($errors->all() as $error)
                                        <div class="text-center text-danger mb-3">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Küldés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection