@extends('layout/master')
@section('css')
    <link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')

<section class="sect-a">
    <article>
        <h1>Quienes somos</h1>
        <p>Redciclaje nace como proyecto a modo de acción ante la urgencia ambiental actual, en donde no sólo es necesaria la intención de reciclar sino hacerlo de manera consciente y adecuada, teniendo en cuenta que el Reciclaje no es sino el último eslabón en los pasos para una economía circular (reducir, reutilizar, reciclar). </p>
        <p>De esta manera, se busca informar y facilitar la coordinación a una comunidad de usuarios interesados para reciclar de forma adecuada, además de invitar cada vez a más personas a unirse al cambio.</p>
    </article>
    <article>
        <h1>¿Qué es Redciclar?</h1>
        <p>A diferencia de reciclar, es el acto de darle a nuestros "desechos" (¡MUY POCAS COSAS SON VERDADERAMENTE BASURA!) un destino que involucre procesos sustentables y sostenibles para ayudar a nuestro planeta, considerando siempre el concepto de economía circular.</p>
    </article>
</section>

<section class="sect-b">
    <h1>Próximos eventos</h1>
    <div class="event-box">
        @for ($i = 0; $i < 5; $i++)
            <div class="event">
                <h4>Lorem ipsum dolor sit amet c</h4>
                @if ($i%2)
                <p>Lorem ipsum dolor sit amet cLorem ipsum dolor sit amet c</p>
                @else
                <p>Lorem ipsum dolor sit amet cLorem ipsum</p>
                @endif
                <button>Más info</button>
            </div>
        @endfor
    </div>
</section>

<section class="sect-c">
    <div class="text-group-container">
        <div class="text-group text-group-three">
            <div class="target">
                <div class="left-section-target">
                    <div class="title-target">
                        <h1>Misión</h1>
                    </div>
                    <div class="logo-target">
                        <img src="/storage/mision.png" alt="" srcset="" width="120px">
                    </div>
                </div>
                <div class="text-target">
                    <p>Ayudar a la gestión de desechos de manera consciente y adecuada a nivel doméstico, enfocándonos principalmente en el reciclaje de los productos y envases que se consumen, representando una fuente de facilitación de información y coordinación.</p>
                </div>
            </div>
            <div class="target">
                <div class="left-section-target">
                    <div class="title-target">
                        <h1>Visión</h1>
                    </div>
                    <div class="logo-target">
                        <img src="/storage/vision.png" alt="" srcset="" width="120px">
                    </div>
                </div>
                <div class="text-target">
                    <p>Ser una organización sostenible y sustentable que informe, asesore y facilite la coordinación de una red de usuarios comprometidos activamente con el medio ambiente en todos los pasos necesarios para reciclar de manera adecuada, partiendo del consumo consciente y responsable.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-group text-group-four">
        <div class="desc-section">
            <div class="left-section-desc">
                <div class="title-desc">
                    <h1>Lo que hacemos</h1>
                </div>
                <div class="text-desc">
                    <p>Buscamos facilitar la información de manera clara y fácil para gestionar los desechos domésticos de forma correcta, además de unir a usuarios para que reciclen sus desechos.</p>
                </div>
            </div>
            <div class="desc-contact">
                <div class="title-desc">
                    <h1>Contacto</h1>
                </div>
                <div class="text-desc">
                    <p>redciclajecl@gmail.com</p>
                    <p>+56 9 7528 2318</p>
                    <p>+56 9 34882631</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection