@if ($errors->any())
    <div class="alert alert-warning alert-dismissable pb-0 @if ($errors->count() == 1) pb-3 @endif">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @if ($errors->count() == 1)
            {{ $errors->first() }}
        @else
            <ul class="ul-alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endif