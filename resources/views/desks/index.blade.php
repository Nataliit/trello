@extends('desks.layouts.desk')

@section('content')
    <desks-list>
        <div class="desks-button">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-desk">
                Create new desk
            </button>
        </div>
        <div id="desks-list" class="desks-list row">
            <div class="desk-wrap col-md-3" v-for="desk in desks_list">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">@{{ desk.name }}</h5>
                        <p class="card-text">@{{ desk.description }}</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </desks-list>

    <!-- Modal -->
    <div class="modal fade" id="create-desk" tabindex="-1" role="dialog" aria-hidden="true">
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