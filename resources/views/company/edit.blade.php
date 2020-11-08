<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('company.update',$company->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <label for="name">Nombre de la empresa</label>
                    <input name="name" id="name" type="text" class="form-control" value="{{ $company->name }}">
                </div>

                <div class="form-group">
                    <label for="nit">Nit de la empresa</label>
                    <input name="nit" id="nit" type="text" class="form-control" value="{{ $company->nit }}">
                </div>
                <div class="form-group">
                    <label for="address">Dirección de la empresa</label>
                    <input name="address" id="address" type="text" class="form-control" value="{{ $company->address }}">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ route('company.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
