@extends('shared.app')

@section('title', 'Expériences')

@section('content')
<style>
.experience-page{
    width:95%;
    margin:30px auto 60px;
}

.experience-hero{
    background:linear-gradient(135deg, rgba(139,163,148,.18), rgba(214,207,199,.28));
    border:1px solid rgba(51,51,51,.08);
    border-radius:28px;
    padding:48px 40px;
    margin-bottom:30px;
    box-shadow:0 12px 30px rgba(51,51,51,.06);
}

.experience-hero h1{
    font-size:44px;
    margin:0 0 12px;
    color:var(--dark);
    font-weight:800;
}

.experience-hero p{
    font-size:17px;
    color:rgba(51,51,51,.75);
    max-width:720px;
    line-height:1.8;
    margin:0;
}

.exp-section{
    margin:28px 0 40px;
    background:rgba(245,245,240,.42);
    border:1px solid rgba(51,51,51,.10);
    border-radius:20px;
    padding:18px;
    box-shadow:0 10px 24px rgba(51,51,51,.05);
}

.exp-head{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    margin-bottom:16px;
}

.exp-title{
    font-size:30px;
    font-weight:800;
    color:var(--dark);
}

.exp-sub{
    font-size:14px;
    color:rgba(51,51,51,.65);
}

.exp-cards{
    display:flex;
    gap:16px;
    overflow:auto;
    padding-bottom:8px;
    scroll-snap-type:x mandatory;
}

.exp-cards::-webkit-scrollbar{
    height:8px;
}

.exp-cards::-webkit-scrollbar-thumb{
    background:rgba(139,163,148,.55);
    border-radius:999px;
}

.exp-cards::-webkit-scrollbar-track{
    background:rgba(214,207,199,.40);
    border-radius:999px;
}

.exp-card{
    flex:0 0 260px;
    scroll-snap-align:start;
    background:#fff;
    border-radius:22px;
    overflow:hidden;
    border:1px solid rgba(51,51,51,.08);
    box-shadow:0 14px 28px rgba(51,51,51,.08);
    text-decoration:none;
}

.exp-img{
    height:190px;
    position:relative;
    overflow:hidden;
}

.exp-img img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

.exp-badge{
    position:absolute;
    top:12px;
    left:12px;
    background:rgba(255,255,255,.95);
    color:var(--dark);
    padding:6px 10px;
    border-radius:999px;
    font-size:12px;
    font-weight:700;
}

.exp-body{
    padding:16px;
}

.exp-body h3{
    font-size:20px;
    margin:0 0 8px;
    color:var(--dark);
    font-weight:800;
}

.exp-meta{
    font-size:14px;
    color:rgba(51,51,51,.70);
    margin-bottom:10px;
    line-height:1.6;
}

.exp-price{
    font-size:15px;
    font-weight:800;
    color:var(--dark);
}

.exp-price span{
    color:rgba(51,51,51,.62);
    font-weight:500;
}

@media (max-width: 900px){
    .experience-hero{
        padding:30px 22px;
    }

    .experience-hero h1{
        font-size:32px;
    }

    .exp-title{
        font-size:24px;
    }

    .exp-card{
        flex-basis:220px;
    }

    .exp-img{
        height:165px;
    }
}
</style>

