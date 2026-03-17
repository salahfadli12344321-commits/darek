@extends('shared.app')

@section('title', 'Dark')

 <script>
        document.addEventListener("DOMContentLoaded", function () {
            const input = document.getElementById("destinationInput");
            const dropdown = document.getElementById("dropdown");
            const globeBtn = document.getElementById("globeBtn");
            const globeMenu = document.getElementById("globeMenu");
            const userBtn = document.getElementById("userBtn");
            const userMenu = document.getElementById("userMenu");

            const cities = [
                "Marrakech",
                "Casablanca",
                "Rabat",
                "Tanger",
                "Agadir",
                "Fès",
                "Oujda",
                "Chefchaouen",
                "Salé",
                "Meknés",
                "Oujda",
                "Kénitra",
                "Tétouan",
                "Safi",
                "El Jadida",
                "Mohammédia",
                "Nador",
                "Taza",
                "Dakhla",
                "Essaouira",
                "El Houssima",
                "Ifrane"
            ];

            if (input && dropdown) {
                input.addEventListener("input", function () {
                    const value = this.value.toLowerCase().trim();
                    dropdown.innerHTML = "";

                    if (value === "") {
                        dropdown.style.display = "none";
                        return;
                    }

                    const filtered = cities.filter(city =>
                        city.toLowerCase().includes(value)
                    );

                    filtered.forEach(city => {
                        const div = document.createElement("div");
                        div.className = "dd-item";
                        div.innerText = city;

                        div.onclick = function () {
                            input.value = city;
                            dropdown.style.display = "none";
                        };

                        dropdown.appendChild(div);
                    });

                    dropdown.style.display = filtered.length ? "block" : "none";
                });
            }

            function toggle(menu) {
                if (!menu) return;
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            }

            if (globeBtn && globeMenu) {
                globeBtn.onclick = function (e) {
                    e.stopPropagation();
                    if (userMenu) userMenu.style.display = "none";
                    toggle(globeMenu);
                };
            }

            if (userBtn && userMenu) {
                userBtn.onclick = function (e) {
                    e.stopPropagation();
                    if (globeMenu) globeMenu.style.display = "none";
                    toggle(userMenu);
                };
            }

            document.addEventListener("click", function (e) {
                if (!e.target.closest(".destination") && dropdown) {
                    dropdown.style.display = "none";
                }

                if (!e.target.closest(".icon-menu")) {
                    if (globeMenu) globeMenu.style.display = "none";
                    if (userMenu) userMenu.style.display = "none";
                }
            });

            const allCards = document.querySelectorAll(".cards");

            document.querySelectorAll(".arrow.left").forEach((btn, index) => {
                btn.onclick = function () {
                    allCards[index].scrollBy({
                        left: -420,
                        behavior: "smooth"
                    });
                };
            });

            document.querySelectorAll(".arrow.right").forEach((btn, index) => {
                btn.onclick = function () {
                    allCards[index].scrollBy({
                        left: 420,
                        behavior: "smooth"
                    });
                };
            });

            document.querySelectorAll(".card-img img, .logo-img").forEach(img => {
                img.addEventListener("error", function () {
                    this.src = "/images/default.jpg";
                });
            });
        });
    </script>

          
</header> 
@section('content')

