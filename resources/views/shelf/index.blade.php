@extends('shelf.layouts.shelf')

@section('content')
    <shelves-list>
        <div class="shelf-button">
            {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shelfs-list">--}}
                {{--Create new desk--}}
            {{--</button>--}}
        </div>
        <div id="shelves-list" class="shelves-list">
            <div class="desk-wrap row">
                <div class="shelf-wrap col-md-3"
                     v-for="shelf in shelves_list"
                     style="width: 300px; height: 900px; overflow: auto; border: 1px solid black; margin: 10px; padding: 10px;"
                >
                    <div class="shelf-title">
                        <h3>@{{ shelf.name }}</h3>
                    </div>
                    <div class="shelf-body">
                        <div class="shelf-card"
                             v-for="card in shelf.cards"
                             :data-card-id="card.id"
                             style="width: 100%; margin: 5px 10px; padding:10px; border: 1px solid black;"
                             @click="onClickToCard"
                        >
                            @{{ card.name }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </shelves-list>

    <!-- Modal -->
    <div class="modal fade" id="create-shelf" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('url' => '/desks')) !!}
                    <div class="form-group row">
                        <div class="col-md-12">
                            {!! Form::label('name', 'Name') !!}
                            {!!  Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            {!! Form::label('description', 'Description') !!}
                            {!!  Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            {!! Form::submit('Create!', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection