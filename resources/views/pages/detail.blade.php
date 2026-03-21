@extends('shared.app')

@section('title', $logement->titre)
@section('body-class', 'detail-page')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>

<style>
.detail-page{
    background:#fff;
    color:#222;
    padding:30px 0 70px;
}

.detail-container{
    width:min(1200px, 94%);
    margin:auto;
}

.detail-header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
    margin-bottom:22px;
}

.detail-header-left h1{
    font-size:32px;
    font-weight:800;
    margin:0 0 8px;
    color:#222;
}

.detail-subline{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    font-size:15px;
    color:#555;
}

.detail-subline .dot{
    opacity:.5;
}

.detail-header-actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.detail-action-btn{
    border:1px solid #ddd;
    background:#fff;
    border-radius:12px;
    padding:10px 14px;
    font-size:14px;
    font-weight:700;
    cursor:pointer;
}

.detail-action-btn:hover{
    background:#f7f7f7;
}

.detail-gallery{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:12px;
    margin-bottom:34px;
}

.detail-gallery-main{
    position:relative;
    height:500px;
    border-radius:22px 0 0 22px;
    overflow:hidden;
}

.detail-gallery-main img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.detail-gallery-side{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
}

.detail-gallery-side .photo-box{
    overflow:hidden;
}

.detail-gallery-side .photo-box:nth-child(2){
    border-radius:0 22px 0 0;
}

.detail-gallery-side .photo-box:nth-child(4){
    border-radius:0 0 22px 0;
}

.detail-gallery-side img{
    width:100%;
    height:244px;
    object-fit:cover;
    display:block;
    cursor:pointer;
}

.detail-gallery-main img{
    cursor:pointer;
}

.show-all-photos{
    position:absolute;
    right:18px;
    bottom:18px;
    border:1px solid #222;
    background:#fff;
    color:#222;
    border-radius:14px;
    padding:12px 18px;
    font-size:14px;
    font-weight:700;
    cursor:pointer;
    box-shadow:0 8px 20px rgba(0,0,0,.12);
}

.detail-grid{
    display:grid;
    grid-template-columns:minmax(0, 1.6fr) minmax(320px, .9fr);
    gap:50px;
    align-items:start;
}

.detail-main{
    min-width:0;
}

.detail-side{
    align-self:start;
}

.host-box{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    padding-bottom:28px;
    border-bottom:1px solid #ebebeb;
    margin-bottom:28px;
}

.host-box h2{
    margin:0 0 8px;
    font-size:24px;
    font-weight:800;
}

.host-box p{
    margin:0;
    color:#666;
    font-size:15px;
}

.host-avatar{
    width:58px;
    height:58px;
    border-radius:50%;
    background:#8BA394;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    font-weight:800;
    flex-shrink:0;
}

.info-list{
    display:grid;
    gap:18px;
    padding-bottom:28px;
    border-bottom:1px solid #ebebeb;
    margin-bottom:28px;
}

.info-item h4{
    margin:0 0 4px;
    font-size:16px;
    font-weight:700;
}

.info-item p{
    margin:0;
    color:#666;
    font-size:14px;
    line-height:1.6;
}

.detail-section{
    padding:0 0 28px;
    border-bottom:1px solid #ebebeb;
    margin-bottom:28px;
}

.detail-section:last-child{
    border-bottom:none;
}

.detail-section h3{
    font-size:22px;
    font-weight:800;
    margin:0 0 16px;
    color:#222;
}

.detail-section p{
    color:#444;
    line-height:1.8;
    font-size:15px;
    margin:0;
}

.amenities-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:14px 22px;
}

.amenity-item{
    font-size:15px;
    color:#222;
    padding:8px 0;
}

.map-box{
    border-radius:18px;
    overflow:hidden;
    border:1px solid #e7e7e7;
    margin-top:14px;
}

.booking-card{
    position:sticky;
    top:24px;
    border:1px solid #ddd;
    border-radius:20px;
    background:#fff;
    box-shadow:0 6px 20px rgba(0,0,0,.10);
    padding:24px;
}

.booking-top{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:15px;
    margin-bottom:18px;
}

