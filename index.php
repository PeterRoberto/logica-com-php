<?php include('header.php'); ?>
<?php include('conecta.php'); ?>
<?php include('funcoes.php'); ?>

<section class="form" method="post">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- SOMA -->
                <div class="form-default form-soma" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">Qual operação você quer realizar?</span>
                    <form action="form-aux.php" method="post" style="margin-top: 30px;">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio"  name="funcao" value="media" placeholder="Primeiro Número" style="border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> Média
                                <input type="radio"  name="funcao" value="soma" placeholder="Primeiro Número" style="border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> Soma
                                <input type="radio"  name="funcao" value="tabuada" placeholder="Primeiro Número" style="border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> Tabuada
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