@extends('layouts.app')


@section('content')
<div class="container">
    <h1 class="text-center mt-4">Registrar Establecimiento</h1>
    <div class="row mt-4 justify-content-center">
        <form class="col-md-10 col-xs-12 card card-body" action="">
            <fieldset class="border p-4">
                <legend class="text-secondary text-sm">Nombre, Categoria e Imagen principal</legend>
                <div class="row">
                    <div class="form-group col">
                        <label for="nombre">Nombre Establecimiento</label>
                        <input type="text" name="name" id="nombre" class="form-control @error('nombre') is-invalid @enderror"
                            placeholder="Escribe el nombre del negocio" value="{{ old('name')}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="categoria">Categorias</label>
                        <select class="form-control @error('categoria') is-invalid @enderror" name="category_id" id="categoria">
                            <option selected disabled>Seleccione una categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{old('category_id'== $category->id ? 'selected':'')}}>
                                {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('categoria')
                        <div class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="primary_image" id="imagen_principal" lang="es">
                    <label class="custom-file-label" for="imagen_principal">Seleccionar Archivo</label>
                </div>
            </fieldset>
            <fieldset class="border p-4">
                <legend class="text-secondary text-sm">Ubicacion:</legend>
                <div class="form-group">
                    <label for="nombre">Coloca la direccion del establecimiento</label>
                    <input type="text" name="ubicacion" id="frmbuscadorEstablecimiento" class="form-control"
                        placeholder="Escribe la direccion de tu negocio" value="{{ old('name')}}">
                    <p class="text-white bg-primary mt-3 mb-1 text-center">El asistente te ayudara a colocar una direcion
                        estimada,
                        mueve el pin al lugar correcto
                    </p>
                </div>
                <div class="form-group">
                    <div id="mapa">

                    </div>
                </div>
                <p class="info-map-confirmation">Confirma que los siguientes campos son correctos.</p>
                <div class="row">
                    <div class="form-group col">
                        <label for="address">Direccion:</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}"
                            placeholder="Direccion..." disabled>
                        @error('address')
                        <div class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col">
                        <label for="address">Sector:</label>
                        <input type="text" name="sector" id="sector" class="form-control" value="{{ old('sector') }}"
                            placeholder="Sector..." disabled>
                        @error('address')
                        <div class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="lat" id="lat" value="{{ old('lat') }}">
                <input type="hidden" name="lng" id="lng" value="{{ old('lng') }}">
            </fieldset>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>

</script>
@endsection
