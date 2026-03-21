<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DARK')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Pacifico&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <header class="top-header">

<div class="top-header-box">

<div class="top-brand">
<div class="top-avatar">D</div>
<span class="top-logo-text">Dark</span>
</div>

<nav class="top-nav">
<a href="{{ route('content') }}" class="top-link active">Logements</a>
<a href="{{ route('experiences.index') }}" class="nav-link">Expériences</a><a href="{{ route('pages.create') }}" class="top-link">Devenir hôte</a>
</nav>

<div class="top-actions">

<div class="top-dropdown">
<button class="top-btn" id="langBtn">🌐</button>

<div class="top-menu" id="langMenu">
<div class="top-item">Français</div>
<div class="top-item">English</div>
<div class="top-item">العربية</div>
</div>
</div>

<div class="top-dropdown">
<button class="top-btn" id="userBtn">☰</button>

<div class="top-menu" id="userMenu">
<div class="top-item">Se connecter</div>
<div class="top-item">S’inscrire</div>
<div class="top-line"></div>
<div class="top-item">Favoris</div>
</div>
</div>

</div>

</div>
</header>

    <style>
/* header */
  .top-header{
padding:20px;
}

.top-header-box{
max-width:1200px;
margin:auto;
background:#f7f5ef;
border-radius:25px;
padding:18px 28px;
display:flex;
align-items:center;
justify-content:space-between;
box-shadow:0 8px 20px rgba(0,0,0,0.05);
position:relative;
z-index:9999;
}

/* logo */

.top-brand{
display:flex;
align-items:center;
gap:10px;
}

.top-avatar{
width:50px;
height:50px;
border-radius:50%;
background:#9aaa8c;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
font-size:22px;
}

.top-logo-text{
font-size:18px;
font-weight:bold;
}

/* navigation */

.top-nav{
display:flex;
gap:35px;
}

.top-link{
text-decoration:none;
color:#333;
font-size:16px;
padding-bottom:6px;
position:relative;
}

.top-link.active::after{
content:"";
position:absolute;
left:0;
bottom:0;
width:100%;
height:2px;
background:#333;
}

/* right icons */

.top-actions{
display:flex;
gap:10px;
}

.top-btn{
width:40px;
height:40px;
border-radius:50%;
border:none;
background:#ece9df;
cursor:pointer;
font-size:18px;
}

/* dropdown */

.top-dropdown{
position:relative;
}

