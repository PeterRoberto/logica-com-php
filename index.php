<?php include('header.php'); ?>
<?php include('conecta.php'); ?>
<?php include('funcoes.php'); ?>

<section class="form" method="post">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- SOMA -->
                <div class="form-default form-soma" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">Formulário para SOMAR</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text"  name="number_a" value="" placeholder="Primeiro Número" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                            <div class="col-md-6">
                                <input type="text"  name="number_b" value="" placeholder="Segundo Número" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> 
                            </div>

                            <div class="col-md-12">
                                <button type="submit" value="Enviar" name="btn-enviar" style="background: green; border: none; color: #fff; padding: 7px 20px; font-weight: bold; font-size: 16px; text-transform: uppercase; margin-top: 15px;">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                


                <!-- MÉDIA -->
                <div class="form-default form-media" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">Formulário para CALCULAR A MÉDIA</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text"  name="txt_a" value="" placeholder="Primeira Nota" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                            <div class="col-md-4">
                                <input type="text"  name="txt_b" value="" placeholder="Segunda Nota" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                            <div class="col-md-4">
                                <input type="text"  name="txt_c" value="" placeholder="Terceira Nota" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">  
                            </div>

                            <div class="col-md-12">
                                <button type="submit" value="Enviar" name="btn-enviar" style="background: green; border: none; color: #fff; padding: 7px 20px; font-weight: bold; font-size: 16px; text-transform: uppercase; margin-top: 15px;">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>


                
                <!-- TABUADA -->
                <div class="form-default form-media" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">TABUADA</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text"  name="tabu_a" value="" placeholder="Primeira Nota" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                    

                            <div class="col-md-12">
                                <button type="submit" value="Enviar" name="btn-enviar" style="background: green; border: none; color: #fff; padding: 7px 20px; font-weight: bold; font-size: 16px; text-transform: uppercase; margin-top: 15px;">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            
        
            </div>
        </div>
    </div>

</section>





<section class="box-compromissos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">PUXANDO INFOS DO BANCO</span>
            <?php
                //criando a query de consulta à tabela criada 
                $sql = mysqli_query($link, "SELECT * FROM compromissos") or die( 
                mysqli_error($link)); //caso haja um erro na consulta 

                //pecorrendo os registros da consulta. 
                while($aux = mysqli_fetch_assoc($sql)) { 
                    echo "-----------------------------------------<br />"; 
                    echo "ID:".$aux["id"]."<br />"; 
                    echo "Nome:".$aux["nome"]."<br />"; 
                    echo "Email:".$aux["email"]."<br />"; 
                }
            ?>
            </div>
        </div>
    </div>
</section>





<?php include('footer.php') ?>