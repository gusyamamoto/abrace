<h2>Nossos Serviços</h2>
<article>
    <?php
    if (get_field('titulo_servico_1') && get_field('servico_1')) :
    ?>
        <div class="servico">
            <h3><?php the_field('titulo_servico_1'); ?></h3>
            <p><?php the_field('servico_1'); ?></p>
        </div>
    <?php endif; ?>
</article>

<article>
    <?php
    if (get_field('titulo_servico_2') && get_field('servico_2')) :
    ?>
        <div class="servico">
            <h3><?php the_field('titulo_servico_2'); ?></h3>
            <p><?php the_field('servico_2'); ?></p>
        </div>
    <?php endif; ?>
</article>

<article>
    <?php
    if (get_field('titulo_servico_3') && get_field('servico_3')) :
    ?>
        <div class="servico">
            <h3><?php the_field('titulo_servico_3'); ?></h3>
            <p><?php the_field('servico_3'); ?></p>
        </div>
    <?php endif; ?>
</article>