.booking-price{
    font-size:18px;
    font-weight:600;
    color:#222;
}

.booking-price strong{
    font-size:34px;
    font-weight:800;
}

.booking-price span{
    font-size:16px;
    font-weight:500;
    color:#666;
}

.booking-rating{
    font-size:14px;
    color:#444;
    white-space:nowrap;
    background:#f7f7f2;
    border-radius:999px;
    padding:10px 16px;
    font-weight:700;
}

.booking-box{
    border:1px solid #b0b0b0;
    border-radius:14px;
    overflow:hidden;
    margin-bottom:14px;
    background:#fff;
}

.booking-dates{
    display:grid;
    grid-template-columns:1fr 1fr;
}

.booking-field{
    padding:12px 14px;
    background:#fff;
}

.booking-field:first-child{
    border-right:1px solid #ddd;
    border-bottom:1px solid #ddd;
}

.booking-field:last-child{
    border-bottom:1px solid #ddd;
}

.booking-field label,
.booking-full label{
    display:block;
    font-size:10px;
    text-transform:uppercase;
    font-weight:800;
    color:#222;
    margin-bottom:5px;
    letter-spacing:.3px;
}

.booking-field input,
.booking-full input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    font-size:14px;
    color:#222;
}

.booking-full{
    padding:12px 14px;
}

.calendar-wrapper{
    margin-bottom:14px;
}

.booking-btn{
    width:100%;
    border:none;
    background:#8BA394;
    color:#fff;
    padding:14px;
    border-radius:12px;
    font-size:16px;
    font-weight:800;
    cursor:pointer;
    margin-bottom:14px;
}

.booking-btn:hover{
    opacity:.95;
}

.booking-note{
    text-align:center;
    color:#666;
    font-size:13px;
    margin-bottom:18px;
}

.booking-summary{
    display:grid;
    gap:12px;
    font-size:15px;
    color:#444;
}

.booking-summary div{
    display:flex;
    justify-content:space-between;
    gap:10px;
}

.booking-total{
    padding-top:14px;
    border-top:1px solid #ebebeb;
    font-weight:800;
    color:#222 !important;
}

.flash-success,
.flash-error{
    margin-bottom:16px;
    border-radius:12px;
    padding:14px 16px;
    font-size:14px;
}

.flash-success{
    background:#ecfdf3;
    color:#166534;
    border:1px solid #bbf7d0;
}

.flash-error{
    background:#fef2f2;
    color:#991b1b;
    border:1px solid #fecaca;
}

.similar-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px;
}

.similar-card{
    border:1px solid #ebebeb;
    border-radius:18px;
    overflow:hidden;
    text-decoration:none;
    color:#222;
    background:#fff;
}

.similar-card img{
    width:100%;
    height:180px;
    object-fit:cover;
    display:block;
}

.similar-card-body{
    padding:14px;
}

.similar-card-body h4{
    margin:0 0 6px;
    font-size:17px;
}

.similar-card-body p{
    margin:0;
    color:#666;
    font-size:14px;
}

.photo-modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.72);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:9999;
    padding:30px;
}

.photo-modal.active{
    display:flex;
}

.photo-modal-content{
    background:#fff;
    border-radius:20px;
    width:min(1100px, 100%);
    max-height:90vh;
    overflow:auto;
    padding:24px;
    position:relative;
}

.photo-close{
    position:absolute;
    right:18px;
    top:14px;
    border:none;
    background:none;
    font-size:34px;
    cursor:pointer;
}

.photo-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:14px;
    margin-top:25px;
}

.photo-grid img{
    width:100%;
    height:240px;
    object-fit:cover;
    border-radius:14px;
    cursor:pointer;
}

.image-lightbox{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.88);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:10000;
}

.image-lightbox.active{
    display:flex;
}

.lightbox-content{
    position:relative;
    width:min(1000px, 92%);
    text-align:center;
}

.lightbox-content img{
    max-width:100%;
    max-height:80vh;
    border-radius:18px;
}

.lightbox-close{
    position:absolute;
    top:24px;
    right:28px;
    border:none;
    background:none;
    color:#fff;
    font-size:42px;
    cursor:pointer;
}