.top-menu{
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

.top-item{
padding:10px;
cursor:pointer;
border-radius:8px;
}

.top-item:hover{
background:#f1f1f1;
}

.top-line{
height:1px;
background:#ddd;
margin:6px 0;
}






















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



        :root{
            --ivory:#F5F5F0;
            --charcoal:#333333;
            --sand:#D6CFC7;
            --sage:#B0C3B4;
            --sage-dark:#94A99A;
            --white:#ffffff;
            --text:#333333;
            --text-soft:#6f6f6f;
            --line:rgba(51,51,51,0.10);
            --shadow:0 18px 45px rgba(51,51,51,0.08);
        }

        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        html,body{
            width:100%;
            overflow-x:hidden;
        }

        body{
            font-family:"Poppins","Inter",sans-serif;
            background:var(--ivory);
            color:var(--text);
        }

        a{
            text-decoration:none;
            color:inherit;
        }

        .container{
            width:min(1280px, 92%);
            margin:auto;
        }


        /* HERO */
        .hero{
            min-height:100vh;
            position:relative;
            background:
                linear-gradient(rgba(51,51,51,0.34), rgba(51,51,51,0.48)),
                url("/images/imagg.png") center/cover no-repeat;
            color:#fff;
        }

        .overlay{
            position:absolute;
            inset:0;
            background:linear-gradient(
                180deg,
                rgba(176,195,180,0.14) 0%,
                rgba(51,51,51,0.28) 55%,
                rgba(51,51,51,0.42) 100%
            );
        }

        .center{
            position:relative;
            z-index:2;
            min-height:calc(100vh - 90px);
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            gap:16px;
            padding:40px 16px 120px;
        }

        .tagline{
            font-size:12px;
            letter-spacing:5px;
            text-transform:uppercase;
            color:rgba(255,255,255,0.85);
        }

        .logo-script{
            font-family:"Pacifico", cursive;
            font-size:86px;
            line-height:1;
            color:#fff;
        }

        /* SEARCH */
        .search{
            position:relative;
            z-index:20;
            width:min(760px,100%);
            display:flex;
            align-items:center;
            gap:14px;
            padding:10px 12px 10px 22px;
            border-radius:999px;
            background:rgba(245,245,240,0.18);
            border:1px solid rgba(255,255,255,0.22);
            backdrop-filter:blur(14px);
            box-shadow:var(--shadow);
        }

        .search-destination{
            position:relative;
            flex:1;
        }

        .search input{
            width:100%;
            border:none;
            outline:none;
            background:transparent;
            color:#fff;
            font-size:20px;
        }

        .search input::placeholder{
            color:rgba(255,255,255,0.82);
        }

        .search-icon{
            width:52px;
            height:52px;
            border:none;
            border-radius:50%;
            background:var(--sage-dark);
            display:flex;
            align-items:center;
            justify-content:center;
            cursor:pointer;
        }

        .search-icon svg{
            fill:#fff;
        }

        .custom-list{
            position:absolute;
            top:calc(100% + 12px);
            left:0;
            width:100%;
            max-height:280px;
            overflow-y:auto;
            background:rgba(245,245,240,0.98);
            border:1px solid var(--line);
            border-radius:20px;
            box-shadow:var(--shadow);
            padding:12px;
            display:none;
            z-index:9999;
        }

        .custom-list.show{
            display:block;
        }

        .custom-item{
            display:flex;
            align-items:center;
            gap:14px;
            padding:14px 16px;
            border-radius:14px;
            cursor:pointer;
            transition:.2s ease;
        }

        .custom-item:hover{
            background:rgba(176,195,180,0.18);
        }

        .city-icon{
            width:44px;
            height:44px;
            border-radius:12px;
            background:rgba(176,195,180,0.18);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:20px;
            flex-shrink:0;
        }

        .custom-item strong{
            display:block;
            color:var(--charcoal);
            font-size:16px;
            font-weight:700;
        }

        .custom-item small{
            color:var(--text-soft);
            font-size:12px;
        }

        /* FOOTER */
        .airbnb-footer{
            background:var(--ivory);
            color:var(--text);
            padding:46px 32px 24px;
            border-top:1px solid var(--line);
        }

        .footer-top{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:32px;
            max-width:1200px;
            margin:auto;
            padding-bottom:28px;
            border-bottom:1px solid var(--line);
        }

        .footer-col h4{
            font-size:16px;
            margin-bottom:16px;
            color:var(--charcoal);
        }

        .footer-col a{
            display:block;
            color:var(--text-soft);
            font-size:15px;
            margin-bottom:12px;
        }

        .footer-col a:hover{
            color:var(--sage-dark);
        }

        .footer-bottom{
            max-width:1200px;
            margin:18px auto 0;
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
            gap:12px;
            font-size:14px;
            color:var(--text-soft);
        }

        .footer-left,
        .footer-right{
            display:flex;
            align-items:center;
            flex-wrap:wrap;
            gap:14px;
        }

        /* HOST PAGE */
        .host-hero{
            min-height:100vh;
            padding:60px 20px;
            background:linear-gradient(180deg, #dfe6df 0%, #f5f5f0 100%);
        }

        .host-container{
            max-width:950px;
            margin:0 auto;
        }

        .host-card{
            width:100%;
            padding:32px;
            border-radius:28px;
            background:rgba(255,255,255,0.92);
            border:1px solid rgba(51,51,51,0.08);
            box-shadow:var(--shadow);
        }

        .host-title{
            font-size:34px;
            color:var(--charcoal);
            margin-bottom:8px;
        }

        .host-sub{
            margin:0 0 18px;
            color:var(--text-soft);
            font-size:15px;
        }

        .host-alert{
            background:rgba(176,195,180,0.18);
            border:1px solid rgba(176,195,180,0.28);
            color:var(--charcoal);
            padding:12px 14px;
            border-radius:14px;
            margin-bottom:18px;
        }

        .host-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:16px;
        }

        .field label{
            display:block;
            font-size:13px;
            font-weight:600;
            margin-bottom:8px;
            color:var(--charcoal);
        }

        .field input,
        .field select,
        .field textarea{
            width:100%;
            border:1px solid rgba(51,51,51,0.10);
            background:#fff;
            color:var(--text);
            padding:14px 14px;
            border-radius:16px;
            outline:none;
        }

        .field textarea{
            resize:none;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus{
            border-color:var(--sage-dark);
            box-shadow:0 0 0 4px rgba(176,195,180,0.18);
        }

        .field-full{
            grid-column:1 / -1;
        }

        .check{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .err{
            display:block;
            margin-top:6px;
            color:#b91c1c;
            font-size:12px;
        }

       

        /* DETAIL PAGE */
        .detail-page{
            background:linear-gradient(180deg, #eef2ec 0%, #f5f5f0 100%);
            min-height:100vh;
            padding:36px 0 80px;
        }

        .detail-top{
            margin-bottom:26px;
        }

        .detail-back{
            display:inline-block;
            margin-bottom:18px;
            color:var(--charcoal);
            font-weight:600;
            font-size:15px;
        }

        .detail-title{
            font-size:40px;
            color:var(--charcoal);
            margin-bottom:10px;
        }

        .detail-meta{
            color:var(--text-soft);
            font-size:15px;
        }

        .detail-gallery{
            display:grid;
            grid-template-columns:2fr 1fr;
            gap:12px;
            margin-bottom:32px;
        }

        .detail-gallery-main{
            position:relative;
        }

        .detail-gallery-main img{
            width:100%;
            height:520px;
            object-fit:cover;
            display:block;
            border-radius:0;
        }

        .detail-gallery-side{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:12px;
        }

        .detail-gallery-side img{
            width:100%;
            height:254px;
            object-fit:cover;
            display:block;
            border-radius:0;
        }

        .show-all-photos{
            position:absolute;
            right:16px;
            bottom:16px;
            background:#fff;
            color:var(--charcoal);
            border:1px solid rgba(51,51,51,0.16);
            padding:12px 16px;
            font-size:14px;
            font-weight:700;
            cursor:pointer;
            border-radius:12px;
        }

        .detail-content{
            display:grid;
            grid-template-columns:1.6fr .9fr;
            gap:34px;
            align-items:start;
        }

        .detail-section{
            background:#fff;
            border:1px solid rgba(51,51,51,0.08);
            border-radius:24px;
            padding:28px;
            box-shadow:var(--shadow);
            margin-bottom:20px;
        }

        .detail-section h2,
        .detail-section h3{
            color:var(--charcoal);
            margin-bottom:14px;
        }

        .detail-soft{
            color:var(--text-soft);
            margin-bottom:18px;
        }

        .detail-tags{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
        }

        .detail-tags span{
            background:rgba(176,195,180,0.16);
            color:var(--charcoal);
            padding:10px 14px;
            border-radius:999px;
            font-size:14px;
            font-weight:600;
        }

        .detail-paragraph{
            color:var(--text);
            line-height:1.9;
            font-size:15px;
        }

        .detail-grid-info{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
            color:var(--text);
            font-size:15px;
        }

        .detail-map-box{
            overflow:hidden;
            border-radius:18px;
            border:1px solid rgba(51,51,51,0.08);
            margin-top:16px;
        }

        .detail-content{
    display:grid;
    grid-template-columns: 1.6fr 0.9fr;
    gap:34px;
    align-items:start;
}

.booking-card{
    position: sticky;
    top: 20px;
    background:#fff;
    border:1px solid rgba(51,51,51,0.08);
    border-radius:24px;
    padding:24px;
    box-shadow:var(--shadow);
    margin-bottom:8px;
}
        .booking-price{
            font-size:30px;
            font-weight:800;
            color:var(--charcoal);
            margin-bottom:16px;
        }

        .booking-price span{
            font-size:14px;
            color:var(--text-soft);
            font-weight:500;
        }

        .booking-dates{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:10px;
            margin-bottom:10px;
        }

        .booking-field{
            background:#fff;
            border:1px solid rgba(51,51,51,0.10);
            padding:12px;
            border-radius:14px;
        }

        .booking-full{
            margin-bottom:14px;
        }

        .booking-field label{
            display:block;
            font-size:11px;
            color:var(--text-soft);
            margin-bottom:6px;
            font-weight:700;
            text-transform:uppercase;
        }

        .booking-field input{
            width:100%;
            border:none;
            outline:none;
            background:transparent;
            color:var(--charcoal);
            font-size:14px;
        }

        .booking-main-btn{
            width:100%;
            border:none;
            background:var(--sage-dark);
            color:#fff;
            padding:16px;
            border-radius:16px;
            font-weight:800;
            font-size:16px;
            cursor:pointer;
            margin-bottom:18px;
        }

        .booking-summary{
            font-size:14px;
            color:var(--text-soft);
        }

        .booking-summary div{
            display:flex;
            justify-content:space-between;
            margin-bottom:12px;
        }

        .booking-total{
            font-weight:800;
            color:var(--charcoal) !important;
            padding-top:12px;
            border-top:1px solid rgba(51,51,51,0.08);
        }

        .host-mini-card{
            background:#fff;
            border:1px solid rgba(51,51,51,0.08);
            border-radius:24px;
            padding:22px;
            box-shadow:var(--shadow);
        }

        .host-mini-card h4{
            margin-bottom:10px;
            color:var(--charcoal);
        }

        .host-mini-card p{
            color:var(--text-soft);
            line-height:1.8;
        }

        .reviews-grid,
        .similar-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:16px;
        }

        .review-item,
        .similar-card{
            background:#fff;
            border:1px solid rgba(51,51,51,0.08);
            border-radius:20px;
            overflow:hidden;
        }

        .review-item{
            padding:18px;
        }

        .review-item p{
            color:var(--text-soft);
            line-height:1.8;
        }

        .similar-card img{
            width:100%;
            height:180px;
            object-fit:cover;
            display:block;
            border-radius:0;
        }

        .similar-card div{
            padding:16px;
        }

        .similar-card h4{
            margin-bottom:6px;
            color:var(--charcoal);
        }

        .similar-card p{
            color:var(--text-soft);
        }

        /* MODAL PHOTOS */
        .photo-modal{
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.82);
            display:none;
            align-items:center;
            justify-content:center;
            z-index:2000;
            padding:30px;
        }

        .photo-modal.show{
            display:flex;
        }

        .photo-modal-content{
            background:#111;
            width:min(1100px, 100%);
            max-height:90vh;
            overflow:auto;
            padding:20px;
            border-radius:18px;
            position:relative;
        }

        .photo-close{
            position:absolute;
            top:14px;
            right:14px;
            background:#fff;
            border:none;
            width:42px;
            height:42px;
            border-radius:50%;
            cursor:pointer;
            font-size:20px;
        }

        .photo-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
            margin-top:32px;
        }

        .photo-grid img{
            width:100%;
            height:340px;
            object-fit:cover;
            display:block;
            border-radius:0;
        }

        @media (max-width:1100px){
            .detail-gallery,
            .detail-content{
                grid-template-columns:1fr;
            }

            .booking-card{
                position:static;
            }
        }

        @media (max-width:900px){
            .topbar{
                grid-template-columns:1fr;
                gap:14px;
                text-align:center;
            }

            .brand,
            .lang-wrapper{
                justify-self:center;
            }

            .menu{
                flex-wrap:wrap;
                gap:18px;
            }

            .footer-top{
                grid-template-columns:1fr 1fr;
            }

            .host-grid{
                grid-template-columns:1fr;
            }
        }

        @media (max-width:700px){
            .detail-title{
                font-size:30px;
            }

            .detail-gallery-side,
            .reviews-grid,
            .similar-grid,
            .detail-grid-info,
            .booking-dates{
                grid-template-columns:1fr;
            }

            .detail-gallery-main img{
                height:320px;
            }

            .detail-gallery-side img{
                height:180px;
            }

            .photo-grid{
                grid-template-columns:1fr;
            }
        }

        @media (max-width:600px){
            .topbar{
                padding:16px 18px;
            }

            .footer-top{
                grid-template-columns:1fr;
            }

            .footer-bottom{
                flex-direction:column;
                align-items:flex-start;
            }

            .logo-script{
                font-size:52px;
            }
        }
        .back-icon-btn{
    width:42px;
    height:42px;
    border:none;
    border-radius:50%;
    background:#fff;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    cursor:pointer;
    font-size:20px;
}
.detail-top-wow{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:20px;
    margin-bottom:28px;
}

.detail-top-left{
    display:flex;
    align-items:flex-start;
    gap:16px;
}

.detail-badge-wow{
    display:inline-block;
    padding:8px 14px;
    border-radius:999px;
    background:rgba(176,195,180,0.18);
    color:var(--charcoal);
    font-size:12px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:12px;
}

.detail-top-actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.action-btn-wow{
    border:1px solid rgba(51,51,51,0.12);
    background:#fff;
    color:var(--charcoal);
    padding:12px 16px;
    border-radius:14px;
    font-weight:700;
    cursor:pointer;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
}

.action-btn-wow:hover{
    background:#f8f8f5;
}

.back-icon-btn{
    width:46px;
    height:46px;
    border:none;
    border-radius:50%;
    background:#fff;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    cursor:pointer;
    font-size:22px;
    color:var(--charcoal);
    flex-shrink:0;
}

.back-icon-btn:hover{
    transform:translateY(-1px);
}
.detail-gallery{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:14px;
    margin-bottom:36px;
}

.detail-gallery-main{
    position:relative;
    overflow:hidden;
    border-radius:24px;
}

.detail-gallery-main img{
    width:100%;
    height:540px;
    object-fit:cover;
    display:block;
    transition:transform .35s ease;
}

.detail-gallery-main:hover img{
    transform:scale(1.03);
}

.detail-gallery-side{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:14px;
}

.detail-gallery-side img{
    width:100%;
    height:263px;
    object-fit:cover;
    display:block;
    border-radius:20px;
    transition:transform .35s ease;
}

.detail-gallery-side img:hover{
    transform:scale(1.02);
}

.show-all-photos{
    position:absolute;
    right:18px;
    bottom:18px;
    background:rgba(255,255,255,0.96);
    color:var(--charcoal);
    border:none;
    padding:12px 18px;
    font-size:14px;
    font-weight:800;
    cursor:pointer;
    border-radius:14px;
    box-shadow:0 10px 24px rgba(0,0,0,0.12);
}
.detail-section{
    background:rgba(255,255,255,0.92);
    border:1px solid rgba(51,51,51,0.06);
    border-radius:26px;
    padding:30px;
    box-shadow:0 14px 32px rgba(0,0,0,0.05);
    margin-bottom:22px;
}
.similar-card{
    background:#fff;
    border:1px solid rgba(51,51,51,0.08);
    border-radius:22px;
    overflow:hidden;
    transition:.28s ease;
    box-shadow:0 10px 24px rgba(0,0,0,0.04);
}

.similar-card:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 34px rgba(0,0,0,0.08);
}
.review-item{
    padding:20px;
    background:#fcfcfa;
    border:1px solid rgba(51,51,51,0.06);
    border-radius:20px;
}
.photo-modal-content{
    background:#111;
    width:min(1300px, 96%);
    max-height:90vh;
    overflow:auto;
    padding:24px;
    border-radius:24px;
    position:relative;
}

