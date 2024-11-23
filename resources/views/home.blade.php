@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    <div class="container">
        <!-- Div com imagem de fundo e texto sobreposto -->
        <div class="background-section" style="position: relative; text-align: center; color: white; background-image: url('{{ asset('images/bebidaFundo.png') }}'); background-size: cover; background-position: center; height: 400px; display: flex; align-items: center; justify-content: center;">
            <h1 style="z-index: 1; font-size: 3rem; background-color: rgba(0, 0, 0, 0.5); padding: 10px;">
                Desbloqueie sua melhor experiência de bar para seu casamento
            </h1>
        </div>
    </div>
</section>
@endsection
