@include("admin.template.header")

@include("admin.template.sidebar")


<div id="main">
    <div class="page-heading">
        <h3>Pagina Home</h3>
    </div>
    
    <div class="page-content">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Multiple Column</h4>
                </div>
                <div class="card-content">
                    <div class="card-body d-flex justify-content-center align-items-center ">
                        @foreach ($all_page as $page)
                            <form class="form" method="POST" action="{{route("homepage_create",$page->id)}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="titulo">Titulo</label>
                                            <input type="text" id="titulo" class="form-control" 
                                             name="title" value="{{$page->title}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="nation">Nacionalidade</label>
                                            <input type="text" id="nation" class="form-control" 
                                             name="nation" value="{{$page->nation}}">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">

                                        <label for="default">Descricao</label>
                                        <textarea name="description" id="default" cols="30" rows="10" aria-hidden="true">
                                            {{$page->description}}
                                        </textarea>          
                                    </div>

                                        
                                    <div class="col-12 d-flex justify-content-end mt-5">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Editar</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


@include("admin.template.footer")