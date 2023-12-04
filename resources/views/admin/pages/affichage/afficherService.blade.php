@extends('admin.layoutsAdmin.masterAdmin')
@section('titre2')
    Afficher service
@endsection
@section('contenu')
<div class="sc01 container-fluid">
    <div id="page-wrapper container-fluid">        
        <div class="row">
            <div class="col-lg-12 tbl">
                <div class="panel panel-default">
                    <div class="panel-heading entete">
                        <h1 class="fonttt"> LISTE Service </h1>
                        <h3 class="arff fonttt"> <a href="{{route('Service')}}" class="arf">Ajout Service</a></h3>
                    </div>
                 
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                <thead>
                                    <tr>
                                        <td>id</td>
                                        <td>service</td>
                                        <td>Catgeorie</td>
                                        <td>Avantage</td>
                                        <td>Description</td>
                                        <td>Tarif</td>
                                        <td>Statue</td>                                        
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                @foreach ($serviceCate as $catSer)
                                <tbody>
                                  
                                        <tr>
                                            <td>{{ $catSer->id }}</td>
                                            <td>{{ $catSer->nomService}}</td>
                                            <td>{{ $catSer->serviceCategorie}}</td>
                                            <td>{{ $catSer->Avantageoffre}}</td>
                                            <td>{{ $catSer->description}}</td>
                                            <td>{{ $catSer->tarifService}}</td>
                                            <td>{{ $catSer->statueService}}</td>

                                            <td>
                                                <a href="{{url('modifierFonction/'.$catSer->id)}}" >Modifier</a>
                                                <a href="" onclick="return confirm('Confirmer la suppression?')">Supprimer</a>
                                            </td>
                                        </tr>
                                 
                                    
                                </tbody>
                                    @endforeach
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                        {{-- <div class="well">
                            <h4>DataTables Usage Information</h4>
                            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                        </div> --}}
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
  </div>
@endsection