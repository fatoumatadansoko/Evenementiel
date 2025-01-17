@extends('layouts.home')
@section('title', 'Accueil')

@section('content')

<div class="container">
    <div class="card-banner row">
        <!-- Image de la bannière -->
        <div class="col-md-7 col-12 d-flex justify-content-center mb-3">
          <img src="{{ asset('img/banner.png') }}" alt="Logo" class="imagebanner img-fluid">
        </div>

        <!-- Section Trois événements à venir -->
        <div class="col-md-5 col-12 d-flex flex-column align-items-center">
          <div class="card-body">
            <div class="section-title text-center">Trois événements à venir</div>

            <div class="text-as-button">
              <h5 class="card-title"><i class="fas fa-calendar-alt icon-calendar"></i>Soirée diar diar</h5>
              <p class="card-text"><small class="text-body-secondary">mardi le 30 mai 2024</small></p>
            </div>
            <div class="text-as-button">
              <h5 class="card-title"><i class="fas fa-calendar-alt icon-calendar"></i>Soirée diar diar</h5>
              <p class="card-text"><small class="text-body-secondary">mardi le 30 mai 2024</small></p>
            </div>
            <div class="text-as-button">
              <h5 class="card-title"><i class="fas fa-calendar-alt icon-calendar"></i>Soirée diar diar</h5>
              <p class="card-text"><small class="text-body-secondary">mardi le 30 mai 2024</small></p>
            </div>
          </div>
        </div>
    </div>

    <!-- Section À propos -->
    <div class="justify-content-center section-bleu section text-center">
        <div class="container py-5">
          <h3 class="pb-2" id="a-propos">À propos de nous</h3>
          <p class="paragraphe">
            Notre application de réservation d'événements est la solution idéale pour organiser, découvrir et participer à des événements de manière simple et efficace. Pour les organisateurs, elle offre des outils puissants pour créer, promouvoir et gérer des événements avec une interface intuitive et des options de promotion avancées. Pour les participants, elle facilite la découverte d'événements grâce à des recommandations personnalisées et une réservation en quelques clics avec des paiements sécurisés. Profitez d'une expérience utilisateur fluide et sécurisée, adaptée à tous les appareils, et transformez votre façon de vivre les événements.
          </p>
          <div class="d-flex justify-content-center">
            <button class="btn btn-danger">Découvrir</button>
          </div>
        </div>
    </div>

    <!-- Nos chiffres -->
    <div class="text-center py-5 chiffres section">
        <div class="nos-chiffres">
            <div class="container">
                <h3>Nos chiffres</h3>
                <div class="row justify-content-around">
                    <div class="col-md-3">
                        <h4>100</h4>
                        <p>Nos partenaires</p>
                    </div>
                    <div class="col-md-3">
                        <h4>200</h4>
                        <p>Nos événements</p>
                    </div>
                    <div class="col-md-3">
                        <h4>300</h4>
                        <p>Nos utilisateurs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-center my-4">Nos événements</h2>
    <div class="row">
        @foreach($evenements as $evenement)
        <div class="col-md-4 mb-4">
       <a href="{{route('evenements.show',$evenement->id)}}">
        <div class="card event-card h-100">
          {{-- <a href="{{ route('evenement.details', $evenement->id) }}"> --}}
            <img src="{{ asset('storage/photos/' . $evenement->photo) }}" class="card-img-top event-card-img-top" alt="{{ $evenement->libelle }}">
          </a>
          <div class="card-body">
            <div class="date-badge">
              <span class="date-day">{{ \Carbon\Carbon::parse($evenement->date_evenement)->format('d') }}</span>
              <span class="date-month">{{ \Carbon\Carbon::parse($evenement->date_evenement)->format('M') }}</span>
            </div>
            <h5 class="card-titlevent">{{ $evenement->libelle }}</h5>
            <p class="card-textevent"><small class="text-muted">Veuillez réserver votre place avant la clôture des places</small></p>
          </div>
        </div>
       </a>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-end mt-4">
        <a href="{{ route('liste') }}" class="voirplus">Voir plus</a>
    </div>

    <!-- Carousel Partenaires -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Place for an image -->
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/simplon.webp') }}" alt="Logo" class="partenaire">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <!-- Place for an image -->
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/simplon.webp') }}" alt="Logo" class="partenaire">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Formulaire de contact -->
    <div class="py-5 formulaire">
        <h3 class="text-center" id="contact">Contactez-nous</h3>
        <form method="POST" action="">
            @csrf
            <div class="contact">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="inputNom">Nom</label>
                        <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="inputPrenom">Prénom</label>
                        <input type="text" class="form-control" id="inputPrenom" name="prenom" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Adresse email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="exemple@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="inputPhone">Numéro de téléphone</label>
                    <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="77 000 00 00" required>
                </div>
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" id="inputMessage" name="message" rows="3" placeholder="Contenu de votre message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-custom">Envoyer</button>
            </div>
        </form>
    </div>
    <style>
        body {
        font-family: 'Lato', sans-serif;
    }

    </style>

@endsection
