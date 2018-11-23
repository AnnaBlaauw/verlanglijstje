<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Maak je verlanglijstje <a href="#" id="addNew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></a></h3>
                    </div>
                    <div class="panel-body">
                            <ul class="list-group">
                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Millenium Falcon Lego</li>
                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">doodshoofdaapje</li>
                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">piratenlego</li>
                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Red dead redemption 2</li>
                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#myModal">Skisokken</li>
                                  </ul>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="title">Lijstje aanpassen</h4>
            </div>
            <div class="modal-body">
              <p><input type="text" placeholder="typ hier je wensen" id="addItem" class="form-control"> </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="verwijderen" data-dismiss="modal" style="display: none">verwijderen</button>
              <button type="button" class="btn btn-primary" id="opslaan" style="display: none">opslaan</button>
              <button type="button" class="btn btn-primary" id="addButton">iets toevoegen</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    

   <!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.ourItem', function (event) {
           
                var text = $(this).text();
                $('#title').text('Item Aanpassen');
                $('#addItem').val(text);
                $('#verwijderen').show('400');
                $('#opslaan').show('400');
                $('#addButton').hide('400');
                $('#id').val(id);
                console.log(text);
            
        });

        $('.addNew').click(function(event) {
                $('#title').text('Item toevoegen');
                $('#addItem').val("");
                $('#verwijderen').hide('400');
                $('#opslaan').hide('400');
                $('#addButton').show('400');
                console.log(text);
            });
        
        $('#addButton').click(function(event){
            var text = $('addItem').val();

        });
        
        });
  
</script>    
</body>
</html>