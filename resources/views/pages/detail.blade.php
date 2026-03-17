@extends('shared.app')

@section('title', $logement->titre)
@section('body-class', 'detail-page')

@section('content')
<div class="detail-page-shell">
    <div class="container">

        <div class="detail-hero-card">
            <div class="detail-topbar">
                <div class="detail-top-left">
                    <button type="button" onclick="goBackOrHome()" class="back-icon-btn" aria-label="Retour">
                        ←
                    </button>

                    <div>
                        <span class="detail-badge-wow">DARK STAY</span>
                        <h1 class="detail-title">{{ $logement->titre }}</h1>
                        <div class="detail-meta">
                            <span>⭐ 4.95</span>
                            <span>· 120 avis</span>
                            <span>· {{ $logement->ville }}, Maroc</span>
                        </div>
                    </div>
                </div>

                <div class="detail-top-actions">
                    <button class="action-btn-wow" type="button">Partager</button>
                    <button class="action-btn-wow" type="button">Enregistrer</button>
                </div>
            </div>

            <div class="detail-gallery luxury-gallery">
                <div class="detail-gallery-main">
                    @if($logement->image_principale)
                        <img
                            src="{{ asset('storage/' . $logement->image_principale) }}"
                            alt="{{ $logement->titre }}"
                            class="gallery-image"
                            data-src="{{ asset('storage/' . $logement->image_principale) }}"
                        >
                    @else
                        <img
                            src="{{ asset('images/hero.jpg') }}"
                            alt="{{ $logement->titre }}"
                            class="gallery-image"
                            data-src="{{ asset('images/hero.jpg') }}"
                        >
                    @endif

                    <div class="gallery-overlay">
                        <div class="gallery-overlay-content">
                            <span>Vue principale</span>
                            <button type="button" class="show-all-photos" id="openPhotos">
                                Voir toutes les photos
                            </button>
                        </div>
                    </div>
                </div>

                <div class="detail-gallery-side">
                    @forelse($logement->images->take(4) as $image)
                        <img
                            src="{{ asset('storage/' . $image->image_path) }}"
                            alt="photo logement"
                            class="gallery-image"
                            data-src="{{ asset('storage/' . $image->image_path) }}"
                        >
                    @empty
                        <img src="{{ asset('images/hero1.jpg') }}" alt="photo 1" class="gallery-image" data-src="{{ asset('images/hero1.jpg') }}">
                        <img src="{{ asset('images/hero2.jpg') }}" alt="photo 2" class="gallery-image" data-src="{{ asset('images/hero2.jpg') }}">
                        <img src="{{ asset('images/hero0.jpg') }}" alt="photo 3" class="gallery-image" data-src="{{ asset('images/hero0.jpg') }}">
                        <img src="{{ asset('images/hero.jpg') }}" alt="photo 4" class="gallery-image" data-src="{{ asset('images/hero.jpg') }}">
                    @endforelse
                </div>
            </div>
        </div>

        <div class="detail-content">
            <div class="detail-main-column">

                <div class="detail-section intro-card">
                    <div class="intro-head">
                        <div>
                            <h2>Logement entier à {{ $logement->ville }}</h2>
                            <p class="detail-soft">
                                {{ $logement->voyageurs }} voyageurs ·
                                {{ $logement->chambres }} chambres ·
                                {{ $logement->salles_de_bain }} salles de bain
                            </p>
                        </div>

                        <div class="host-avatar-box">
                            <div class="host-avatar">D</div>
                        </div>
                    </div>

                    <div class="detail-tags">
                        <span>Wi-Fi rapide</span>
                        <span>Parking privé</span>
                        <span>Terrasse</span>
                        <span>Climatisation</span>
                        <span>Check-in facile</span>
                    </div>
                </div>

                <div class="detail-section">
                    <div class="section-heading">
                        <span class="section-kicker">À propos</span>
                        <h3>Description</h3>
                    </div>
                    <p class="detail-paragraph">
                        {{ $logement->description }}
                    </p>
                </div>

                <div class="detail-section">
                    <div class="section-heading">
                        <span class="section-kicker">Équipements</span>
                        <h3>Ce que propose ce logement</h3>
                    </div>

                    <div class="amenities-grid">
                        <div class="amenity-item">✔ Cuisine équipée</div>
                        <div class="amenity-item">✔ Wifi gratuit</div>
                        <div class="amenity-item">✔ Télévision</div>
                        <div class="amenity-item">✔ Climatisation</div>
                        <div class="amenity-item">✔ Terrasse</div>
                        <div class="amenity-item">✔ Parking</div>
                        <div class="amenity-item">✔ Salle à manger</div>
                        <div class="amenity-item">✔ Vue agréable</div>
                    </div>
                </div>

                <div class="detail-section">
                    <div class="section-heading">
                        <span class="section-kicker">Localisation</span>
                        <h3>Emplacement</h3>
                    </div>

                    <p class="detail-paragraph">
                        Le logement se situe dans un quartier agréable à {{ $logement->ville }},
                        proche des restaurants, commerces et transports.
                    </p>

                    <div class="detail-map-box">
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode($logement->adresse ?? $logement->ville) }}&output=embed"
                            width="100%"
                            height="380"
                            style="border:0; display:block;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="detail-section">
                    <div class="section-heading">
                        <span class="section-kicker">Expérience</span>
                        <h3>Avis des voyageurs</h3>
                    </div>

                    <div class="reviews-grid">
                        <div class="review-item">
                            <div class="review-top">
                                <strong>Sarah</strong>
                                <span>⭐⭐⭐⭐⭐</span>
                            </div>
                            <p>Très beau logement, propre et bien situé. L’ambiance est raffinée et reposante.</p>
                        </div>

                        <div class="review-item">
                            <div class="review-top">
                                <strong>Yassine</strong>
                                <span>⭐⭐⭐⭐⭐</span>
                            </div>
                            <p>Photos conformes, quartier calme, et très bonne expérience globale.</p>
                        </div>
                    </div>
                </div>

                <div class="detail-section">
                    <div class="section-heading">
                        <span class="section-kicker">Découvrir</span>
                        <h3>Logements similaires</h3>
                    </div>

                    <div class="similar-grid">
                        <a href="{{ route('logement.show', 2) }}" class="similar-card">
                            <img src="{{ asset('images/hero1.jpg') }}" alt="Appartement chic">
                            <div class="similar-card-body">
                                <h4>Appartement chic</h4>
                                <p>Casablanca</p>
                            </div>
                        </a>

                        <a href="{{ route('logement.show', 3) }}" class="similar-card">
                            <img src="{{ asset('images/hero2.jpg') }}" alt="Maison vue mer">
                            <div class="similar-card-body">
                                <h4>Maison vue mer</h4>
                                <p>Agadir</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <aside class="detail-side-column">
                @if(session('success'))
                    <div class="flash-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="flash-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="booking-card premium-booking">
                    <div class="booking-card-top">
                        <p class="booking-price">{{ $logement->prix }} <span>DH / nuit</span></p>
                        <div class="booking-rating">⭐ 4.95 <small>(120)</small></div>
                    </div>

                    <form action="{{ route('reservations.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="logement_id" value="{{ $logement->id }}">

                        <div class="booking-dates">
                            <div class="booking-field">
                                <label>Arrivée</label>
                                <input type="date" name="date_arrivee" required>
                            </div>

                            <div class="booking-field">
                                <label>Départ</label>
                                <input type="date" name="date_depart" required>
                            </div>
                        </div>

                        <div class="booking-field booking-full">
                            <label>Voyageurs</label>
                            <input type="number" name="voyageurs" min="1" value="1" required>
                        </div>

                        <button class="booking-main-btn" type="submit">Réserver maintenant</button>
                    </form>

                    <p class="booking-note">Aucun montant ne vous sera débité pour le moment</p>

                    <div class="booking-summary">
                        <div><span>{{ $logement->prix }} DH × 3 nuits</span><span>3600 DH</span></div>
                        <div><span>Frais de service</span><span>150 DH</span></div>
                        <div class="booking-total"><span>Total</span><span>3750 DH</span></div>
                    </div>
                </div>

                <div class="host-mini-card">
                    <h4>Pourquoi choisir ce logement ?</h4>
                    <p>
                        Design soigné, localisation pratique, confort premium et expérience inspirée
                        des meilleures plateformes de réservation.
                    </p>
                </div>
            </aside>
        </div>
    </div>
</div>

<div class="photo-modal" id="photoModal">
    <div class="photo-modal-content">
        <button class="photo-close" id="closePhotos">&times;</button>

        <div class="photo-grid">
            @if($logement->image_principale)
                <img src="{{ asset('storage/' . $logement->image_principale) }}" alt="photo principale">
            @endif

            @forelse($logement->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="photo logement">
            @empty
                <img src="{{ asset('images/hero.jpg') }}" alt="photo 1">
            @endforelse
        </div>
    </div>
</div>

<div class="image-lightbox" id="imageLightbox">
    <button class="lightbox-close" id="closeLightbox">&times;</button>
    <button class="lightbox-nav lightbox-prev" id="prevLightbox">‹</button>

    <div class="lightbox-content">
        <img id="lightboxImage" src="" alt="Grande image">
        <div class="lightbox-counter" id="lightboxCounter">1 / 1</div>
    </div>

    <button class="lightbox-nav lightbox-next" id="nextLightbox">›</button>
</div>
@endsection