.photo-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
    gap:16px;
    margin-top:40px;
}

.photo-grid img{
    width:100%;
    height:260px;
    object-fit:cover;
    display:block;
    border-radius:18px;
}
.photo-modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.88);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:3000;
    padding:24px;
}

.photo-modal.show{
    display:flex;
}

.photo-modal-content{
    background:#0f0f0f;
    width:min(1350px, 96%);
    max-height:92vh;
    overflow:auto;
    padding:28px;
    border-radius:28px;
    position:relative;
    box-shadow:0 25px 60px rgba(0,0,0,0.35);
}

.photo-close{
    position:absolute;
    top:18px;
    right:18px;
    background:#fff;
    color:#222;
    border:none;
    width:48px;
    height:48px;
    border-radius:50%;
    cursor:pointer;
    font-size:24px;
    font-weight:700;
    z-index:10;
}

.photo-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
    gap:18px;
    margin-top:34px;
}

.photo-grid img{
    width:100%;
    height:270px;
    object-fit:cover;
    display:block;
    border-radius:20px;
    transition:transform .3s ease, box-shadow .3s ease;
}

.photo-grid img:hover{
    transform:scale(1.02);
    box-shadow:0 14px 28px rgba(0,0,0,0.28);
}
.photo-grid{
    display:grid;
    grid-template-columns:2fr 1fr 1fr;
    gap:18px;
    margin-top:34px;
}

.photo-grid img{
    width:100%;
    height:250px;
    object-fit:cover;
    display:block;
    border-radius:20px;
}

.photo-grid img:first-child{
    grid-column:1 / 2;
    grid-row:1 / 3;
    height:100%;
    min-height:520px;
}

@media (max-width: 900px){
    .photo-grid{
        grid-template-columns:1fr 1fr;
    }

    .photo-grid img:first-child{
        grid-column:auto;
        grid-row:auto;
        min-height:unset;
        height:260px;
    }
}

@media (max-width: 600px){
    .photo-grid{
        grid-template-columns:1fr;
    }
}
.gallery-image{
    cursor:pointer;
}

.image-lightbox{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.92);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:4000;
    padding:30px 90px;
}

.image-lightbox.show{
    display:flex;
}

.lightbox-content{
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
}

#lightboxImage{
    max-width:100%;
    max-height:88vh;
    width:auto;
    height:auto;
    object-fit:contain;
    border-radius:18px;
    box-shadow:0 20px 50px rgba(0,0,0,0.35);
    background:#111;
}

.lightbox-close{
    position:absolute;
    top:24px;
    right:24px;
    width:48px;
    height:48px;
    border:none;
    border-radius:50%;
    background:#fff;
    color:#222;
    font-size:28px;
    cursor:pointer;
    z-index:10;
}

.lightbox-nav{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:52px;
    height:52px;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,0.95);
    color:#222;
    font-size:26px;
    cursor:pointer;
    z-index:10;
}

.lightbox-prev{
    left:24px;
}

.lightbox-next{
    right:24px;
}

