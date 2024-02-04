@extends('master')
@section('title','About')
@section('content')

    <header class="masthead" style="background-image: url('assets/img/services-bg.jpg')" width="20">
    </header>
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">À votre service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-camera-video fs-1" style="color: var(--bs-danger)"></i></div>
                        <h3 class="h4 mb-2">Édition video</h3>
                        <p class="text-muted mb-0">Explorez l'art de la narration à travers nos créations vidéo uniques</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-music-note fs-1" style="color: var(--bs-cyan)"></i></div>
                        <h3 class="h4 mb-2">Édition audio</h3>
                        <p class="text-muted mb-0"> Découvrez comment nous donnons vie à la musique et à la voix, capturant l'essence de vos idées auditives.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-images fs-1" style="color: var(--bs-yellow)"></i></div>
                        <h3 class="h4 mb-2">Édition medias numeriques</h3>
                        <p class="text-muted mb-0">Chaque pixel, chaque son, est façonné pour capturer l'essence de votre vision.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-building fs-1"style="color: var(--bs-success)"></i></div>
                        <h3 class="h4 mb-2">Communication organisationnelle</h3>
                        <p class="text-muted mb-0">Découvrez comment notre expertise en communication donne une voix distinctive à votre organisation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection