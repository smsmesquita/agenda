
<html>
<head>
    <title>Grafico</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

</head>
<body>
 <div class="container">
    <?php include '../menu.php';?>
    <h1>
        Grafico de Produtividade
    </h1>
    </div>
    <?php  

include ('../conexao.php');

?>


<section>
   
<?php
   $data_escolhida = '2023-12-12';
   
  
    
      $sql = "SELECT (data_encerramento) FROM tarefas WHERE nome = 'Samuel' AND data_encerramento BETWEEN '$data_escolhida 08:00' AND '$data_escolhida 18:00'";
      $stmt = $conexao->query($sql);
      $resultado_x =  $stmt->fetchAll();
     
      $sql1 = "SELECT (data_encerramento) FROM tarefas WHERE nome = 'Adriana' AND data_encerramento BETWEEN '$data_escolhida 08:00' AND '$data_escolhida 18:00'";
      $stmt = $conexao->query($sql1);
      $resultado_z =  $stmt->fetchAll();

      $sql2 = "SELECT (data_encerramento) FROM tarefas WHERE nome = 'Icaro' AND data_encerramento BETWEEN '$data_escolhida 08:00' AND '$data_escolhida 18:00'";
      $stmt = $conexao->query($sql2);
      $resultado_y =  $stmt->fetchAll();
 
     
$x_1 = ""; $x_2 = ""; $x_3 = ""; $x_4 = ""; $x_5 = ""; $x_6 = ""; $x_7 = ""; $x_8 = ""; $x_9 = ""; $x_10 = "";
$z_1 = ""; $z_2 = ""; $z_3 = ""; $z_4 = ""; $z_5 = ""; $z_6 = ""; $z_7 = ""; $z_8 = ""; $z_9 = ""; $z_10 = "";
$y_1 = ""; $y_2 = ""; $y_3 = ""; $y_4 = ""; $y_5 = ""; $y_6 = ""; $y_7 = ""; $y_8 = ""; $y_9 = ""; $y_10 = "";

    for($i=0; $i<count($resultado_x); $i++){
        $variavel = substr($resultado_x[$i]['data_encerramento'],11);
     
        if ($variavel >= '08:00:00' and $variavel < '09:00:00')
    
        $x_1++ ;
        elseif($variavel >= '09:00:00' and $variavel < '10:00:00')
        $x_2++ ;
        elseif($variavel >= '10:00:00' and $variavel < '11:00:00')
        $x_3++ ;
        elseif($variavel >= '11:00:00' and $variavel < '12:00:00')
        $x_4++ ;
        elseif($variavel >= '12:00:00' and $variavel < '13:00:00')
        $x_5++ ;
        elseif($variavel >= '13:00:00' and $variavel < '14:00:00')
        $x_6++ ;
        elseif($variavel >= '14:00:00'and $variavel < '15:00:00')
        $x_7++ ;
        elseif($variavel >= '15:00:00' and $variavel < '16:00:00')
        $x_8++ ;
        elseif($variavel >= '16:00:00'and $variavel < '17:00:00')
        $x_9++ ;
        else
        $x_10++ ;
       }
    
  
       for($i=0; $i<count($resultado_z); $i++){
        $variavel = substr($resultado_z[$i]['data_encerramento'],11);
     
        if ($variavel >= '08:00:00' and $variavel < '09:00:00')
    
        $z_1++ ;
        elseif($variavel >= '09:00:00' and $variavel < '10:00:00')
        $z_2++ ;
        elseif($variavel >= '10:00:00' and $variavel < '11:00:00')
        $z_3++ ;
        elseif($variavel >= '11:00:00' and $variavel < '12:00:00')
        $z_4++ ;
        elseif($variavel >= '12:00:00' and $variavel < '13:00:00')
        $z_5++ ;
        elseif($variavel >= '13:00:00' and $variavel < '14:00:00')
        $z_6++ ;
        elseif($variavel >= '14:00:00' and $variavel < '15:00:00')
        $z_7++ ;
        elseif($variavel >= '15:00:00' and $variavel < '16:00:00')
        $z_8++ ;
        elseif($variavel >= '16:00:00' and $variavel < '17:00:00')
        $z_9++ ;
        else
        $z_10++ ;
       }
       for($i=0; $i<count($resultado_y); $i++){
        $variavel = substr($resultado_y[$i]['data_encerramento'],11);
     
        if ($variavel >= '08:00:00' and $variavel < '09:00:00')
    
        $y_1++ ;
        elseif($variavel >= '09:00:00' and $variavel < '10:00:00')
        $y_2++ ;
        elseif($variavel >= '10:00:00' and $variavel < '11:00:00')
        $y_3++ ;
        elseif($variavel >= '11:00:00' and $variavel < '12:00:00')
        $y_4++ ;
        elseif($variavel >= '12:00:00' and $variavel < '13:00:00')
        $y_5++ ;
        elseif($variavel >= '13:00:00' and $variavel < '14:00:00')
        $y_6++ ;
        elseif($variavel >= '14:00:00'and $variavel < '15:00:00')
        $y_7++ ;
        elseif($variavel >= '15:00:00' and $variavel < '16:00:00')
        $y_8++ ;
        elseif($variavel >= '16:00:00' and $variavel < '17:00:00')
        $y_9++ ;
        else
        $y_10 ++; 
       }
    //    if (empty($x_1)) {$x_1 = 0;} else{$x_1;};  if (empty($y_10)) {$y_10 = 0;} else{$y_10;}
    
       