.lightbox-nav{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:52px;
    height:52px;
    border-radius:50%;
    border:none;
    background:rgba(255,255,255,.18);
    color:#fff;
    font-size:28px;
    cursor:pointer;
}

.lightbox-prev{
    left:24px;
}

.lightbox-next{
    right:24px;
}

.lightbox-counter{
    margin-top:16px;
    color:#fff;
    font-size:15px;
}

/* flatpickr */
.flatpickr-calendar{
    width:100% !important;
    max-width:100% !important;
    box-shadow:none !important;
    border:none !important;
    font-family:inherit !important;
}

.flatpickr-months{
    margin-bottom:8px;
}

.flatpickr-current-month{
    font-size:18px !important;
    font-weight:800 !important;
    padding-top:8px !important;
}

span.flatpickr-weekday{
    color:#666 !important;
    font-weight:700 !important;
}

.flatpickr-day{
    border-radius:999px !important;
    font-weight:600;
}

.flatpickr-day.selected,
.flatpickr-day.startRange,
.flatpickr-day.endRange{
    background:#222 !important;
    border-color:#222 !important;
    color:#fff !important;
}

.flatpickr-day.inRange{
    background:#f2f2f2 !important;
    border-color:#f2f2f2 !important;
    color:#222 !important;
    box-shadow:none !important;
}

.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover{
    color:#c3c3c3 !important;
    text-decoration:line-through;
    cursor:not-allowed;
    background:transparent !important;
}

@media (max-width: 992px){
    .detail-gallery{
        grid-template-columns:1fr;
    }

    .detail-gallery-main,
    .detail-gallery-side .photo-box:nth-child(2),
    .detail-gallery-side .photo-box:nth-child(4){
        border-radius:18px;
    }

    .detail-gallery-main{
        height:380px;
    }

    .detail-gallery-side{
        grid-template-columns:1fr 1fr;
    }

    .detail-gallery-side img{
        height:180px;
        border-radius:18px;
    }

    .detail-grid{
        grid-template-columns:1fr;
    }

    .detail-side{
        position:static;
    }

    .booking-card{
        position:static;
    }
}

@media (max-width: 576px){
    .detail-header{
        flex-direction:column;
        align-items:flex-start;
    }

    .detail-header-left h1{
        font-size:26px;
    }

    .detail-gallery-main{
        height:280px;
    }

    .detail-gallery-side{
        grid-template-columns:1fr;
    }

    .detail-gallery-side img{
        height:180px;
    }

    .photo-grid{
        grid-template-columns:1fr;
    }

    .amenities-grid,
    .similar-grid{
        grid-template-columns:1fr;
    }

    .booking-dates{
        grid-template-columns:1fr;
    }

    .booking-field:first-child{
        border-right:none;
    }
}
.amenity-item{
    font-size:15px;
    color:#222;
    padding:12px 16px;
    display:flex;
    align-items:center;
    gap:10px;
    border:1px solid #ececec;
    border-radius:999px;
    background:#fff;
}

.amenity-icon{
    font-size:20px;
    line-height:1;
}
.info-list{
    display:grid;
    gap:16px;
    padding-bottom:28px;
    border-bottom:1px solid #ebebeb;
    margin-bottom:28px;
}

.info-item{
    display:flex;
    align-items:flex-start;
    gap:14px;
    padding:16px 18px;
background:#fafafa;
    border:1px solid #ececec;
    border-radius:18px;
    box-shadow:0 6px 18px rgba(0,0,0,.04);
}

.info-icon{
    width:44px;
    height:44px;
    border-radius:14px;
    background:#f4f6f2;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    flex-shrink:0;
}

.info-text h4{
    margin:0 0 6px;
    font-size:18px;
    font-weight:800;
    color:#222;
}

.info-text p{
    margin:0;
    color:#666;
    font-size:14px;
    line-height:1.7;
}
</style>