<style>
 










    .search-wrap{
        display:flex;
        justify-content:center;
    }

    .search-bar{
        width:min(650px,100%);
        display:flex;
        align-items:center;
        background:rgba(245,245,240,.72);
        border:1px solid rgba(51,51,51,.10);
        backdrop-filter:blur(10px);
        border-radius:40px;
        padding:10px;
        box-shadow:0 16px 40px rgba(51,51,51,.12);
    }

    .search-item{
        flex:1;
        padding:10px 14px;
        min-width:0;
    }

    .search-item small{
        font-weight:bold;
        display:block;
        margin-bottom:4px;
        color:var(--sage);
    }

    .search-item input{
        border:0;
        outline:none;
        width:100%;
        background:transparent;
        color:var(--dark);
        font-size:14px;
    }

    .search-item input::placeholder{
        color:rgba(51,51,51,.55);
    }

    .divider{
        width:1px;
        height:40px;
        background:rgba(51,51,51,.12);
    }

    .search-btn{
        border:0;
        background:transparent;
        cursor:pointer;
        margin-left:10px;
        padding:0;
    }

    .search-icon-wrap{
        width:56px;
        height:56px;
        border-radius:50%;
        background:linear-gradient(180deg, #8BA394 0%, #D6CFC7 100%);
        border:1px solid rgba(51,51,51,.10);
        display:flex;
        align-items:center;
        justify-content:center;
    }

    .search-icon{
        width:26px;
        height:26px;
        fill:var(--dark);
    }

    .destination{
        position:relative;
    }

    .dropdown{
        position:absolute;
        top:62px;
        left:0;
        width:100%;
        border-radius:14px;
        display:none;
        padding:10px;
        z-index:998;
        background:rgba(51,51,51,.96);
        border:1px solid rgba(245,245,240,.12);
        box-shadow:0 18px 40px rgba(0,0,0,.20);
    }

    .dd-item{
        padding:10px;
        cursor:pointer;
        border-radius:10px;
        color:var(--text-light);
    }

    .dd-item:hover{
        background:rgba(139,163,148,.20);
    }

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










    .footer{
  grid-area:footer;
  background: var(--ivory);
  border-top:1px solid #ddd;
  padding:40px 20px;
  color: var(--deep-gray);
}

.footer h5{
  font-size:16px;
  font-weight:700;
  margin-bottom:14px;
  color: var(--deep-gray);
}

.footer ul{
  list-style:none;
  padding:0;
}

.footer li{
  font-size:14px;
  margin-bottom:10px;
  color:#555;
  cursor:pointer;
}

.footer li:hover{
  text-decoration:underline;
  color: var(--soft-sage);
}

.footer-bottom{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-top:20px;
  font-size:14px;
  color:#555;
}

.footer-lang{
  display:flex;
  gap:14px;
  align-items:center;
}


.footer{
  grid-area:footer;
  background: var(--ivory);
  border-top:1px solid #ddd;
  padding:40px 20px;
  color: var(--deep-gray);
}

.footer h5{
  font-size:16px;
  font-weight:700;
  margin-bottom:14px;
  color: var(--deep-gray);
}

.footer ul{
  list-style:none;
  padding:0;
}

.footer li{
  font-size:14px;
  margin-bottom:10px;
  color:#555;
  cursor:pointer;
}

.footer li:hover{
  text-decoration:underline;
  color: var(--soft-sage);
}

.footer-bottom{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-top:20px;
  font-size:14px;
  color:#555;
}

.footer-lang{
  display:flex;
  gap:14px;
  align-items:center;
}








body{
margin:0;
font-family:Arial;
background:#fafafa;
}

.header{
padding:20px;
}

.header-box{
max-width:1200px;
margin:auto;
background:#f7f5ef;
border-radius:25px;
padding:18px 30px;
display:flex;
align-items:center;
justify-content:space-between;
box-shadow:0 8px 20px rgba(0,0,0,0.05);
}

/* logo */

.brand{
display:flex;
align-items:center;
gap:10px;
}

.host-avatar{
width:50px;
height:50px;
background:#9aaa8c;
border-radius:50%;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
font-size:22px;
}

.brand-text{
font-size:18px;
font-weight:bold;
}

/* navigation */

.main-nav{
display:flex;
gap:35px;
}

.nav-link{
text-decoration:none;
color:#333;
font-size:16px;
padding-bottom:6px;
position:relative;
}

.nav-link.active::after{
content:"";
position:absolute;
bottom:0;
left:0;
width:100%;
height:2px;
background:#333;
}

/* right icons */

.header-actions{
display:flex;
gap:10px;
}

.icon-btn{
width:40px;
height:40px;
border-radius:50%;
border:none;
background:#ece9df;
cursor:pointer;
font-size:18px;
}

/* dropdown */

.icon-menu{
position:relative;
}

.menu{
position:absolute;
top:50px;
right:0;
background:white;
border-radius:12px;
width:200px;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
display:none;
padding:10px;
}

.menu-item{
padding:10px;
cursor:pointer;
border-radius:8px;
}

.menu-item:hover{
background:#f1f1f1;
}

.menu-divider{
height:1px;
background:#ddd;
margin:6px 0;
}
</style>
<div class="hero">
    <div class="overlay"></div>

    <div class="topbar">
        
        {{-- <div class="brand">
            <img src="{{ asset('images/log.png') }}" class="logo-img" alt="Dark logo">
            <span class="logo-text">Dark</span>
        </div> --}}

     {{-- <header class="header">
    <div class="container header-top">
        <div class="logo">
             <div class="host-avatar-box">
                            <div class="host-avatar">D</div>
                        </div>
            <div class="logo-text">Dark</div>
        </div>

        <div class="tabs">
            <a href="{{ route("content") }}" >
                Logements
            </a>

            <a href="">
                Expériences
            </a>

            <a href="{{ route("pages.create") }}">
                Devenir hôte
            </a>
        </div>
        <div class="header-actions">
            <div class="icon-menu">
                <button class="icon-btn" id="globeBtn">
                    <svg class="globe-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm7.9 9h-3.2a14 14 0 00-1.3-5A8 8 0 0119.9 11zM12 4c1 1.3 1.8 3.1 2.1 5H9.9C10.2 7.1 11 5.3 12 4zM4.1 13h3.2a14 14 0 001.3 5A8 8 0 014.1 13zm3.2-2H4.1a8 8 0 014.5-5 14 14 0 00-1.3 5zM12 20c-1-1.3-1.8-3.1-2.1-5h4.2c-.3 1.9-1.1 3.7-2.1 5zm3.4-2a14 14 0 001.3-5h3.2a8 8 0 01-4.5 5z"/>
                    </svg>
                </button>

                <div class="menu" id="globeMenu">
                    <div class="menu-item">Français</div>
                    <div class="menu-item">English</div>
                    <div class="menu-item">العربية</div>
                </div>
            </div>

            <div class="icon-menu">
                <button class="icon-btn" id="userBtn" aria-label="Menu">☰</button>

                <div class="menu" id="userMenu">
                    <div class="menu-item">Se connecter</div>
                    <div class="menu-item">S’inscrire</div>
                    <div class="menu-divider"></div>
                    <div class="menu-item">Favoris</div>
                </div>
            </div>
        </div>
    </div>

   

          
</header>  --}}

    <div class="center">
        <div class="tagline">AGENCE DU LOGEMENT</div>
        <div class="logo-script">Dark</div>

     <form class="search search-lux" action="/home" method="GET" autocomplete="off">
    <div class="search-destination">
        <div class="search-label">
            <span class="search-label-icon">🏡</span>
            <span>Type de logement</span>
        </div>

        <input
            type="text"
            id="villeInput"
            name="type"
            placeholder="Villa, riad, appartement, hôtel..."
        >

        <div class="custom-list" id="villeList">
            <div class="custom-item" data-value="Villa">
                <span class="city-icon">🏖️</span>
                <div>
                    <strong>Villa</strong>
                    <small>Séjour spacieux et premium</small>
                </div>
            </div>

            <div class="custom-item" data-value="Riad">
                <span class="city-icon">🕌</span>
                <div>
                    <strong>Riad</strong>
                    <small>Ambiance marocaine authentique</small>
                </div>
            </div>

            <div class="custom-item" data-value="Appartement">
                <span class="city-icon">🏢</span>
                <div>
                    <strong>Appartement</strong>
                    <small>Confort urbain et moderne</small>
                </div>
            </div>

            <div class="custom-item" data-value="Hôtel">
                <span class="city-icon">🛎️</span>
                <div>
                    <strong>Hôtel</strong>
                    <small>Service et séjour pratique</small>
                </div>
            </div>

            <div class="custom-item" data-value="Maison">
                <span class="city-icon">🏠</span>
                <div>
                    <strong>Maison</strong>
                    <small>Idéal pour familles et groupes</small>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="search-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
            <path d="M18.9,16.776A10.539,10.539,0,1,0,16.776,18.9l5.1,5.1L24,21.88ZM10.5,18A7.5,7.5,0,1,1,18,10.5,7.507,7.507,0,0,1,10.5,18Z"></path>
        </svg>
    </button>
</form>
    </div>
</div>

@endsection

