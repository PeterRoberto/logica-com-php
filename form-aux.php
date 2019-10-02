<?php
include('header.php'); 
include('funcoes.php');
$funcao = $_POST["funcao"];

    ?>
    <div class="container">
        <?php
            if($funcao == "soma") {
                ?>
                <!-- SOMA -->
                <div class="form-default form-soma" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">Formulário para SOMAR</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <input type="hidden" name="funcao" value="<?php echo $funcao; ?>">
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
                <?php
            } elseif($funcao == "media") {
                ?>
                <!-- MÉDIA -->
                <div class="form-default form-media" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">Formulário para CALCULAR A MÉDIA</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <input type="hidden" name="funcao" value="<?php echo $funcao; ?>">
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
                <?php
            } elseif($funcao == "tabuada") {
                ?>
                <!-- TABUADA -->
                <div class="form-default form-media" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">TABUADA</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <input type="hidden" name="funcao" value="<?php echo $funcao; ?>">
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
                <?php 
            } elseif($funcao == "salario") {
                ?>
                <!-- SALÁRIO -->
                <div class="form-default form-media" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">SALÁRIO</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <input type="hidden" name="funcao" value="<?php echo $funcao; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text"  name="nome" value="" placeholder="Nome" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px; margin-bottom: 20px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text"  name="idade" value="" placeholder="Idade" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px; margin-bottom: 20px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text"  name="cargo" value="" placeholder="Cargo" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>
                            <div class="col-md-6">
                                <input type="text"  name="salario" value="" placeholder="Salário Bruto" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                            <div class="col-md-12">
                                <button type="submit" value="Enviar" name="btn-enviar" style="background: green; border: none; color: #fff; padding: 7px 20px; font-weight: bold; font-size: 16px; text-transform: uppercase; margin-top: 15px;">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
            } if($funcao == "vida") {
                ?>
                <!-- SOMA -->
                <div class="form-default form-soma" style="display: flex; flex-direction: column; margin-bottom: 40px;">
                    <span style="font-weight: bold; text-align: center; text-transform: uppercase; font-size: 30px;">DIAS DE VIDA</span>
                    <form action="resposta.php" method="post" style="margin-top: 30px;">
                        <input type="hidden" name="funcao" value="<?php echo $funcao; ?>">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text"  name="anos" value="" placeholder="Idade em anos (ex: 32)" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;">
                            </div>

                            <div class="col-md-4">
                                <input type="text"  name="meses" value="" placeholder="Quantos meses de vida (ex: 2) " style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> 
                            </div>

                            <div class="col-md-4">
                                <input type="text"  name="dias" value="" placeholder="Dias de vida (100)" style="width: 100%; border: 2px solid #000; border-radius: 5px; outline: 0; padding: 10px;"> 
                            </div>

                            <div class="col-md-12">
                                <button type="submit" value="Enviar" name="btn-enviar" style="background: green; border: none; color: #fff; padding: 7px 20px; font-weight: bold; font-size: 16px; text-transform: uppercase; margin-top: 15px;">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
            }
        ?>
    </div>
    <?php
    
    

include('footer.php');    
?>