<div class="detail-page">
    <div class="detail-container">

        <div class="detail-header">
            <div class="detail-header-left">
                <h1>{{ $logement->titre }}</h1>
                <div class="detail-subline">
                    <span>⭐ 4.95</span>
                    <span class="dot">·</span>
                    <span>120 avis</span>
                    <span class="dot">·</span>
                    <span>{{ $logement->ville }}, Maroc</span>
                </div>
            </div>

            <div class="detail-header-actions">
                <button class="detail-action-btn" onclick="goBackOrHome()">← Retour</button>
                <button class="detail-action-btn" type="button">Partager</button>
                <button class="detail-action-btn" type="button">Enregistrer</button>
            </div>
        </div>

        <div class="detail-gallery">
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

                <button type="button" class="show-all-photos" id="openPhotos">
                    Afficher toutes les photos
                </button>
            </div>

            <div class="detail-gallery-side">
                @forelse($logement->images->skip(1)->take(4) as $image)
                    <div class="photo-box">
                        <img
                            src="{{ asset('storage/' . $image->image_path) }}"
                            alt="photo logement"
                            class="gallery-image"
                            data-src="{{ asset('storage/' . $image->image_path) }}"
                        >
                    </div>
                @empty
                    <div class="photo-box"><img src="{{ asset('images/hero1.jpg') }}" alt="photo 1" class="gallery-image" data-src="{{ asset('images/hero1.jpg') }}"></div>
                    <div class="photo-box"><img src="{{ asset('images/hero2.jpg') }}" alt="photo 2" class="gallery-image" data-src="{{ asset('images/hero2.jpg') }}"></div>
                    <div class="photo-box"><img src="{{ asset('images/hero0.jpg') }}" alt="photo 3" class="gallery-image" data-src="{{ asset('images/hero0.jpg') }}"></div>
                    <div class="photo-box"><img src="{{ asset('images/hero.jpg') }}" alt="photo 4" class="gallery-image" data-src="{{ asset('images/hero.jpg') }}"></div>
                @endforelse
            </div>
        </div>

        <div class="detail-grid">
            <div class="detail-main">

                <div class="host-box">
                    <div>
                        <h2>Logement entier à {{ $logement->ville }}</h2>
                        <p>
                            {{ $logement->voyageurs }} voyageurs ·
                            {{ $logement->chambres }} chambres ·
                            {{ $logement->salles_de_bain }} salles de bain
                        </p>
                    </div>
                    <div class="host-avatar">D</div>
                </div>

          <div class="info-list">
    <div class="info-item">
        <div class="info-icon">🗝️</div>
        <div class="info-text">
            <h4>Arrivée autonome</h4>
            <p>Vous pouvez accéder au logement facilement dès votre arrivée.</p>
        </div>
    </div>

    <div class="info-item">
        <div class="info-icon">📍</div>
        <div class="info-text">
            <h4>Emplacement idéal</h4>
            <p>Le logement est situé dans une zone pratique et agréable à vivre.</p>
        </div>
    </div>

    <div class="info-item">
        <div class="info-icon">✨</div>
        <div class="info-text">
            <h4>Excellent confort</h4>
            <p>Un espace moderne, propre et bien pensé pour un séjour reposant.</p>
        </div>
    </div>
</div>

                <div class="detail-section">
                    <h3>Description</h3>
                    <p>{{ $logement->description }}</p>
                </div>

                <div class="detail-section">
                    <h3>Ce que propose ce logement</h3>
                      <div class="amenities-grid">
    <div class="amenity-item"><span class="amenity-icon">🍳</span> Cuisine équipée</div>
    <div class="amenity-item"><span class="amenity-icon">📶</span> Wifi gratuit</div>
    <div class="amenity-item"><span class="amenity-icon">📺</span> Télévision</div>
    <div class="amenity-item"><span class="amenity-icon">❄️</span> Climatisation</div>
    <div class="amenity-item"><span class="amenity-icon">🌿</span> Terrasse</div>
    <div class="amenity-item"><span class="amenity-icon">🅿️</span> Parking</div>
    <div class="amenity-item"><span class="amenity-icon">🍽️</span> Salle à manger</div>
    <div class="amenity-item"><span class="amenity-icon">🌅</span> Vue agréable</div>
