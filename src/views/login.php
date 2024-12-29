<?php
include '../db/config.php'; 
include '../classes/auth.php';


if(isset($_POST['loginbutton'])){
  $email = $_POST['emaillogin'];
  $pass = $_POST['passwordlogin'];
  $user = new auth($conn);
  $user->login($email,$pass);
  }

  
if(isset($_POST['registerbutton'])){
  $name = $_POST['nameregistre'];
  $tel = $_POST['telregistre'];
  $client_id = $_POST['client_id'];
  $email = $_POST['emailregister'];
  $pass = $_POST['passwordregister'];
  $user = new auth($conn);
  $user->register($client_id,$name,$email,$tel,$pass);
  }
  
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de gestion de location de voitures</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <section id="login" >
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="../../public/assets/images/logo.png" alt="Votre entreprise">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Connectez-vous à votre compte</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="emaillogin" class="block text-sm/6 font-medium text-gray-900">Adresse e-mail</label>
        <div class="mt-2">
          <input type="email" name="emaillogin" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="password" class="block text-sm/6 font-medium text-gray-900">Mot de passe</label>
        <div class="mt-2">
          <input type="password" name="passwordlogin" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <button type="submit" name="loginbutton" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connecter</button>
      </div>
    </form>
    <p class="mt-6 text-center text-sm text-gray-500">
      Vous n'avez pas de compte ?
      <a href="#" id="logintoregistre" class="font-medium text-indigo-600 hover:text-indigo-500">Créer un compte</a>
    </p>
  </div>
  </div>
  </section>
  
<section id="registre" class="hidden">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
<div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="../../public/assets/images/logo.png" alt="Votre entreprise">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Créer votre compte</h2>
  </div>
  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="nameregistre" class="block text-sm/6 font-medium text-gray-900">Nom Et Prenom</label>
        <div class="mt-2">
          <input type="text" name="nameregistre" id="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="telregistre" class="block text-sm/6 font-medium text-gray-900">Telephone</label>
        <div class="mt-2">
          <input type="number" name="telregistre" id="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="client_id" class="block text-sm/6 font-medium text-gray-900">CIN</label>
        <div class="mt-2">
          <input type="text" name="client_id" id="client_id" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="email-register" class="block text-sm/6 font-medium text-gray-900">Adresse e-mail</label>
        <div class="mt-2">
          <input type="email" name="emailregister" id="email-register" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <label for="password-register" class="block text-sm/6 font-medium text-gray-900">Mot de passe</label>
        <div class="mt-2">
          <input type="password" name="passwordregister" id="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
      </div>

      <div>
        <button type="submit" name="registerbutton" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Créer un compte</button>
      </div>
    </form>
    <p class="mt-6 text-center text-sm text-gray-500">
      Vous avez déjà un compte ?
      <a href="" id="registretologin" class="font-medium text-indigo-600 hover:text-indigo-500">Se connecter</a>
    </p>
  </div>
</div>
</section>
<script src="../../public/assets/js/index.js"></script>

</body>
</html>
