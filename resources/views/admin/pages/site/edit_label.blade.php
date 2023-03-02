@include("admin.template.header")

@include("admin.template.sidebar")


<div id="main">
    <div class="page-heading">
        <h3>Label</h3>
    </div>
    <div class="page-content">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                     
                    @if ($errors->any())
                        <ul class="errors">
                            @foreach ($errors->all() as $error)
                                <li class="error">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <h4 class="card-title">Multiple Column</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" enctype="multipart/form-data" method="POST"
                        action="{{route("label_create")}}">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Artista</label>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="name" name="artist_id">
                                                @foreach ($artists as $artist)
                                                    <option value="{{$artist->id}}"
                                                        @if ($artist->id === $label->id)
                                                        selected
                                                        @endif>
                                                        {{$artist->name}}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="label">Nome da label</label>
                                        <input type="text" id="label" class="form-control"
                                        name="label" value="{{$label->label}}">
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@include("admin.template.footer")