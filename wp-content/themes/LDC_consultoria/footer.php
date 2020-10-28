 <!----------- Footer ------------>
 <footer class="footer">
                <div class="row footer-row">
                    <div class="col-md-3 footer-ldc">
                        <h4>Apoena</h4>
                        <p class="text-justify">Suspendisse hendrerit tellus Andreaslaoreet luctus pharetra. Aliquam porttitor vitae orci nec ultricies. Curabitur vehicula, libero eget faucibus faucibus, purus erat eleifend enim, porta pellentesque ex mi ut sem.</p>
                    </div>

                
                    <div class="col-md-1 footer-border">
                            <ul class="list-unstyled footer-menu">
                            <!-- <h4 class="h4-menu">Menu</h4> -->
                                <li class="text-uppercase font-weight-bold"><a class="nav-link text-muted" href="https://luiscampaci.com.br//#home">Home</a></li>
                                <li class="text-uppercase font-weight-bold"><a class="nav-link text-muted" href="https://luiscampaci.com.br//#sobre">Sobre</a></li>
                                <li class="text-uppercase font-weight-bold"><a class="nav-link text-muted" href="https://luiscampaci.com.br//blog/">Blog</a></li>
                                <li class="text-uppercase font-weight-bold"><a class="nav-link text-muted" href="https://luiscampaci.com.br//#contato">Contato</a></li>
                            </ul>

                           
                    </div>
                    
                    <div class="col-md-3">
                            <ul class="list-unstyled footer-servicos">
                                <!-- <h4 class="h4-menu">Serviços</h4> -->
                                <li><a class="nav-link text-muted" href="https://luiscampaci.com.br//#cursos">Cursos</a></li>
                                <li><a class="nav-link text-muted" href="https://luiscampaci.com.br//workshops/">Palestras & Workshops</a></li>
                                <li><a class="nav-link text-muted" href="https://luiscampaci.com.br//consultoria-empresarial/">Consultoria Empresarial</a></li>
                                <li><a class="nav-link text-muted" href="https://luiscampaci.com.br//coaching/">Coaching</a></li>
                            </ul>
                    </div>
                        
                    <div class="col-xs-12 col-sm-6 col-md-2 footer-border contato-footer">

                        <div>
            
                            <div>
                                <!-- <h4>Siga-me<span></span></h4> -->
                            <p><i class="fas fa-envelope"> </i> <a class= "text-muted" target="_blank" href="mailto:info@domain.com" title="email"> info@domain.com</a></p>
                            <p><i class="fab fa-whatsapp-square"> </i> <a class= "text-muted"  target="_blank" href="https://web.whatsapp.com/" title="whatsapp"> +55 19 99900-2107</a></p>
                            <p><i class="fas fa-map-marker-alt"> </i> <a class= "text-muted" target="_blank" href="https://www.google.com/maps/place/Capivari,+SP,+13360-000/@-22.9977813,-47.541873,13z/data=!3m1!4b1!4m5!3m4!1s0x94c61c5e00d538c5:0xd32feb27e284e972!8m2!3d-22.9946056!4d-47.5094598" title="local"> São Paulo - Brasil</a></p>

                                <ul class="social-footer">
                                    <li><a class="fab fa-facebook-square text-muted" title="facebook" target="_blank" href="https://www.facebook.com/"></a></li>
                                    <li><a class="fab fa-instagram-square text-muted" title="Instagran" target="_blank" href="https://www.instagran.com/"></a></li>
                                    <li><a class="fab fa-linkedin text-muted" target="_blank" title="Linkedin" href="https://linkedin.com"></a></li>
                                </ul>
                            </div>
                        
                            <!-- <h4>Email<span></span></h4> -->

                        </div>
                    </div>
                        
                    <div class="col-md-3 footer-border feed-footer">
                        <h4>Comece agora mesmo</h4>
                        <p>
                        <?php $campos_front= get_field('home');?>
                        <?php if($campos_front['inscreva-se']);?>

                        <a href="https://luiscampaci.com.br//inscreva-se/"> <button type=" button"
                        class="btn btn-primary">
                        Inscreva-se </button>
                        </a>

                        </p>
                        
                        

                            <h4>Feed</h4>
                            <p class="p-footer">Leia o meu último artigo:</p>
                        
                            <?php 
                            $args = array( 'numberposts' => '1' ); // aqui troca o numero pela quantidade de posts que queira trazer, e caso queira customizar mais o resultado vira aqui dentro do array () veja a pagina.
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                            echo '<p class="p-footer font-italic"> <a class="text-muted" href="' . get_permalink($recent["ID"]) . '">' .          
                            $recent["post_title"].'</p>'.'<p class="quebra-resumo font-italic">'.$recent["post_excerpt"].'</a> </p>';
                             }
                            ?>

                        
                    </div>


                </div>


                <div class="row footer-row ttt">
                <p class="copyright"> Copyright © 2020 Todos os direitos reservados | <a class="text-muted" target="_blank" href="https://giselireuwsaat.github.io/Portfolio/">Desenvolvido por: SunnyDay</p></a>

                </div>
                
                
                
</footer>
                





<?php wp_footer(); ?>