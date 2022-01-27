<label for="nombre">nombre</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" value="{{ old('nombre', optional($paquete)->nombre) }}" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre del paquetes">
    </div>
</div>
<label for="descripcion">Descripcion</label>
<div class="form-group">
    <div class="form-line">
        <textarea id="descripcion" name="descripcion" rows="4" class="form-control no-resize" placeholder="Descripccion del paquete a crear..">{{ old('descripcion', optional($paquete)->nombre) }}</textarea>
    </div>
</div>

<label for="con_control">Paquete para pacientes con:</label>
<div class="form-group">
        <select class="form-line" id='con_control' name="con_control" >
            <option value="">Para pacientes con o sin control?</option>        
            <option value="1" {{ optional($paquete)->hasControl(1) ? 'selected':'' }} >CON CONTROL</option>
            <option value="0" {{ optional($paquete)->hasControl(0) ? 'selected':'' }} >SIN CONTROL</option>
            
        </select>
    
</div>

<button type="submit" class="btn btn-primary m-t-15 waves-effect">{{ $submit_name }}</button>