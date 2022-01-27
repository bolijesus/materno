<label for="codigo">Codigo</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" value="{{ old('codigo', optional($cup)->codigo) }}" id="codigo" name="codigo" class="form-control" placeholder="Ingrese el codigo del cups">
    </div>
</div>
<label for="password">Descripcion</label>
<div class="form-group">
    <div class="form-line">
    
        <textarea name="descripcion" rows="4" class="form-control no-resize" placeholder="Descripccion del cup a crear..">{{ old('descripcion', optional($cup)->descripcion) }}</textarea>
    
    </div>
</div>
<label for="password">Paquetes</label>
<div class="form-group">
    <select class="form-control select-form-materno" name="paquetes[]" multiple="multiple">
        <option value="">-- Seleccione los paquetes al que pertenece el cups --</option>
        @foreach ($paquetes as $paquete)
            <option value="{{ $paquete->id }}" {{ optional($cup)->hasPaquete($paquete) ? 'selected':'' }} >{{ $paquete->nombre }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-primary m-t-15 waves-effect">{{ $submit_name }}</button>