@extends('layouts.app')

@section('content')
<div class="container">
    <div id="calendar"></div>
</div>
<!-- Modal para agregar citas -->
<div id="modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="eventForm">
                <div class="modal-header">
                    <h5 class="modal-title">Agregar Cita</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="eventId">
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" id="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="start">Inicio</label>
                        <input type="datetime-local" id="start" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="end">Fin</label>
                        <input type="datetime-local" id="end" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea id="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $('#calendar').fullCalendar({
        events: '{{ route('citas.getAll') }}',
        selectable: true,
        select: function (start, end) {
            $('#start').val(moment(start).format('YYYY-MM-DDTHH:mm'));
            $('#end').val(moment(end).format('YYYY-MM-DDTHH:mm'));
            $('#modal').modal('show');
        },
        eventClick: function (event) {
            if (confirm('¿Desea eliminar esta cita?')) {
                $.ajax({
                    url: '/citas/' + event.id,
                    type: 'DELETE',
                    success: function () {
                        $('#calendar').fullCalendar('refetchEvents');
                    }
                });
            }
        }
    });

    $('#eventForm').on('submit', function (e) {
        e.preventDefault();
        const data = {
            id: $('#eventId').val(),
            title: $('#title').val(),
            start: $('#start').val(),
            end: $('#end').val(),
            description: $('#description').val()
        };
        $.ajax({
            url: '{{ route('citas.store') }}',
            type: 'POST',
            data: { datos: JSON.stringify(data) },
            success: function () {
                $('#modal').modal('hide');
                $('#calendar').fullCalendar('refetchEvents');
            }
        });
    });
    calendar.render();
});
</script>
@endsection