@media (max-width: 768px){
    .image-lightbox{
        padding:20px 16px;
    }

    .lightbox-nav{
        width:44px;
        height:44px;
        font-size:22px;
    }

    .lightbox-prev{
        left:10px;
    }

    .lightbox-next{
        right:10px;
    }

    .lightbox-close{
        top:12px;
        right:12px;
        width:42px;
        height:42px;
        font-size:24px;
    }
}
.detail-top-wow{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:24px;
    margin-bottom:30px;
}

.detail-top-left{
    display:flex;
    align-items:flex-start;
    gap:16px;
}

.detail-badge-wow{
    display:inline-block;
    padding:8px 14px;
    border-radius:999px;
    background:rgba(176,195,180,0.18);
    color:var(--charcoal);
    font-size:12px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:12px;
}

.detail-top-actions{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.action-btn-wow{
    border:1px solid rgba(51,51,51,0.10);
    background:#fff;
    color:var(--charcoal);
    padding:12px 16px;
    border-radius:14px;
    font-weight:700;
    cursor:pointer;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
    transition:.25s ease;
}

.action-btn-wow:hover{
    background:#f8f8f5;
    transform:translateY(-1px);
}

.back-icon-btn{
    width:48px;
    height:48px;
    border:none;
    border-radius:50%;
    background:#fff;
    box-shadow:0 10px 22px rgba(0,0,0,0.08);
    cursor:pointer;
    font-size:22px;
    color:var(--charcoal);
    flex-shrink:0;
    transition:.25s ease;
}

.back-icon-btn:hover{
    transform:translateY(-1px);
}

.detail-gallery{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:16px;
    margin-bottom:36px;
}

.detail-gallery-main{
    position:relative;
    overflow:hidden;
    border-radius:24px;
}

.detail-gallery-main img{
    width:100%;
    height:560px;
    object-fit:cover;
    display:block;
    transition:transform .35s ease;
}

.detail-gallery-main:hover img{
    transform:scale(1.03);
}

.detail-gallery-side{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px;
}

.detail-gallery-side img{
    width:100%;
    height:272px;
    object-fit:cover;
    display:block;
    border-radius:20px;
    transition:transform .35s ease;
}

.detail-gallery-side img:hover{
    transform:scale(1.02);
}

.show-all-photos{
    position:absolute;
    right:18px;
    bottom:18px;
    background:rgba(255,255,255,0.96);
    color:var(--charcoal);
    border:none;
    padding:12px 18px;
    font-size:14px;
    font-weight:800;
    cursor:pointer;
    border-radius:14px;
    box-shadow:0 10px 24px rgba(0,0,0,0.12);
}

.detail-section{
    background:rgba(255,255,255,0.96);
    border:1px solid rgba(51,51,51,0.06);
    border-radius:26px;
    padding:30px;
    box-shadow:0 14px 32px rgba(0,0,0,0.05);
    margin-bottom:22px;
}

.booking-card{
    position:sticky;
    top:24px;
    background:#fff;
    border:1px solid rgba(51,51,51,0.08);
    border-radius:28px;
    padding:26px;
    box-shadow:0 20px 45px rgba(0,0,0,0.08);
    margin-bottom:18px;
}

.booking-price{
    font-size:34px;
    font-weight:800;
    color:var(--charcoal);
    margin-bottom:18px;
}

.booking-price span{
    font-size:15px;
    color:var(--text-soft);
    font-weight:500;
}

.booking-field{
    background:#fcfcfa;
    border:1px solid rgba(51,51,51,0.08);
    padding:14px;
    border-radius:16px;
}

.booking-main-btn{
    width:100%;
    border:none;
    background:linear-gradient(135deg, var(--sage-dark), var(--sage));
    color:#fff;
    padding:17px;
    border-radius:16px;
    font-weight:800;
    font-size:16px;
    cursor:pointer;
    margin-bottom:18px;
    box-shadow:0 12px 24px rgba(148,169,154,0.24);
    transition:.25s ease;
}

.booking-main-btn:hover{
    transform:translateY(-1px);
}

.review-item{
    padding:20px;
    background:#fcfcfa;
    border:1px solid rgba(51,51,51,0.06);
    border-radius:20px;
}

.similar-card{
    background:#fff;
    border:1px solid rgba(51,51,51,0.08);
    border-radius:22px;
    overflow:hidden;
    transition:.28s ease;
    box-shadow:0 10px 24px rgba(0,0,0,0.04);
}

.similar-card:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 34px rgba(0,0,0,0.08);
}

.gallery-image{
    cursor:pointer;
}

.image-lightbox{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.94);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:5000;
    padding:24px 80px;
}

.image-lightbox.show{
    display:flex;
}

.lightbox-content{
    position:relative;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
}

#lightboxImage{
    max-width:100%;
    max-height:88vh;
    width:auto;
    height:auto;
    object-fit:contain;
    border-radius:18px;
    box-shadow:0 22px 55px rgba(0,0,0,0.35);
    background:#111;
}

.lightbox-close{
    position:absolute;
    top:24px;
    right:24px;
    width:50px;
    height:50px;
    border:none;
    border-radius:50%;
    background:#fff;
    color:#222;
    font-size:28px;
    cursor:pointer;
    z-index:20;
    box-shadow:0 10px 22px rgba(0,0,0,0.18);
}

.lightbox-nav{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:54px;
    height:54px;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,0.96);
    color:#222;
    font-size:28px;
    cursor:pointer;
    z-index:20;
    box-shadow:0 10px 22px rgba(0,0,0,0.18);
}

.lightbox-prev{
    left:24px;
}

.lightbox-next{
    right:24px;
}

.lightbox-counter{
    position:absolute;
    bottom:24px;
    left:50%;
    transform:translateX(-50%);
    background:rgba(255,255,255,0.14);
    color:#fff;
    padding:10px 16px;
    border-radius:999px;
    font-size:14px;
    font-weight:700;
    backdrop-filter:blur(8px);
}

@media (max-width:1100px){
    .detail-gallery,
    .detail-content{
        grid-template-columns:1fr;
    }

    .booking-card{
        position:static;
    }
}

@media (max-width:900px){
    .detail-top-wow{
        flex-direction:column;
        align-items:flex-start;
    }
}

@media (max-width:768px){
    .image-lightbox{
        padding:18px 12px;
    }

    .lightbox-close{
        top:14px;
        right:14px;
        width:42px;
        height:42px;
        font-size:24px;
    }

    .lightbox-nav{
        width:42px;
        height:42px;
        font-size:22px;
    }

    .lightbox-prev{
        left:10px;
    }

    .lightbox-next{
        right:10px;
    }

    #lightboxImage{
        max-height:82vh;
    }
}

@media (max-width:700px){
    .detail-title{
        font-size:30px;
    }

    .detail-gallery-side,
    .reviews-grid,
    .similar-grid,
    .detail-grid-info,
    .booking-dates{
        grid-template-columns:1fr;
    }

    .detail-gallery-main img{
        height:320px;
    }

    .detail-gallery-side img{
        height:180px;
    }
}
#lightboxImage{
    max-width:92vw;
    max-height:92vh;
    width:auto;
    height:auto;
    object-fit:contain;
    border-radius:20px;
    box-shadow:0 22px 55px rgba(0,0,0,0.35);
    background:#111;
}
:root{
    --bg:#f7f4ee;
    --bg-2:#eef3ec;
    --white:#ffffff;
    --text:#1f2937;
    --muted:#6b7280;
    --line:rgba(31,41,55,0.08);
    --line-strong:rgba(31,41,55,0.12);
    --primary:#97ab95;
    --primary-dark:#71856f;
    --accent:#d8c7b0;
    --soft:#f6f8f3;
    --shadow-sm:0 10px 24px rgba(15,23,42,0.05);
    --shadow-md:0 18px 45px rgba(15,23,42,0.08);
    --shadow-lg:0 28px 70px rgba(15,23,42,0.12);
    --radius-xs:14px;
    --radius-sm:18px;
    --radius-md:24px;
    --radius-lg:30px;
}

