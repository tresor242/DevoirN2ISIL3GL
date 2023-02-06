<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between mt-5">
            <h2>Ajouter un étudiant </h2> 
            {{-- <a href="{{ route('classe.classe') }}">lister les étudiants</a> --}}
        </div>
        <div class="offre-card" style="width: 500px; margin: 0 auto;">
            <form action="{{ route('classe.store')}}" method="POST" class="row">
                @csrf
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
                </div>
                
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="semestre1" id="semestre1" placeholder="semestre1">
                </div>
                <div class="form-group col-md-12 my-3">
                    <select class="form-control" name="matiere" id="matiere">
                        <option selected>Type de contrat</option>
                        <option value="laravel">laravel</option>
                        <option value="python">python</option>
                        <option value="csharp">c#</option>
                        <option value="cpp">c++</option>
                    </class=>
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="number" class="form-control" name="note1" id="note1" placeholder="note1">
                </div>
                <div class="form-group col-md-12 my-3">
                    <input type="number" class="form-control" name="examen" id="examen" placeholder="examen">
                </div>
                
                <div class="form-group col-md-4 ">
                    <button class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>