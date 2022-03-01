<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/coronavirus-filled/32/coronavirus-26-128.png">
      <link rel="stylesheet" type="text/css" href="/webjars/bootstrap/css/bootstrap.min.css" />
      <title>Corona-19 State Wise India Cases Live</title>
  </head>
  <body>
  <style>
            h3.text-center{
                margin-top: 50px;
                font-size: 38px;
                font-family: 'Times New Roman', Times, serif;
                text-decoration: underline;
            }
            #casesList tr:first-child{
                font-weight: 600;
                background-color: #c5edf7;
                font-size: 130%;
            }
            #casesList tr td:first-child{
                font-weight: 600;
                width: 20%;
            }
            .table{
                width: 80%;
                margin-left: auto;
                margin-right: auto;
                margin-top: 50px;
            }
            #casesList tr td:nth-child(2){
                color: red;
            }
            #casesList tr td:nth-child(3){
                color: green;
            }
            #casesList tr td:nth-child(4){
                color: black;
            }
      </style>  <section>
      <div class="mb-3">
        <h3 class="text-center">Statewise Covid-19 Cases In India</h3>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="casesList">
                    
            <tr>
                <td>State</td>
                <td>Confirmed</td>  
                <td>Recovered</td>
                <td>Deceased</td>
                <td>Active</td>
            </tr>
        
            <?php 
        
                    $jsonData = file_get_contents('https://api.covid19india.org/data.json');
                    $data = json_decode($jsonData,True);
                    $statecount = count($data['statewise']);
                    $i = 1;
                    while($i < $statecount){ if($i==31){$i++; continue;}  else 
                    ?>
                    <tr>
                        <td><?php echo $data['statewise'][$i]['state'];?></td>
                        <td><?php echo $data['statewise'][$i]['confirmed'];?></td>
                        <td><?php echo $data['statewise'][$i]['recovered'];?></td>
                        <td><?php echo $data['statewise'][$i]['deaths'];?></td>
                        <td><?php echo $data['statewise'][$i]['active']. "<br>";?></td>
                    </tr>
                    <?php 
                         $i++;
                    }
                ?>
        </table>
      </div>
    </section>
  </body>
  </html>                                 