.detail-page{
    min-height:100vh;
    background:
        radial-gradient(circle at top left, rgba(151,171,149,0.18), transparent 28%),
        linear-gradient(180deg, var(--bg-2) 0%, var(--bg) 42%, #f8f6f1 100%);
}

.detail-page-shell{
    padding:38px 0 90px;
}

.container{
    width:min(1280px, 92%);
    margin:auto;
}

/* =======================
   TOP HEADER
======================= */
.detail-hero-card{
    position:relative;
    padding:30px;
    margin-bottom:30px;
    border-radius:34px;
    background:rgba(255,255,255,0.62);
    border:1px solid rgba(255,255,255,0.7);
    backdrop-filter:blur(14px);
    box-shadow:var(--shadow-lg);
    overflow:hidden;
}

.detail-hero-card::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(135deg, rgba(255,255,255,0.08), transparent 55%);
    pointer-events:none;
}

.detail-topbar{
    position:relative;
    z-index:2;
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:24px;
    margin-bottom:26px;
}

.detail-top-left{
    display:flex;
    align-items:flex-start;
    gap:16px;
}

.back-icon-btn{
    width:52px;
    height:52px;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,0.95);
    color:var(--text);
    font-size:24px;
    font-weight:700;
    cursor:pointer;
    box-shadow:var(--shadow-sm);
    transition:all .25s ease;
    flex-shrink:0;
}

.back-icon-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 14px 28px rgba(15,23,42,0.10);
}

.detail-badge-wow{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:8px 16px;
    border-radius:999px;
    background:linear-gradient(135deg, rgba(151,171,149,0.18), rgba(216,199,176,0.20));
    color:var(--primary-dark);
    font-size:12px;
    font-weight:800;
    letter-spacing:2px;
    text-transform:uppercase;
    margin-bottom:14px;
    border:1px solid rgba(151,171,149,0.14);
}

.detail-title{
    font-size:44px;
    line-height:1.08;
    color:var(--text);
    font-weight:800;
    margin-bottom:12px;
    letter-spacing:-0.5px;
}

.detail-meta{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    color:var(--muted);
    font-size:15px;
    font-weight:500;
}

.detail-meta span{
    position:relative;
}

.detail-top-actions{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.action-btn-wow{
    border:1px solid var(--line);
    background:rgba(255,255,255,0.9);
    color:var(--text);
    padding:12px 18px;
    border-radius:16px;
    font-weight:700;
    font-size:14px;
    cursor:pointer;
    box-shadow:var(--shadow-sm);
    transition:all .25s ease;
}

.action-btn-wow:hover{
    transform:translateY(-2px);
    background:#fff;
    box-shadow:0 14px 28px rgba(15,23,42,0.10);
}

/* =======================
   GALLERY
======================= */
.detail-gallery{
    position:relative;
    z-index:2;
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:16px;
}

.detail-gallery-main{
    position:relative;
    overflow:hidden;
    border-radius:28px;
    min-height:580px;
    box-shadow:var(--shadow-md);
}

.detail-gallery-main img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
    transition:transform .45s ease;
}

.detail-gallery-main:hover img{
    transform:scale(1.04);
}

.gallery-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(180deg, transparent 46%, rgba(0,0,0,0.52) 100%);
    display:flex;
    align-items:flex-end;
    padding:24px;
}

.gallery-overlay-content{
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:16px;
    color:#fff;
    font-weight:600;
    font-size:15px;
}

.show-all-photos{
    border:none;
    background:rgba(255,255,255,0.96);
    color:var(--text);
    padding:13px 18px;
    border-radius:15px;
    font-weight:800;
    font-size:14px;
    cursor:pointer;
    box-shadow:0 15px 30px rgba(0,0,0,0.18);
    transition:all .25s ease;
}

.show-all-photos:hover{
    transform:translateY(-2px);
}

.detail-gallery-side{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px;
}

.detail-gallery-side img{
    width:100%;
    height:282px;
    object-fit:cover;
    border-radius:22px;
    display:block;
    box-shadow:var(--shadow-sm);
    transition:all .35s ease;
}

.detail-gallery-side img:hover{
    transform:translateY(-2px) scale(1.02);
    box-shadow:0 16px 32px rgba(15,23,42,0.10);
}

/* =======================
   MAIN LAYOUT
======================= */
.detail-content{
    display:grid;
    grid-template-columns:minmax(0, 1.55fr) minmax(320px, .85fr);
    gap:28px;
    align-items:start;
}

.detail-main-column,
.detail-side-column{
    min-width:0;
}

/* =======================
   CARDS / SECTIONS
======================= */
.detail-section{
    background:rgba(255,255,255,0.82);
    border:1px solid rgba(255,255,255,0.8);
    backdrop-filter:blur(12px);
    border-radius:30px;
    padding:30px;
    margin-bottom:22px;
    box-shadow:var(--shadow-md);
    transition:transform .25s ease, box-shadow .25s ease;
}

.detail-section:hover{
    transform:translateY(-2px);
    box-shadow:0 24px 50px rgba(15,23,42,0.09);
}

.intro-card{
    background:
        linear-gradient(135deg, rgba(255,255,255,0.96), rgba(246,248,243,0.92));
}

.intro-head{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
    margin-bottom:20px;
}

.host-avatar-box{
    flex-shrink:0;
}

.host-avatar{
    width:74px;
    height:74px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg, var(--primary-dark), var(--primary));
    color:#fff;
    font-size:26px;
    font-weight:800;
    box-shadow:0 16px 30px rgba(113,133,111,0.28);
}

.section-heading{
    margin-bottom:16px;
}

.section-kicker{
    display:inline-block;
    margin-bottom:8px;
    font-size:12px;
    font-weight:800;
    letter-spacing:2px;
    text-transform:uppercase;
    color:var(--primary-dark);
}

.detail-section h2,
.detail-section h3{
    margin:0 0 10px;
    color:var(--text);
    font-size:28px;
    font-weight:800;
    letter-spacing:-0.3px;
}

.detail-soft{
    color:var(--muted);
    line-height:1.8;
    font-size:15px;
}

.detail-tags{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
}

.detail-tags span{
    padding:11px 15px;
    border-radius:999px;
    background:linear-gradient(135deg, rgba(151,171,149,0.12), rgba(216,199,176,0.14));
    border:1px solid rgba(151,171,149,0.10);
    color:var(--text);
    font-size:14px;
    font-weight:700;
}

.detail-paragraph{
    color:#374151;
    line-height:1.95;
    font-size:15px;
}

.amenities-grid{
    display:grid;
    grid-template-columns:repeat(2, minmax(0,1fr));
    gap:14px;
}

.amenity-item{
    background:linear-gradient(180deg, #ffffff 0%, #fafaf8 100%);
    border:1px solid var(--line);
    border-radius:18px;
    padding:15px 16px;
    color:var(--text);
    font-weight:600;
    box-shadow:var(--shadow-sm);
}

.detail-map-box{
    overflow:hidden;
    border-radius:24px;
    border:1px solid var(--line);
    margin-top:18px;
    box-shadow:var(--shadow-sm);
}

/* =======================
   REVIEWS + SIMILAR
======================= */
.reviews-grid,
.similar-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:18px;
}

.review-item{
    background:linear-gradient(180deg, #ffffff 0%, #fbfbf9 100%);
    border:1px solid var(--line);
    border-radius:22px;
    padding:20px;
    box-shadow:var(--shadow-sm);
}

.review-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:10px;
}

