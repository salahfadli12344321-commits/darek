@extends('shared.app')






@section('content')


<style>
    .section{
        margin:22px auto 50px;
        width:95%;
        background:rgba(245,245,240,.42);
        border:1px solid rgba(51,51,51,.10);
        border-radius:18px;
        padding:16px;
        box-shadow:0 10px 30px rgba(51,51,51,.06);
    }

    .section-head{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:12px;
        margin-bottom:14px;
    }

    .section-title{
        font-size:30px;
        font-weight:800;
        letter-spacing:.2px;
        color:var(--dark);
    }

    .section-link{
        opacity:.9;
        cursor:pointer;
        font-weight:700;
        display:flex;
        align-items:center;
        gap:8px;
        color:var(--sage);
        font-size:22px;
        background:none;
        border:none;
    }

    .slider{
        position:relative;
    }

    .cards{
        display:flex;
        gap:14px;
        overflow:auto;
        scroll-snap-type:x mandatory;
        padding-bottom:8px;
    }

    .cards::-webkit-scrollbar{
        height:8px;
    }

    .cards::-webkit-scrollbar-thumb{
        background:rgba(139,163,148,.55);
        border-radius:999px;
    }

    .cards::-webkit-scrollbar-track{
        background:rgba(214,207,199,.40);
        border-radius:999px;
    }

    .card{
        flex:0 0 180px;
        scroll-snap-align:start;
        background:transparent;
    }

    .card-img{
        height:170px;
        border-radius:18px;
        background:rgba(214,207,199,.18);
        border:1px solid rgba(51,51,51,.08);
        position:relative;
        overflow:hidden;
        box-shadow:0 14px 30px rgba(51,51,51,.12);
    }

    .card-img img{
        width:100%;
        height:100%;
        object-fit:cover;
        display:block;
    }

    .badge{
        position:absolute;
        top:10px;
        left:10px;
        padding:6px 10px;
        border-radius:999px;
        font-size:12px;
        font-weight:700;
        background:rgba(245,245,240,.94);
        color:var(--dark);
        z-index:2;
    }

    .heart{
        position:absolute;
        top:10px;
        right:10px;
        width:30px;
        height:30px;
        border-radius:50%;
        background:rgba(51,51,51,.35);
        border:1px solid rgba(245,245,240,.20);
        display:flex;
        align-items:center;
        justify-content:center;
        cursor:pointer;
        z-index:2;
    }

    .heart svg{
        width:16px;
        height:16px;
        fill:none;
        stroke:var(--text-light);
        stroke-width:2;
        opacity:.95;
    }

    .card-body{
        padding:10px 2px 0;
        font-size:13px;
        color:var(--dark);
        background:transparent;
    }

    .card-title{
        font-weight:800;
        font-size:14px;
        margin-bottom:4px;
        color:var(--dark);
    }

    .card-title a{
        color:var(--dark);
        text-decoration:none;
    }

    .card-sub{
        opacity:.85;
        margin-bottom:6px;
        font-size:12px;
        color:rgba(51,51,51,.72);
    }

    .card-price{
        display:flex;
        align-items:center;
        gap:8px;
        font-weight:800;
        font-size:13px;
        color:var(--dark);
    }

    .star{
        opacity:.95;
        font-weight:700;
        font-size:12px;
        color:var(--sage);
    }

    .arrow{
        position:absolute;
        top:58px;
        width:40px;
        height:40px;
        border-radius:50%;
        border:1px solid rgba(51,51,51,.12);
        background:rgba(51,51,51,.68);
        display:flex;
        align-items:center;
        justify-content:center;
        cursor:pointer;
        user-select:none;
        color:var(--text-light);
        z-index:5;
    }

    .arrow:hover{
        background:rgba(51,51,51,.90);
    }

    .arrow.left{
        left:-10px;
    }

    .arrow.right{
        right:-10px;
    }

    .arrow span{
        font-size:22px;
        line-height:1;
    }

    .page-box{
        width:95%;
        margin:22px auto 50px;
        background:rgba(245,245,240,.55);
        border:1px solid rgba(51,51,51,.10);
        border-radius:18px;
        padding:30px;
        box-shadow:0 10px 24px rgba(51,51,51,.06);
    }

    .page-box h1{
        font-size:32px;
        margin-bottom:12px;
        color:var(--dark);
    }

    .page-box p{
        color:rgba(51,51,51,.78);
        font-size:16px;
        line-height:1.7;
    }
    @media (max-width: 900px){
        .tabs{
            display:none;
        }

        .section-title{
            font-size:24px;
        }

        .card{
            flex-basis:160px;
        }

        .card-img{
            height:155px;
        }

        .search-bar{
            flex-wrap:wrap;
            border-radius:24px;
        }

        .divider{
            display:none;
        }

        .search-item{
            width:100%;
        }
    }





.search-wrap{
    margin-top: 20px;
    margin-bottom: 30px;
    display: flex;
    justify-content: center;
}

