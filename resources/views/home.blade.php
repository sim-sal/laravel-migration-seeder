@extends('layouts.main-layout')

@section('pageName')
    Railway Routes
@endsection

@section('content')
    <main>
        <div id="main-content">
            <div class="container">
                <h1 class="text-center">RILWAY ROUTES</h1>

                <div class="row column_title">
                    <div class="col">
                        <h5>Codice Treno</h5>
                    </div>
                    <div class="col">
                        <h5>Stazione di partenza</h5>
                    </div>
                    <div class="col">
                        <h5>Orario di partenza</h5>
                    </div>
                    <div class="col">
                        <h5>Stazione di arrivo</h5>
                    </div>
                    <div class="col">
                        <h5>Orario di arrivo</h5>
                    </div>
                    <div class="col">
                        <h5>In orario</h5>
                    </div>
                    <div class="col">
                        <h5>Cancellato</h5>
                    </div>
                    <div class="col">
                        <h5>N. carrozze</h5>
                    </div>
                    <div class="col">
                        <h5>Azienda</h5>
                    </div>
                </div>

                @foreach ($routes as $route)
                    <div class="row">
                        <div class="col">
                            <span><strong>{{$route -> codice_treno}}</strong></span>
                        </div>
                        <div class="col">
                            <span>{{$route -> stazione_di_partenza}}</span>
                        </div>
                        <div class="col">
                            <span>{{$route -> orario_di_partenza}}</span>
                        </div>
                        <div class="col">
                            <span>{{$route -> stazione_di_arrivo}}</span>
                        </div>
                        <div class="col">
                            <span>{{$route -> orario_di_arrivo}}</span>
                        </div>
                        <div class="col">
                            <span>
                                @if($route -> in_orario < 1)
                                    <span>IN RITARDO</span>
                                @else
                                    <span>SI</span>
                                @endif
                            </span>
                        </div>
                        <div class="col">
                            <span>
                                @if($route -> cancellato < 1)
                                    <span>CONFERMATO</span>
                                @else
                                    <span>CANCELLATO! Ci scusiamo per il disagio.</span>
                                @endif
                            </span>
                        </div>
                        <div class="col">
                            <span>{{$route -> numero_carrozze}}</span>
                        </div>
                        <div class="col">
                            <span>{{$route -> azienda}}</span>
                        </div>
                    </div>
                    <hr>
                @endforeach

            </div>
        </div>

    </main>
@endsection
