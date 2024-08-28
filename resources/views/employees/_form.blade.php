<div class="container">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $employee->first_name ?? '') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $employee->last_name ?? '') }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="ci" class="form-label">CI</label>
            <input type="text" class="form-control" id="ci" name="ci" value="{{ old('ci', $employee->ci ?? '') }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email ?? '') }}" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $employee->phone ?? '') }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="department_id" class="form-label">Departamento</label>
            <select class="form-control" id="department_id" name="department_id" required>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ (old('department_id') ?? $employee->department_id ?? '') == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label for="position_id" class="form-label">Cargo</label>
            <select class="form-control" id="position_id" name="position_id" required>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}" {{ (old('position_id') ?? $employee->position_id ?? '') == $position->id ? 'selected' : '' }}>
                        {{ $position->title }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date', $employee->birth_date ?? '') }}" required>
        </div>

        <div class="col-md-6 mb-3">
            <label for="hire_date" class="form-label">Fecha de Contratacion</label>
            <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{ old('hire_date', $employee->hire_date ?? '') }}" required>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="salary" class="form-label">Salario</label>
            <input type="number" class="form-control" id="salary" name="salary" value="{{ old('salary', $employee->salary ?? '') }}" step="0.01" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="gender" class="form-label">Genero</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="male" {{ old('gender', $employee->gender ?? '') == 'male' ? 'selected' : '' }}>Hombre</option>
                <option value="female" {{ old('gender', $employee->gender ?? '') == 'female' ? 'selected' : '' }}>Mujer</option>
                <option value="other" {{ old('gender', $employee->gender ?? '') == 'other' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="address" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $employee->address ?? '') }}" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="city" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $employee->city ?? '') }}" required>
        </div>

        <div class="col-md-3 mb-3">
            <label for="country" class="form-label">Pais</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $employee->country ?? '') }}" required>
        </div>
    </div>
</div>