.review-item strong{
    color:var(--text);
    font-size:16px;
}

.review-item p{
    color:var(--muted);
    line-height:1.85;
}

.similar-card{
    display:block;
    overflow:hidden;
    border-radius:24px;
    background:#fff;
    border:1px solid var(--line);
    box-shadow:var(--shadow-sm);
    transition:all .28s ease;
}

.similar-card:hover{
    transform:translateY(-4px);
    box-shadow:0 20px 40px rgba(15,23,42,0.10);
}

.similar-card img{
    width:100%;
    height:210px;
    object-fit:cover;
    display:block;
}

.similar-card-body{
    padding:18px;
}

.similar-card h4{
    margin-bottom:6px;
    color:var(--text);
    font-size:18px;
    font-weight:700;
}

.similar-card p{
    color:var(--muted);
}

/* =======================
   BOOKING CARD
======================= */
.premium-booking{
    position:sticky;
    top:24px;
    background:rgba(255,255,255,0.95);
    border:1px solid rgba(255,255,255,0.9);
    backdrop-filter:blur(12px);
    border-radius:30px;
    padding:26px;
    box-shadow:0 24px 60px rgba(15,23,42,0.10);
    margin-bottom:18px;
}

.booking-card-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:14px;
    margin-bottom:18px;
}

.booking-price{
    font-size:36px;
    font-weight:800;
    color:var(--text);
    letter-spacing:-0.5px;
}

.booking-price span{
    font-size:15px;
    font-weight:500;
    color:var(--muted);
}

.booking-rating{
    color:var(--text);
    font-weight:700;
    background:var(--soft);
    padding:8px 12px;
    border-radius:999px;
}

.booking-rating small{
    color:var(--muted);
    font-weight:500;
}

.booking-dates{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
    margin-bottom:12px;
}

.booking-field{
    background:#fcfcfa;
    border:1px solid var(--line);
    border-radius:18px;
    padding:14px;
    transition:border-color .2s ease, box-shadow .2s ease;
}

.booking-field:focus-within{
    border-color:rgba(113,133,111,0.45);
    box-shadow:0 0 0 4px rgba(151,171,149,0.14);
}

.booking-full{
    margin-bottom:14px;
}

.booking-field label{
    display:block;
    font-size:11px;
    text-transform:uppercase;
    letter-spacing:1px;
    font-weight:800;
    color:var(--muted);
    margin-bottom:7px;
}

.booking-field input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    color:var(--text);
    font-size:14px;
    font-weight:600;
}

.booking-main-btn{
    width:100%;
    border:none;
    background:linear-gradient(135deg, var(--primary-dark), var(--primary));
    color:#fff;
    padding:17px;
    border-radius:18px;
    font-size:16px;
    font-weight:800;
    cursor:pointer;
    box-shadow:0 16px 30px rgba(113,133,111,0.28);
    transition:all .25s ease;
}

.booking-main-btn:hover{
    transform:translateY(-2px);
    box-shadow:0 20px 36px rgba(113,133,111,0.35);
}

.booking-note{
    text-align:center;
    color:var(--muted);
    font-size:13px;
    margin:14px 0 18px;
}

.booking-summary{
    font-size:14px;
    color:var(--muted);
}

.booking-summary div{
    display:flex;
    justify-content:space-between;
    gap:10px;
    margin-bottom:12px;
}

.booking-total{
    padding-top:14px;
    border-top:1px solid var(--line-strong);
    color:var(--text) !important;
    font-weight:800;
}

/* =======================
   MINI HOST CARD
======================= */
.host-mini-card{
    background:rgba(255,255,255,0.84);
    border:1px solid rgba(255,255,255,0.8);
    backdrop-filter:blur(10px);
    border-radius:28px;
    padding:22px;
    box-shadow:var(--shadow-md);
}

.host-mini-card h4{
    margin-bottom:10px;
    color:var(--text);
    font-size:18px;
}

.host-mini-card p{
    color:var(--muted);
    line-height:1.85;
}

/* =======================
   ALERTS
======================= */
.flash-success,
.flash-error{
    padding:14px 16px;
    border-radius:18px;
    margin-bottom:18px;
    box-shadow:var(--shadow-sm);
}

.flash-success{
    background:#e8f7eb;
    color:#1e5631;
    border:1px solid rgba(30,86,49,0.10);
}

.flash-error{
    background:#fff1f1;
    color:#a31616;
    border:1px solid rgba(163,22,22,0.10);
}

.flash-error ul{
    margin:0;
    padding-left:18px;
}

/* =======================
   MODAL PHOTOS
======================= */
.gallery-image{
    cursor:pointer;
}

.photo-modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.88);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:3000;
    padding:24px;
}

.photo-modal.show{
    display:flex;
}

.photo-modal-content{
    position:relative;
    width:min(1300px, 96%);
    max-height:92vh;
    overflow:auto;
    background:#111;
    border-radius:30px;
    padding:28px;
    box-shadow:0 30px 70px rgba(0,0,0,0.35);
}

.photo-close{
    position:absolute;
    top:18px;
    right:18px;
    width:48px;
    height:48px;
    border:none;
    border-radius:50%;
    background:#fff;
    color:#111;
    font-size:26px;
    cursor:pointer;
    z-index:2;
}

.photo-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
    gap:18px;
    margin-top:34px;
}

.photo-grid img{
    width:100%;
    height:260px;
    object-fit:cover;
    border-radius:20px;
    display:block;
}

/* =======================
   LIGHTBOX
======================= */
.image-lightbox{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.94);
    display:none;
    align-items:center;
    justify-content:center;
    z-index:5000;
    padding:24px 80px;
}

.image-lightbox.show{
    display:flex;
}

.lightbox-content{
    position:relative;
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
}

#lightboxImage{
    max-width:92vw;
    max-height:90vh;
    width:auto;
    height:auto;
    object-fit:contain;
    border-radius:20px;
    background:#111;
    box-shadow:0 22px 55px rgba(0,0,0,0.35);
}

.lightbox-close,
.lightbox-nav{
    position:absolute;
    border:none;
    border-radius:50%;
    background:rgba(255,255,255,0.96);
    color:#111;
    cursor:pointer;
    z-index:10;
    box-shadow:0 10px 22px rgba(0,0,0,0.18);
}

.lightbox-close{
    top:24px;
    right:24px;
    width:50px;
    height:50px;
    font-size:28px;
}

.lightbox-nav{
    top:50%;
    transform:translateY(-50%);
    width:54px;
    height:54px;
    font-size:28px;
}

.lightbox-prev{ left:24px; }
.lightbox-next{ right:24px; }

.lightbox-counter{
    position:absolute;
    bottom:24px;
    left:50%;
    transform:translateX(-50%);
    background:rgba(255,255,255,0.12);
    color:#fff;
    padding:10px 16px;
    border-radius:999px;
    font-size:14px;
    font-weight:700;
    backdrop-filter:blur(8px);
}

/* =======================
   RESPONSIVE
======================= */
@media (max-width:1100px){
    .detail-gallery,
    .detail-content{
        grid-template-columns:1fr;
    }

    .premium-booking{
        position:static;
    }
}

@media (max-width:900px){
    .detail-topbar,
    .intro-head{
        flex-direction:column;
        align-items:flex-start;
    }

    .detail-title{
        font-size:35px;
    }
}