<div class="experience-page">
    <div class="experience-hero">
        <h1>Vivez le Maroc autrement</h1>
        <p>
            Découvrez des expériences uniques à travers plusieurs villes du Maroc :
            visites guidées, cours de cuisine, surf, excursions, bien-être et aventures.
        </p>
    </div>

    <section class="exp-section">
        <div class="exp-head">
            <div>
                <div class="exp-title">Expériences populaires</div>
                <div class="exp-sub">Des activités appréciées par les voyageurs</div>
            </div>
        </div>

        <div class="exp-cards">
            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/fes_guide.jpg') }}" alt="Visite guidée à Fès">
                    <div class="exp-badge">Guide local</div>
                </div>
                <div class="exp-body">
                    <h3>Visite guidée à Fès</h3>
                    <div class="exp-meta">Fès · 2h30 · 4.9 ★</div>
                    <div class="exp-price">250 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/cours_cuisine.jpg') }}" alt="Cours de cuisine à Marrakech">
                    <div class="exp-badge">Cuisine</div>
                </div>
                <div class="exp-body">
                    <h3>Cours de cuisine</h3>
                    <div class="exp-meta">Marrakech · 3h · 4.8 ★</div>
                    <div class="exp-price">320 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/surf_agadir.jpg') }}" alt="Surf à Agadir">
                    <div class="exp-badge">Aventure</div>
                </div>
                <div class="exp-body">
                    <h3>Surf à Agadir</h3>
                    <div class="exp-meta">Agadir · 2h · 4.7 ★</div>
                    <div class="exp-price">300 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/chefchaouen_excursion.jpg') }}" alt="Excursion à Chefchaouen">
                    <div class="exp-badge">Excursion</div>
                </div>
                <div class="exp-body">
                    <h3>Excursion à Chefchaouen</h3>
                    <div class="exp-meta">Chefchaouen · Journée · 4.9 ★</div>
                    <div class="exp-price">450 DH <span>par personne</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="exp-section">
        <div class="exp-head">
            <div>
                <div class="exp-title">Bien-être & détente</div>
                <div class="exp-sub">Prenez soin de vous avec des expériences relaxantes</div>
            </div>
        </div>
{{-- <img src="{{ asset('images/experiences/hammam_spa.jpg') }}" alt="Hammam & Spa">
<img src="{{ asset('images/experiences/massage_relaxant.jpg') }}" alt="Massage relaxant">
<img src="{{ asset('images/experiences/yoga_en_terrasse.jpg') }}" alt="Yoga en terrasse"> --}}
        <div class="exp-cards">
            <div class="exp-card">
                <div class="exp-img">
                   <img src="{{ asset('images/experiences/spa_maroc.jpg') }}" alt="Hammam & Spa">
                    <div class="exp-badge">Relax</div>
                </div>
                <div class="exp-body">
                    <h3>Hammam & Spa</h3>
                    <div class="exp-meta">Casablanca · 1h30 · 4.8 ★</div>
                    <div class="exp-price">280 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/massage_relaxant.jpg') }}" alt="Massage relaxant">
                    <div class="exp-badge">Bien-être</div>
                </div>
                <div class="exp-body">
                    <h3>Massage relaxant</h3>
                    <div class="exp-meta">Rabat · 1h · 4.7 ★</div>
                    <div class="exp-price">220 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
<img src="{{ asset('images/experiences/yoga_en_terrasse.png') }}" alt="Yoga en terrasse">                     <div class="exp-badge">Zen</div>
                </div>
                <div class="exp-body">
                    <h3>Yoga en terrasse</h3>
                    <div class="exp-meta">Essaouira · 1h15 · 4.9 ★</div>
                    <div class="exp-price">180 DH <span>par personne</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="exp-section">
        <div class="exp-head">
            <div>
                <div class="exp-title">Aventures en plein air</div>
                <div class="exp-sub">Bougez, explorez et profitez du grand air</div>
            </div>
        </div>

        <div class="exp-cards">
            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/randonnee_ifrane.jpg') }}" alt="Randonnée à Ifrane">
                    <div class="exp-badge">Nature</div>
                </div>
                <div class="exp-body">
                    <h3>Randonnée à Ifrane</h3>
                    <div class="exp-meta">Ifrane · 4h · 4.8 ★</div>
                    <div class="exp-price">260 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/randonnee_ifrane.jpg') }}" alt="Balade à cheval">
                    <div class="exp-badge">Outdoor</div>
                </div>
                <div class="exp-body">
                    <h3>Balade à cheval</h3>
                    <div class="exp-meta">Marrakech · 2h · 4.7 ★</div>
                    <div class="exp-price">340 DH <span>par personne</span></div>
                </div>
            </div>

            <div class="exp-card">
                <div class="exp-img">
                    <img src="{{ asset('images/experiences/randonnee_ifrane.jpg') }}" alt="Quad dans le désert">
                    <div class="exp-badge">Adrénaline</div>
                </div>
                <div class="exp-body">
                    <h3>Quad dans le désert</h3>
                    <div class="exp-meta">Ouarzazate · 2h30 · 4.9 ★</div>
                    <div class="exp-price">500 DH <span>par personne</span></div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection