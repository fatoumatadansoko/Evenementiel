<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('profil_user.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="baniere">
 <div class="conteneur">
   <div>
    <img src="{{asset('profil_user.css')}}" class="photoprofil" alt="">
   </div>
   <div class="cont-form">
    <form action="#" method="post" class="d-flex flex-wrap">
   <div class="box-form">
     <h5>Nom complet</h5>
    <i class="fa-solid fa-address-card" style="color: #fff;"></i>
    <input class=" rounded-2" type="text" value="Amadou Barro">
</div>
   <div class="box-form">
    <h5>Adresse maison</h5>
    <i class="fa-solid fa-location-dot" style="color: #fff;"></i>
    <input class=" rounded-2" type="text" value="Fou deuk Nékhé">
</div>
   <div class="box-form">
    <h5>Adresse email</h5>
    <i class="fa-solid fa-envelope" style="color: #fff;"></i>
    <input class=" rounded-2" type="text" value="Barro@gmail.com">
</div>
   <div class="box-form">
    <h5>Téléphone</h5>
    <i class="fa-solid fa-phone" style="color: #fff;"></i>
    <input class=" rounded-2" type="text" value="77 000 00 00">
</div>

<p class="d-flex"> Vous pouvez modifier directement en cas d’erreurs</p>


<button type="submit" class="btn ">Modifier</button>
    </form>


   </div>
 </div>
</div>
</body>
</html>


