@include("admin.template.header")

@include("admin.template.sidebar")


<div id="main">
    <div class="page-heading">
        <h3>Artistas</h3>
    </div>
    
    <div class="page-content">
       
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Artistas 
                    <a href="{{route("artists_create")}}" class="btn btn-dark">+</a>
                </h4>
            </div>
            <div class="card-content">

                <!-- table head dark -->
                <div class="table-responsive artist-home text-center">
                    <table class="table mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>IMAGEM</th>
                                <th>NAME</th>
                                <th>GENERO</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artists as $artist)
                            <tr>
                                <td class="text-bold-500 img-artist">
                                    <img src="{{url("storage/{$artist->image}")}}" alt="">
                                </td>
                                <td>{{$artist->name}}</td>
                                <td class="text-bold-500">UI/UX</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="btn btn-primary">show</a>
                                        <a href="{{route("artists_edit",$artist->id)}}" class="btn btn-warning">edit</a>
                                        <form action="{{route("delete_artist",$artist->id)}}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="btn btn-danger">Remover</button>
                                        </form>
                                    </div>  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

</div>


@include("admin.template.footer")