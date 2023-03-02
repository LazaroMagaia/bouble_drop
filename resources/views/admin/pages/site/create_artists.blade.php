@include("admin.template.header")

@include("admin.template.sidebar")


<div id="main">
    <div class="page-heading">
        <h3>Artistas</h3>
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
                        action="{{route('create_artist')}}">
                        @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Nome artistico</label>
                                        <input type="text" id="name" class="form-control" 
                                        placeholder="Nome" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="gender">Genero</label>
                                        <input type="text" id="gender" class="form-control" 
                                        placeholder="Genero" name="gender">
                                    </div>
                                </div>

                                <div class="col-md-9 col-12">
                                    <div class="form-group">
                                        <label for="image">Imagem</label>
                                        <input type="file" id="last-name-column" 
                                        class="form-control" name="image">
                                    </div>
                                </div>
                                
                                <div class="col-md-12 col-12">

                                    <label for="default">Descricao</label>
                                    <textarea name="description" id="default" cols="30" rows="10" aria-hidden="true">
                                    </textarea>          
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