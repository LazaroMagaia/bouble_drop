@include("admin.template.header")

@include("admin.template.sidebar")


<div id="main">
    <div class="page-heading">
        <h3>Pagina Label</h3>
    </div>
    
    <div class="page-content">
        <div class="row">
  
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Label 
                        <a href="{{route("create_label")}}" class="btn btn-dark">+</a>
                    </h4>
                </div>
                <div class="card-content">
    
                    <!-- table head dark -->
                    <div class="table-responsive artist-home text-center">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NAME</th>
                                    <th>ARTISTA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($labelartists as $artist)
                                <tr>
                                    <td>{{$artist->name}}</td>
                                    <td class="text-bold-500">{{$artist->label}}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{route("edit_label",$artist->id)}}" class="btn btn-warning">edit</a>
                                            <form action="" method="POST">
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

</div>


@include("admin.template.footer")