.search-bar{
    width: 100%;
    max-width: 850px;
    background: #f8f7f2;
    border: 1px solid #e7e2d8;
    border-radius: 999px;
    padding: 6px 8px;
    display: flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.06);
    position: relative;
    z-index: 10;
}

.search-item{
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 8px 18px;
    min-width: 0;
    position: relative;
}

.search-item small{
    font-size: 13px;
    font-weight: 700;
    color: #444;
    margin-bottom: 4px;
}

.search-item input{
    border: none;
    outline: none;
    background: transparent;
    font-size: 15px;
    color: #333;
    width: 100%;
}

.search-item input::placeholder{
    color: #8a8a8a;
}

.divider{
    width: 1px;
    height: 42px;
    background: #ddd8cd;
}

.destination{
    position: relative;
}

.dropdown{
    position: absolute;
    top: 65px;
    left: 0;
    width: 260%;
    background: white;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
    border: 1px solid #ece7de;
    display: none;
    z-index: 9999;
    max-height: 220px;
    overflow-y: hidden;
}
.dropdown div{
    padding:12px 16px;
    cursor:pointer;
}

.dropdown div:hover{
    background:#f5f5f5;
}

.dropdown .item{
    padding: 12px 16px;
    cursor: pointer;
    font-size: 14px;
    color: #333;
}

.dropdown .item:hover{
    background: #f7f5ef;
}

.search-btn{
    width: 56px;
    height: 56px;
    border: none;
    border-radius: 50%;
    background: #cfd6b8;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    flex-shrink: 0;
    transition: 0.2s ease;
}

.search-btn:hover{
    transform: scale(1.05);
}

.search-icon-wrap{
    display: flex;
    align-items: center;
    justify-content: center;
}

.search-icon{
    width: 28px;
    height: 28px;
    fill: #4d5342;
}

