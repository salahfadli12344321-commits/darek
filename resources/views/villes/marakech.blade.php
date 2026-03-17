<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>


.top-header{
width:100%;
display:flex;
justify-content: center;
padding: 20px 0;
}

.top-header-box{
width:100%;
max-width:1200px;
margin-left:auto;
margin-right:auto;
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












    *{
      box-sizing:border-box;
    }

    html, body{
      height:100%;
      margin:0;
      font-family:Arial,sans-serif;
      background:#fff;
    }

    .app{
      min-height:100vh;
      display:grid;
      grid-template-columns:65% 35%;
      grid-template-rows:90px 1fr 90px;
      grid-template-areas:
        "header header"
        "content menu"
        "footer footer";
      gap:12px;
      padding:20px;
      align-items:stretch;
      color:white;
      background-color:#88A394;

    }
    .header-right{
display:flex;
align-items:center;
justify-content:flex-end;
gap:14px;
}

.host-text{
font-size:15px;
font-weight:500;
cursor:pointer;
}

.icon-circle{
width:36px;
height:36px;
border-radius:50%;
background:#f3f3f3;
display:flex;
align-items:center;
justify-content:center;
cursor:pointer;
}

.menu-btn{
width:40px;
height:40px;
border-radius:50%;
border:none;
background:#f3f3f3;
font-size:18px;
cursor:pointer;
}

.menu-box{
border-radius:16px;
padding:10px 0;
box-shadow:0 6px 20px rgba(0,0,0,0.15);
min-width:220px;
}

.dropdown-item{
padding:10px 18px;
font-size:14px;
 }

  

    .logo-box{
      display:flex;
      align-items:center;
      gap:12px;
    }

    .logo{
      width:42px;
      height:42px;
      object-fit:cover;
      border-radius:50%;
      
    }

    .brand{
      font-size:22px;
      font-weight:700;
      color:#222;
      margin:0;
      color:white;

    }

    .menu-nav{
      display:flex;
      justify-content:center;
      align-items:center;
      gap:40px;

    }

    .menu-nav a{
      text-decoration:none;
      color:#222;
      font-size:17px;
      font-weight:500;
      color:white;
    }

    .content{
      grid-area:content;
      background:#fff;
      border:1px solid #eee;
      border-radius:18px;
      padding:20px;
      min-width:0;
      overflow-y:auto;
      overflow-x:hidden;
    }

    .menu{
      grid-area:menu;
      min-width:0;
      height:100%;
    }

    .menu-sticky{
      position: sticky;
      top:110px;
      background:#fff;
      border:1px solid #eee;
      border-radius:18px;
      padding:10px;
    }

    .map-frame{
      width:100%;
      height:80vh;
      border:0;
      border-radius:14px;
      display:block;
    }

    .footer{
      grid-area:footer;
      background:#f8f8f8;
      border:1px solid #eee;
      border-radius:18px;
      padding:20px;
      display:flex;
      align-items:center;
      font-size:28px;
      font-weight:700;
    }

    .card-house{
      border:none;
      border-radius:18px;
      overflow:hidden;
      box-shadow:0 2px 10px rgba(132, 12, 12, 0.06);
      width:100%;
      background:#fff;
    }

    .card-house img{
      width:100%;
      height:240px;
      object-fit:cover;
      display:block;
    }

    .card-house .card-body{
      padding:16px;
      background-color: #BCABB0;

    }

    .place-title{
      font-size:20px;
      font-weight:700;
      margin-bottom:8px;
    }

    .place-text{
      color:#666;
      margin-bottom:8px;
    }

    .place-price{
      font-size:22px;
      font-weight:700;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon{
      background-size:70% 70%;
    }

    .content::-webkit-scrollbar{
      width:8px;
    }

    .content::-webkit-scrollbar-thumb{
      background:#D6CFC7;
      border-radius:10px;
    }

    .content::-webkit-scrollbar-track{
      background:transparent;
    }

    @media (max-width: 992px){
      html, body{
        overflow:auto;
      }

      .app{
        height:auto;
        min-height:100vh;
        grid-template-columns:1fr;
        grid-template-rows:90px auto 350px 90px;
        grid-template-areas:
          "header"
          "content"
          "menu"
          "footer";
      }

    
      

      .menu-nav{
        flex-wrap:wrap;
        gap:20px;
      }

      .content{
        overflow:visible;
      }

      .menu{
        height:350px;
      }
    }
    .header-right{
    display:flex;
    align-items:center;
    justify-content:flex-end;
    gap:14px;
    
}

.host-text{
    font-size:15px;
    font-weight:500;
    color:#fff;
    cursor:pointer;
}

.lang-btn,
.menu-btn{
    width:40px;
    height:40px;
    border-radius:50%;
    border:none;
    background:#D6CFC7;
    font-size:18px;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
}

.lang-btn:hover,
.menu-btn:hover{
    background:#e8e8e8;
}

.menu-box,
.lang-menu{
    border:none;
    border-radius:18px;
    padding:10px 0;
    box-shadow:0 8px 24px rgba(0,0,0,0.15);
    min-width:220px;
}

.lang-menu{
    min-width:170px;
}

.dropdown-item{
    padding:10px 18px;
    font-size:15px;
}

.dropdown-divider{
    margin:6px 0;
}

.footer{
background:#f32222;
border-top:1px solid #ddd;
padding:40px 20px;
}

.footer h5{
font-size:16px;
font-weight:700;
margin-bottom:14px;
}

.footer ul{
list-style:none;
padding:0;
}

.footer li{
font-size:14px;
margin-bottom:10px;
color:#444;
cursor:pointer;
}

.footer li:hover{
text-decoration:underline;
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





 html, body{
  height:100%;
  margin:0;
  font-family:Arial,sans-serif;
}

.app{
  min-height:100vh;
  display:grid;
  grid-template-columns:65% 35%;
  grid-template-rows:90px 1fr auto; /* content يتمدد */
  grid-template-areas:
    "header header"
    "content menu"
    "footer footer";
  gap:12px;
  padding:20px;
}

.content{
  grid-area:content;
  background:#fff;
  border:1px solid #eee;
  border-radius:18px;
  padding:20px;
  min-width:0;
  background-color: #D6CFC7;
}

.menu{
  grid-area:menu;
  min-width:0;
}

.footer{
  grid-area:footer;
  background:#F5F5F0;
  border-top:1px solid #ddd;
  padding:40px 20px;
}

.menu{
  grid-area:menu;
  min-width:0;
  align-self:start;
  position:relative;
}

.map-box{
  position:sticky;
  top:20px;                
  background:#fff;
  border:1px solid #eee;
  border-radius:18px;
  padding:10px;
  overflow:hidden;
  transition:top 0.25s ease;
  box-shadow: 0 4px 18px rgba(0,0,0,0.08);
}

.map-frame{
  width:100%;
  height:75vh;             
  min-height:420px;
  max-height:620px;
  border:0;
  border-radius:14px;
  display:block;
}














:root{
  --ivory: #F5F5F0;
  --deep-gray: #333333;
  --sand-beige: #d6dedc;
  --soft-sage: #F5F5F0;
  --white: #ffffff;
  --text-dark: #2b2b2b;
  --text-soft: #6b6b6b;
  --border-soft: #e9e5df;
}

*{
  
  box-sizing:border-box;
}

html, body{
  height:100%;
  margin:0;
  font-family:Arial,sans-serif;
  background: var(--ivory);
  color: var(--text-dark);
}

.app{
  min-height:100vh;
  display:grid;
  grid-template-columns:65% 35%;
  grid-template-rows:90px 1fr auto;
  grid-template-areas:
    "header header"
    "content menu"
    "footer footer";
  gap:12px;
  padding:20px;
  background: var(--soft-sage);
}

/* HEADER */



/* CONTENT */
.content{
  grid-area:content;
  background: var(--sand-beige);
  border:1px solid var(--border-soft);
  border-radius:18px;
  padding:20px;
  min-width:0;
  overflow-y:auto;
  overflow-x:hidden;
}

.content h4,
.content p{
  color: var(--deep-gray);
}

/* MENU / MAP */
.menu{
  grid-area:menu;
  min-width:0;
  align-self:start;
  position:relative;
}

.map-box{
  position:sticky;
  top:20px;
  background: var(--ivory);
  border:1px solid var(--border-soft);
  border-radius:18px;
  padding:10px;
  overflow:hidden;
  box-shadow: 0 4px 18px rgba(0,0,0,0.08);
}

.map-frame{
  width:100%;
  height:75vh;
  min-height:420px;
  max-height:620px;
  border:0;
  border-radius:14px;
  display:block;
}

/* CARDS */
.card-house{
  border:none;
  border-radius:18px;
  overflow:hidden;
  box-shadow:0 2px 10px rgba(0,0,0,0.06);
  width:100%;
  background: var(--ivory);
}

.card-house img{
  width:100%;
  height:240px;
  object-fit:cover;
  display:block;
}

.card-house .card-body{
  padding:16px;
  background-color: var(--sand-beige);
}

.place-title{
  font-size:20px;
  font-weight:700;
  margin-bottom:8px;
  color: var(--deep-gray);
}

.place-text{
  color: var(--text-soft);
  margin-bottom:8px;
}

.place-price{
  font-size:22px;
  font-weight:700;
  color: var(--soft-sage);
}

/* FOOTER */
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

/* SCROLLBAR */
.content::-webkit-scrollbar{
  width:8px;
}

.content::-webkit-scrollbar-thumb{
  background: var(--soft-sage);
  border-radius:10px;
}

.content::-webkit-scrollbar-track{
  background:transparent;
}

/* RESPONSIVE */
@media (max-width: 992px){
  html, body{
    overflow:auto;
  }

  .app{
    height:auto;
    min-height:100vh;
    grid-template-columns:1fr;
    grid-template-rows:90px auto 350px auto;
    grid-template-areas:
      "header"
      "content"
      "menu"
      "footer";
  }



  .menu-nav{
    flex-wrap:wrap;
    gap:20px;
  }

  .content{
    overflow:visible;
  }

  .menu{
    height:350px;
  }
}


.top-header{
  width: 100%;
  padding: 20px 0;
  display: flex;
  justify-content: center;
}

.top-header-box{
  width: calc(100% - 40px);
  max-width: 1280px;
  margin: 0 auto;
  background: #f7f5ef;
  border-radius: 25px;
  padding: 18px 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  position: relative;
  z-index: 9999;
}

.top-brand{
  display: flex;
  align-items: center;
  gap: 10px;
}

.top-avatar{
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 22px;
}

.top-logo-text{
  font-size: 18px;
  font-weight: bold;
  color: #333;
}

.top-nav{
  display: flex;
  gap: 35px;
  align-items: center;
  justify-content: center;
  flex: 1;
}

.top-link{
  text-decoration: none;
  color: #333;
  font-size: 16px;
  padding-bottom: 6px;
  position: relative;
}

.top-link.active::after{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #333;
}

.top-actions{
  display: flex;
  gap: 10px;
  align-items: center;
}

.top-btn{
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: none;
  background: #ece9df;
  cursor: pointer;
  font-size: 18px;
}

.top-dropdown{
  position: relative;
}

.top-menu{
  position: absolute;
  top: 50px;
  right: 0;
  background: white;
  border-radius: 12px;
  width: 200px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  display: none;
  padding: 10px;
  z-index: 10000;
}

.top-item{
  padding: 10px;
  cursor: pointer;
  border-radius: 8px;
}

.top-item:hover{
  background: #f1f1f1;
}

.top-line{
  height: 1px;
  background: #ddd;
  margin: 6px 0;
}










/* HEADER */

.air-header{
  width:100%;
  padding:20px 0;
  display:flex;
  justify-content:center;
}

.air-header-box{
  width:100%;
  max-width:1200px;
  background:#ffffff;
  border-radius:40px;
  padding:14px 26px;

  display:flex;
  align-items:center;
  justify-content:space-between;

  box-shadow:0 6px 18px rgba(0,0,0,0.08);
}

/* LOGO */

.air-logo{
  display:flex;
  align-items:center;
  gap:10px;
}

.air-avatar{
  width:44px;
  height:44px;
  border-radius:50%;
  background:#88A394;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-weight:bold;
  font-size:18px;
}

.air-brand{
  font-size:18px;
  font-weight:700;
}

/* NAV */

.air-nav{
  display:flex;
  gap:40px;
}

.air-nav a{
  text-decoration:none;
  color:#333;
  font-size:15px;
  font-weight:500;
}

/* ACTIONS */

.air-actions{
  display:flex;
  gap:12px;
}

.air-btn{
  width:38px;
  height:38px;
  border-radius:50%;
  border:none;
  background:#F1F1F1;
  cursor:pointer;
  font-size:16px;
}

.air-btn:hover{
  background:#e5e5e5;
}



.clean-header{
    width: 100%;
    padding: 20px 30px;
}

.clean-header-box{
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 999px;
    padding: 14px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.clean-brand{
    display: flex;
    align-items: center;
    gap: 12px;
    flex: 0 0 180px;
    min-width: 180px;
}

.clean-avatar{
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: #9aaa8c;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 20px;
    flex-shrink: 0;
}

.clean-brand-text{
    font-size: 18px;
    font-weight: 700;
    color: #333;
    white-space: nowrap;
}

.clean-nav{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    min-width: 0;
}

.clean-link{
    text-decoration: none;
    color: #333;
    font-size: 16px;
    font-weight: 500;
    white-space: nowrap;
    position: relative;
    padding-bottom: 6px;
}

.clean-link.active::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #333;
    border-radius: 10px;
}

.clean-actions{
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
    flex: 0 0 120px;
    min-width: 120px;
}

.clean-dropdown{
    position: relative;
}

.clean-btn{
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.clean-menu{
    position: absolute;
    top: 50px;
    right: 0;
    width: 200px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    padding: 10px;
    display: none;
    z-index: 9999;
}

.clean-menu.show{
    display: block;
}

.clean-item{
    display: block;
    text-decoration: none;
    color: #333;
    padding: 10px 12px;
    border-radius: 8px;
}

.clean-item:hover{
    background: #f5f5f5;
}

.clean-line{
    height: 1px;
    background: #ddd;
    margin: 6px 0;
}

@media (max-width: 992px){
    .clean-header-box{
        border-radius: 24px;
        padding: 16px;
        flex-wrap: wrap;
    }

    .clean-brand,
    .clean-actions{
        flex: unset;
        min-width: auto;
    }

    .clean-nav{
        width: 100%;
        order: 3;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }
}








.clean-header{
    grid-area: header;
    width: 100%;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.clean-header-box{
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    background: #FFFFFF;
    border-radius: 999px;
    padding: 14px 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
}

.clean-brand{
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 160px;
}

.clean-avatar{
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: #9aaa8c;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 20px;
    flex-shrink: 0;
}

.clean-brand-text{
    font-size: 18px;
    font-weight: 700;
    color: #333;
    white-space: nowrap;
}

.clean-nav{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
}

.clean-link{
    text-decoration: none;
    color: #333;
    font-size: 16px;
    font-weight: 500;
    white-space: nowrap;
    position: relative;
    padding-bottom: 6px;
}

.clean-link.active::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #333;
    border-radius: 10px;
}

.clean-actions{
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 100px;
    justify-content: flex-end;
}

.clean-dropdown{
    position: relative;
}

.clean-btn{
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 50%;
    background: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.clean-menu{
    position: absolute;
    top: 50px;
    right: 0;
    width: 200px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    padding: 10px;
    display: none;
    z-index: 9999;
}

.clean-menu.show{
    display: block;
}

.clean-item{
    display: block;
    text-decoration: none;
    color: #333;
    padding: 10px 12px;
    border-radius: 8px;
}

.clean-item:hover{
    background: #f5f5f5;
}

.clean-line{
    height: 1px;
    background: #ddd;
    margin: 6px 0;
}
  </style>
</head>
<body>

  <div class="app">

    

    <!-- HEADER -->
<header class="clean-header">
    <div class="clean-header-box">

        <div class="clean-brand">
            <div class="clean-avatar">D</div>
            <span class="clean-brand-text">Dark</span>
        </div>

        <nav class="clean-nav">
            <a href="#" class="clean-link active">Logements</a>
            <a href="#" class="clean-link">Expériences</a>
            <a href="{{ route('pages.create') }}" class="clean-link">Devenir hôte</a>
        </nav>

        <div class="clean-actions">
            <div class="clean-dropdown">
                <button class="clean-btn" id="cleanLangBtn" type="button">🌐</button>
                <div class="clean-menu" id="cleanLangMenu">
                    <div class="clean-item">Français</div>
                    <div class="clean-item">English</div>
                    <div class="clean-item">العربية</div>
                </div>
            </div>

            <div class="clean-dropdown">
                <button class="clean-btn" id="cleanUserBtn" type="button">☰</button>
                <div class="clean-menu" id="cleanUserMenu">
                    <a href="/login" class="clean-item">Se connecter</a>
                    <a href="/register" class="clean-item">S’inscrire</a>
                    <div class="clean-line"></div>
                    <a href="#" class="clean-item">Favoris</a>
                </div>
            </div>
        </div>

    </div>
</header>

    <!-- CONTENT -->
    <div class="content">
        <p>Gueliz, Marrakech : Plus de 100 logements</p>
        <h4>Classement des résultats</h4>
      <div class="container-fluid p-0">
        <div class="row g-4">

          <!-- CARD 1 -->
          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <img src="{{ asset('images/images/marrakech/marrakech1n4.jpeg') }}" class="d-block w-100" alt="">                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech1n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech1n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">appartement marakech</div>
                <p class="place-text">appartement moderne avec une grande terrasse</p>
                <div class="place-price">250DH / nuit</div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech2n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech2n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech2n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <p class="place-text">5Luxe & Chic+ Netflix + Piscine au coeur de Gueliz</p>
                <div class="place-price">700DH</div>
              </div>
            </div>
          </div>



          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech3n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech3n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech3n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech4n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech4n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech4n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech5n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech5n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech5n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>



          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech5n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech5n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech5n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>



          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech6n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech6n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech6n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech7n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech7n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech7n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>


          

          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech8n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech8n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech8n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Villa · Guéliz</div>
                <div class="place-text">5 chambres · piscine</div>
                <div class="place-price">250€ / nuit</div>
              </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel2" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech9n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech9n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech9n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Appartement · Marrakech</div>
                <div class="place-text">3 chambres · 4 lits</div>
                <div class="place-price">120€ / nuit</div>
              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel3" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/image3.png" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/image3-2.png" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="/images/image3-3.png" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Riad · Médina</div>
                <div class="place-text">2 chambres · terrasse</div>
                <div class="place-price">90€ / nuit</div>
              </div>
            </div>
          </div>

          <!-- CARD 4 -->
          <div class="col-md-6">
            <div class="card card-house">
              <div id="carousel4" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('images/images/marrakech/marrakech10n4.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech10n5.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/images/marrakech/marrakech10n6.jpeg') }}" class="d-block w-100" alt="">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </button>
              </div>

              <div class="card-body">
                <div class="place-title">Studio · Guéliz</div>
                <div class="place-text">1 chambre · wifi</div>
                <div class="place-price">60€ / nuit</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- MENU -->
    <div class="menu">
      <div class="map-box">
        <iframe
          class="map-frame"
          src="https://maps.google.com/maps?q=marrakech&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
      </div>
    </div>

    <!-- FOOTER -->
        <footer class="footer">

            <div class="container">
            
            <div class="row footer-top">
            
            <div class="col-md-4">
            <h5>Assistance</h5>
            
            <ul>
            <li>Centre d'aide</li>
            <li>Assistance sécurité</li>
            <li>AirCover</li>
            <li>Lutte contre la discrimination</li>
            <li>Assistance handicap</li>
            <li>Options d'annulation</li>
            </ul>
            
            </div>
            
            
            <div class="col-md-4">
            
            <h5>Accueil de voyageurs</h5>
            
            <ul>
            <li>Mettre votre logement</li>
            <li>Proposer une expérience</li>
            <li>Proposer votre service</li>
            <li>AirCover pour les hôtes</li>
            <li>Ressources pour les hôtes</li>
            <li>Trouver un co-hôte</li>
            </ul>
            
            </div>
            
            
            <div class="col-md-4">
            
            <h5>Entreprise</h5>
            
            <ul>
            <li>Newsroom</li>
            <li>Carrières</li>
            <li>Investisseurs</li>
            <li>Cartes cadeaux</li>
            <li>Contact</li>
            </ul>
            
            </div>


            <div class="col-md-4">
            
                <h5>A PROPODS</h5>
                
                <ul>
                <li>email:dark-enligne@gmail.com</li>
                <li>icloud:dark-enligne#icloud.com</li>
                <li>NM(F):+33  121 333 468</li>
               
                </ul>
                
                </div>

            </br>
                
            <div class="col-md-4">
            
             
                
                <h5>.........</h5>
                <ul>
              
                <li>nm: 212+ 06 49 76 56 53</li>
                <li>for more information</li>
                <li>contact the site owner</li>
               
                </ul>
                
                </div>
            
            </div>
            
            
            <hr>
            
            <div class="footer-bottom">
            
            <div>
            © 2026 Dark, Inc.
            </div>
            
            <div class="footer-lang">
            
            🌐 Français (FR)
            
            <span>€ EUR/DH-maroc</span>
            
            </div>
            
            </div>
            
            </div>
            
            </footer>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.querySelectorAll('.carousel').forEach(function (carouselEl) {
      const carousel = new bootstrap.Carousel(carouselEl, {
        interval: 1200,
        ride: false,
        pause: false,
        wrap: true
      });

      carousel.pause();

      carouselEl.addEventListener('mouseenter', function () {
        carousel.cycle();
      });

      carouselEl.addEventListener('mouseleave', function () {
        carousel.pause();
      });
    });
  </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const langBtn = document.getElementById("cleanLangBtn");
    const langMenu = document.getElementById("cleanLangMenu");
    const userBtn = document.getElementById("cleanUserBtn");
    const userMenu = document.getElementById("cleanUserMenu");

    function closeMenus() {
        if (langMenu) langMenu.classList.remove("show");
        if (userMenu) userMenu.classList.remove("show");
    }

    if (langBtn) {
        langBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            if (userMenu) userMenu.classList.remove("show");
            if (langMenu) langMenu.classList.toggle("show");
        });
    }

    if (userBtn) {
        userBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            if (langMenu) langMenu.classList.remove("show");
            if (userMenu) userMenu.classList.toggle("show");
        });
    }

    document.addEventListener("click", function () {
        closeMenus();
    });
});
</script>

</body>
</html>