@media (max-width:700px){
    .detail-page-shell{
        padding:24px 0 70px;
    }

    .detail-hero-card,
    .detail-section,
    .premium-booking,
    .host-mini-card{
        padding:20px;
        border-radius:22px;
    }

    .detail-gallery-main{
        min-height:auto;
    }

    .detail-gallery-main img{
        height:340px;
    }

    .detail-gallery-side,
    .reviews-grid,
    .similar-grid,
    .amenities-grid,
    .booking-dates{
        grid-template-columns:1fr;
    }

    .detail-gallery-side img{
        height:180px;
    }

    .detail-title{
        font-size:28px;
    }

    .detail-section h2,
    .detail-section h3{
        font-size:24px;
    }

    .image-lightbox{
        padding:18px 12px;
    }

    .lightbox-close{
        top:12px;
        right:12px;
        width:42px;
        height:42px;
        font-size:22px;
    }

    .lightbox-nav{
        width:42px;
        height:42px;
        font-size:22px;
    }

    .lightbox-prev{ left:10px; }
    .lightbox-next{ right:10px; }
}
















.search-lux{
    position:relative;
    z-index:20;
    width:min(860px, 100%);
    display:flex;
    align-items:center;
    gap:14px;
    padding:12px 14px 12px 20px;
    border-radius:999px;
    background:rgba(255,255,255,0.16);
    border:1px solid rgba(255,255,255,0.22);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    box-shadow:0 20px 50px rgba(0,0,0,0.14);
    transition:.3s ease;
}

.search-lux:hover{
    transform:translateY(-1px);
    box-shadow:0 24px 60px rgba(0,0,0,0.18);
}

.search-destination{
    position:relative;
    flex:1;
    display:flex;
    flex-direction:column;
    gap:6px;
}

.search-label{
    display:flex;
    align-items:center;
    gap:8px;
    color:#fff;
    font-size:13px;
    font-weight:700;
    letter-spacing:.3px;
    opacity:.96;
    padding-left:4px;
}

.search-label-icon{
    font-size:15px;
    line-height:1;
     /*  */
}

.search-lux input{
    width:100%;
    border:none;
    outline:none;
    background:transparent;
    color:#fff;
    font-size:20px;
    font-weight:600;
    padding:2px 4px;
}

.search-lux input::placeholder{
    color:rgba(255,255,255,0.82);
    font-weight:500;
}

