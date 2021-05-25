<?php
   include("assets/php/conexao.php");

   $sql = "SELECT * FROM tbl_comments";
   if($res=mysqli_query($con, $sql)) {
      $cmt_opencart = array();
      $cmt_wireframe = array();
      $cmt_prototipo_site = array();
      $cmt_tools_app = array();
      $cmt_bd_site_app = array();
      $cmt_front_site_app = array();
      $cmt_back_site_app = array();
      $i = 0;
      
      while($reg=mysqli_fetch_assoc($res)) {
         
         $cmt_opencart[$i] = $reg['cmt_opencart'];
         $cmt_wireframe[$i] = $reg['cmt_wireframe'];
         $cmt_prototipo_site[$i] = $reg['cmt_prototipo_site'];
         $cmt_tools_app[$i] = $reg['cmt_tools_app'];
         $cmt_bd_site_app[$i] = $reg['cmt_bd_site_app'];
         $cmt_front_site_app[$i] = $reg['cmt_front_site_app'];
         $cmt_back_site_app[$i] = $reg['cmt_back_site_app'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rivier Team | Circular Progress</title>

   <link rel="stylesheet" href="./assets/css/style.css">
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script> 
</head>

<body>

   <header>
      <div class="titulo-principal"><h1>Tarefas 2° Bimestre</h1></div>

      <form method="POST" action="./assets/php/insere-valor.php">
         <button type="submit" class="btn-atualizar">
            <svg><rect></rect></svg> Atualizar
         </button>
      </form>
   </header>

   <main>
      <section class="container">
         <article class="card">
            <h1 class="titulo" id="titulo-card">Opencart</h1>
            <p>
               <b>Sanmir, Vitória e Ulisses: </b> Estudar sobre o framework, como usá-lo e implantar no projeto Rivier Alianças.
            </p>

            <div class="circle"> 
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>

            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_opencart' rows='6'>$cmt_opencart[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_comment" type="submit" class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php session_start(); echo "<input type='number' name='opencart' 
                     value='".$_SESSION['opencart']."' data-zero>"; ?>

                     <div class="underline"></div>
                     <label>VLD: <b>Vitória</b></label>
                  </div>
               </div>     
                       
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">Wireframe</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art1">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>
            
            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_wireframe' rows='6'>$cmt_wireframe[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_wireframe" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='wireframe' 
                     value='".$_SESSION['wireframe']."' data-um>"; ?>

                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">Protótipo do Site</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art2">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>
            
            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_prototipo_site' rows='6'>$cmt_prototipo_site[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_prototipo_site" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='prototipo_site' 
                     value='".$_SESSION['prototipo_site']."' data-dois>"; ?>
                     
                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">Ferramentas para o App</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art3">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>

            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_tools_app' rows='6'>$cmt_tools_app[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_tools_app" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='tools_app' 
                     value='".$_SESSION['tools_app']."' data-tres>"; ?>
                     
                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">BD do Site</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art4">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>

            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_bd_site_app' rows='6'>$cmt_bd_site_app[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_bd_site_app" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='bd_site_app' 
                     value='".$_SESSION['bd_site_app']."' data-quatro>"; ?>
                     
                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">Front Site e App</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art5">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>

            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_front_site_app' rows='6'>$cmt_front_site_app[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_front_site_app" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='front_site_app' 
                     value='".$_SESSION['front_site_app']."' data-cinco>"; ?>
                     
                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>

         <article class="card">
            <h1 class="titulo">Back Site e App</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum earum repellendus.</p>

            <div class="circle art6">
               <div class="bar"></div>
               <div class="box"><span></span></div>
            </div>

            <form id="form-comment" method="POST" action="./assets/php/comentario.php">
               <?php echo"<textarea name='cmt_back_site_app' rows='6'>$cmt_back_site_app[$i]</textarea>";?>
               <div class="div-comentario">
                  <input name="btn_cmt_back_site_app" type="submit" 
                  class="envia-comment" value="Enviar comentário">
               </div>
            </form>
            <form id="form" method="POST" action="./assets/php/insere-valor.php">
               <div class="wrapper">
                  <div class="input-data">

                     <?php echo "<input type='number' name='back_site_app' 
                     value='".$_SESSION['back_site_app']."' data-seis>"; ?>
                     
                     <div class="underline"></div>
                     <label>Validar: Vitória</label>
                  </div>
               </div>
               <button type="submit" name="acessar" class="btn-progress">   
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  Concluir
               </button>
            </form>
         </article>
      </section>
   </main>
   <?php
   }   
}
?>
<script src="./assets/js/app.js"></script>
</body>

</html>