?>

<div class= "chartBox">
    <canvas id= "myChart" width="200" height="50"></canvas>
    
</div>



  <!-- <canvas id="myChart" width="400" height="400"></canvas> -->
  
    </section>



<script>
   
    //setup block
    
    const salesNumbers = [
     


     {day: "08", sales:{nivel1: <?= empty($x_1)*0, $x_1;?>, nivel2: <?= empty($y_1)*0, $y_1;?>, nivel3: <?= empty($z_1)*0, $z_1;?>}},
     {day: "09", sales:{nivel1: <?= empty($x_2)*0, $x_2;?>, nivel2: <?= empty($y_2)*0, $y_2;?>, nivel3: <?= empty($z_2)*0, $z_2;?>}},
     {day: "10", sales:{nivel1: <?= empty($x_3)*0, $x_3;?>, nivel2: <?= empty($y_3)*0, $y_3;?>, nivel3: <?= empty($z_3)*0, $z_3;?>}},
      {day: "11", sales:{nivel1: <?= empty($x_4)*0, $x_4;?>, nivel2: <?= empty($y_4)*0, $y_4;?>, nivel3: <?= empty($z_4)*0, $z_4;?>}},
     {day: "12", sales:{nivel1: <?= empty($x_5)*0, $x_5;?>, nivel2: <?= empty($y_5)*0, $y_5;?>, nivel3: <?= empty($z_5)*0, $z_5;?>}},
     {day: "13", sales:{nivel1: <?= empty($x_6)*0, $x_6;?>, nivel2: <?= empty($y_6)*0, $y_6;?>, nivel3: <?= empty($z_6)*0, $z_6;?>}},
     {day: "14", sales:{nivel1: <?= empty($x_7)*0, $x_7;?>, nivel2: <?= empty($y_7)*0, $y_7;?>, nivel3: <?= empty($z_7)*0, $z_7;?>}},
     {day: "15", sales:{nivel1: <?= empty($x_8)*0, $x_8;?>, nivel2: <?= empty($y_8)*0, $y_8;?>, nivel3: <?= empty($z_8)*0, $z_8;?>}},
     {day: "16", sales:{nivel1: <?= empty($x_9)*0, $x_9;?>, nivel2: <?= empty($y_9)*0, $y_9;?>, nivel3: <?= empty($z_9)*0, $z_9;?>}},
     {day: "17", sales:{nivel1: <?= empty($x_10)*0, $x_10;?>, nivel2: <?= empty($y_10)*0, $y_10;?>, nivel3: <?= empty($z_10)*0, $z_10;?>}},
        ];
// const salesNumbers = [
//      {day: "08", sales:{nivel1:1, nivel2: 2, nivel3: 3}},
//      {day: "09", sales:{nivel1: 0, nivel2: 2, nivel3: 2}},
//          {day: "10", sales:{nivel1: 13, nivel2: 3, nivel3: ''}},
//          {day: "11", sales:{nivel1: 14, nivel2: 4, nivel3: 14}},
//          {day: "12", sales:{nivel1: 15, nivel2: 5, nivel3: 15}},
//          {day: "13", sales:{nivel1: 16, nivel2: 6, nivel3: 16}},
//          {day: "14", sales:{nivel1: 17, nivel2: 7, nivel3: 17}},
//          {day: "15", sales:{nivel1: 18, nivel2: 8, nivel3: 18}},
//          {day: "16", sales:{nivel1: 19, nivel2: 9, nivel3: 9}},
//          {day: "17", sales:{nivel1: 11, nivel2: 10, nivel3: 10}}
     
//          ];
      
                 
    const data = {
   
          datasets: [{
              label: 'Samuel',
               data: salesNumbers,
              
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 
                  'rgba(255, 99, 132, 1)',
                 
             
              tension : 0.2,
              parsing:{
               
               xAxisKey: 'day',
            yAxisKey: 'sales.nivel1' 

              }
          },{
          label: 'Icaro',
          data: salesNumbers,
          
          backgroundColor: 'rgba(54, 162, 235, 0.9)',
          borderColor: 
          'rgba(54, 162, 235, 0.9)',
             
         
          tension : 0.3,
          parsing:{
           
           xAxisKey: 'day',
            yAxisKey: 'sales.nivel2' 

          }
      
         },{
              label: 'Adriana',
              data: salesNumbers,
              
              backgroundColor: 'rgba(255, 206, 86, 0.9)',
              borderColor: 
              'rgba(255, 206, 86, 0.9)',
                 
             
              tension : 0.2,
              parsing:{
              
              xAxisKey: 'day',
            yAxisKey: 'sales.nivel3' 

              }
          } ]

    };
    const config = {
      type: 'line',
      data,
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          },
     //   plugins: {tooltip:{
      //    enabled:false,
       //   external: externalTooltipHandler 
    ///    }
      }}

 //   };
    // render / init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  

  
      </script>
      </body>
</html>