</div>

                </div>

                <div class="detail-section">
                    <h3>Emplacement</h3>
                    <p>
                        Le logement se situe à {{ $logement->ville }},
                        proche des restaurants, commerces et transports.
                    </p>

                    <div class="map-box">
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
                    <h3>Avis des voyageurs</h3>
                    <div class="similar-grid">
                        <div class="similar-card">
                            <div class="similar-card-body">
                                <h4>Sarah</h4>
                                <p>⭐⭐⭐⭐⭐ Très beau logement, propre et bien situé.</p>
                            </div>
                        </div>

                        <div class="similar-card">
                            <div class="similar-card-body">
                                <h4>Yassine</h4>
                                <p>⭐⭐⭐⭐⭐ Photos conformes et très bonne expérience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="detail-side">
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

                <div class="booking-card">
                    <div class="booking-top">
                        <div class="booking-price">
                            <strong>{{ number_format($logement->prix, 2) }}</strong> <span>DH / nuit</span>
                        </div>
                        <div class="booking-rating">⭐ 4.95 · 120 avis</div>
                    </div>

                    <form action="{{ route('reservations.store') }}" method="POST" id="reservationForm">
                        @csrf
                        <input type="hidden" name="logement_id" value="{{ $logement->id }}">
                        <input type="hidden" name="date_arrivee" id="date_arrivee_hidden">
                        <input type="hidden" name="date_depart" id="date_depart_hidden">

                        <div class="booking-box">
                            <div class="booking-dates">
                                <div class="booking-field">
                                    <label>Arrivée</label>
                                    <input type="text" id="date_arrivee_display" placeholder="jj/mm/aaaa" readonly>
                                </div>

                                <div class="booking-field">
                                    <label>Départ</label>
                                    <input type="text" id="date_depart_display" placeholder="jj/mm/aaaa" readonly>
                                </div>
                            </div>

                            <div class="booking-full">
                                <label>Voyageurs</label>
                                <input type="number" name="voyageurs" min="1" value="1" required>
                            </div>
                        </div>

                        <div id="calendarWrapper" class="calendar-wrapper"></div>

                        <button class="booking-btn" type="submit">Réserver</button>
                    </form>

                    <div class="booking-note">
                        Aucun montant ne vous sera débité pour le moment
                    </div>

                    <div class="booking-summary">
                        <div>
                            <span>{{ number_format($logement->prix, 2) }} DH × <span id="nightsCount">0</span> nuits</span>
                            <span id="subtotalPrice">0 DH</span>
                        </div>
                        <div>
                            <span>Frais de service</span>
                            <span id="serviceFee">150 DH</span>
                        </div>
                        <div class="booking-total">
                            <span>Total</span>
                            <span id="totalPrice">150 DH</span>
                        </div>
                    </div>
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