.search-lux .search-icon{
    width:62px;
    height:62px;
    border:none;
    border-radius:50%;
    background:linear-gradient(135deg, #94A99A, #B0C3B4);
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    box-shadow:0 12px 28px rgba(148,169,154,0.35);
    transition:.28s ease;
    flex-shrink:0;
}

.search-lux .search-icon:hover{
    transform:scale(1.05);
}

.search-lux .search-icon svg{
    fill:#fff;
}

.custom-list{
    position:absolute;
    top:calc(100% + 14px);
    left:0;
    width:100%;
    max-height:320px;
    overflow-y:auto;
    background:rgba(245,245,240,0.98);
    border:1px solid rgba(51,51,51,0.08);
    border-radius:24px;
    box-shadow:0 24px 50px rgba(0,0,0,0.16);
    padding:12px;
    display:none;
    z-index:9999;
    backdrop-filter:blur(14px);
}

.custom-list.show{
    display:block;
}

.custom-item{
    display:flex;
    align-items:center;
    gap:14px;
    padding:14px 16px;
    border-radius:18px;
    cursor:pointer;
    transition:.22s ease;
}

.custom-item:hover{
    background:rgba(176,195,180,0.15);
    transform:translateX(2px);
}

.city-icon{
    width:50px;
    height:50px;
    border-radius:16px;
    background:rgba(176,195,180,0.18);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
    flex-shrink:0;
    box-shadow:inset 0 0 0 1px rgba(51,51,51,0.04);
}

.custom-item strong{
    display:block;
    color:#333333;
    font-size:18px;
    font-weight:800;
    margin-bottom:2px;
}

.custom-item small{
    display:block;
    color:#6f6f6f;
    font-size:13px;
    font-weight:500;
}

@media (max-width: 768px){
    .search-lux{
        padding:10px 12px 10px 16px;
    }

    .search-label{
        font-size:12px;
    }

    .search-lux input{
        font-size:18px;
    }

    .search-lux .search-icon{
        width:54px;
        height:54px;
    }

    .city-icon{
        width:44px;
        height:44px;
        font-size:20px;
    }

    .custom-item strong{
        font-size:16px;
    }
}
 .host-hero{ background:linear-gradient(180deg, #F5F5F0 0%, #D6CFC7 45%, #8BA394 100%);}
   
   .header{
    position: relative;
    z-index: 1000;
    background: transparent;
    padding: 22px 0 12px;
}

.header-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:24px;
    margin-bottom:18px;
    padding:14px 18px;
    border-radius:24px;
    background:rgba(245,245,240,0.78);
    border:1px solid rgba(51,51,51,0.08);
    backdrop-filter:blur(16px);
    -webkit-backdrop-filter:blur(16px);
    box-shadow:
        0 12px 30px rgba(51,51,51,0.06),
        0 2px 10px rgba(51,51,51,0.04);
}

/* logo */
.logo{
    display:flex;
    align-items:center;
    gap:12px;
    flex-shrink:0;
}

.logo-icon{
    width:50px;
    height:50px;
    border-radius:16px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg, #8BA394 0%, #B0C3B4 100%);
    box-shadow:0 10px 24px rgba(139,163,148,0.25);
    overflow:hidden;
}

.logo-img{
    width:28px;
    height:28px;
    object-fit:contain;
    display:block;
}

.logo-text{
    font-family:"Pacifico", cursive;
    font-size:34px;
    line-height:1;
    color:var(--dark);
    letter-spacing:.5px;
}

/* nav */
.tabs{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:26px;
    flex:1;
    flex-wrap:wrap;
}

.tab-link{
    position:relative;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    cursor:pointer;
    color:var(--dark);
    opacity:.9;
    font-size:14px;
    padding:6px 2px;
    transition:all .25s ease;
    letter-spacing:.3px;
}

.tab-link:hover{
    opacity:1;
    color:var(--sage());
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





.header{
    width:100%;
    background:transparent;
    padding:20px 0 10px;
}

.site-header{
    width:100%;
    max-width:1200px;
    margin:0 auto;
    padding:0 20px;
}

.header-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 14px;
    border-radius:18px;
    background:rgba(245,245,240,.78);
    border:1px solid var(--line);
    backdrop-filter:blur(10px);
    box-shadow:0 10px 24px rgba(51,51,51,.08);
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

.tabs{
    display:flex;
    gap:20px;
    align-items:center;
}

.header-actions{
    display:flex;
    align-items:center;
    gap:10px;
}

.icon-menu{
    position:relative;
}

.menu{
    position:absolute;
    top:45px;
    right:0;
    width:200px;
    display:none;
    z-index:999;
}
    </style>
</head>
<body class="@yield('body-class')">

    @yield('content')



     <footer class="footer">

<div class="container">

<div class="row footer-top">

<div class="col-md-4">
<h5>Assistance</h5>

<ul>
<li><a href="help.html">Centre d'aide</a></li>
<li><a href="security.html">Assistance sécurité</a></li>
<li><a href="aircover.html">AirCover</a></li>
<li><a href="discrimination.html">Lutte contre la discrimination</a></li>
<li><a href="handicap.html">Assistance handicap</a></li>
<li><a href="cancel.html">Options d'annulation</a></li>
</ul>

</div>


<div class="col-md-4">

<h5>Accueil de voyageurs</h5>

<ul>
<li><a href="add-home.html">Mettre votre logement</a></li>
<li><a href="experience.html">Proposer une expérience</a></li>
<li><a href="service.html">Proposer votre service</a></li>
<li><a href="aircover-host.html">AirCover pour les hôtes</a></li>
<li><a href="host-resources.html">Ressources pour les hôtes</a></li>
<li><a href="cohost.html">Trouver un co-hôte</a></li>
</ul>

</div>


<div class="col-md-4">

<h5>Entreprise</h5>

<ul>
<li><a href="news.html">Newsroom</a></li>
<li><a href="careers.html">Carrières</a></li>
<li><a href="investors.html">Investisseurs</a></li>
<li><a href="giftcards.html">Cartes cadeaux</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>

</div>


<div class="col-md-4">

<h5>A PROPOS</h5>

<ul>
<li><a href="mailto:dark-enligne@gmail.com">Email: dark-enligne@gmail.com</a></li>
<li><a href="#">icloud: dark-enligne@icloud.com</a></li>
<li><a href="tel:+33121333468">NM(F): +33 121 333 468</a></li>
</ul>

</div>


<div class="col-md-4">

<h5>Information</h5>

<ul>
<li><a href="tel:+212649765653">NM: +212 06 49 76 56 53</a></li>
<li><a href="info.html">For more information</a></li>
<li><a href="contact.html">Contact the site owner</a></li>
</ul>

</div>

</div>


<hr>

<div class="footer-bottom">

<div>
©️ 2026 Dark, Inc.
</div>

<div class="footer-lang">

🌐 Français (FR)

<span>€ EUR / DH Maroc</span>

</div>

</div>

</div>

</footer>
      
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const langBtn = document.getElementById("langBtn");
            const langMenu = document.getElementById("langMenu");

            if (langBtn && langMenu) {
                langBtn.addEventListener("click", function(e) {
                    e.stopPropagation();
                    langMenu.classList.toggle("show");
                });

                langMenu.addEventListener("click", function(e) {
                    e.stopPropagation();
                });

                document.addEventListener("click", function() {
                    langMenu.classList.remove("show");
                });
            }

            const villeInput = document.getElementById("villeInput");
            const villeList = document.getElementById("villeList");
            const customItems = document.querySelectorAll(".custom-item");

            if (villeInput && villeList) {
                villeInput.addEventListener("focus", function () {
                    villeList.classList.add("show");
                });

                villeInput.addEventListener("click", function (e) {
                    e.stopPropagation();
                    villeList.classList.add("show");
                });

                customItems.forEach(item => {
                    item.addEventListener("click", function () {
                        villeInput.value = this.dataset.value;
                        villeList.classList.remove("show");
                    });
                });

                document.addEventListener("click", function (e) {
                    if (!villeList.contains(e.target) && e.target !== villeInput) {
                        villeList.classList.remove("show");
                    }
                });
            }

            const openPhotos = document.getElementById("openPhotos");
            const photoModal = document.getElementById("photoModal");
            const closePhotos = document.getElementById("closePhotos");

            if (openPhotos && photoModal && closePhotos) {
                openPhotos.addEventListener("click", function () {
                    photoModal.classList.add("show");
                });

                closePhotos.addEventListener("click", function () {
                    photoModal.classList.remove("show");
                });

                photoModal.addEventListener("click", function (e) {
                    if (e.target === photoModal) {
                        photoModal.classList.remove("show");
                    }
                });
            }
        });
function goBackOrHome() {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = "{{ route('home') }}";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const galleryImages = document.querySelectorAll(".gallery-image");
    const imageLightbox = document.getElementById("imageLightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const lightboxCounter = document.getElementById("lightboxCounter");
    const closeLightbox = document.getElementById("closeLightbox");
    const prevLightbox = document.getElementById("prevLightbox");
    const nextLightbox = document.getElementById("nextLightbox");
    const openAllPhotos = document.getElementById("openAllPhotos");

    const images = Array.from(galleryImages).map(img => img.dataset.src);
    let currentIndex = 0;

    function updateLightbox() {
        if (!images.length) return;
        lightboxImage.src = images[currentIndex];
        lightboxCounter.textContent = (currentIndex + 1) + " / " + images.length;
    }

    function openLightbox(index) {
        currentIndex = index;
        updateLightbox();
        imageLightbox.classList.add("show");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        imageLightbox.classList.remove("show");
        document.body.style.overflow = "";
    }

    function showNext() {
        currentIndex = (currentIndex + 1) % images.length;
        updateLightbox();
    }

    function showPrev() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateLightbox();
    }

    galleryImages.forEach((img, index) => {
        img.addEventListener("click", function () {
            openLightbox(index);
        });
    });

    if (openAllPhotos) {
        openAllPhotos.addEventListener("click", function () {
            openLightbox(0);
        });
    }

    if (closeLightbox) {
        closeLightbox.addEventListener("click", closeModal);
    }

    if (nextLightbox) {
        nextLightbox.addEventListener("click", showNext);
    }

    if (prevLightbox) {
        prevLightbox.addEventListener("click", showPrev);
    }

    if (imageLightbox) {
        imageLightbox.addEventListener("click", function (e) {
            if (e.target === imageLightbox) {
                closeModal();
            }
        });
    }

    document.addEventListener("keydown", function (e) {
        if (!imageLightbox || !imageLightbox.classList.contains("show")) return;

        if (e.key === "Escape") closeModal();
        if (e.key === "ArrowRight") showNext();
        if (e.key === "ArrowLeft") showPrev();
    });
});
        document.addEventListener("DOMContentLoaded", function () {
            const input = document.getElementById("destinationInput");
            const dropdown = document.getElementById("dropdown");
            const globeBtn = document.getElementById("globeBtn");
            const globeMenu = document.getElementById("globeMenu");
            const userBtn = document.getElementById("userBtn");
            const userMenu = document.getElementById("userMenu");

         const cities = [
    { name: "Marrakech", url: "/marrakech" },
    { name: "Casablanca", url: "/casablanca" },
    { name: "Rabat", url: "/rabat" },
    { name: "Tanger", url: "/tanger" },
    { name: "Agadir", url: "/agadir" },
    { name: "Fès", url: "/fes" },
    { name: "Oujda", url: "/oujda" },
    { name: "Chefchaouen", url: "/chefchaouen" },
    { name: "Salé", url: "/sale" },
    { name: "Meknés", url: "/meknes" },
    { name: "Kénitra", url: "/kenitra" },
    { name: "Tétouan", url: "/tetouan" },
    { name: "Safi", url: "/safi" },
    { name: "El Jadida", url: "/el-jadida" },
    { name: "Mohammédia", url: "/mohammedia" },
    { name: "Nador", url: "/nador" },
    { name: "Taza", url: "/taza" },
    { name: "Dakhla", url: "/dakhla" },
    { name: "Essaouira", url: "/essaouira" },
    { name: "El Houssima", url: "/el-houssima" },
    { name: "Ifrane", url: "/ifrane" }
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
            city.name.toLowerCase().includes(value)
        );

        filtered.forEach(city => {
            const div = document.createElement("div");
            div.className = "dd-item";
            div.innerText = city.name;

            div.onclick = function () {
                input.value = city.name;
                dropdown.style.display = "none";
                window.location.href = city.url;
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
    <script>

const langBtn = document.getElementById("langBtn");
const langMenu = document.getElementById("langMenu");

const userBtn = document.getElementById("userBtn");
const userMenu = document.getElementById("userMenu");

langBtn.onclick = () =>{
langMenu.style.display =
langMenu.style.display === "block" ? "none" : "block";

userMenu.style.display="none";
}

userBtn.onclick = () =>{
userMenu.style.display =
userMenu.style.display === "block" ? "none" : "block";

langMenu.style.display="none";
}

document.onclick = (e)=>{
if(!e.target.closest(".top-dropdown")){
langMenu.style.display="none";
userMenu.style.display="none";
}
}

</script>
    
    </div>
</body>
</html>