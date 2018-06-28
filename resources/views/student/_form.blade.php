<!--- Code Form Input --->
<div class="form-group">
    {{ Form::label('name', 'Nome:') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<!--- Course Select Input --->
<div class="form-group">
    {{ Form::label('course_id', 'Curso:') }}
    {{ Form::select('course_id', $courses,
        null,
        ['class' => 'form-control']
    ) }}
</div>

<!--- Code Form Input --->
<div class="form-group">
    {{ Form::label('registration', 'Matrícula:') }}
    {{ Form::text('registration', null, ['class' => 'form-control']) }}
</div>

<!--- Code Form Input --->
<div class="form-group">
    {{ Form::label('semester', 'Semestre:') }}
    {{ Form::text('semester', null, ['class' => 'form-control']) }}
</div>

<!--- Status Select Input --->
<div class="form-group">
    {{ Form::label('status', 'Status:') }}
    {{ Form::select('status', [
        '' => '',
        'matriculado' => 'Matriculado',
        'trancado' => 'Trancado',
        'jubilado' => 'Jubilado'],
        null,
        ['class' => 'form-control']
    ) }}
</div>