  <!--*** Partie Haut ***--> 
  <div class="dropdown">
    <button class="dropbtn">
    <i class="fas fa-user-circle" style="font-size: 40px; color: rgb(255, 122, 144);"></i>
    </button>
    <div class="dropdown-content">
      <a href="../vues/pageCompteP.php">Gestion de compte</a>
      <a href="../vues/pageSuiviCoU.php">Suivi de commande</a>
    </div>
  </div>

  <!--Compte Personnel, Panier, Suivre une commande, Bar de recherche, logo-->

  <a href="../vues/pagePanier.php"><i class="fa fa-shopping-basket" style="font-size: 40px; color: rgb(255, 122, 144);"></i></a>  

  <img src="../images/BeautyLife Logo.png" alt="logo" width="150px" height="150px"/>

  <a href="../vues/pageServiceClient.php"><i class="far fa-comments" style="font-size: 40px; color: rgb(255, 122, 144);"></i></a>


  <a href="#" class="droite">
    <div class="search-box">
    <button class="btn-search"><i class="fas fa-search"></i></button>
    <input type="text" class="input-search" placeholder="Type to Search...">
    </div>
  </a>
  <style>


  <style>
  .dropdown {
    position: relative;
    display: inline-block;
    float: right;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown:hover .dropdown-content {display: block;}
  .dropdown-content a:hover {background-color: #ddd;}
  .dropdown:hover .dropbtn {background-color: #3e8e41;}

  .logo {
    text-align: center;
  }

  .search-box{
    width: fit-content;
    height: fit-content;
    position: relative;
  }
  .input-search{
    height: 50px;
    width: 50px;
    border-style: none;
    padding: 10px;
    font-size: 18px;
    letter-spacing: 2px;
    outline: none;
    border-radius: 25px;
    transition: all .5s ease-in-out;
    background-color: pink;
    padding-right: 40px;
    color:#fff;
  }
  .input-search::placeholder{
    color:rgba(255,255,255,.5);
    font-size: 18px;
    letter-spacing: 2px;
    font-weight: 100;
  }
  .btn-search{
    width: 50px;
    height: 50px;
    border-style: none;
    font-size: 20px;
    font-weight: bold;
    outline: none;
    cursor: pointer;
    border-radius: 50%;
    position: absolute;
    right: 0px;
    color:#ffffff ;
    background-color:transparent;
    pointer-events: painted;  
  }
  .btn-search:focus ~ .input-search{
    width: 300px;
    border-radius: 0px;
    background-color: transparent;
    border-bottom:1px solid rgba(255,255,255,.5);
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
  .input-search:focus{
    width: 300px;
    border-radius: 0px;
    background-color: transparent;
    border-bottom:1px solid rgba(255,255,255,.5);
    transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  }
</style>