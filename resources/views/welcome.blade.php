<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <!-- Dodaj link do biblioteki Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Dodaj niestandardowy CSS -->
    <style>
        .jumbotron {
            background-image: url('https://via.placeholder.com/1500x600');
            background-size: cover;
            color: white;
            text-align: center;
        }
        .card {
            border: none;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
        }
    </style>
</head>
<body>
    <!-- Jumbotron z nagłówkiem i przyciskiem zamówienia -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Zamów dietę dostosowaną do Twoich potrzeb</h1>
            <p class="lead">Zdrowe odżywianie zaczyna się od dobrego planu.</p>
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#orderModal">Zamów teraz</button>
        </div>
    </div>

    <!-- Kontener z dietami -->
    <div class="container mt-5">
        <h2 class="mb-4">Wybierz dietę</h2>

        <!-- Przycisk logowania w modalu -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
            Zaloguj się
        </button>

        <!-- Modal logowania -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Zaloguj się lub zarejestruj</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formularz logowania -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input id="email" type="email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Hasło:</label>
                                <input id="password" type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Zaloguj się</button>
                        </form>
                        <hr>
                        <!-- Przekierowanie do formularza rejestracji -->
                        <p>Nie masz jeszcze konta? <a href="{{ route('register') }}">Zarejestruj się</a>.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal zamówienia -->
        <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orderModalLabel">Podaj adres dostawy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Formularz zamówienia -->
                        <form>
                            <div class="form-group">
                                <label for="address">Adres dostawy:</label>
                                <input type="text" class="form-control" id="address" placeholder="Wprowadź adres">
                            </div>
                            <button type="submit" class="btn btn-primary">Zamów</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Przykładowe diety -->
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Dieta nr 1">
                    <div class="card-body">
                        <h5 class="card-title">Dieta wegetariańska</h5>
                        <p class="card-text">Dieta oparta na produktach roślinnych, wykluczająca mięso.</p>
                        <button class="btn btn-success">Zamów</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Dieta nr 2">
                    <div class="card-body">
                        <h5 class="card-title">Dieta paleo</h5>
                        <p class="card-text">Dieta oparta na produktach dostępnych w epoce paleolitu, wykluczająca produkty przetworzone.</p>
                        <button class="btn btn-success">Zamów</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Dieta nr 3">
                    <div class="card-body">
                        <h5 class="card-title">Dieta ketogeniczna</h5>
                        <p class="card-text">Dieta o niskiej zawartości węglowodanów, wysoka w tłuszcz.</p>
                        <button class="btn btn-success">Zamów</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stopka -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Kontakt</h4>
                    <p>Telefon: 123-456-789</p>
                    <p>Email: kontakt@przykladowastrona.pl</p>
                </div>
                <div class="col-md-6">
                    <h4>Śledź nas</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Facebook</a></li>
                        <li class="list-inline-item"><a href="#">Twitter</a></li>
                        <li class="list-inline-item"><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Dodaj link do biblioteki Bootstrap JS (opcjonalnie) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