<script>
function goBackOrHome() {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = "{{ route('content') }}";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const openPhotos = document.getElementById("openPhotos");
    const closePhotos = document.getElementById("closePhotos");
    const photoModal = document.getElementById("photoModal");

    const lightbox = document.getElementById("imageLightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const lightboxCounter = document.getElementById("lightboxCounter");
    const closeLightbox = document.getElementById("closeLightbox");
    const prevLightbox = document.getElementById("prevLightbox");
    const nextLightbox = document.getElementById("nextLightbox");

    const galleryImages = Array.from(document.querySelectorAll(".gallery-image"));
    const modalImages = Array.from(document.querySelectorAll(".photo-grid img"));
    const allImages = [...galleryImages.map(img => img.dataset.src), ...modalImages.map(img => img.src)];
    const uniqueImages = [...new Set(allImages)];

    let currentIndex = 0;

    if (openPhotos && photoModal) {
        openPhotos.addEventListener("click", function () {
            photoModal.classList.add("active");
        });
    }

    if (closePhotos && photoModal) {
        closePhotos.addEventListener("click", function () {
            photoModal.classList.remove("active");
        });
    }

    if (photoModal) {
        photoModal.addEventListener("click", function (e) {
            if (e.target === photoModal) {
                photoModal.classList.remove("active");
            }
        });
    }

    function openLightbox(index) {
        currentIndex = index;
        lightboxImage.src = uniqueImages[currentIndex];
        lightboxCounter.textContent = (currentIndex + 1) + " / " + uniqueImages.length;
        lightbox.classList.add("active");
    }

    function updateLightbox() {
        lightboxImage.src = uniqueImages[currentIndex];
        lightboxCounter.textContent = (currentIndex + 1) + " / " + uniqueImages.length;
    }

    galleryImages.forEach((img) => {
        img.addEventListener("click", function () {
            const src = img.dataset.src;
            const index = uniqueImages.indexOf(src);
            openLightbox(index);
        });
    });

    modalImages.forEach((img) => {
        img.addEventListener("click", function () {
            const src = img.src;
            const index = uniqueImages.indexOf(src);
            openLightbox(index);
        });
    });

    if (closeLightbox) {
        closeLightbox.addEventListener("click", function () {
            lightbox.classList.remove("active");
        });
    }

    if (prevLightbox) {
        prevLightbox.addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + uniqueImages.length) % uniqueImages.length;
            updateLightbox();
        });
    }

    if (nextLightbox) {
        nextLightbox.addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % uniqueImages.length;
            updateLightbox();
        });
    }

    if (lightbox) {
        lightbox.addEventListener("click", function (e) {
            if (e.target === lightbox) {
                lightbox.classList.remove("active");
            }
        });
    }

    const reservedDates = @json($reservedDates ?? []);
    const pricePerNight = {{ (float) $logement->prix }};

    const arrivalDisplay = document.getElementById("date_arrivee_display");
    const departureDisplay = document.getElementById("date_depart_display");
    const arrivalHidden = document.getElementById("date_arrivee_hidden");
    const departureHidden = document.getElementById("date_depart_hidden");
    const reservationForm = document.getElementById("reservationForm");

    const nightsCount = document.getElementById("nightsCount");
    const subtotalPrice = document.getElementById("subtotalPrice");
    const totalPrice = document.getElementById("totalPrice");

    function formatDateFr(dateStr) {
        const d = new Date(dateStr);
        const day = String(d.getDate()).padStart(2, '0');
        const month = String(d.getMonth() + 1).padStart(2, '0');
        const year = d.getFullYear();
        return `${day}/${month}/${year}`;
    }

    function diffNights(start, end) {
        const s = new Date(start);
        const e = new Date(end);
        const ms = e - s;
        return Math.round(ms / (1000 * 60 * 60 * 24));
    }

    function updatePrice(start, end) {
        if (!start || !end) {
            nightsCount.textContent = "0";
            subtotalPrice.textContent = "0 DH";
            totalPrice.textContent = "150 DH";
            return;
        }

        const nights = diffNights(start, end);
        const subtotal = nights * pricePerNight;
        const total = subtotal + 150;

        nightsCount.textContent = nights;
        subtotalPrice.textContent = subtotal.toFixed(2) + " DH";
        totalPrice.textContent = total.toFixed(2) + " DH";
    }

    flatpickr("#calendarWrapper", {
        inline: true,
        mode: "range",
        minDate: "today",
        locale: "fr",
        dateFormat: "Y-m-d",
        disable: reservedDates,
        showMonths: 2,
        onChange: function(selectedDates, dateStr, instance) {
            if (selectedDates.length === 1) {
                const start = instance.formatDate(selectedDates[0], "Y-m-d");
                arrivalDisplay.value = formatDateFr(start);
                arrivalHidden.value = start;
                departureDisplay.value = "";
                departureHidden.value = "";
                updatePrice(null, null);
            }

            if (selectedDates.length === 2) {
                const start = instance.formatDate(selectedDates[0], "Y-m-d");
                const end = instance.formatDate(selectedDates[1], "Y-m-d");

                arrivalDisplay.value = formatDateFr(start);
                departureDisplay.value = formatDateFr(end);
                arrivalHidden.value = start;
                departureHidden.value = end;

                updatePrice(start, end);
            }
        }
    });

    if (reservationForm) {
        reservationForm.addEventListener("submit", function (e) {
            if (!arrivalHidden.value || !departureHidden.value) {
                e.preventDefault();
                alert("اختار تاريخ arrivée و départ أولاً.");
            }
        });
    }
});
</script>
@endsection