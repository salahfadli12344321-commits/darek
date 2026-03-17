@extends('shared.app')

@section('title', 'Mes réservations')
@section('body-class', 'reservations-page')

@section('content')
<div class="detail-page">
    <div class="container">

        <div class="detail-top">
<button type="button" onclick="history.back()" class="back-icon-btn"><</button>       
         <h1 class="detail-title">Mes réservations</h1>
            <div class="detail-meta">
                Retrouvez toutes les réservations enregistrées sur votre plateforme.
            </div>
        </div>

        @if($reservations->count())
            <div style="display:grid; gap:24px;">
                @foreach($reservations as $reservation)
                    <div style="background:#fff; border:1px solid rgba(51,51,51,0.08); border-radius:24px; box-shadow:var(--shadow); overflow:hidden;">
                        <div style="display:grid; grid-template-columns:320px 1fr; gap:0;">

                            <div>
                                <img
                                    src="{{ $reservation->logement && $reservation->logement->image_principale ? asset('storage/' . $reservation->logement->image_principale) : asset('images/hero.jpg') }}"
                                    alt="logement"
                                    style="width:100%; height:100%; min-height:260px; object-fit:cover; display:block;"
                                >
                            </div>

                            <div style="padding:24px;">
                                <div style="display:flex; justify-content:space-between; gap:20px; align-items:flex-start; margin-bottom:18px;">
                                    <div>
                                        <h2 style="font-size:28px; color:#333; margin-bottom:8px;">
                                            {{ $reservation->logement->titre ?? 'Logement supprimé' }}
                                        </h2>
                                        <p style="color:#6f6f6f; font-size:15px;">
                                            📍 {{ $reservation->logement->ville ?? '-' }}
                                        </p>
                                    </div>

                                    <div style="
                                        padding:10px 14px;
                                        border-radius:999px;
                                        background:
                                            @if($reservation->statut === 'confirmee') #dff6e4
                                            @elseif($reservation->statut === 'annulee') #ffe5e5
                                            @else #fff4d8
                                            @endif;
                                        color:
                                            @if($reservation->statut === 'confirmee') #1f5132
                                            @elseif($reservation->statut === 'annulee') #a40000
                                            @else #8a6d1d
                                            @endif;
                                        font-weight:700;
                                        font-size:14px;
                                    ">
                                        {{ ucfirst($reservation->statut) }}
                                    </div>
                                </div>

                                <div style="display:grid; grid-template-columns:repeat(2, 1fr); gap:16px; margin-bottom:18px;">
                                    <div style="background:#f8f8f5; padding:14px 16px; border-radius:16px;">
                                        <strong style="display:block; color:#333; margin-bottom:6px;">Date d'arrivée</strong>
                                        <span style="color:#6f6f6f;">{{ $reservation->date_arrivee }}</span>
                                    </div>

                                    <div style="background:#f8f8f5; padding:14px 16px; border-radius:16px;">
                                        <strong style="display:block; color:#333; margin-bottom:6px;">Date de départ</strong>
                                        <span style="color:#6f6f6f;">{{ $reservation->date_depart }}</span>
                                    </div>

                                    <div style="background:#f8f8f5; padding:14px 16px; border-radius:16px;">
                                        <strong style="display:block; color:#333; margin-bottom:6px;">Voyageurs</strong>
                                        <span style="color:#6f6f6f;">{{ $reservation->voyageurs }}</span>
                                    </div>

                                    <div style="background:#f8f8f5; padding:14px 16px; border-radius:16px;">
                                        <strong style="display:block; color:#333; margin-bottom:6px;">Prix total</strong>
                                        <span style="color:#6f6f6f;">{{ $reservation->prix_total }} MAD</span>
                                    </div>
                                </div>

                                <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
                                    <div style="color:#6f6f6f; font-size:14px;">
                                        Réservation #{{ $reservation->id }}
                                    </div>

                                    @if($reservation->logement)
                                        <a href="{{ route('logement.show', $reservation->logement->id) }}"
                                           style="display:inline-block; padding:12px 18px; background:#B0C3B4; color:#fff; border-radius:14px; font-weight:700;">
                                            Voir le logement
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div style="background:#fff; border-radius:24px; padding:40px; box-shadow:var(--shadow); text-align:center;">
                <h2 style="color:#333; margin-bottom:10px;">Aucune réservation</h2>
                <p style="color:#6f6f6f; margin-bottom:20px;">
                    Vous n'avez encore aucune réservation enregistrée.
                </p>
                <a href="{{ route('home') }}"
                   style="display:inline-block; padding:14px 20px; background:#B0C3B4; color:#fff; border-radius:14px; font-weight:700;">
                    Retour à l'accueil
                </a>
            </div>
        @endif

    </div>
</div>
@endsection