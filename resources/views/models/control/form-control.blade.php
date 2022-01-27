<label for="nombre">Nombre</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" value="{{ old('nombre', optional($control)->nombre) }}" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre del Control">
    </div>
</div>
<label for="password">Descripcion</label>
<div class="form-group">
    <div class="form-line">
    
        <textarea name="descripcion" rows="4" class="form-control no-resize" placeholder="Descripccion del Control a crear..">{{ old('descripcion', optional($control)->descripcion) }}</textarea>
    
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <label for="password">Paquete</label>
        <div class="form-group">
            <select class=" form-control select-form-materno" name="paquetes[]" multiple='multiple' >
                <option value="">Selccione los paquetes del control</option>
                @foreach ($paquetes as $paquete)
                    <option value="{{ $paquete->id }}" {{ optional($control)->hasPaquete($paquete) ? 'selected':'' }} >{{ $paquete->nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
</div>

<div class="form-group">
    
    
    
</div>

<button type="submit" class="btn btn-primary m-t-15 waves-effect">{{ $submit_name }}</button>