</style>
{{-- 

  <div class="container search-wrap">
        <div class="search-bar">
            <div class="search-item destination">
                <small>Destination</small>
                <input type="text" placeholder="Rechercher une destination" id="destinationInput">
                <div class="dropdown" id="dropdown"></div>
            </div>

            <div class="divider"></div>

            <div class="search-item">
                <small>Dates</small>
                <input type="date">
            </div>

            <div class="divider"></div>

            <div class="search-item">
                <small>Voyageurs</small>
                <input type="text" placeholder="Ajouter des voyageurs">
            </div>

            <button class="search-btn" aria-label="Search">
                <span class="search-icon-wrap">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21 20l-5.6-5.6a7 7 0 10-1.4 1.4L20 21zM5 10a5 5 0 1110 0A5 5 0 015 10z"/>
                    </svg>
                </span>
            </button>
        </div>
    </div>
   


<section class="section">
    <div class="section-head">
        <div class="section-title">Maisons populaires à Casablanca</div>
        <button class="section-link">→</button>
    </div>

    <div class="slider">
        <div class="arrow left" title="Prev"><span>‹</span></div>
        <div class="arrow right" title="Next"><span>›</span></div>

        <div class="cards">
            <div class="card">
              <div class="card-img">
    <a href="{{ route('logement.show', 1) }}">
        <img src="{{ asset('images/hero.jpg') }}" alt="Appartement à Fes">
    </a>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement à Casablanca</div>
                    <div class="card-sub">11–19 mars</div>
                    <div class="card-price">460DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imagg.png') }}" alt="Studio moderne à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Studio moderne à Casablanca</div>
                    <div class="card-sub">13–15 mars</div>
                    <div class="card-price">500DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero1.jpg') }}" alt="Appartement avec vue à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement avec vue</div>
                    <div class="card-sub">14–18 mars</div>
                    <div class="card-price">380DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero4.jpg') }}" alt="Appartement en bord de mer">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement en bord de mer</div>
                    <div class="card-sub">13–15 mars</div>
                    <div class="card-price">580DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero2.jpg') }}" alt="Appartement élégant à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement élégant</div>
                    <div class="card-sub">20–24 mars</div>
                    <div class="card-price">350DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Logement cosy à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title"><a href="#">Logement cosy</a></div>
                    <div class="card-sub">13–15 mars</div>
                    <div class="card-price">250DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imagg.png') }}" alt="Appartement El Maarif">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . El Maarif</div>
                    <div class="card-sub">14–18 avril</div>
                    <div class="card-price">380DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imag.jpeg') }}" alt="Appartement Bourgogne">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Bourgogne</div>
                    <div class="card-sub">22–25 avril</div>
                    <div class="card-price">300DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero.jpg') }}" alt="Appartement avec vue à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement avec vue</div>
                    <div class="card-sub">28–31 avril</div>
                    <div class="card-price">300DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/casa10.jpeg') }}" alt="Appartement à Casablanca">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement</div>
                    <div class="card-sub">14–18 avril</div>
                    <div class="card-price">380DH par nuit</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-head">
        <div class="section-title">Hôtels à la une(Fes)</div>
        <button class="section-link">→</button>
    </div>

    <div class="slider">
        <div class="arrow left" title="Prev"><span>‹</span></div>
        <div class="arrow right" title="Next"><span>›</span></div>

        <div class="cards">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote1.jpeg') }}" alt="Hôtels Mérinides">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart" title="Save">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Hôtels Mérinides</div>
                    <div class="card-sub">à partire de 500DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote2.jpeg') }}" alt="Palais Medina & Spa">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Palais Medina & Spa</div>
                    <div class="card-sub">à partire de 450DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote3.jpeg') }}" alt="Riad Fes">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Riad Fes</div>
                    <div class="card-sub">à partire de 600DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote4.jpeg') }}" alt="Palais Faraj Suites & Spa">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Palais Faraj Suites & Spa</div>
                    <div class="card-sub">à partire de 650DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote5.jpeg') }}" alt="Hotel Sahari">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Hotel Sahari</div>
                    <div class="card-sub">à partire de 700DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote6.jpeg') }}" alt="Riad Kawan">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title"><a href="#">Riad Kawan</a></div>
                    <div class="card-sub">à partire de 300DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote7.jpeg') }}" alt="Palais Amani">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Palais Amani</div>
                    <div class="card-sub">à partire de 350DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote8.jpeg') }}" alt="Hotel Zalagh">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Hotel Zalagh</div>
                    <div class="card-sub">à partire de 900DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote9.jpeg') }}" alt="Hotel Marriott">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Hotel Marriott</div>
                    <div class="card-sub">à partire de 400DH</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hote10.jpeg') }}" alt="Dar Bensouda">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Dar Bensouda</div>
                    <div class="card-sub">à partire de 450DH</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-head">
        <div class="section-title">Maisons populaires à Tanger</div>
        <button class="section-link">→</button>
    </div>

    <div class="slider">
        <div class="arrow left" title="Prev"><span>‹</span></div>
        <div class="arrow right" title="Next"><span>›</span></div>

        <div class="cards">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imag.jpeg') }}" alt="Maison à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart" title="Save">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Villa à Tanger</div>
                    <div class="card-sub">12–16 avril</div>
                    <div class="card-price">1800DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero2.jpg') }}" alt="Appartement à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement vue mer</div>
                    <div class="card-sub">18–22 avril</div>
                    <div class="card-price">520DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero1.jpg') }}" alt="Maison moderne à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Maison moderne</div>
                    <div class="card-sub">21–24 avril</div>
                    <div class="card-price">700DH par nuit</div>
                </div>
            </div>

            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero3.jpg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Logement cosy</div>
                    <div class="card-sub">25–28 avril</div>
                    <div class="card-price">430DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero4.jpg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Tanger</div>
                    <div class="card-sub">20–24 avril</div>
                    <div class="card-price">340DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero2.jpg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Tanger</div>
                    <div class="card-sub">14–18 avril</div>
                    <div class="card-price">840DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imag.jpeg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Tanger</div>
                    <div class="card-sub">8–12 avril</div>
                    <div class="card-price">660DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/herp.jpg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Tanger</div>
                    <div class="card-sub">14–21 avril</div>
                    <div class="card-price">950DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/hero0.jpg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement . Tanger</div>
                    <div class="card-sub">7–11avril</div>
                    <div class="card-price">1330DH par nuit</div>
                </div>
            </div>
             <div class="card">
                <div class="card-img">
                    <img src="{{ asset('images/imag.jpeg') }}" alt="Logement cosy à Tanger">
                    <div class="badge">Coup de cœur</div>
                    <div class="heart">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 21s-7-4.6-9.3-8.5C.7 9.1 2.4 6.5 5.4 6.2c1.7-.2 3.2.6 4.1 1.8.9-1.2 2.4-2 4.1-1.8 3 .3 4.7 2.9 2.7 6.3C19 16.4 12 21 12 21z"/>
                        </svg>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-title">Appartement en Residence</div>
                    <div class="card-sub">14–18 avril</div>
                    <div class="card-price">510DH par nuit</div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')


@endsection --}}
@extends('shared.app')

@section('content')

@forelse($logementsParVille as $ville => $logements)
    <section class="section">
        <div class="section-head">
            <div class="section-title">Logements à {{ $ville }}</div>
        </div>

        <div class="cards">
            @foreach($logements as $logement)
                <div class="card">
                    <div class="card-img">
                        <a href="{{ route('logement.show', $logement->id) }}">
                            <img 
                                src="{{ $logement->image_principale ? asset('storage/' . $logement->image_principale) : asset('images/hero.jpg') }}" 
                                alt="{{ $logement->titre }}"
                            >
                        </a>
                        <div class="badge">{{ $logement->type_bien }}</div>
                    </div>

                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('logement.show', $logement->id) }}">
                                {{ $logement->titre }}
                            </a>
                        </div>

                        <div class="card-sub">{{ $logement->ville }}</div>

                        <div class="card-price">
                            {{ $logement->prix }} {{ $logement->devise }} par {{ $logement->type_location }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@empty
    <div class="section">
        <p>Aucun logement trouvé.</p>
    </div>
@endforelse

@endsection