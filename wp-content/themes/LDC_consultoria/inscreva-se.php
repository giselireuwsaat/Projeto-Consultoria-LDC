<?php 
/*
Template Name: Formulario Inscreva-se
*/

?>

<?php get_header(); ?>





<section class="formulario">

    
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; else: ?>

<p>Sorry, no page found.</p>

<?php endif; ?>

</div>
<div>
            <form class="form-inscreva">
            <div class="row">
                <div class="col-lg-5">
                    <span>
                        <label for="nome" class="text-small-uppercase">Nome</label>
                        <input id="nome" name="nome" type="text" required>
                    </span>
                    <span>
                        <label for="sobrenome" class="text-small-uppercase">Sobrenome</label>
                        <input id="sobrenome" name="sobrenome" type="email" required>
                    </span>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <span>
                                <label for="data-nascimento" class="text-small-uppercase">Nascimento</label>
                                <input class="textbox-n" type="text" onfocus="(this.type='date')" id="date" required>
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            <span>
                                <label for="sexo" class="text-small-uppercase">Sexo</label>
                                <select name="sexo" id="sexo"><br>
                                    <option selected disabled> </option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>
                                    <option value="NA">N/A</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <span>
                        <label for="email" class="text-small-uppercase">Email</label>
                        <input id="email" name="email" type="email" required>
                    </span>
                    <span>
                        <label for="celular" class="text-small-uppercase">Celular</label>
                        <input id="celular" name="celular" type="tel" required>
                    </span>


                </div>
                <div class="col-lg-6">
                    <span>
                        <label for="endereco" class="text-small-uppercase">Endereço</label>
                        <input id="endereco" name="endereco" type="text" required>
                    </span>
                    <!-- <span>
                        <label for="numero" class="text-small-uppercase">No.</label>
                        <input id="numero" name="numero" type="number">
                    </span>
                    <span>
                        <label for="complemento" class="text-small-uppercase">Complemento</label>
                        <input id="complemento" name="complemento" type="text">
                    </span> -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <span>
                                <label for="numero" class="text-small-uppercase">No.</label>
                                <input id="numero" name="numero" type="number">
                            </span>
                        </div>
                        <div class="form-group col-md-9">
                            <span>
                                <label for="complemento" class="text-small-uppercase">Complemento</label>
                                <input id="complemento" name="complemento" type="text">
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <span>
                                <label for="cep" class="text-small-uppercase">CEP</label>
                                <input id="cep" name="cep" type="number">
                            </span>
                        </div>
                        <div class="form-group col-md-8">
                            <span>
                                <label for="bairro" class="text-small-uppercase">Bairro</label>
                                <input id="bairro" name="bairro" type="text">
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <span>
                                <label for="cidade" class="text-small-uppercase">Cidade</label>
                                <input id="cidade" name="cidade" type="text">
                            </span>
                        </div>
                        <div class="form-group col-md-3">
                            <span>
                                <label for="estado" class="text-small-uppercase">Estado</label>
                                <select name="estado" id="estado">
                                    <option value=""></option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <span>
                        <label for="endereco" class="text-small-uppercase">Curso de Interesse</label>
                        <input id="endereco" name="endereco" type="text" required>
                    </span>


                </div>

                <div class="col-lg-11">
                    <span>
                        <label for="message" class="text-small-uppercase">Qual o seu objetivo</label>
                        <textarea name="message" class="c-objetivo" id="message" required></textarea>
                    </span>
                </div>

                <input class="text-small-uppercase" id="submit" type="submit" value="Enviar agora">
            </div>

        </form>
    </div>




</section>
<?php get_footer(); ?>