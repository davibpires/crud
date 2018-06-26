{!! Form::open(['route' => $route, 'method' => 'GET', 'class' => 'card-tools'])  !!}

        <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="search" class="form-control float-right" placeholder="Buscar nome..." value="{{ $search or "" }}">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>

{!! Form::close() !!}